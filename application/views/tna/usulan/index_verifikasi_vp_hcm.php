<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            <?php // echo '<pre>'; print_r($this->session->userdata()); ?>
            
            <?php $this->load->view('tna/usulan/view_dashlet');?>

            <div class="nav-tabs-custom-aqua">
                <div class="box box-info">
                    
                    <div class="box-header with-border">
                    
                        <div class="col-lg-12">
                        <ul class="nav nav-tabs">
                            <?php $this->load->view('tna/usulan/header_tab');?>
                            <div class="pull-right">
                               
                                <a data-toggle='modal' data-target='#upload_excel_node'> 
                                    <button class="btn btn-grey btn-sm">
                                        <i class="fa fa-filter"></i> Filter
                                    </button>
                                </a>
                                
                                <a href ="javascript:;" class="btn_download_usulan_vp_hcm"><button class="btn bg-navy btn-sm">
                                        <i class="glyphicon glyphicon-download"></i> Download Usulan
                                    </button>
                                </a>
                                  
                                <a data-toggle="modal" data-target="#ModalUploadVerifikasiVP"><button class="btn bg-olive btn-sm">
                                        <i class="glyphicon glyphicon-upload"></i> Upload Usulan
                                    </button>
                                </a>
                               
                            </div>
                        </ul>
                            
                        </div>
                    </div>
                   

                </div>

                <div class="tab-content"  >
                     
                    <div class="tab-pane active">

                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                <table  class="table table-striped table-bordered table-hover" id="table-tab-verifikasi-vp-hcm" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <!-- <th width="7%">No</th> -->
                                            <th>Action</th>
                                            <th>Status</th>
                                            <th>ID TNA</th>
                                            <th>Nama Karyawan</th>
                                            <th>Subdit/Unit</th>
                                            <th>TNA</th>
                                            <th>Jenis Pelatihan/Sertifikasi</th>
                                            <th>Kompetensi</th>
                                            <th>Jenis Dev. Karyawan</th>
                                            <th>Justifikasi Pengajuan</th>
                                            <th>Metode Pembelajaran</th>
                                            <th>Estimasi Biaya</th>
                                            <th>Status Karyawan</th>
                                            <th>Nama Penyelenggara</th>
                                            <th>Waktu Pelaksanaan</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                    
                                    

                                        
                                    </tbody>
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
    <!-- Modal -->
    <div class="modal fade" id="riwayat-modal" tabindex="-1" role="dialog" aria-hidden="true" enctype="multipart/form-data">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            </div> <!-- /.modal-content -->
        </div> <!-- /.modal-dialog -->
    </div> <!-- /.modal -->
</section>
<?php $this->load->view('tna/usulan/modal_form_upload_verifikasi_vp');?>
