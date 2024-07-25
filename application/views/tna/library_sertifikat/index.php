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
                        <!-- <div class="col-lg-6 ">
                            <div class="pull-right">
                                <button class="btn btn-default btn-sm" data-toggle='modal' data-target='#AddFilterLibraryMateri'>
                                    <i class="glyphicon glyphicon-filter"></i> Filter
                                </button>
                            </div>
                        </div> -->
                    </div>
                   

                </div>

                <div class="tab-content"  >
                     
                    <div class="tab-pane active">

                       
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-sertif">
                                    <thead>
                                        <tr>
                                            <th class="text-center" rowspan="2">No</th>
                                            <th class="text-center" rowspan="2">Nama Sertifikat</th>
                                            <th class="text-center" rowspan="2">Nama Karyawan</th>
                                            <th class="text-center" rowspan="2">Subdit</th>
                                            <th class="text-center" colspan="2">Berlaku Sertifikat</th>
                                            <th class="text-center" rowspan="2">Sertifik No</th>
                                            <th class="text-center" rowspan="2">Lembaga</th>
                                            <th class="text-center" rowspan="2">Aksi</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center">Mulai</th>
                                            <th class="text-center">Berakhir</th>
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
<?php $this->load->view('tna/library_materi/modal_filter');?>
