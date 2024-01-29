<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ComboModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->db = $this->load->database('default', TRUE);
		$this->table = 'r_tna_job_family';
    	$this->id = 'id';

	}

	
	function get_jobfamily(){
		return $this->db->from('r_tna_job_family')->where('status_code','1')->select('id,code,name')->get()->result();
	}

	public function job_function($get){
        $JobFamilyCode = $get['JobFamilyCode'];
        $JobFunctionCode = $get['JobFunctionCode'];
		$query = $this->db->from('r_tna_job_function')
                ->where('status_code','1')
                ->where('r_tna_job_family_code',$JobFamilyCode)
                ->select('id,code,name')
                ->get()->result();
        //echo $this->db->last_query();die;
        //echo json_encode($query);die;
        $data =array();
        $data = '<option value="">Pilih Job Function ...</option>';
        $i=0;
        foreach ($query as $key) {
            $i++;
            $data .= '<option value="'.$key->code.'"> '.$key->name.'</option>';
        }
        return $data;	
	}

    public function job_role($get){
        $JobFunctionCode = $get['JobFunctionCode'];
        $JobRoleCode = $get['JobRoleCode'];
		 $this->db->from('r_tna_job_role')
                ->where('status_code','1')
                ->select('id,code,name');
                
        if($JobFunctionCode!=""){
            $this->db->where('r_tna_job_function_code',$JobFunctionCode);
        }
        $query = $this->db->get();
        $result =$query->result();
        $data =array();
        $data = '<option value="">Pilih Job Role ...</option>';
        $i=0;
        foreach ($result as $key) {
            $i++;
            $data .= '<option value="'.$key->code.'"> '.$key->name.'</option>';

        }
        return $data;	
	}

    public function kompetensi($get){
        $JobRoleCode = $get['JobRoleCode'];
        $KompetensiCode = $get['KompetensiCode'];

        $this->db->from('r_tna_kompetensi')
        ->where('status_code','1')
        ->select('id,code,name');

        if($JobRoleCode!=""){
            $this->db->where('r_tna_job_role_code',$JobRoleCode);
        }
        $query = $this->db->get();

        $result = $query->result();
       
        $data =array();
        $data = '<option value="">Pilih Job Role ...</option>';
        $i=0;
        foreach ($result as $key) {
            $i++;
            $data .= '<option value="'.$key->code.'"> '.$key->name.'</option>';

        }
        return $data;	

	}
	

}

/* End of file bank_model.php */
/* Location: ./application/models/Reference/JobFamilyModel.php */