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
                                <a data-toggle='modal' data-target='#modalFilter'> 
                                    <button class="btn btn-grey btn-sm">
                                        <i class="fa fa-filter"></i> Filter
                                    </button>
                                </a>
                                <button class="btn btn-danger btn-sm btn-reset">
                                    <i class="fa fa-repeat"></i> Reset
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-content"  >
                    <div class="tab-pane active">
                        <div class="row">
                            <div class="col-md-12">
                                <table  class="table table-striped table-bordered table-hover" id="table-evaluasi" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center text-nowrap">Info</th>
                                            <th class="text-center text-nowrap">ID TNA</th>
                                            <th class="text-center text-nowrap">Nama Karyawan</th>
                                            <th class="text-center text-nowrap">Subdit/Unit</th>
                                            <th class="text-center text-nowrap">Status Karyawan</th>
                                            <th class="text-center text-nowrap">Kompetensi</th>
                                            <th class="text-center text-nowrap">Jenis Dev. Karyawan</th>
                                            <th class="text-center text-nowrap">Pelatihan/Sertifikasi</th>
                                            <th class="text-center text-nowrap">Justifikasi Pengajuan</th>
                                            <th class="text-center text-nowrap">Metode Pembelajaran</th>
                                            <th class="text-center text-nowrap">Estimasi Biaya</th>
                                            <th class="text-center text-nowrap">Nama Penyelenggara</th>
                                            <th class="text-center text-nowrap">Waktu Pelaksanaan</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- /.tab-content -->
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_filter');?>