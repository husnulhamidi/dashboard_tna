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
                                <a href ="<?php echo base_url('tna/training-mandiri/create'); ?>"><button class="btn btn-info btn-sm">
                                        <i class="glyphicon glyphicon-plus"></i> Tambah Data
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                   

                </div>

                <div class="tab-content"  >
                     
                    <div class="tab-pane active">

                       
                        <div class="row">
                            <div class="col-md-12">
                            <div class="table-responsive">
                                <table  class="table table-striped table-bordered table-hover" id="table-training-mandiri" cellspacing="0" width="100%">
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
                                            <th class="text-nowrap text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                  
                                    <!-- <tr>
                                            <td>S0001001</td>
                                            <td>86744666-Firman</td>
                                            <td>IT & Development</td>
                                            <td>FTE</td>
                                            <td>Busines Enabler</td>
                                            
                                            <td>CTNA</td>
                                            <td>Sertifikasi</td>
                                            <td>Offline</td>
                                            <td>Gajayana</td>
                                            <td>Rp.2.000.000</td>
                                           
                                            <td>Februari 2023</td>
                                            <td>-</td>
                                            <td>
                                                <span class="label label-warning"><i class="fa fa-lock"></i> Pending</span>

                                            </td>
                                          
                                           
                                            <td class="text-center">
                                                <button data-toggle="tooltip" data-placement="bottom" title="edit" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button>&nbsp;
                                                <button data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger btn-xs hapus-bank" value='.$id_bank.'><i class="fa fa-trash"></i></button>&nbsp;
                                            </td>
                                            
                                        </tr> 
                                        <tr>
                                            <td>P0002001</td>
                                            <td>86744666-Firman</td>
                                            <td>IT & Development</td>
                                            <td>FTE</td>
                                            <td>Busines Enabler</td>
                                           
                                            <td>Scrum Master</td>
                                            <td>Pelatihan</td>
                                            <td>Online</td>
                                            <td>Guruku</td>
                                            <td>Rp.1.000.000</td>
                                            
                                            <td>Mei 2023</td>
                                            <td>-</td>
                                            <td>
                                                <span class="label label-success"><i class="fa fa-check"></i> Approved</span>

                                            </td>
                                            
                                            <td>
                                                
                                            </td>
                                        </tr>  
                                        <tr>
                                            <td>P0002002</td>
                                            <td>86744666-Firman</td>
                                            <td>IT & Development</td>
                                            <td>FTE</td>
                                            <td>Busines Enabler</td>
                                           
                                            <td>Vue jS Mastering</td>
                                            <td>Pelatihan</td>
                                            <td>Online</td>
                                            <td>Guruku</td>
                                            <td>Rp.500.000</td>
                                            
                                            <td>Mei 2023</td>
                                            <td>-</td>
                                            <td>
                                                <span class="label label-danger"><i class="fa fa-close"></i> Rejected</span>
                                                <a class="approve_invoice" id="11&amp;0" data-toggle="tooltip" title="" data-original-title="Klik lihat alasan">
                                                    <button class="btn btn-default btn-xs" data-toggle="modal" data-target="#ModalViewAlasan"><i class="fa fa-eye"></i> Lihat Ket. </button>
                                                </a>
                                            </td>
                                            
                                            <td class="text-center">
                                                <button data-toggle="tooltip" data-placement="bottom" title="edit" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button>&nbsp;
                                                <button data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger btn-xs hapus-bank" value='.$id_bank.'><i class="fa fa-trash"></i></button>&nbsp;
                                            </td>
                                        </tr>      
                                    -->
                                    
                                   
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
</section>
<script type="text/javascript">
    var url = '<?php echo base_url('tna/training-mandiri/edit');?>';
</script>
<?php 
    $this->load->view('tna/karyawan/modal_view_alasan');
?>

