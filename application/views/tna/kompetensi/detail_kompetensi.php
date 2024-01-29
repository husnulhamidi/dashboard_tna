<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            <?php // echo '<pre>'; print_r($this->session->userdata()); ?>

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo $title;?></h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-striped">
                                <tr><td >Job Family</td><td width="5px">:</td><td>1. DIGITAL TECHNOLOGY</td></tr>
                                <tr><td >Job Function</td><td width="5px">:</td><td>1.2 DIGITAL PLATFORM AND IT</td></tr>
                                <tr><td >Job Role</td><td width="5px">:</td><td>SOFTWARE ENGINEERING</td></tr>
                                <tr><td>Kode Kompetensi</td><td width="5px">:</td><td>KOM002</td></tr>
                                <tr><td>Kompetensi</td><td width="5px">:</td><td>IT ASSET LIFECYCLE MANAGEMENT</td></tr>
                                <tr><td>Jabatan</td><td width="5px">:</td><td>Manager IT ASSET LIFECYCLE MANAGEMENT <br>Head IT ASSET LIFECYCLE MANAGEMENT</td></tr>
                                <tr><td colspan="3"></td></tr>
                            </table>
                        </div>

                        <div class="col-md-6">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4><b>Daftar Pelatihan/Sertifikasi</b>&nbsp;&nbsp; <a data-toggle="modal" data-target="#ModalAddTraining" class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Pelatihan/Sertifikasi</a></h4>
                           
                            <table class="table table-striped">
                                <tr>
                                    <th width="20px">No.</th>
                                    <th>Nama Pelatihan</th>
                                    <th>Nama Lembaga</th>
                                    <th>Kategori Pelatihan</th></tr>
                                <tr>
                                    <td width="20px">1</td>
                                    <td>Pelatihan IT Asset Management</td>
                                    <td>LPK LCC</td>
                                    <td>Pelatihan</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Sertifikasi IT Asset Management</td>
                                    <td>Kemenaker</td>
                                    <td>Sertifikasi</td>
                                </tr>
                               
                            </table>
                        </div>
                    </div>

                </div>
            </div>

      

            
        </div>
    </div>
</section>
<?php $this->load->view('tna/kompetensi/modal_form_training');?>
