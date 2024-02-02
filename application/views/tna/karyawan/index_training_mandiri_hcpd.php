<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            <?php // echo '<pre>'; print_r($this->session->userdata()); ?>

            <div class="nav-tabs-custom-aqua">
                <div class="box box-info">
                    
                    <div class="box-header with-border">
                        <div class="col-lg-6">
                            <h3 class="box-title" style="padding-top:5px"><?php echo $title;?></h3>
                        </div>
                        <div class="col-lg-6 ">
                            
                            <div class="pull-right">
                               
                            </div>
                        </div>
                    </div>
                   

                </div>

                <div class="tab-content"  >
                     
                    <div class="tab-pane active">

                       
                        <div class="row">
                            <div class="col-md-12">
                            <div class="table-responsive">
                                <table  class="table table-striped table-bordered table-hover" id="table-training-mandiri-admin" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap text-center">No</th>
                                            <th class="text-nowrap text-center">Nama Karyawan</th>
                                            <th class="text-nowrap text-center">Subdit/Unit</th>
                                            <th class="text-nowrap text-center">Status Karyawan</th>
                                            <th class="text-nowrap text-center">Kompetensi</th>
                                            
                                            <th class="text-nowrap text-center">Nama Pelatihan</th>
                                            <th class="text-nowrap text-center">Kategori Pelatihan</th>
                                            <th class="text-nowrap text-center">Metode Pembelajaran</th>
                                            <th class="text-nowrap text-center">Nama Penyelenggara</th>
                                            <th class="text-nowrap text-center">Biaya</th>
                                           
                                            <th class="text-nowrap text-center">Waktu Pelaksanaan</th>
                                            <th class="text-nowrap text-center">Justifikasi Pengajuan</th>
                                            <th class="text-nowrap text-center">Status</th>
                                        </tr>
                                    </thead>
                                    
                                </table>
                            </div>
                            </div>
                        </div>                       
                    </div>
                </div>
                <!-- /.tab-content -->
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('tna/karyawan/modal_view_alasan');?>
<?php $this->load->view('tna/karyawan/modal_form_keterangan');?>




