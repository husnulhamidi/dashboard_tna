<style type="text/css">
    .dropdown-menu {
        left: auto;
        right: 0
    }
</style>
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
                            <h3 class="box-title" style="padding-top:5px"><?php echo $title;?>  </h3>
                        </div>
                        <!-- <div class="col-lg-6 ">
                            <div class="pull-right">
                                <button class="btn btn-default btn-sm"  style="padding-right: 20px;padding-left: 20px;">
                                    <i class="fa fa-download"></i> Export
                                </button>
                            </div>
                        </div> -->
                    </div>
                </div>
                <input type="hidden" id="type" value="<?php echo $type ?>";>
                <input type="hidden" id="quartal" value="<?php echo $quartal ?>";>
                <input type="hidden" id="thn" value="<?php echo $thn ?>";>
                <div class="tab-content"  >
                    <div class="tab-pane active">
                        <div class="row">
                            <div class="col-md-12">
                                <table  class="table table-striped table-bordered table-hover" id="tbl-internal-sharing" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="7%" class="text-center">No.</th>
                                            <th class="text-nowrap text-center">Judul Materi</th>
                                            <!-- <th class="text-nowrap text-center">Materi</th> -->
                                            <th class="text-nowrap text-center">Kompetensi</th>
                                            <th class="text-nowrap text-center">Nara Sumber</th>
                                            <th class="text-nowrap text-center">Subdit/Unit</th>
                                            <th class="text-nowrap text-center">Tanggal</th>
                                            <th class="text-nowrap text-center">Waktu</th>
                                            <th class="text-nowrap text-center">Tempat</th>
                                            <th class="text-nowrap text-center">Biaya</th>
                                            <th class="text-nowrap text-center">Ket</th>
                                            <th class="text-nowrap text-center">Jumlah Peserta</th>
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
