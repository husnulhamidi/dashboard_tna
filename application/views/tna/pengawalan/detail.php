<section class="content">
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            <div class="nav-tabs-custom-aqua">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo $title;?></h3>
                    </div>
                    <input type="hidden" name="id" id="id" value=<?php echo $detail->id;?> >
                    <input type="hidden" name="urutan" id="urutan" value="<?php echo $detail->urutan;?>" >
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
                    if($detail->jenis_Sertifikasi == 'INTL'){
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





                        <div class="row" style="padding-top: 10px">
                            <hr>
                        </div>

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
