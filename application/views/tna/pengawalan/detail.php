<section class="content">
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            <div class="nav-tabs-custom-aqua">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo $title;?></h3>
                    </div>
                    <div class="box-body">
                        <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                                <label class="col-md-3"> ID TNA </label>
                                <div class="col-md-9"><b>: A001 </b> </div>
                            </div>
                            
                        </div>
                        <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                                <label class="col-md-3"> Nama Karyawan (Pemateri)</label>
                                <div class="col-md-9"><b>: 12345678 | Citra Dewi </b> </div>
                            </div>
                            
                        </div>
                        <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                                <label class="col-md-3"> Subunit /Unit </label>
                                <div class="col-md-9"><b>: IT & Digital </b> </div>
                            </div>
                            
                        </div>
                        <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                                <label class="col-md-3"> Nama Pelatihan</label>
                                <div class="col-md-9"><b>: Legal Compliace </b> </div>
                            </div>
                            
                        </div>
                        <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                                <label class="col-md-3"> Jenis Development</label>
                                <div class="col-md-9"><b>: Pelatihan </b> </div>
                            </div>
                            
                        </div>
                        <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                                <label class="col-md-3"> Nama Penyelenggara</label>
                                <div class="col-md-9"><b>: Hukum Online </b> </div>
                            </div>
                            
                        </div>
                        <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                                <label class="col-md-3"> Waktu Pelaksanaan </label>
                                <div class="col-md-2"><b>: 01/11/2023 s/d 07/11/2023 </b> </div>
                                <div>
                                    <button onclick="showModalEditTgl()" class="btn btn-xs btn-primary" title="Edit">
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
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('tna/pengawalan/modal_edit_tgl');?>
<script type="text/javascript">
    $('#waktu_pelaksanaan').daterangepicker();
    function showModalEditTgl(){
        $('#modalEditTgl').modal('show')
    }
</script>
