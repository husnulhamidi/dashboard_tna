<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

function upload_file($fileName, $pathName, $allowed_types, $ci_instance){
    $fileDoc = '';
    if($fileName){
        ini_set('MAX_EXECUTION_TIME', 0);
        $config['upload_path'] = $pathName;
        $config['allowed_types'] = $allowed_types;
        $config['file_name'] = $fileName.'-'.date('ymdHis');
        $ci_instance->upload->initialize($config);
        if ($ci_instance->upload->do_upload($fileName)){
            $upload_data  = $ci_instance->upload->data();
            $file_extension = $upload_data['file_ext'];
            $fileDoc = $fileName.'-'.date('ymdHis').$file_extension;
        }else{
            $error = $ci_instance->upload->display_errors();
            $dataError = array(
                'success'       => false,
                'status_code'   => 500,
                'msg'           => $error,
                'data'          => array()
            );
            return $dataError;
        }
    }

    $data = array(
        'success'       => true,
        'status_code'   => 200,
        'data'          => $fileDoc
    );
    return $data;
}

function update_pengawalan($id, $tahapan_id, $karyawanId){
    $CI =& get_instance();
    $CI->load->database();

    $data = array(
        'tahapan_id' => $tahapan_id,
        'updated_date' => date('Y-m-d'),
        'updated_by' => $karyawanId
    );

    $CI->db->where('id',$id);
    $CI->db->update('m_tna_pengawalan',$data);

    // $CI->db->insert('m_tna_pengawalan_riwayat', $dataHistory);
    
    // Periksa jika data berhasil disimpan
    if ($CI->db->affected_rows() > 0) {
        return true;
    } else {
        return false;
    }
}


function save_history_pengawalan($pengawalanId, $usulanId, $status, $keterangan, $karyawanId) {
    // Load library database CI
    $CI =& get_instance();
    $CI->load->database();

    $dataHistory = array(
        'm_tna_pengawalan_id' => $pengawalanId,
        'r_tahapan_usulan_id' => $usulanId,
        'status' => $status,
        'keterangan' => $keterangan,
        'created_by' => $karyawanId,
        'created_date' => date('Y-m-d')
    );

    $CI->db->insert('m_tna_pengawalan_riwayat', $dataHistory);
    
    // Periksa jika data berhasil disimpan
    if ($CI->db->affected_rows() > 0) {
        return true;
    } else {
        return false;
    }
}