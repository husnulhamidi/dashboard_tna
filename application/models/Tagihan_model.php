<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tagihan_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public  $table = 'tagihan';
	   var $column_order = array(null,'P.nama_produk','N.nama_deskripsi'); //set column field database for datatable orderable
    //var $column_search = array('A.produk, N.nama_deskripsi'); //set column field database for datatable searchable 
   // var $order = array('nama, type_biaya'); // default order

   
    private function _get_datatables_query($id_project, $data_post,$bulan_tagih="") {
        

        $this->db->select('A.*, B.invoice_id, N.nama_deskripsi, P.nama_produk as produk');
        $this->db->from($this->table." as A" );
        $this->db->join('invoice_tagihan as B','B.tagihan_id=A.tagihan_id','left');
        $this->db->join('node as N','N.node_id = A.node_id','inner');
        $this->db->join('produk as P','P.produk_id = N.produk_id','inner');

        $this->db->where('A.project_id',$id_project);
        if($bulan_tagih!=""){
            $arr_bul = explode(',',$bulan_tagih);
            $data="";
			foreach ($arr_bul as $key => $value) {
				$data .= "'".$value."',";
            }
            $where = "A.bulan IN (".substr($data,0,-1).")";
            $this->db->where($where);
        }
        $this->db->group_start();

        if ($data_post[0]['search'] !== null) {
            $this->db->like('P.nama_produk', $data_post[0]['search']);
            $this->db->or_like('N.nama_deskripsi', $data_post[0]['search']);
        }else{
            $this->db->like('P.nama_produk', '');
            $this->db->or_like('N.nama_deskripsi', '');
        }

        
        $this->db->group_end();

        // if ($data_post[0]['bulan'] !== null) {
        //     $this->db->where_in('bulan',$data_post[0]['bulan']);
        //     //print_r($data_post[0]['bulan']);
        // }else{

        // }

       
        if(isset($_GET['order'])) 
        {
            $this->db->order_by($this->column_order[$_GET['order']['0']['column']] , $_GET['order']['0']['dir']);
        } 
        
    }
 
    function get_datatables($id_project, $data_post,$bulan_tagih="")
    {
        $this->_get_datatables_query($id_project, $data_post, $bulan_tagih);
        if($_GET['length'] != -1)
            
        $this->db->limit($_GET['length'], $_GET['start']);
        $query = $this->db->get();
        //echo$this->db->last_query();die;
        return $query->result();
    }
 
    function count_filtered($id_project,  $data_post, $bulan_tagih="")
    {
        $this->_get_datatables_query($id_project,  $data_post,$bulan_tagih);
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all($id_project,  $data_post, $bulan_tagih="")
    {
        /*$this->db->from($this->table);*/
        
        $this->_get_datatables_query($id_project,  $data_post, $bulan_tagih="");
        return $this->db->count_all_results();
    }

    public function getCheckedTagihan($tagihan_id)
    {
        $this->db->from($this->table);
        $this->db->where_in('tagihan_id',$tagihan_id);
        $query = $this->db->get();
        //echo$this->db->last_query();die;
        return $query->result_array();
    }
    public function getJumlahBiaya($tagihan_id)
    {
        $this->db->from($this->table)
            ->where('tagihan_id',$tagihan_id)
            ->select('jumlah_biaya');
        $query = $this->db->get();
        return $query->row();
    }
    public function getNominalBiaya($invoice_id){
        $sql="SELECT SUM(jumlah_biaya) as jml_biaya 
        FROM invoice_tagihan i
        INNER JOIN tagihan t ON t.tagihan_id=i.tagihan_id
        WHERE i.invoice_id=?";
        $query = $this->db->query($sql,array($invoice_id));
        return $query->row();
    }

    public function CheckTagihanByProjectID($project_id)
    {
        $this->db->from($this->table);
        $this->db->where('project_id',$project_id);
        return $query = $this->db->get();
    }

    public function clear_tagihan_ungenerate($project_id){
        $sql="SELECT
                GROUP_CONCAT(t.tagihan_id) tagihan_id
            FROM
                tagihan t
                LEFT JOIN invoice_tagihan i ON t.tagihan_id = i.tagihan_id
                LEFT JOIN invoice inv ON inv.invoice_id = i.invoice_id 
            WHERE
                
                t.project_id = ? 
                AND (inv.is_approved != '1' OR  inv.invoice_id IS NULL)";
        $tag = $this->db->query($sql,array($project_id))->row();
        $tagihan_id = $tag->tagihan_id;
        
        $where = "tagihan_id IN (".$tagihan_id.")";

        $this->db->where($where);
        $query = $this->db->delete('invoice_tagihan');

        $this->db->where($where);
        $query = $this->db->delete($this->table);
        
        return $query;

    }

    public function CheckTagihanByBiaya($node_id,$type_biaya,$bulan){
        $this->db->from($this->table)
            ->where('node_id',$node_id)
            ->where('type_biaya',$type_biaya)
            ->where('bulan',$bulan)
            ->select('tagihan_id');
        return $query = $this->db->get();
        
    }

    public function getJumlahTagihan($project_id){
        $sql="SELECT
                count( it.tagihan_id ) jumlah_tagihan_check,
                sum(jumlah_biaya) biaya_tertagih,
                min(start_date) start_date,
                max(end_date) end_date,
                TIMESTAMPDIFF(MONTH, min(start_date), max(end_date)) bulan_tertagih,
                IFNULL( ( SELECT count( tagihan_id ) FROM tagihan WHERE project_id =? ), 0 ) jumlah_tagihan, 
                IFNULL( ( SELECT sum( jumlah_biaya ) FROM tagihan WHERE project_id =? ), 0 ) jumlah_biaya,
                IFNULL( ( SELECT TIMESTAMPDIFF(MONTH, min(start_date), max(end_date)) FROM tagihan WHERE project_id =? ), 0 ) jumlah_bulan
            FROM
                invoice_tagihan it
                INNER JOIN tagihan t ON it.tagihan_id = t.tagihan_id 
                INNER JOIN invoice inv ON inv.invoice_id=it.invoice_id
            WHERE
                inv.is_approved='1'
                AND t.project_id =?";
        $query = $this->db->query($sql,array($project_id,$project_id,$project_id,$project_id));
        return $query->row();
    }
    

    public function dictinct_bulan($project_id){
        $this->db->distinct();
        $this->db->select('bulan');
        $this->db->where('project_id',decrypt_url($project_id));
        $this->db->order_by('start_date','ASC');
        $query = $this->db->get($this->table)->result();

        return $query;
    }
    
	

}

/* End of file tagihan_model.php */
/* Location: ./application/models/tagihan_model.php */