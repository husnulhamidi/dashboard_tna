<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice_model extends CI_Model {

	public $table = "invoice as inv";


    var $column_order = array(null,'no_invoice','nama_pelanggan','nama_project','no_wo','tgl_invoice','tgl_jthtempo','nominal',null); //set column field database for datatable orderable
    var $column_search = array('no_invoice','nama_pelanggan','nama_project','no_wo','tgl_invoice','tgl_jthtempo','nominal'); //set column field database for datatable searchable 
    var $order = array('no_invoice','nama_pelanggan','nama_project','no_wo','tgl_invoice','tgl_jthtempo','nominal'); // default order

    public function __construct()
	{
		parent::__construct();
	}

	function insert_record($data){
		return $this->db->insert('invoice', $data);
	}
   
    private function _get_datatables_query()
    {
        
        $this->db->select('inv.invoice_id, inv.no_invoice, inv.tgl_invoice, inv.tgl_jthtempo, inv.nominal, inv.terbilang, inv.status,inv.is_approved, ib.ib_id, ib.bank_id, pjt.project_id, pjt.nama_project, pjt.no_wo, plg.pelanggan_id, plg.nama_pelanggan, plg.nama_alias');
        $this->db->from($this->table);
        $this->db->join('project as pjt','pjt.project_id = inv.project_id','inner');
        $this->db->join('pelanggan as plg','plg.pelanggan_id = pjt.pelanggan_id','inner');
        $this->db->join('invoice_bank as ib','inv.invoice_id = ib.invoice_id','left');
 
        $i = 0;
     
        foreach ($this->column_search as $item) // looping awal
        {
            if($_GET['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {
                 
                if($i===0) // looping awal
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_GET['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_GET['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) 
                    $this->db->group_end(); 
            }
            $i++;
        }
         
        if(isset($_GET['order'])) 
        {
            $this->db->order_by($this->column_order[$_GET['order']['0']['column']], $_GET['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_GET['length'] != -1)
            
        $this->db->limit($_GET['length'], $_GET['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        /*$this->db->from($this->table);*/
        $this->db->select('inv.invoice_id, inv.no_invoice, inv.tgl_invoice, inv.tgl_jthtempo, inv.nominal, inv.terbilang, inv.status,inv.is_approved, ib.ib_id, ib.bank_id, pjt.project_id, pjt.nama_project, pjt.no_wo, plg.pelanggan_id, plg.nama_pelanggan, plg.nama_alias');
        $this->db->from($this->table);
        $this->db->join('project as pjt','pjt.project_id = inv.project_id','inner');
        $this->db->join('pelanggan as plg','plg.pelanggan_id = pjt.pelanggan_id','inner');
        $this->db->join('invoice_bank as ib','inv.invoice_id = ib.invoice_id','inner');
        return $this->db->count_all_results();
    }
 

    public function get_invoice_all(){
        $this->db->select('inv.*, ib.ib_id, ib.bank_id,b.nama_bank,b.no_rekening,pro.no_wo,pro.nama_project');
        $this->db->from('invoice as inv');
        $this->db->join('project as pro','pro.project_id = inv.project_id','left');
        $this->db->join('invoice_bank as ib','inv.invoice_id = ib.invoice_id','left');
        $this->db->join('bank as b','b.bank_id = ib.bank_id','left');
        $this->db->group_by('inv.invoice_id');
        $query = $this->db->get('invoice')->result();
        return $query;
    }

    public function get_data_by_id($id_invoice){
        $this->db->select('inv.*, ib.ib_id, ib.bank_id');
        $this->db->from('invoice as inv');
        $this->db->join('invoice_bank as ib','inv.invoice_id = ib.invoice_id','left');
        $this->db->where('inv.invoice_id',$id_invoice);
        $query = $this->db->get('invoice')->row();
        return $query;
    }

    function update($id_invoice,$data){
        $this->db->where('invoice_id', $id_invoice);
		return $this->db->update($this->table, $data);
	}

    public function delete($id_invoice){
        $this->db->where('invoice_id', $id_invoice);

        $query = $this->db->delete('invoice');

        return $query;
    }



    /// model detail plus
    public function get_data_all_detailplus($id_invoice){
        $this->db->select('*');
        $this->db->where('invoice_id',$id_invoice);
        $query = $this->db->get('invoice_detail_plus')->result();
        return $query;
    }


    /// model detail minus
    public function get_data_all_detailminus($id_invoice){
        $this->db->select('*');
        $this->db->where('invoice_id',$id_invoice);
        $query = $this->db->get('invoice_detail_minus')->result();
        return $query;
    }

    function get_data_wo(){
        $this->db->select('project_id, no_wo');
        $query = $this->db->get('project');
        return $query->result();
    }

    function get_data_invoice_kode($kode){
        $this->db->select('kode_invoice, invoice_id');
        $this->db->where('kode_invoice',$kode);
        $query = $this->db->get('invoice');
        return $query->row();
    }

    // insert data
    function insert_project($data)
    {
        $query = $this->db->insert('project', $data);
        return $query;
    }

     // insert data
     function insert_invoice($data)
     {
         $this->db->insert('invoice', $data);
         return $this->db->insert_id();
     }

      // insert data
      function insert_invoice_bank($data)
      {
          $this->db->insert('invoice_bank', $data);
          return true;
      }
       // insert data
       function insert_invoice_detail_plus($data)
       {
           $this->db->insert('invoice_detail_plus', $data);
           return true;
       }

       // insert data
       function insert_invoice_detail_plus_batch($data)
       {
           $this->db->insert_batch('invoice_detail_plus', $data);
           return true;
       }

    // insert data
    function insert_multiple($data)
    {
        $this->db->insert_batch($this->table, $data);
    }

    // invoice tagihan 
    //=====================================================================================

     // insert data
     function insert_batch_invoice_tagihan($data)
     {
        return $this->db->insert_batch('invoice_tagihan', $data);
          
     }

     public function getListTagihan($invoice_id,$type_biaya,$type_result=null){
        $this->db->select('B.*, A.invoice_tag_id, A.invoice_id, I.is_approved, C.speed, C.nama_produk, C.nama_deskripsi as node_deskripsi, 1 as jumlah');
        $this->db->from('invoice_tagihan as A');
        $this->db->join('invoice as I','I.invoice_id = A.invoice_id','left');
        $this->db->join('tagihan as B','A.tagihan_id = B.tagihan_id','left');
        $this->db->join('node as C','B.node_id = C.node_id','left');
        $this->db->where('A.invoice_id',$invoice_id);
        $this->db->where('B.type_biaya',$type_biaya);
        if($type_result=='array'){

            $query = $this->db->get()->result_array();
        }else{

            $query = $this->db->get()->result();
        }
        return $query;
     }

     public function getUncheckTagihan($project_id,$type_biaya){
        $query = $this->db->from('tagihan B')
            ->join('node C','B.node_id=C.node_id','left')
            ->join('invoice_tagihan D','D.tagihan_id=B.tagihan_id','left')
            ->select('B.*,C.speed,1 as jumlah,D.invoice_tag_id')
            ->where('B.project_id',$project_id)
            ->where('B.type_biaya',$type_biaya)
            ->where(array('D.invoice_tag_id' => NULL))
            ->get();
        return $query->result();
     }
    
}

/* End of file invoice_model.php */
/* Location: ./application/models/invoice_model.php */