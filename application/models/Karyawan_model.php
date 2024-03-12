<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model(array('mutasi_karyawan_model'));
    }

    public function get_organisasi_by_id_karyawan($id, $level = 2) // defaultnya direktorat
    {
        // 2 = direktorat
        // 3 = subdit
        // 4 = sub unit
        // 5 = bagian
        $result = array();

        $org = $this->db->select('*')
        ->from('m_karyawan mk')
        ->join('(SELECT id,m_organisasi_id,r_jabatan_id,m_karyawan_id FROM h_mutasi WHERE is_aktif=1) hm','hm.m_karyawan_id=mk.id')
        ->join('v_organisasi org','org.id=hm.m_organisasi_id')
        ->where('mk.id',$id)
        ->get()
        ->row_array();

        if(!empty($org)){
            for ($i = 1; $i <= 5; $i++) {
                if ($org['l' . $i] == $level) {
                    $result = array(
                        'id' => $org['i' . $i],
                        'kode' => $org['k' . $i],
                        'nama' => $org['o' . $i],
                    );
                }
            }
        }

        return $result;
    }

    public function get_jabatan_by_karyawan_id($id)
    {
        $result = $this->db->select('j.id, j.nama')
        ->from('m_karyawan mk')
        ->join('h_mutasi m','mk.id = m.m_karyawan_id')
        ->join('r_jabatan j','j.id = m.r_jabatan_id')
        ->where('mk.id',$id)
        ->where('m.is_aktif',1)
        ->get()
        ->row_array();

        if(!empty($result)){
            if(strpos($result['nama'], 'DIRECTOR') !== FALSE){
                $result['kode'] = '000';
            }elseif(strpos($result['nama'], 'MANAGER') !== FALSE){
                $result['kode'] = '300';
            }elseif(strpos($result['nama'], 'AVP') !== FALSE){
                $result['kode'] = '200';
            }elseif(strpos($result['nama'], 'GM') !== FALSE){
                $result['kode'] = '200';
            }elseif(strpos($result['nama'], 'VP') !== FALSE){
                $result['kode'] = '100';
            }else{
                $result['kode'] = 'xxx';
            }
        }
        

        return $result;
    }

    public function get_ajax_karyawan_by_id($id)
    {
        $json = array();
        $query = $this->db->query("SELECT m.id, m.nama,m.inisial,m.nik_tg nik
                                  FROM m_karyawan AS m 
                                  WHERE m.id=$id AND m.is_aktif=1");
        foreach ($query->result() as $key => $c) {
            $json[$key]['id'] = $c->id;
            $json[$key]['text'] = $c->nama . " | " . $c->nik;
        }
        echo json_encode($json);
    }

    public function get_karyawan_aktif1()
    {
        $query = $this->db->query('SELECT a.*,email FROM m_karyawan a
        LEFT JOIN v_kontak_karyawan_aktif b ON a.id=b.m_karyawan_id WHERE a.is_aktif=1');

        return $query->result_array();
    }

    public function get_karyawan_aktif2()
    {
        $query = $this->db->query('SELECT a.*,email FROM m_karyawan a
        JOIN v_kontak_karyawan_aktif b ON a.id=b.m_karyawan_id WHERE a.is_aktif=1 and email is not null');

        return $query->result_array();
    }

    public function get_karyawan_aktif3()
    {
        $query = $this->db->query("SELECT x.id,nik_tg,y.kontak email FROM (SELECT a.*,email FROM m_karyawan a
        JOIN v_kontak_karyawan_aktif b ON a.id=b.m_karyawan_id WHERE a.is_aktif=1 and email is  null AND nik_tg !='') x JOIN 
        v_kontak_karyawan y ON x.id=y.m_karyawan_id WHERE r_jenis_kontak_id=2");

        return $query->result_array();
    }

    public function viewall()
    {
        return $this->db->select('k.*,rg.nama nama_agama, rjk.nama nama_jenis_kelamin,rsn.nama nama_status_nikah,rb.nama nama_bank, rsk.nama nama_status_karyawan')
            ->from('m_karyawan k')
            ->join('r_agama rg', 'rg.id=k.r_agama_id', 'left')
            ->join('r_jenis_kelamin rjk', 'rjk.id=k.r_jenis_kelamin_id', 'left')
            ->join('r_status_nikah rsn', 'rsn.id=k.r_status_nikah_id', 'left')
            ->join('r_bank rb', 'rb.id=k.r_bank_id', 'left')
            ->join('r_status_karyawan rsk', 'rsk.id=k.r_status_karyawan_id')->get();
    }

    public function get_karyawan_aktif()
    {
        //         $this->db->select('mk.id,mk.idKary,mk.url,mk.nama,mk.nik_tg nik,mk.is_aktif,mk.tgl_masuk,sk.nama nama_status_karyawan')->from('m_karyawan mk')
        //         ->join('r_status_karyawan sk','sk.id=mk.r_status_karyawan_id','left')
        //         ->join('(SELECT * FROM h_mutasi WHERE is_aktif=1) m','m.m_karyawan_id=mk.id','left')
        //         ->join('(SELECT * FROM
        //                             (SELECT hp . * , rjp.nama
        //                             FROM h_pendidikan hp
        //                             JOIN r_jenjang_pendidikan rjp ON rjp.id = hp.r_jenjang_pendidikan_id
        //                             ORDER BY hp.m_karyawan_id, hp.tahun_lulus DESC
        //                             ) x
        //                         GROUP BY x.m_karyawan_id) p','p.m_karyawan_id=mk.id','left')
        //                         ->where('mk.is_aktif','1')
        //                         // ->where('m.is_aktif','1')
        //         ->order_by('mk.tgl_masuk','asc');

        $query = $this->db->query('SELECT m.id, m.nik_tg nik,m.nama,m.tpt_lahir tempat_lahir,m.tgl_lahir tanggal_lahir,
                            ag.nama agama,jk.nama jenis_kelamin,sk.nama status_karyawan,jab.jabatan jabatan,p.nama pendidikan_terakhir,p.jurusan,p.nama_instansi_pendidikan,
                            m.tgl_masuk tanggal_masuk,vkk.email,vkk.handphone,j.level,o1,l1,o2,l2,o3,l3,o4,l4,o5,l5,
                            rk.nama lokasi_penempatan,m.no_rek nomor_rekening,org.r_jenis_organisasi_id,b.nama bank,
                            c.nama_kompetensi,c.kinerja,c.nilai,rtg.nama asal_telkom_group, psg.tgl_nikah tanggal_nikah 
                            FROM m_karyawan m
                            LEFT JOIN r_agama ag ON ag.id=m.r_agama_id
                            LEFT JOIN r_jenis_kelamin jk ON jk.id=m.r_jenis_kelamin_id
                            LEFT JOIN r_status_karyawan sk ON sk.id=m.r_status_karyawan_id
                            LEFT JOIN r_bank b ON b.id=m.r_bank_id
                            LEFT JOIN 
                                (SELECT id,m_organisasi_id,r_jabatan_id,m_karyawan_id FROM h_mutasi WHERE id IN (SELECT max(id) FROM h_mutasi WHERE is_aktif = 1 GROUP BY m_karyawan_id)) hm on hm.m_karyawan_id=m.id
                            LEFT JOIN v_organisasi org on org.id=hm.m_organisasi_id
                            LEFT JOIN r_jabatan j ON j.id=hm.r_jabatan_id
                            LEFT JOIN 
                                (SELECT m_karyawan_id,GROUP_CONCAT(r_jabatan.nama) jabatan FROM h_mutasi 
                                    JOIN r_jabatan ON h_mutasi.r_jabatan_id = r_jabatan.id 
                                    WHERE h_mutasi.is_aktif = 1
                                    GROUP BY h_mutasi.m_karyawan_id) jab ON jab.m_karyawan_id = m.id
                            LEFT JOIN 
                                (SELECT hlk.m_karyawan_id, GROUP_CONCAT(rlk.nama) nama FROM h_lokasi_kerja hlk
                                    JOIN r_lokasi_kerja rlk ON hlk.r_lokasi_kerja_id = rlk.id 
                                    WHERE hlk.is_aktif = 1 
                                    GROUP BY hlk.m_karyawan_id) rk ON rk.m_karyawan_id = m.id
                            LEFT JOIN v_kontak_karyawan_aktif vkk ON vkk.m_karyawan_id=m.id
                            LEFT JOIN (SELECT * FROM 
                                    (SELECT hp . * , rjp.nama ,rip.nama nama_instansi_pendidikan
                                    FROM h_pendidikan hp 
                                    JOIN r_jenjang_pendidikan rjp ON rjp.id = hp.r_jenjang_pendidikan_id
                                                JOIN r_instansi_pendidikan rip ON rip.id= hp.r_instansi_pendidikan_id 
                                    ORDER BY hp.m_karyawan_id, hp.tahun_lulus DESC 
                                    ) x 
                                    GROUP BY x.m_karyawan_id) AS p on p.m_karyawan_id=m.id
                            LEFT JOIN (SELECT * FROM
                                        (SELECT kk.*,pk.tahun,kkp.nama nama_kompetensi
                                        FROM  `h_kinerja_karyawan` kk
                                        JOIN r_periode_kinerja pk ON pk.id = kk.r_periode_kinerja_id
                                        JOIN r_kinerja_kompetensi kkp ON kkp.id = kk.r_kinerja_kompetensi_id
                                        ORDER BY pk.tahun DESC,pk.tst_periode DESC
                                        ) x
                                        GROUP BY x.m_karyawan_id) AS c on c.m_karyawan_id=m.id
                            LEFT JOIN r_telkom_group rtg ON m.r_telkom_group_id = rtg.id 
                            LEFT JOIN h_pasangan psg ON m.id = psg.m_karyawan_id
                            WHERE m.is_aktif=1
                            ORDER BY m.nama');
        $query = $query->result_array();
        for ($j = 0; $j < count($query); ++$j) {
            $query[$j]['direktorat'] = $this->_get_direktorat($query[$j]);
            $query[$j]['subdirektorat'] = $this->_get_subdirektorat($query[$j]);
            $query[$j]['subunit'] = $this->_get_subunit($query[$j]);
            $query[$j]['bagian'] = $this->_get_bagian($query[$j]);
        }

        return $query;
    }

    public function get_karyawan_kontrak()
    {
        $query = $this->db->query('SELECT m.nik_tg nik,m.nama,m.tpt_lahir tempat_lahir,m.tgl_lahir tanggal_lahir,
                                ag.nama agama,jk.nama jenis_kelamin,sk.nama status_karyawan,j.nama jabatan,p.nama pendidikan_terakhir,
                                m.tgl_masuk tanggal_masuk,vkk.email,vkk.handphone,j.level,o1,l1,o2,l2,o3,l3,o4,l4,o5,l5,
                                rk.nama lokasi_penempatan,m.no_rek nomor_rekening,org.r_jenis_organisasi_id,b.nama bank,
                                hk.no_kontrak nomor_kontrak,
                                hk.tgl_start,
                                hk.tgl_akhir
                                FROM m_karyawan m
                                LEFT JOIN r_agama ag ON ag.id=m.r_agama_id
                                LEFT JOIN r_jenis_kelamin jk ON jk.id=m.r_jenis_kelamin_id
                                LEFT JOIN r_status_karyawan sk ON sk.id=m.r_status_karyawan_id
                                LEFT JOIN r_bank b ON b.id=m.r_bank_id
                                JOIN (SELECT id,m_organisasi_id,r_jabatan_id,m_karyawan_id FROM h_mutasi WHERE is_aktif=1) hm on hm.m_karyawan_id=m.id
                                JOIN v_organisasi org on org.id=hm.m_organisasi_id
                                JOIN r_jabatan j ON j.id=hm.r_jabatan_id
                                LEFT JOIN h_lokasi_kerja lk ON lk.m_karyawan_id=m.id 
                                JOIN r_lokasi_kerja rk ON rk.id=lk.r_lokasi_kerja_id 
                                JOIN h_kontrak hk ON hk.m_karyawan_id=m.id
                                JOIN v_kontak_karyawan_aktif vkk ON vkk.m_karyawan_id=m.id
                                LEFT JOIN (SELECT * FROM 
                                        (SELECT hp . * , rjp.nama 
                                        FROM h_pendidikan hp 
                                        JOIN r_jenjang_pendidikan rjp ON rjp.id = hp.r_jenjang_pendidikan_id 
                                        ORDER BY hp.m_karyawan_id, hp.tahun_lulus DESC 
                                        ) x 
                                        GROUP BY x.m_karyawan_id) AS p on p.m_karyawan_id=m.id
                                WHERE m.is_aktif=1 and lk.is_aktif=1 and m.r_status_karyawan_id=2
                                ORDER BY m.nama');
        $query = $query->result_array();
        for ($j = 0; $j < count($query); ++$j) {
            $query[$j]['direktorat'] = $this->_get_direktorat($query[$j]);
            $query[$j]['subdirektorat'] = $this->_get_subdirektorat($query[$j]);
            $query[$j]['subunit'] = $this->_get_subunit($query[$j]);
            $query[$j]['bagian'] = $this->_get_bagian($query[$j]);
        }

        return $query;
    }

    public function get_karyawan_nonaktif()
    {
        $query = $this->db->query('SELECT m.nik_tg nik,m.nama,m.tpt_lahir tempat_lahir,m.tgl_lahir tanggal_lahir,
                                ag.nama agama,jk.nama jenis_kelamin,sk.nama status_karyawan,j.nama jabatan,p.nama pendidikan_terakhir,
                                m.tgl_masuk tanggal_masuk,vkk.email,vkk.handphone,j.level,o1,l1,o2,l2,o3,l3,o4,l4,o5,l5,
                                rk.nama lokasi_penempatan,m.no_rek nomor_rekening,org.r_jenis_organisasi_id,b.nama bank,
                                hk.no_kontrak nomor_kontrak,
                                hk.tgl_start,
                                hk.tgl_akhir
                                FROM m_karyawan m
                                LEFT JOIN r_agama ag ON ag.id=m.r_agama_id
                                LEFT JOIN r_jenis_kelamin jk ON jk.id=m.r_jenis_kelamin_id
                                LEFT JOIN r_status_karyawan sk ON sk.id=m.r_status_karyawan_id
                                LEFT JOIN r_bank b ON b.id=m.r_bank_id
                                LEFT JOIN (SELECT id,m_organisasi_id,r_jabatan_id,m_karyawan_id FROM h_mutasi WHERE is_aktif=1) hm on hm.m_karyawan_id=m.id
                                LEFT JOIN v_organisasi org on org.id=hm.m_organisasi_id
                                LEFT JOIN r_jabatan j ON j.id=hm.r_jabatan_id
                                LEFT JOIN h_lokasi_kerja lk ON lk.m_karyawan_id=m.id 
                                LEFT JOIN r_lokasi_kerja rk ON rk.id=lk.r_lokasi_kerja_id 
                                LEFT JOIN h_kontrak hk ON hk.m_karyawan_id=m.id
                                LEFT JOIN v_kontak_karyawan_aktif vkk ON vkk.m_karyawan_id=m.id
                                LEFT JOIN (SELECT * FROM 
                                        (SELECT hp . * , rjp.nama 
                                        FROM h_pendidikan hp 
                                        JOIN r_jenjang_pendidikan rjp ON rjp.id = hp.r_jenjang_pendidikan_id 
                                        ORDER BY hp.m_karyawan_id, hp.tahun_lulus DESC 
                                        ) x 
                                        GROUP BY x.m_karyawan_id) AS p on p.m_karyawan_id=m.id
                                WHERE m.is_aktif=0
                                ORDER BY m.nama');
        $query = $query->result_array();
        for ($j = 0; $j < count($query); ++$j) {
            $query[$j]['direktorat'] = $this->_get_direktorat($query[$j]);
            $query[$j]['subdirektorat'] = $this->_get_subdirektorat($query[$j]);
            $query[$j]['subunit'] = $this->_get_subunit($query[$j]);
            $query[$j]['bagian'] = $this->_get_bagian($query[$j]);
        }

        return $query;
    }

    public function get_karyawan_tetap()
    {
        $query = $this->db->query('SELECT m.nik_tg nik,m.nama,m.tpt_lahir tempat_lahir,m.tgl_lahir tanggal_lahir,
                                ag.nama agama,jk.nama jenis_kelamin,sk.nama status_karyawan,j.nama jabatan,p.nama pendidikan_terakhir,
                                m.tgl_masuk tanggal_masuk,vkk.email,vkk.handphone,j.level,o1,l1,o2,l2,o3,l3,o4,l4,o5,l5,
                                rk.nama lokasi_penempatan,m.no_rek nomor_rekening,org.r_jenis_organisasi_id,b.nama bank,
                                hk.no_kontrak nomor_kontrak,
                                hk.tgl_start,
                                hk.tgl_akhir
                                FROM m_karyawan m
                                LEFT JOIN r_agama ag ON ag.id=m.r_agama_id
                                LEFT JOIN r_jenis_kelamin jk ON jk.id=m.r_jenis_kelamin_id
                                LEFT JOIN r_status_karyawan sk ON sk.id=m.r_status_karyawan_id
                                LEFT JOIN r_bank b ON b.id=m.r_bank_id
                                LEFT JOIN (SELECT id,m_organisasi_id,r_jabatan_id,m_karyawan_id FROM h_mutasi WHERE is_aktif=1) hm on hm.m_karyawan_id=m.id
                                LEFT JOIN v_organisasi org on org.id=hm.m_organisasi_id
                                LEFT JOIN r_jabatan j ON j.id=hm.r_jabatan_id
                                LEFT JOIN h_lokasi_kerja lk ON lk.m_karyawan_id=m.id 
                                LEFT JOIN r_lokasi_kerja rk ON rk.id=lk.r_lokasi_kerja_id 
                                LEFT JOIN h_kontrak hk ON hk.m_karyawan_id=m.id
                                LEFT JOIN v_kontak_karyawan_aktif vkk ON vkk.m_karyawan_id=m.id
                                LEFT JOIN (SELECT * FROM 
                                        (SELECT hp . * , rjp.nama 
                                        FROM h_pendidikan hp 
                                        JOIN r_jenjang_pendidikan rjp ON rjp.id = hp.r_jenjang_pendidikan_id 
                                        ORDER BY hp.m_karyawan_id, hp.tahun_lulus DESC 
                                        ) x 
                                        GROUP BY x.m_karyawan_id) AS p on p.m_karyawan_id=m.id
                                WHERE m.is_aktif=1 and m.r_status_karyawan_id=5
                                ORDER BY m.nama');
        $query = $query->result_array();
        for ($j = 0; $j < count($query); ++$j) {
            $query[$j]['direktorat'] = $this->_get_direktorat($query[$j]);
            $query[$j]['subdirektorat'] = $this->_get_subdirektorat($query[$j]);
            $query[$j]['subunit'] = $this->_get_subunit($query[$j]);
            $query[$j]['bagian'] = $this->_get_bagian($query[$j]);
        }

        return $query;
    }

    public function get_karyawan_outsource()
    {
        $query = $this->db->query('SELECT m.nik_tg nik,m.nama,m.tpt_lahir tempat_lahir,m.tgl_lahir tanggal_lahir,
                                ag.nama agama,jk.nama jenis_kelamin,sk.nama status_karyawan,j.nama jabatan,p.nama pendidikan_terakhir,
                                m.tgl_masuk tanggal_masuk,vkk.email,vkk.handphone,j.level,o1,l1,o2,l2,o3,l3,o4,l4,o5,l5,
                                rk.nama lokasi_penempatan,m.no_rek nomor_rekening,org.r_jenis_organisasi_id,b.nama bank
                                FROM m_karyawan m
                                LEFT JOIN r_agama ag ON ag.id=m.r_agama_id
                                LEFT JOIN r_jenis_kelamin jk ON jk.id=m.r_jenis_kelamin_id
                                LEFT JOIN r_status_karyawan sk ON sk.id=m.r_status_karyawan_id
                                LEFT JOIN r_bank b ON b.id=m.r_bank_id
                                JOIN (SELECT id,m_organisasi_id,r_jabatan_id,m_karyawan_id FROM h_mutasi WHERE is_aktif=1) hm on hm.m_karyawan_id=m.id
                                JOIN v_organisasi org on org.id=hm.m_organisasi_id
                                JOIN r_jabatan j ON j.id=hm.r_jabatan_id
                                LEFT JOIN h_lokasi_kerja lk ON lk.m_karyawan_id=m.id
                                JOIN r_lokasi_kerja rk ON rk.id=lk.r_lokasi_kerja_id
                                LEFT JOIN v_kontak_karyawan_aktif vkk ON vkk.m_karyawan_id=m.id
                                LEFT JOIN (SELECT * FROM 
                                        (SELECT hp . * , rjp.nama 
                                        FROM h_pendidikan hp 
                                        JOIN r_jenjang_pendidikan rjp ON rjp.id = hp.r_jenjang_pendidikan_id 
                                        ORDER BY hp.m_karyawan_id, hp.tahun_lulus DESC 
                                        ) x 
                                        GROUP BY x.m_karyawan_id) AS p on p.m_karyawan_id=m.id
                                WHERE m.is_aktif=1 and lk.is_aktif=1 and m.r_status_karyawan_id=3
                                ORDER BY m.nama');
        $query = $query->result_array();
        for ($j = 0; $j < count($query); ++$j) {
            $query[$j]['direktorat'] = $this->_get_direktorat($query[$j]);
            $query[$j]['subdirektorat'] = $this->_get_subdirektorat($query[$j]);
            $query[$j]['subunit'] = $this->_get_subunit($query[$j]);
            $query[$j]['bagian'] = $this->_get_bagian($query[$j]);
        }

        return $query;
    }

    public function get_karyawan_berhenti()
    {
        $query = $this->db->query('SELECT m.nik_tg nik,m.nama,m.tpt_lahir tempat_lahir,m.tgl_lahir tanggal_lahir,
                                ag.nama agama,jk.nama jenis_kelamin,sk.nama status_karyawan,j.nama jabatan,p.nama pendidikan_terakhir,
                                m.tgl_masuk tanggal_masuk,vkk.email,vkk.handphone,j.level,o1,l1,o2,l2,o3,l3,o4,l4,o5,l5,
                                rk.nama lokasi_penempatan,m.no_rek nomor_rekening,org.r_jenis_organisasi_id,b.nama bank,
                                h_keluar.alasan,
                                h_keluar.tgl_sk tanggal_keluar 
                                FROM m_karyawan m
                                LEFT JOIN r_agama ag ON ag.id=m.r_agama_id
                                LEFT JOIN r_jenis_kelamin jk ON jk.id=m.r_jenis_kelamin_id
                                LEFT JOIN r_status_karyawan sk ON sk.id=m.r_status_karyawan_id
                                LEFT JOIN r_bank b ON b.id=m.r_bank_id
                                LEFT JOIN (SELECT id,m_organisasi_id,r_jabatan_id,m_karyawan_id FROM h_mutasi WHERE is_aktif=1) hm on hm.m_karyawan_id=m.id
                                LEFT JOIN v_organisasi org on org.id=hm.m_organisasi_id
                                LEFT JOIN r_jabatan j ON j.id=hm.r_jabatan_id
                                LEFT JOIN h_lokasi_kerja lk ON lk.m_karyawan_id=m.id
                                LEFT JOIN r_lokasi_kerja rk ON rk.id=lk.r_lokasi_kerja_id
                                LEFT JOIN v_kontak_karyawan_aktif vkk ON vkk.m_karyawan_id=m.id
                                JOIN h_keluar h_keluar ON h_keluar.m_karyawan_id=m.id
                                LEFT JOIN (SELECT * FROM 
                                        (SELECT hp . * , rjp.nama 
                                        FROM h_pendidikan hp 
                                        JOIN r_jenjang_pendidikan rjp ON rjp.id = hp.r_jenjang_pendidikan_id 
                                        ORDER BY hp.m_karyawan_id, hp.tahun_lulus DESC 
                                        ) x 
                                        GROUP BY x.m_karyawan_id) AS p on p.m_karyawan_id=m.id
                                WHERE m.is_aktif=0
                                ORDER BY m.nama');
        $query = $query->result_array();
        for ($j = 0; $j < count($query); ++$j) {
            $query[$j]['direktorat'] = $this->_get_direktorat($query[$j]);
            $query[$j]['subdirektorat'] = $this->_get_subdirektorat($query[$j]);
            $query[$j]['subunit'] = $this->_get_subunit($query[$j]);
            $query[$j]['bagian'] = $this->_get_bagian($query[$j]);
        }

        return $query;
    }

    public function get_director_by_direktorat($id)
    {

        $result = NULL;

        //OPERATION
        if ($id == 142) {
            $result = 1361; // ANGGORO PGS CTO
            // FINANCE & ADMINISTRATION
        } elseif ($id == 9 || $id == 330) {
            $result = 142; // RIZAL AHMAD FAUZI
            // DEVELOPMENT
        } elseif ($id == 119) {
            $result = 475; // Anggoro as CDO
            // CEO OFFICE
        } elseif ($id == 94) {
            $result = 1308; // LUKMAN 
            // COMMERCE
        } elseif ($id == 133) {
            $result = 1313; // ANDRI
        } else {
            return NULL;
        }

        $karyawan = $this->select_satu_karyawan($result);

        return $karyawan;
    }

    public function select_satu_karyawan($id)
    {
        $result = $this->db->select('mk.id, mk.nama, mk.nik_tg, mk.inisial, j.id as jabatan_id, j.nama as jabatan_nama, j.level, m.m_organisasi_id as org_id')
            ->from('h_mutasi m')
            ->join('m_karyawan mk', 'm.m_karyawan_id = mk.id')
            ->join('r_jabatan j', 'm.r_jabatan_id = j.id')
            ->where('mk.id', $id)
            ->where('m.is_aktif', 1)
            ->get()->row_array();

        return $result;
    }

    public function get_nama_karyawan_by_organisasi($id)
    {
        $karyawan = $this->db->select('mk.id, mk.nama, mk.nik_tg, mk.inisial, j.id as jabatan_id, j.nama as jabatan_nama, j.level, m.m_organisasi_id as org_id, users.id as users_id,sk.nama status_karyawan,IF(sk.id IN (2,4,5),"FTE","Non FTE") as status_fte')
            ->from('h_mutasi m')
            ->join('m_karyawan mk', 'm.m_karyawan_id = mk.id')
            ->join('r_jabatan j', 'm.r_jabatan_id = j.id')
            ->join('r_status_karyawan sk', 'sk.id = mk.r_status_karyawan_id', 'LEFT')
            ->join('users', 'users.m_karyawan_id = mk.id', 'left')
            ->where('m.m_organisasi_id', $id)
            ->where('m.is_aktif', 1)
            ->where('mk.is_aktif', 1)
            ->group_by('mk.id')
            ->order_by('mk.nama', 'asc')
            ->get()
            ->result_array();

        /*$karyawan = $this->db->select('m.id, m.nik_tg nik, m.nama, m.tpt_lahir tempat_lahir, m.tgl_lahir tanggal_lahir,
                    ag.nama agama, jk.nama jenis_kelamin, sk.nama status_karyawan, jab.jabatan, p.nama pendidikan_terakhir,
                    p.jurusan, p.nama_instansi_pendidikan, m.tgl_masuk tanggal_masuk, vkk.email, vkk.handphone, j.level,
                    o1, l1, o2, l2, o3, l3, o4, l4, o5, l5, rk.nama lokasi_penempatan, m.no_rek nomor_rekening,
                    org.r_jenis_organisasi_id, b.nama bank, c.nama_kompetensi, c.kinerja, c.nilai, rtg.nama asal_telkom_group,
                    psg.tgl_nikah tanggal_nikah,mkv.url_kk');
        $this->db->from('m_karyawan m');
        $this->db->join('m_karyawan_validasi mkv', 'mkv.m_karyawan_id = m.id', 'LEFT');
        $this->db->join('r_agama ag', 'ag.id = m.r_agama_id', 'LEFT');
        $this->db->join('r_jenis_kelamin jk', 'jk.id = m.r_jenis_kelamin_id', 'LEFT');
        $this->db->join('r_status_karyawan sk', 'sk.id = m.r_status_karyawan_id', 'LEFT');
        $this->db->join('r_bank b', 'b.id = m.r_bank_id', 'LEFT');
        $this->db->join('(SELECT id, m_organisasi_id, r_jabatan_id, m_karyawan_id FROM h_mutasi WHERE id IN 
                 (SELECT MAX(id) FROM h_mutasi WHERE is_aktif = 1 GROUP BY m_karyawan_id)) hm', 'hm.m_karyawan_id = m.id', 'LEFT');
        $this->db->join('v_organisasi org', 'org.id = hm.m_organisasi_id', 'LEFT');
        $this->db->join('r_jabatan j', 'j.id = hm.r_jabatan_id', 'LEFT');
        $this->db->join('(SELECT m_karyawan_id, GROUP_CONCAT(r_jabatan.nama) jabatan FROM h_mutasi 
                 JOIN r_jabatan ON h_mutasi.r_jabatan_id = r_jabatan.id 
                 WHERE h_mutasi.is_aktif = 1 GROUP BY h_mutasi.m_karyawan_id) jab', 'jab.m_karyawan_id = m.id', 'LEFT');
        $this->db->join('(SELECT hlk.m_karyawan_id, GROUP_CONCAT(rlk.nama) nama FROM h_lokasi_kerja hlk
        JOIN r_lokasi_kerja rlk ON hlk.r_lokasi_kerja_id = rlk.id 
                 WHERE hlk.is_aktif = 1 GROUP BY hlk.m_karyawan_id) rk', 'rk.m_karyawan_id = m.id', 'LEFT');
        $this->db->join('v_kontak_karyawan_aktif vkk', 'vkk.m_karyawan_id = m.id', 'LEFT');
        $this->db->join('(SELECT * FROM (SELECT hp.*, rjp.nama, rip.nama nama_instansi_pendidikan
                 FROM h_pendidikan hp 
                 JOIN r_jenjang_pendidikan rjp ON rjp.id = hp.r_jenjang_pendidikan_id
                 JOIN r_instansi_pendidikan rip ON rip.id = hp.r_instansi_pendidikan_id 
                 ORDER BY hp.m_karyawan_id, hp.tahun_lulus DESC) x 
                 GROUP BY x.m_karyawan_id) AS p', 'p.m_karyawan_id = m.id', 'LEFT');
        $this->db->join('(SELECT * FROM (SELECT kk.*, pk.tahun, kkp.nama nama_kompetensi
                 FROM h_kinerja_karyawan kk
                 JOIN r_periode_kinerja pk ON pk.id = kk.r_periode_kinerja_id
                 JOIN r_kinerja_kompetensi kkp ON kkp.id = kk.r_kinerja_kompetensi_id
                 ORDER BY pk.tahun DESC, pk.tst_periode DESC) x
                 GROUP BY x.m_karyawan_id) AS c', 'c.m_karyawan_id = m.id', 'LEFT');
        $this->db->join('r_telkom_group rtg', 'm.r_telkom_group_id = rtg.id', 'LEFT');
        $this->db->join('h_pasangan psg', 'm.id = psg.m_karyawan_id', 'LEFT');
        $this->db->where('m.is_aktif', 1);
        $this->db->where_in('m.r_status_karyawan_id', array(2, 4, 5));
        $this->db->order_by('m.nama');*/


        return $karyawan;
    }

    public function get_child_organisasi($id)
    {
        return $this->db->get_where('m_organisasi', array('parent_id' => $id))->result_array();
    }

    public function get_karyawan_by_organisasi($id, &$karyawan = array())
    {
        // ambil dulu list karyawan nya
        $karTemp = $this->get_nama_karyawan_by_organisasi($id);
        $karyawan = array_merge($karyawan, $karTemp);

        // ambil anak2 organisasinya dan lakukan recursive
        $temp = array();
        $temp = $this->get_child_organisasi($id);
        if (count($temp) > 0 && is_array($temp)) {
            // $karyawan = array_merge($karyawan,$temp);
            foreach ($temp as $key => $rec) {
                $this->get_karyawan_by_organisasi($rec['id'], $karyawan);
            }
        }


        return $karyawan;
    }

    public function get_karyawan_by_karyawanid($karyawan_id,$organisasi_id)
    {
        $karyawan = $this->db->select('mk.id, mk.nama, mk.nik_tg, mk.inisial, j.id as jabatan_id, j.nama as jabatan_nama, j.level, m.m_organisasi_id as org_id, users.id as users_id,sk.nama status_karyawan,IF(sk.id IN (2,4,5),"FTE","Non FTE") as status_fte')
            ->from('h_mutasi m')
            ->join('m_karyawan mk', 'm.m_karyawan_id = mk.id')
            ->join('r_jabatan j', 'm.r_jabatan_id = j.id')
            ->join('r_status_karyawan sk', 'sk.id = mk.r_status_karyawan_id', 'LEFT')
            ->join('users', 'users.m_karyawan_id = mk.id', 'left')
            ->where('m.m_karyawan_id', $karyawan_id)
            ->where('m.is_aktif', 1)
            ->where('mk.is_aktif', 1)
            ->group_by('mk.id')
            ->order_by('mk.nama', 'asc')
            ->get()
            ->result_array();

        return $karyawan;
    }

    public function get_pemeriksa_by_spj_jabatan_id($spj_jabatan, $subdit, $zona)
    {
        $list_pemeriksa = array();

        // ambil BP
        $level = $this->db->select('rlk.level')
            ->from('r_spj_jabatan rsj')
            ->join('r_level_karyawan rlk', 'rsj.level_karyawan_id = rlk.id')
            ->where('rsj.id', $spj_jabatan)
            ->get()->row()->level;

        $bp = null;
        if ($level == 'V' || $level == 'VI' || $level == 'VII') {
            $bp = array('IV', 'III', 'II');
        } elseif ($level == 'III') {
            $bp = 'II';
        } elseif ($level == 'IV') {
            $bp = array('III', 'II');
        } elseif ($level == 'II') {
            $bp = 'BOD';
        } elseif ($level == 'Mitra') {
            $bp = array('IV', 'III', 'II');
        } elseif ($level == 'Driver') {
            $bp = 'Driver';
        }

        if ($zona == 27 || $zona == 28) {
            if ($level == 'II' || $level == 'BOD') {
                $bp = 'BOD';
            } else {
                $bp = array('II', 'BOD');
            }
        }

        // get karyawan by subdit
        $karyawan = $this->get_karyawan_by_organisasi($subdit);
        // get direktur
        $direktorat_id = $this->db->get_where('m_organisasi', array('id' => $subdit))->row()->parent_id;
        $karyawan[] = $this->get_director_by_direktorat($direktorat_id);
        // jika it maka tambahkan pak anggoro
        // if($subdit == 146 || $subdit == 262){
        //     $karyawan[] = $this->select_satu_karyawan(475);
        // }
        // jika commerce 1 tambahkan pa fitra
        if ($subdit == 134) {
            $karyawan[] = $this->select_satu_karyawan(377);
        }
        // jika commerce 2 tambahkan pa iqbal
        if ($subdit == 137) {
            $karyawan[] = $this->select_satu_karyawan(489);
        }
        // jika government tambahkan pa iqbal
        if ($subdit == 233) {
            $karyawan[] = $this->select_satu_karyawan(489);
        }
        // get list pemeriksa by BP
        if (!is_array($bp) && $bp == 'Driver') {
            $list_pemeriksa[] = $this->select_satu_karyawan(532);
        } else {
            foreach ($karyawan as $rec) {
                if (is_array($bp)) {
                    if (in_array($rec['level'], $bp)) {
                        $list_pemeriksa[] = $rec;
                    }
                } else {
                    if ($rec['level'] == $bp) {
                        $list_pemeriksa[] = $rec;
                    }
                }
            }
            //override audit vp pak josep
            if ($bp == 'II' && $subdit == 454) {
                $list_pemeriksa[] = $this->select_satu_karyawan(213);
            }
            //override rcs jvp pemeriksa bod
            if ($level == 'III' && $subdit == 307) {
                $list_pemeriksa[] = $this->select_satu_karyawan(1313);
            }
            //override it vp pak anggoro
            if ($bp == 'II' && $subdit == 262) {
                $list_pemeriksa[] = $this->select_satu_karyawan(1361);
            }
            //override sd poh vp pak anggoro
            if ($bp == 'II' && $subdit == 144) {
                $list_pemeriksa[] = $this->select_satu_karyawan(1361);
                // $list_pemeriksa[] = $this->select_satu_karyawan(475);
            }
            //override satop poh vp pak anggoro
            if ($bp == 'II' && $subdit == 143) {
                $list_pemeriksa[] = $this->select_satu_karyawan(1361);
            }
            //override komersial
            if ($bp == 'II' && $subdit == 304) {
                $list_pemeriksa[] = $this->select_satu_karyawan(1313);
            }
            // //override PBD pa safar
            if ($bp == 'II' && $subdit == 456) {
                $list_pemeriksa[] = $this->select_satu_karyawan(475);
            }

            // //override billing bu endang
            if ($bp == 'II' && $subdit == 225) {
                $list_pemeriksa[] = $this->select_satu_karyawan(1265);
            }

            if ($bp == 'II' && $subdit == 335) {
                $list_pemeriksa[] = $this->select_satu_karyawan(475);
            }

            if ($bp == 'II' && $subdit == 307) {
                $list_pemeriksa[] = $this->select_satu_karyawan(465);
            }
        }

        return $list_pemeriksa;
    }

    public function get_pemeriksa_2_by_spj_jabatan_id($spj_jabatan, $subdit, $zona)
    {
        $list_pemeriksa = array();
        $list_pemeriksa[] = $this->select_satu_karyawan(471);

        return $list_pemeriksa;
    }

    public function get_penyetuju_by_spj_jabatan_id($spj_jabatan, $subdit, $zona)
    {
        $list_pemeriksa = array();

        // ambil BP
        $level = $this->db->select('rlk.level')
            ->from('r_spj_jabatan rsj')
            ->join('r_level_karyawan rlk', 'rsj.level_karyawan_id = rlk.id')
            ->where('rsj.id', $spj_jabatan)
            ->get()->row()->level;

        $bp = null;
        if ($level == 'IV' || $level == 'V' || $level == 'VI' || $level == 'VII') {
            $bp = 'II';
        } elseif ($level == 'Mitra') {
            $bp = array('III', 'II');
        } elseif ($level == 'Driver') {
            $bp = 'Driver';
        }

        if ($zona == 27 || $zona == 28) {
            $bp = 'BOD';
        }

        // echo $bp;

        // get karyawan by subdit
        $karyawan = $this->get_karyawan_by_organisasi($subdit);
        // jka datacom it tambahkan pak anggoro
        // if($subdit == 146){
        //     $karyawan[] = $this->select_satu_karyawan(475);
        // }

        // jika audit n risk tambahkan pa fino
        // if($subdit == 99){
        //     $karyawan[] = $this->select_satu_karyawan(471);
        // }
        // override bod ke direktur utama
        if (!is_array($bp) && $bp == 'BOD') {
            $list_pemeriksa[] = $this->select_satu_karyawan(1308);
        } elseif (!is_array($bp) && $bp == 'Driver') {
            $list_pemeriksa[] = $this->select_satu_karyawan(473);
        } else {
            // jika billco maka tambahkan pak albert
            if ($subdit == 225) {
                $list_pemeriksa[] = $this->select_satu_karyawan(474);
            }
            // jika ppc tambahkan pa zakaria
            if ($subdit == 304) {
                $list_pemeriksa[] = $this->select_satu_karyawan(490);
            }
            // jika sbd tambahkan pa zakaria
            if ($subdit == 123) {
                $list_pemeriksa[] = $this->select_satu_karyawan(1227);
            }
            // jika commerce 1 tambahkan pa fitra
            if ($subdit == 134) {
                $karyawan[] = $this->select_satu_karyawan(377);
            }
            // jika commerce 2 tambahkan pa usma
            if ($subdit == 137) {
                $karyawan[] = $this->select_satu_karyawan(492);
            }

            foreach ($karyawan as $rec) {
                if (is_array($bp)) {
                    if (in_array($rec['level'], $bp)) {
                        $list_pemeriksa[] = $rec;
                    }
                } else {
                    if ($rec['level'] == $bp) {
                        $list_pemeriksa[] = $rec;
                    }
                }
            }

            //override corsec avp bu eni
            if (in_array('III', $bp) && $subdit == 453) {
                $list_pemeriksa[] = $this->select_satu_karyawan(478);
            }

            //override audit vp pak josep
            if ($bp == 'II' && $subdit == 358) {
                $list_pemeriksa[] = $this->select_satu_karyawan(213);
            }

            //override satop poh vp pak anggoro
            if ($bp == 'II' && $subdit == 143) {
                $list_pemeriksa[] = $this->select_satu_karyawan(502);
            }

            //override sd pgs vp pak hairul
            if ($bp == 'II' && $subdit == 455) {
                $list_pemeriksa[] = $this->select_satu_karyawan(1184);
            }

            //override rcs pak nanang
            if ($bp == 'II' && $subdit == 307) {
                $list_pemeriksa[] = $this->select_satu_karyawan(465);
            }

            //override IT gm pa nug
            if ($bp == 'II' && $subdit == 262) {
                $list_pemeriksa[] = $this->select_satu_karyawan(521);
                $list_pemeriksa[] = $this->select_satu_karyawan(1361);
            }

            // jika direktorat komersial tambahkan pa ghiri
            if ($bp == 'II' && $subdit == 254) {
                $list_pemeriksa[] = $this->select_satu_karyawan(1313);
                $list_pemeriksa[] = $this->select_satu_karyawan(491);
            }

            // //override PDPM pa safar
            if ($bp == 'II' && $subdit == 335) {
                $list_pemeriksa[] = $this->select_satu_karyawan(476);
                $list_pemeriksa[] = $this->select_satu_karyawan(487);
                $list_pemeriksa[] = $this->select_satu_karyawan(481);
                $list_pemeriksa[] = $this->select_satu_karyawan(475);
            }

            // //override billing bu endang
            // if($bp == 'II' && $subdit == 333){
            //     $list_pemeriksa[] = $this->select_satu_karyawan(181);
            // }
        }

        return $list_pemeriksa;
    }

    public function get_hcm_by_spj_jabatan_id($spj_jabatan, $zona)
    {
        $list_pemeriksa = array();

        // ambil BP
        $level = $this->db->select('rlk.level')
            ->from('r_spj_jabatan rsj')
            ->join('r_level_karyawan rlk', 'rsj.level_karyawan_id = rlk.id')
            ->where('rsj.id', $spj_jabatan)
            ->get()->row()->level;

        $bp = null;
        if ($level == 'V' || $level == 'VI' || $level == 'VII' || $level == 'Mitra' || $level == 'Driver') {
            $bp = 'IV';
        } elseif ($level == 'III' || $level == 'IV') {
            $bp = 'III';
        } elseif ($level == 'II') {
            $bp = 'II';
        }

        if ($zona == 27 || $zona == 28) {
            $bp = 'BOD';
        }

        // get karyawan by subdit HCM
        $karyawan = $this->get_karyawan_by_organisasi(462);
        // get direktur HCM
        $direktorat_id = $this->db->get_where('m_organisasi', array('id' => 462))->row()->parent_id;
        $karyawan[] = $this->get_director_by_direktorat($direktorat_id);
        // override manager hcm ke bu poppi
        if ($bp == 'IV') {
            $list_pemeriksa[] = $this->select_satu_karyawan(147);
        } elseif ($bp == 'III') {
            $list_pemeriksa[] = $this->select_satu_karyawan(175);
        } else {
            // get list HCM by BP
            if (count($karyawan) > 0) {
                foreach ($karyawan as $rec) {
                    if ($rec['level'] == $bp) {
                        $list_pemeriksa[] = $rec;
                    }
                }
            }
        }


        return $list_pemeriksa;
    }

    public function get_fiatur_by_spj_jabatan_id($spj_jabatan, $zona)
    {
        $list_pemeriksa = array();

        // ambil BP
        $level = $this->db->select('rlk.level')
            ->from('r_spj_jabatan rsj')
            ->join('r_level_karyawan rlk', 'rsj.level_karyawan_id = rlk.id')
            ->where('rsj.id', $spj_jabatan)
            ->get()->row()->level;

        $bp = null;
        if ($level == 'V' || $level == 'VI' || $level == 'VII') {
            $bp = 'IV';
        } elseif ($level == 'II' || $level == 'III' || $level == 'IV') {
            $bp = 'II';
        } elseif ($level == 'Mitra' || $level == 'Driver') {
            $bp = 'IV';
        }

        if ($zona == 27 || $zona == 28) {
            $bp = 'BOD';
        }

        // get karyawan by subdit Finance
        $karyawan = $this->get_karyawan_by_organisasi(459);
        // get direktur Finance
        $direktorat_id = $this->db->get_where('m_organisasi', array('id' => 459))->row()->parent_id;
        $karyawan[] = $this->get_director_by_direktorat($direktorat_id);
        // get list finance by BP
        if ($bp == 'IV') {
            $list_pemeriksa[] = $this->select_satu_karyawan(472);
        } else {
            if (count($karyawan) > 0) {
                foreach ($karyawan as $key => $rec) {
                    //take out pak ferry anantya dan pak obet sebagai fiatur
                    if ($rec['id'] == 69 || $rec['id'] == 176) {
                        unset($karyawan[$key]);
                        continue;
                    }
                    if ($rec['level'] == $bp) {
                        $list_pemeriksa[] = $rec;
                    }
                }
            }
        }


        return $list_pemeriksa;
    }

    public function select_by_id($id)
    {
        $this->db->where('m_karyawan.id', $id);

        return $this->db->get('m_karyawan');
    }

    public function viewall_by_id2($id)
    {
        $query = $this->db->query('select mk.*,ra.nama nama_agama, rjk.nama nama_jenis_kelamin, rsn.nama nama_status_nikah,rb.nama nama_bank, 
                    rsk.nama nama_status_karyawan,org.r_jenis_organisasi_id,i1,o1,l1,i2,o2,l2,i3,o3,l3,i4,o4,l4,i5,o5,l5,
                    llk.nama nama_lokasi_kerja,rj.nama nama_jabatan,rj.level,rj.id jabatan_id, rj.r_kelompok_jabatan_id as kelompok, rsj.id spj_jabatan_id, rsj.nama spj_jabatan_nama
                                    from m_karyawan mk
                                    left join r_agama ra on ra.id=mk.r_agama_id
                                    left join r_jenis_kelamin rjk on rjk.id=mk.r_jenis_kelamin_id
                                    left join r_status_nikah rsn on rsn.id=mk.r_status_nikah_id
                                    left join r_bank rb on rb.id=mk.r_bank_id
                                    left join r_status_karyawan rsk on rsk.id=mk.r_status_karyawan_id
                                    left join (SELECT id,m_organisasi_id,r_jabatan_id,m_karyawan_id FROM h_mutasi WHERE is_aktif=1) hm on hm.m_karyawan_id=mk.id
                                    left join v_organisasi org on org.id=hm.m_organisasi_id
                                    left join h_lokasi_kerja hlk on hlk.m_karyawan_id=mk.id
                                    left join r_lokasi_kerja llk on llk.id=hlk.r_lokasi_kerja_id
                                    left join r_jabatan rj on rj.id=hm.r_jabatan_id 
                                    left join r_level_karyawan rlk on rj.level = rlk.level 
                                    left join 
                                        (SELECT * FROM r_spj_jabatan WHERE is_aktif = 1 GROUP BY level_karyawan_id) rsj on rlk.id = rsj.level_karyawan_id 
                                    where mk.id=' . $id . ' order by hm.id,hlk.id desc');

        return $query;
    }

    public function viewall_by_id($id)
    {
        $query = $this->db->query('select mk.*,ra.nama nama_agama,tg.nama telkom_group, rjk.nama nama_jenis_kelamin, rsn.nama nama_status_nikah,rb.nama nama_bank, 
                    rsk.nama nama_status_karyawan,org.r_jenis_organisasi_id,o1,l1,o2,l2,o3,l3,o4,l4,o5,l5,
                    llk.nama nama_lokasi_kerja,rj.nama nama_jabatan,rj.level,rj.id jabatan_id
                                    from m_karyawan mk
                                    left join r_agama ra on ra.id=mk.r_agama_id
                                    left join r_jenis_kelamin rjk on rjk.id=mk.r_jenis_kelamin_id
                                    left join r_status_nikah rsn on rsn.id=mk.r_status_nikah_id
                                    left join r_bank rb on rb.id=mk.r_bank_id
                                    left join r_status_karyawan rsk on rsk.id=mk.r_status_karyawan_id
                                    left join (SELECT id,m_organisasi_id,r_jabatan_id,m_karyawan_id FROM h_mutasi WHERE is_aktif=1) hm on hm.m_karyawan_id=mk.id
                                    left join v_organisasi org on org.id=hm.m_organisasi_id
                                    left join h_lokasi_kerja hlk on hlk.m_karyawan_id=mk.id
                                    left join r_telkom_group tg on tg.id=mk.r_telkom_group_id
                                    left join r_lokasi_kerja llk on llk.id=hlk.r_lokasi_kerja_id
                                    left join r_jabatan rj on rj.id=hm.r_jabatan_id
                                    where mk.id=' . $id . ' order by hm.id,hlk.id desc');

        return $query;
    }

    public function save($data)
    {
        $this->db->insert('m_karyawan', $data);

        return $this->db->insert_id();
    }

    public function update($data)
    {
        $id = $data['id'];
        $this->db->where('id', $id);
        $this->db->update('m_karyawan', $data);
    }

    public function delete($id)
    {
        $this->db->delete('m_karyawan', array('id' => $id));
        // delete alamat
        $this->db->delete('h_alamat', array('m_karyawan_id' => $id));
        // delete keluar
        $this->db->delete('h_keluar', array('m_karyawan_id' => $id));
        // delete kinerja
        $this->db->delete('h_kinerja', array('m_karyawan_id' => $id));
        // delete kontak karyawan
        $this->db->delete('h_kontak_karyawan', array('m_karyawan_id' => $id));
        // delete kontrak
        $this->db->delete('h_kontrak', array('m_karyawan_id' => $id));
        // delete lokasi kerja
        $this->db->delete('h_lokasi_kerja', array('m_karyawan_id' => $id));
        // delete mutasi
        $this->db->delete('h_mutasi', array('m_karyawan_id' => $id));
        // delete pasangan
        $this->db->delete('h_pasangan', array('m_karyawan_id' => $id));
        // delete pelatihan
        $this->db->delete('h_pelatihan', array('m_karyawan_id' => $id));
        // delete pendidikan
        $this->db->delete('h_pendidikan', array('m_karyawan_id' => $id));
        // delete pengalaman kerja
        $this->db->delete('h_pengalaman_kerja', array('m_karyawan_id' => $id));
        // delete penghargaan
        $this->db->delete('h_penghargaan', array('m_karyawan_id' => $id));
        // delete anak
        $this->db->delete('m_anak', array('m_karyawan_id' => $id));
        // delete orang tua
        $this->db->delete('m_orang_tua', array('m_karyawan_id' => $id));
    }

    public function pencarian_karyawan($keyword)
    {
        $this->db->select('k.*,rg.nama nama_agama, rjk.nama nama_jenis_kelamin,rsn.nama nama_status_nikah,rb.nama nama_bank, rsk.nama nama_status_karyawan')
            ->from('m_karyawan k')
            ->join('r_agama rg', 'rg.id=k.r_agama_id', 'left')
            ->join('r_jenis_kelamin rjk', 'rjk.id=k.r_jenis_kelamin_id', 'left')
            ->join('r_status_nikah rsn', 'rsn.id=k.r_status_nikah_id', 'left')
            ->join('r_bank rb', 'rb.id=k.r_bank_id', 'left')
            ->join('r_status_karyawan rsk', 'rsk.id=k.r_status_karyawan_id')
            ->where('k.is_aktif', 1);
        $this->db->group_start();
        $this->db->like('k.nama', $keyword);
        $this->db->or_like('k.nik_tg', $keyword);
        $this->db->or_like('k.nik', $keyword);
        $this->db->group_end();

        $data = $this->db->get();

        return $data;
    }

    public function autocomplete_karyawan($keyword)
    {
        return $this->db->select('k.nama,k.nik')
            ->from('m_karyawan k')
            ->where('k.is_aktif', '1')
            ->like('k.nama', $keyword)
            ->or_like('k.nik', $keyword)
            ->get();
    }

    public function search_inisial_karyawan($keyword)
    {
        return $this->db->where('m_karyawan.inisial', strtoupper($keyword))->get('m_karyawan');
        // return $this->db->like('m_karyawan.inisial',strtoupper($keyword))->get('m_karyawan');
    }

    public function get_idkary_lastest()
    {
        $id = $this->db->order_by('m_karyawan.id', 'desc')->select('m_karyawan.nik')->get('m_karyawan')->row()->nik;

        return  $id;
    }

    public function get_idkary_lastest_new($tahun)
    {
        $last = 0;

        $findLast = $this->db->query("SELECT MAX(CONVERT(RIGHT(nik_tg,3), SIGNED INTEGER)) AS max_number 
        FROM m_karyawan WHERE nik_tg like '$tahun%' ");

        if ($findLast->num_rows() > 0 && $findLast->row()->max_number != null) {
            $last = $findLast->row()->max_number;
        }

        return  (string)$last + 1;
    }

    public function chart_karyawan_by_status_karyawan()
    {
        return $this->db->query('SELECT rsk.nama, COUNT( mk.id ) jumlah
                    FROM m_karyawan mk 
                    JOIN r_status_karyawan rsk ON rsk.id = mk.r_status_karyawan_id 
                    WHERE mk.is_aktif=1
                    GROUP BY mk.r_status_karyawan_id')->result_array();
    }

    public function chart_karyawan_by_level()
    {
        $query = $this->db->query('SELECT rj.nama,COUNT(mk.id) jumlah
                    FROM m_karyawan mk
                    JOIN h_mutasi hm on hm.m_karyawan_id=mk.id
                    JOIN r_jabatan rj on rj.id=hm.r_jabatan_id
                    WHERE hm.is_aktif = 1
                    GROUP BY rj.id')->result_array();

        return $query;
    }

    public function chart_karyawan_by_education()
    {
        return $this->db->query('SELECT nama,count(id) jumlah FROM (SELECT a.id,
CASE when b.r_jenjang_pendidikan_id is null then 0
else b.r_jenjang_pendidikan_id end as r_jenjang_pendidikan_id,
CASE when c.nama is null then "Undefined"
else c.nama end as nama
FROM m_karyawan a
LEFT JOIN (SELECT m_karyawan_id,max(r_jenjang_pendidikan_id) r_jenjang_pendidikan_id from h_pendidikan GROUP BY m_karyawan_id) b
ON a.id= b.m_karyawan_id
left JOIN r_jenjang_pendidikan c ON b.r_jenjang_pendidikan_id=c.id
WHERE a.is_aktif=1) x GROUP BY r_jenjang_pendidikan_id,nama')->result_array();
    }

    public function chart_karyawan_by_jabatan_and_status()
    {
        return $this->db->query('SELECT rj.id jabatan_id,rsk.id status_karyawan_id, rj.nama nama_jabatan,rsk.nama nama_status_karyawan,count(mk.id) FROM m_karyawan mk
                        LEFT JOIN h_mutasi hm ON hm.m_karyawan_id=mk.id
                        LEFT JOIN r_jabatan rj ON rj.id=hm.r_jabatan_id
                        LEFT JOIN r_status_karyawan rsk ON rsk.id=mk.r_status_karyawan_id
                        GROUP BY rj.id,mk.r_status_karyawan_id
                        ORDER BY rj.id')->result_array();
    }

    public function chart_karyawan_by_jenis_kelamin()
    {
        $query = $this->db->query('SELECT rjk.id,rjk.nama nama, count(mk.id) jumlah
                        FROM m_karyawan mk
                        LEFT JOIN r_jenis_kelamin rjk ON rjk.id=mk.r_jenis_kelamin_id
                        WHERE mk.is_aktif=1
                        GROUP BY rjk.id')->result_array();
        foreach ($query as $key => $q) {
            switch ($q['nama']) {
                case 'L':
                    $query[$key]['nama'] = 'LAKI-LAKI';
                    break;
                case 'P':
                    $query[$key]['nama'] = 'PEREMPUAN';
                    break;
                default:
                    $query[$key]['nama'] = 'UNDEFINED';
                    break;
            }
        }

        return $query;
    }

    public function chart_karyawan_by_jenis_kelamin_and_status($status_karyawan_id, $jenis_kelamin_id)
    {
        $query = $this->db->query("SELECT COUNT( mk.id ) jumlah
                        FROM m_karyawan mk
                        LEFT JOIN r_status_karyawan rsk ON rsk.id = mk.r_status_karyawan_id
                        LEFT JOIN r_jenis_kelamin rjk ON rjk.id=mk.r_jenis_kelamin_id
                        WHERE rsk.id=$status_karyawan_id and rjk.id=$jenis_kelamin_id
                        GROUP BY rsk.id,rjk.id
                        ORDER BY rsk.id")->row();
        if (empty($query)) {
            return 0;
        }

        return (int) $query->jumlah;
    }

    public function chart_karyawan_posisi_and_status_karyawan($status_karyawan_id, $level_jabatan)
    {
        $query = $this->db->query("SELECT count(mk.id) jumlah
                        FROM m_karyawan mk
                        JOIN h_mutasi hm on hm.m_karyawan_id=mk.id
                        JOIN r_jabatan rj on rj.id=hm.r_jabatan_id
                        JOIN r_status_karyawan rsk on rsk.id=mk.r_status_karyawan_id
                        WHERE hm.is_aktif=1 AND rj.level='$level_jabatan' AND rsk.id=$status_karyawan_id
                        GROUP by rj.level,rsk.id")->row();

        if (empty($query)) {
            return 0;
        }

        return (int) $query->jumlah;
    }

    public function chart_karyawan_subdirektorat_and_status_karyawan($sub_direktorat_id, $status_karyawan_id)
    {
    }

    public function chart_karyawan_posisi_and_pendidikan($level_jabatan_id, $pendidikan_id)
    {
        $query = $this->db->query("SELECT count(z.m_karyawan_id) jumlah FROM
                                    (SELECT * FROM
                                        (SELECT hm.* , rj.nama nama_jabatan,rj.level
                                        FROM h_mutasi hm 
                                        JOIN r_jabatan rj ON rj.id = hm.r_jabatan_id 
                                        WHERE hm.is_aktif=1
                                        ORDER BY hm.m_karyawan_id, hm.id DESC) x
                                    GROUP BY x.m_karyawan_id) y
                                JOIN (SELECT * FROM 
                                    (SELECT hp . * , rjp.nama nama_jenjang_pendidikan,rjp.id r_pendidikan_id
                                    FROM h_pendidikan hp 
                                    JOIN r_jenjang_pendidikan rjp ON rjp.id = hp.r_jenjang_pendidikan_id 
                                    ORDER BY hp.m_karyawan_id, hp.tahun_lulus DESC 
                                    ) x 
                                    GROUP BY x.m_karyawan_id) z ON y.m_karyawan_id=z.m_karyawan_id
                                GROUP BY z.r_pendidikan_id,y.level
                                WHERE y.level=$level_jabatan_id AND z.r_pendidikan_id=$pendidikan_id")->row();
        if (empty($query)) {
            return 0;
        }

        return (int) $query->jumlah;
    }

    public function chart_karyawan_stream_and_posisi($stream, $level)
    {
    }

    public function chart_karyawan_posisi_and_usia($level_jabatan_id, $usia)
    {
    }

    public function chart_karyawan_direktorat_and_jenis_kelamin($direktorat_id, $jenis_kelamin_id)
    {
    }

    public function get_karyawan($keyword)
    {
        $json = array();

        $query = $this->db->query("SELECT m.id, m.nama,m.inisial, m.nik_tg nik, j.level bp
                FROM 
                    m_karyawan AS m 
                JOIN 
                    (SELECT * FROM h_mutasi WHERE id IN (SELECT MAX(id) FROM h_mutasi WHERE is_aktif = 1 GROUP BY m_karyawan_id)) AS hm ON m.id = hm.m_karyawan_id 
                JOIN
                    r_jabatan AS j ON hm.r_jabatan_id = j.id 
                WHERE 
                    (m.nama like '%$keyword%' OR m.nik_tg like '%$keyword%') 
                    AND m.is_aktif=1 
                    -- AND m.r_status_karyawan_id IN ('2','4','5','7','11')
                    ");

        foreach ($query->result() as $key => $c) {
            $json[$key]['id'] = $c->id;
            $json[$key]['text'] = $c->nama . " | " . $c->nik;
        }
        // $json = $query->result();
        echo json_encode($json);
    }

    public function chart_karyawan_level_and_jenis_kelamin($level_jabatan_id, $jenis_kelamin_id)
    {
        $query = $this->db->query("SELECT count(mk.id) jumlah FROM
                        (SELECT * FROM
                        (SELECT hm.* , rj.nama nama_jabatan,rj.level
                        FROM h_mutasi hm 
                        JOIN r_jabatan rj ON rj.id = hm.r_jabatan_id 
                        WHERE hm.is_aktif=1
                        ORDER BY hm.m_karyawan_id, hm.id DESC) x
                        GROUP BY x.m_karyawan_id) y
                        JOIN m_karyawan mk ON mk.id=y.m_karyawan_id
                        JOIN r_jenis_kelamin rjk ON rjk.id=mk.r_jenis_kelamin_id
                        GROUP BY rjk.id,y.level 
                        WHERE rjk.id=$jenis_kelamin_id AND y.level=$level_jabatan_id")->row();

        if (empty($query)) {
            return 0;
        }

        return (int) $query->jumlah;
    }

    public function _get_direktorat($data)
    {
        // direktorat
        if ($data['r_jenis_organisasi_id'] == 1) {
            return 'NON DIREKTORAT';
        } else {
            $counter = 0;
            for ($i = 1; $i <= 5; ++$i) {
                if ($data['l' . $i] == 2) {
                    return $data['o' . $i];
                    $counter += 1;
                }
            }
            if ($counter == 0) {
                return 'NON DIREKTORAT';
            }
        }
    }

    public function _get_subdirektorat($data)
    {
        for ($i = 1; $i <= 5; ++$i) {
            if ($data['l' . $i] == 3) {
                return $data['o' . $i];
            }
        }
    }

    public function _get_subunit($data)
    {
        for ($i = 1; $i <= 5; ++$i) {
            if ($data['l' . $i] == 4) {
                return $data['o' . $i];
            }
        }
    }

    public function _get_bagian($data)
    {
        for ($i = 1; $i <= 5; ++$i) {
            if ($data['l' . $i] == 5) {
                return $data['o' . $i];
            }
        }
    }

    function get_karyawan_by_id($id)
    {
        $this->db->select('mk.*,v.nama_direktorat,v.nama_subdit')
            ->from('m_karyawan mk')
            ->join('r_status_karyawan sk', 'sk.id = mk.r_status_karyawan_id', 'left')
            ->join('(select * from h_mutasi where is_aktif = 1 group by m_karyawan_id) m', 'm.m_karyawan_id = mk.id', 'left')
            ->join('(select r_lokasi_kerja.nama, r_lokasi_kerja.alamat,h_lokasi_kerja.m_karyawan_id  from h_lokasi_kerja join r_lokasi_kerja on r_lokasi_kerja.id = h_lokasi_kerja.r_lokasi_kerja_id where is_aktif = 1 ) lokker', 'lokker.m_karyawan_id = mk.id', 'left')
            ->join('r_jabatan jab', 'jab.id = m.r_jabatan_id', 'left')
            ->join('(select mo.id,(CASE WHEN(mo.level = 3) THEN vo.o4 ELSE(
                                CASE WHEN(mo.level = 4) THEN vo.o3 ELSE(
                                    CASE WHEN(mo.level = 5) THEN vo.o2 ELSE vo.o5
                                END)END)END) AS nama_direktorat,
                            (CASE WHEN(mo.level = 3) THEN vo.o5 ELSE(
                                CASE WHEN(mo.level = 4) THEN vo.o4 ELSE(
                                    CASE WHEN(mo.level = 5) THEN vo.o3 ELSE vo.o2
                                END)END)END) AS nama_subdit 
                        from m_organisasi mo 
                        join v_organisasi vo ON vo.id = mo.id) v', 'v.id = m.m_organisasi_id', 'left')
            ->WHERE('mk.id', $id);
        return $this->db->get()->row_array();
    }

    public function get_karyawan_aktif_fte()
    {
        $this->db->select('m.id, m.nik_tg nik, m.nama, m.tpt_lahir tempat_lahir, m.tgl_lahir tanggal_lahir,
                    ag.nama agama, jk.nama jenis_kelamin, sk.nama status_karyawan, jab.jabatan, p.nama pendidikan_terakhir,
                    p.jurusan, p.nama_instansi_pendidikan, m.tgl_masuk tanggal_masuk, vkk.email, vkk.handphone, j.level,
                    o1, l1, o2, l2, o3, l3, o4, l4, o5, l5, rk.nama lokasi_penempatan, m.no_rek nomor_rekening,
                    org.r_jenis_organisasi_id, b.nama bank, c.nama_kompetensi, c.kinerja, c.nilai, rtg.nama asal_telkom_group,
                    psg.tgl_nikah tanggal_nikah,mkv.url_kk');
        $this->db->from('m_karyawan m');
        $this->db->join('m_karyawan_validasi mkv', 'mkv.m_karyawan_id = m.id', 'LEFT');
        $this->db->join('r_agama ag', 'ag.id = m.r_agama_id', 'LEFT');
        $this->db->join('r_jenis_kelamin jk', 'jk.id = m.r_jenis_kelamin_id', 'LEFT');
        $this->db->join('r_status_karyawan sk', 'sk.id = m.r_status_karyawan_id', 'LEFT');
        $this->db->join('r_bank b', 'b.id = m.r_bank_id', 'LEFT');
        $this->db->join('(SELECT id, m_organisasi_id, r_jabatan_id, m_karyawan_id FROM h_mutasi WHERE id IN 
                 (SELECT MAX(id) FROM h_mutasi WHERE is_aktif = 1 GROUP BY m_karyawan_id)) hm', 'hm.m_karyawan_id = m.id', 'LEFT');
        $this->db->join('v_organisasi org', 'org.id = hm.m_organisasi_id', 'LEFT');
        $this->db->join('r_jabatan j', 'j.id = hm.r_jabatan_id', 'LEFT');
        $this->db->join('(SELECT m_karyawan_id, GROUP_CONCAT(r_jabatan.nama) jabatan FROM h_mutasi 
                 JOIN r_jabatan ON h_mutasi.r_jabatan_id = r_jabatan.id 
                 WHERE h_mutasi.is_aktif = 1 GROUP BY h_mutasi.m_karyawan_id) jab', 'jab.m_karyawan_id = m.id', 'LEFT');
        $this->db->join('(SELECT hlk.m_karyawan_id, GROUP_CONCAT(rlk.nama) nama FROM h_lokasi_kerja hlk
                 JOIN r_lokasi_kerja rlk ON hlk.r_lokasi_kerja_id = rlk.id 
                 WHERE hlk.is_aktif = 1 GROUP BY hlk.m_karyawan_id) rk', 'rk.m_karyawan_id = m.id', 'LEFT');
        $this->db->join('v_kontak_karyawan_aktif vkk', 'vkk.m_karyawan_id = m.id', 'LEFT');
        $this->db->join('(SELECT * FROM (SELECT hp.*, rjp.nama, rip.nama nama_instansi_pendidikan
                 FROM h_pendidikan hp 
                 JOIN r_jenjang_pendidikan rjp ON rjp.id = hp.r_jenjang_pendidikan_id
                 JOIN r_instansi_pendidikan rip ON rip.id = hp.r_instansi_pendidikan_id 
                 ORDER BY hp.m_karyawan_id, hp.tahun_lulus DESC) x 
                 GROUP BY x.m_karyawan_id) AS p', 'p.m_karyawan_id = m.id', 'LEFT');
        $this->db->join('(SELECT * FROM (SELECT kk.*, pk.tahun, kkp.nama nama_kompetensi
                 FROM `h_kinerja_karyawan` kk
                 JOIN r_periode_kinerja pk ON pk.id = kk.r_periode_kinerja_id
                 JOIN r_kinerja_kompetensi kkp ON kkp.id = kk.r_kinerja_kompetensi_id
                 ORDER BY pk.tahun DESC, pk.tst_periode DESC) x
                 GROUP BY x.m_karyawan_id) AS c', 'c.m_karyawan_id = m.id', 'LEFT');
        $this->db->join('r_telkom_group rtg', 'm.r_telkom_group_id = rtg.id', 'LEFT');
        $this->db->join('h_pasangan psg', 'm.id = psg.m_karyawan_id', 'LEFT');
        $this->db->where('m.is_aktif', 1);
        $this->db->where_in('m.r_status_karyawan_id', array(2, 4, 5));
        $this->db->order_by('m.nama');
        $query = $this->db->get();
        $result = $query->result_array();

        for ($j = 0; $j < count($result); ++$j) {
            $result[$j]['direktorat'] = $this->_get_direktorat($result[$j]);
            $result[$j]['subdirektorat'] = $this->_get_subdirektorat($result[$j]);
            $result[$j]['subunit'] = $this->_get_subunit($result[$j]);
            $result[$j]['bagian'] = $this->_get_bagian($result[$j]);
        }

        return $result;
    }

    public function ajax_get_subdit($direktoratId){
        $this->db->select('id, o5 as name');
        $this->db->from('v_organisasi');
        $this->db->where('l5', 3);
        $this->db->where('i4', $direktoratId);

        $query = $this->db->get();
        $result = $query->result();

        return $result;

    }
}
