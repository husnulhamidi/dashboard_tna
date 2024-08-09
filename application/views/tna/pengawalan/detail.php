<section class="content">
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            <div class="nav-tabs-custom-aqua">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo $title;?></h3>
                    </div>
                    <input type="hidden" name="id" id="ids" value=<?php echo $detail->id;?> >
                    <input type="hidden" name="urutan" id="urutans" value="<?php echo $detail->urutan;?>" >
                    <div class="box-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-md-3">ID TNA</label>
                                    <div class="col-md-7"><b>: <?php echo $detail->code_tna;?></b></div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Nama Karyawan</label>
                                    <div class="col-md-7"><b>: <?php echo $detail->nik;?> | <?php echo $detail->nama_karyawan;?> <?php if($detail->internal_sharing != null) { echo " (Pemateri) "; } ?></b></div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Status Karyawan</label>
                                    <div class="col-md-7"><b>: <?php echo $detail->status_karyawan;?></b></div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Direktorat</label>
                                    <div class="col-md-7"><b>: <?php echo $detail->direktorat_name;?></b></div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Subunit /Unit</label>
                                    <div class="col-md-7"><b>: <?php echo $detail->nama_organisasi;?></b></div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Nama Atasan</label>
                                    <div class="col-md-7"><b>: <?php echo $detail->verifikator_nik;?> | <?php echo $detail->verifikator_name;?></b></div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Nama Pelatihan</label>
                                    <div class="col-md-7"><b>: <?php echo $detail->nama_kegiatan;?></b></div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Jenis Development</label>
                                    <?php
                                        $tipe = '';
                                        if($detail->jenis_development == 'Sertifikasi'){
                                            if($detail->jenis_sertifikasi == 'INTL'){
                                                $tipe = '( Internasional )';
                                            } else {
                                                $tipe = '( Nasional )';
                                            }
                                        }
                                    ?>
                                    <div class="col-md-7"><b>: <?php echo $detail->jenis_development;?> <?php echo $tipe;?> </b></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-md-3">Jenis Pelatihan</label>
                                    <div class="col-md-7"><b>: <?php echo $detail->jenis_pelatihan;?></b></div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Kompetensi</label>
                                    <div class="col-md-7"><b>: <?php echo $detail->r_tna_kompetensi_name;?></b></div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Kompetensi tsat</label>
                                    <div class="col-md-7"><b>: <?php echo $detail->r_tna_kompetensi_name_tsat;?></b></div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Nama Penyelenggara</label>
                                    <div class="col-md-7"><b>: <?php echo $detail->nama_penyelenggara;?></b></div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Metode Pembelajaran</label>
                                    <div class="col-md-7"><b>: <?php echo $detail->metoda_pembelajaran;?></b></div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Estimasi Biaya</label>
                                    <div class="col-md-7"><b>: <?php echo number_format($detail->estimasi_biaya);?></b></div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Justifikasi Pengajuan</label>
                                    <div class="col-md-7"><b>: <?php echo $detail->justifikasi_pengajuan;?></b></div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Waktu Pelaksanaan</label>
                                    <div class="col-md-7">
                                        <b>: <?php echo date('d M Y', strtotime($detail->waktu_pelaksanaan_mulai)) ;?> s/d <?php echo date('d M Y', strtotime($detail->waktu_pelaksanaan_selesai)) ;?> </b>
                                        <button onclick="showModalEditTgl(`<?php echo $detail->id ?>`,`<?php echo $detail->waktu_pelaksanaan_mulai ?>`,`<?php echo $detail->waktu_pelaksanaan_selesai ?>`,`<?php echo $detail->alasan_update_waktu_pelaksanaan ?>`)" class="btn btn-xs btn-primary" title="Edit">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="padding-top: 10px"><hr></div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="header" style="font-size: 24px; font-weight: 700; margin-bottom: 30px; color: #333;">
                                    Verifikasi
                                </div>
                                <hr>
                                <label style="font-size: 16px; font-weight: 600; color: #555;">Status Verifikasi</label>
                                <div class="status-verifikasi" style="margin-top: 10px;">
                                    <?php
                                        if ($detail->urutan == 1) {
                                            $status_proses = "";
                                            for ($i = 1; $i < 13; $i++) {
                                                $status_proses .= "<i class='fa fa-circle-o text-muted fa-2x'></i> ";
                                            }
                                        } else {
                                            $verified = "";
                                            for ($i = 1; $i < $detail->urutan - 1; $i++) {
                                                $verified .= "<i class='fa fa-check-circle text-success fa-2x'></i> ";
                                            }

                                            for ($x = $detail->urutan - 1; $x < 13; $x++) {
                                                $verified .= "<i class='fa fa-circle-o text-muted fa-2x'></i> ";
                                            }

                                            $status_proses = $verified;
                                        }

                                        echo $status_proses;
                                    ?>
                                    <?php
                                        $statusMapping = array(
                                            'Verifikasi Mgr.Lini' => 'Menunggu Verifikasi Mgr.Lini',
                                            'Verifikasi Manager HCPD' => 'Menunggu Verifikasi Manager HCPD',
                                            'Verifikasi AVP HCM' => 'Menunggu Verifikasi AVP HCM',
                                            'Form Pernyataan Peserta' => 'Menunggu Form Pernyataan Peserta',
                                            'Pembayaran' => 'Menunggu Pembayaran',
                                            'Jadwal Pelaksanaan (Konfirmasi Kuota)' => 'Konfirmasi Kuota',
                                            'Kelengkapan Dokumen' => 'Proses Kelengkapan Dokumen',
                                            'Internal Sharing' => 'Menunggu Internal Sharing',
                                            'Evaluasi' => 'Menunggu Penilaian Evaluasi Training'
                                        );

                                        $respon = isset($statusMapping[$detail->status_urutan]) ? $statusMapping[$detail->status_urutan] : $detail->status_urutan;
                                    ?>

                                    <div class="status-text" style="font-size: 16px; color: #666; margin-top: 10px;">
                                        <?php echo $respon; ?>
                                    </div>
                                </div>
                                <div class="buttons" style="padding-top:10px">
                                    <!-- <button class="btn btn-primary">
                                        Verifikasi
                                    </button> -->
                                    <?php
                                        $params = sprintf(
                                            "'%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s'",
                                            $detail->id,
                                            $detail->tahapan_id,
                                            $detail->urutan,
                                            addslashes($detail->nama_karyawan),
                                            addslashes($detail->nama_penyelenggara),
                                            addslashes($detail->training),
                                            addslashes($detail->nik),
                                            addslashes($detail->nama_organisasi),
                                            addslashes($detail->estimasi_biaya)
                                        );

                                        
                                        if ($detail->urutan > 1 && $detail->urutan < 5) {
                                            echo '<a 
                                                    href="#"
                                                    class="btn btn-primary"
                                                    onclick="verifikasi(
                                                        \'' . $detail->status_urutan . '\',
                                                        \'' . $detail->urutan . '\',
                                                        \'' . $detail->id . '\',
                                                        \'' . $detail->tahapan_id . '\'
                                                    ); return false;"
                                                >
                                                    Verifikasi
                                                </a>';
                                        }

                                        
                                        if ($detail->urutan == 5) {
                                            echo '<a 
                                                    class="btn btn-primary"
                                                    onclick="paktaIntegritas(' . $params . ')"> Pakta Integritas
                                                </a>';
                                        }

                                        if ($detail->urutan == 6) {
                                            echo '<a 
                                                    class="btn btn-primary"
                                                    onclick="konfirmasiJadwal(' . $params . ')"> Konfirmasi Jadwal
                                                </a>';
                                        }

                                        if ($detail->urutan == 7) {
                                            echo '<a 
                                                    class="btn btn-primary"
                                                    onclick="kelengkapanDokumen(' . $params . ')"> Kelengkapan Dokumen
                                                </a>';
                                        }

                                        if ($detail->urutan == 8) {
                                            echo '<a 
                                                    class="btn btn-primary"
                                                    onclick="notaDinasPenugasan(' . $params . ')"> Nota Dinas Penugasan
                                                </a>';
                                        }

                                        if ($detail->urutan == 9) {
                                            echo '<a 
                                                    class="btn btn-primary"
                                                    onclick="uploadPembayaran(' . $params . ')"> Pembayaran
                                                </a>';
                                        }

                                        if ($detail->urutan == 10) {
                                            echo '<a 
                                                    class="btn btn-primary"
                                                    onclick="uploadSertifikat(' . $params . ')"> Upload Sertifikat
                                                </a>';
                                        }
                                        if ($detail->urutan == 10) {
                                            echo '<a 
                                                    class="btn btn-primary"
                                                    onclick="uploadMateri(' . $params . ')"> Upload Materi
                                                </a>';
                                        }

                                        if ($detail->urutan == 12 || $detail->urutan == 13 || $detail->urutan == 14 ) {
                                            if($detail->internal_sharing == null){
                                                echo '<a 
                                                        class="btn btn-primary"
                                                        onclick="internalSharing(' . $params . ', \'' . $detail->id_karyawan . '\', \'' . $detail->id_organisasi . '\')"> Jadwal Internal Sharing
                                                    </a>';
                                            }
                                            if($detail->is_evaluasi == 0){
                                                echo '<a 
                                                        class="btn btn-primary"
                                                        onclick="evaluasi(' . $params . ', \'' . $detail->is_complete . '\', \'' . $detail->waktu_pelaksanaan . '\')"> Evaluasi
                                                    </a>';
                                            }
                                        }
                                    ?>

                                    
                                </div>
                            </div>
                        </div>

                        <div class="row" style="padding-top: 10px"><hr></div>

                        <div class="row" >
                            <div class="col-md-12">
                                <ul class="nav nav-tabs">
                                    <?php $this->load->view('tna/pengawalan/detail_header_tab');?>
                                    
                                </ul>  
                            </div>
                        </div>
                        
                        <div class="col-md-12" style="padding-bottom: 10px"></div>
                        <?php
                            if($active_tab == 'dokumen'){
                                $this->load->view('tna/pengawalan/tabs/detail_dokumen');
                            }
                            if($active_tab == 'riwayat_verifikasi'){
                                $this->load->view('tna/pengawalan/tabs/riwayat_verifikasi');
                            }
                            if($active_tab == 'pembayaran'){
                                $this->load->view('tna/pengawalan/tabs/pembayaran');
                            }
                            if($active_tab == 'materi'){
                                $this->load->view('tna/pengawalan/tabs/materi');
                            }
                            if($active_tab == 'internalSharing'){
                                $this->load->view('tna/pengawalan/tabs/internalSharing');
                            }
                             if($active_tab == 'evaluasi'){
                                $this->load->view('tna/pengawalan/tabs/evaluasi');
                            }
                        ?>  
                        <div class="col-md-12" style="padding-bottom: 30px"></div>                      
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_edit_tgl');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_filter');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_verifikasi');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_konfirmasi');?>

<?php $this->load->view('tna/pengawalan/modal_popup/modal_kelengkapan_dokumen');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_pakta_integritas');?>

<?php $this->load->view('tna/pengawalan/modal_popup/modal_nota_dinas_penugasan');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_upload_pembayaran');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_upload_sertifikat');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_upload_materi');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_evaluasi');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_internal_sharing');?>

<script type="text/javascript">
    function showModalEditTgl(id, waktu_mulai, waktu_selesai, alasan){
        $('#id_edit_waktu').val(id)
        $('#waktu_awal').val(formatDate2(waktu_mulai))
        $('#waktu_akhir').val(formatDate2(waktu_selesai))
        $('#alasan').val(alasan)
        $('#modalEditTgl').modal('show')
    }

    $('#submit-edit-waktu').click(function(){
        $.ajax({
            url: base_url+"tna/pengawalan/edit_waktu",
            type: 'POST',
            dataType: "JSON",
            data: $('#form-edit-waktu').serialize(),
            success: function(response) {
                console.log(response)
                if(response.success){
                    setTimeout(function() {
                        swal({
                            title: "Notifikasi!",
                            text: "Data berhasil diubah",
                            imageUrl: img_icon_success
                        }, function(d) {
                            location.reload();
                        });
                    }, 1000);
                }else{
                    setTimeout(function() {
                        swal({
                            title: "Notifikasi!",
                            text: "Data gagal diubah",
                            imageUrl: img_icon_error
                        }, function() {
                            location.reload();
                        });
                    }, 1000);
                }
            }            
        });
    })
</script>
