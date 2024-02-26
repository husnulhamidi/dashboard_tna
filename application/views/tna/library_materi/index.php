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
                                <button class="btn btn-default btn-sm" data-toggle='modal' data-target='#AddFilterLibraryMateri'>
                                    <i class="glyphicon glyphicon-filter"></i> Filter
                                </button>
                            </div>
                        </div>
                    </div>
                   

                </div>

                <div class="tab-content"  >
                     
                    <div class="tab-pane active">

                       
                        <div class="row">
                            <div class="col-md-12">
                                <table  class="table table-striped table-bordered table-hover" id="table-library-materi" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="7%" class="text-center">No.</th>
                                            <th width="20%" class="text-center">Nama Pelatihan/Sertifikasi</th>
                                            <th class="text-center">Kompetensi</th>
                                            <th class="text-center">Penyelenggara</th>
                                            <th class="text-center">Tahun</th>
                                            <th class="text-center">Jenis</th>
                                            <th class="text-center">File</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    </tbody>
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
