<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	function data_report($id_invoice){

		$this->db->select('inv.invoice_id, inv.no_invoice, inv.no_surat, inv.tgl_invoice, inv.tgl_jthtempo, inv.no_pjk,  inv.nominal, inv.terbilang, inv.status, inv.is_approved, pjt.project_id, pjt.nama_project, pjt.no_wo, plg.pelanggan_id, plg.nama_pelanggan, plg.nama_alias, plg.divisi, plg.alamat_surat, plg.alamat_invoice, plg.npwp, ib.ib_id, b.nama_bank, b.alamat1, b.alamat2, b.jenis_rekening, b.no_rekening');
        $this->db->from('invoice as inv');
        $this->db->join('project as pjt','pjt.project_id = inv.project_id','inner');
        $this->db->join('pelanggan as plg','plg.pelanggan_id = pjt.pelanggan_id','inner');
        $this->db->join('invoice_bank as ib','ib.invoice_id = inv.invoice_id','left');
        $this->db->join('bank as b','b.bank_id = ib.bank_id','left');
        $this->db->where('inv.invoice_id', $id_invoice);
        $data = $this->db->get()->row();
        return $data;
	}

	function data_bank(){
		$this->db->where('active',1);
		$data = $this->db->get('bank')->row();

		return $data;
	}

}

/* End of file reports_model.php */
/* Location: ./application/models/reports_model.php */