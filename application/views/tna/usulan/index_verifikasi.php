<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            <?php // echo '<pre>'; print_r($this->session->userdata()); ?>
            
            <div class="row">
                <div class="col-lg-2 col-4">
                    <!-- small card -->
                    <div class="small-box bg-primary">
                        <div class="inner text-center">
                            <h3 center>3</h3>
                            <p>Draft</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-4">
                    <!-- small card -->
                    <div class="small-box bg-primary">
                        <div class="inner text-center">
                            <h3>1</h3>
                            <p>Mgr.Lini</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-4">
                    <!-- small card -->
                    <div class="small-box bg-primary">
                        <div class="inner text-center">
                            <h3>5</h3>
                            <p>Admin HCPD</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-4">
                    <!-- small card -->
                    <div class="small-box bg-primary">
                        <div class="inner text-center">
                            <h3>5</h3>
                            <p>Mgr. HCPD</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-4">
                    <!-- small card -->
                    <div class="small-box bg-primary">
                        <div class="inner text-center">
                            <h3>3</h3>
                            <p>AVP HCPD</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-4">
                    <!-- small card -->
                    <div class="small-box bg-primary">
                        <div class="inner text-center">
                            <h3>5</h3>
                            <p>VP HCPD</p>
                        </div>
                    </div>
                </div>
            </div>
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
                                <a href ="<?php echo base_url('tna/usulan/create'); ?>"><button class="btn btn-info btn-sm">
                                        <i class="glyphicon glyphicon-plus"></i> Tambah Data
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
                                <table  class="table table-striped table-bordered table-hover" id="table-node" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <!-- <th width="7%">No</th> -->
                                            <th>ID TNA</th>
                                            <th>Nama Karyawan</th>
                                            <th>Subdit/Unit</th>
                                            <th>Status Karyawan</th>
                                            <th>Kompetensi</th>
                                            <th>Jenis Dev. Karyawan</th>
                                            <th>Pelatihan/Sertifikasi</th>
                                            <th>Justifikasi Pengajuan</th>
                                            <th>Metode Pembelajaran</th>
                                            <th>Estimasi Biaya</th>
                                            <th>Nama Penyelenggara</th>
                                            <th>Waktu Pelaksanaan</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                    
                                       

                                        <tr>
                                            <td>P0002001</td>
                                            <td>86744666-Firman</td>
                                            <td>IT & Development</td>
                                            <td>FTE</td>
                                            <td>Busines Enabler</td>
                                            <td>Pelatihan</td>
                                            <td>Scrum Master</td>
                                            <td>-</td>
                                            <td>Online</td>
                                            <td>Rp.1.000.000</td>
                                            <td>Guruku</td>
                                            <td>Mei 2023</td>
                                            <td>
                                                Menunggu verifikasi Mgr.Lini <br>
                                                <i class="fa fa-check-circle text-success"></i>
                                                <i class="fa fa-circle-o"></i>
                                                <i class="fa fa-circle-o"></i>
                                                <i class="fa fa-circle-o"></i>
                                               
                                                <!-- <i class="fa fa-check-circle-o"></i>
                                                <i class="fa fa-check-circle-o"></i>
                                                <i class="fa fa-check-circle-o"></i>
                                                <i class="fa fa-check-circle-o"></i>
                                                <i class="fa fa-check-circle-o"></i>
                                                <i class="fa fa-check-circle-o"></i> -->

                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                <button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle" data-toggle="dropdown" style="width: 80px;">
                                                    Action  <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a data-toggle="modal" data-target="#ModalVerifikasi" > Verifikasi</a></li>
                                                    <li><a >Riwayat </a></li>
                                                </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        
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
<?php $this->load->view('tna/usulan/modal_form_verifikasi');?>
