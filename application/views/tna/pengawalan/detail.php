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
                        <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                                <label class="col-md-3"> ID TNA </label>
                                <div class="col-md-9"><b>: <?php echo $detail->code_tna;?> </b> </div>
                            </div>
                            
                        </div>
                        <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                                <label class="col-md-3"> 
                                    Nama Karyawan
                                    <?php
                                        if($detail->internal_sharing != null){
                                            echo " (Pemateri) ";
                                        }
                                    ?>
                                </label>
                                <div class="col-md-9"><b>: <?php echo $detail->nik;?> | <?php echo $detail->nama_karyawan;?> </b> </div>
                            </div>
                            
                        </div>
                        <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                                <label class="col-md-3"> Subunit /Unit </label>
                                <div class="col-md-9"><b>: <?php echo $detail->nama_organisasi;?> </b> </div>
                            </div>
                            
                        </div>
                        <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                                <label class="col-md-3"> Nama Pelatihan</label>
                                <div class="col-md-9"><b>: <?php echo $detail->training;?> </b> </div>
                            </div>
                            
                        </div>
                        <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                                <label class="col-md-3"> Jenis Development</label>
                                <div class="col-md-9"><b>: <?php echo $detail->jenis_development;?> </b> </div>
                            </div>
                            
                        </div>
                        <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                                <label class="col-md-3"> Nama Penyelenggara</label>
                                <div class="col-md-9"><b>: <?php echo $detail->nama_penyelenggara;?> </b> </div>
                            </div>
                            
                        </div>
                        <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                                <label class="col-md-3"> Waktu Pelaksanaan </label>
                                <div class="col-md-2"><b>: <?php echo date('d M Y', strtotime($detail->waktu_pelaksanaan)) ;?> </b> </div>
                                <div>
                                    <button onclick="showModalEditTgl(`<?php echo $detail->id ?>`,`<?php echo $detail->waktu_pelaksanaan ?>`)" class="btn btn-xs btn-primary" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </button>
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
    function showModalEditTgl(id, waktu){
        $('#id_edit_waktu').val(id)
        $('#waktu_awal').val(formatDate2(waktu))
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
