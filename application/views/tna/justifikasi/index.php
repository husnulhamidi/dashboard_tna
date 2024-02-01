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
                               
                                <a href="<?php echo site_url('tna/justifikasi/create');?>"><button class="btn btn-info btn-sm" data-toggle='modal' data-target='#AddKompetensi'>
                                    <i class="glyphicon glyphicon-plus"></i> Tambah
                                </button></a>
                            </div>
                        </div>
                    </div>
                   

                </div>

                <div class="tab-content"  >
                     
                    <div class="tab-pane active">

                       
                        <div class="row">
                            <div class="col-md-12">
                                <table  class="table table-striped table-bordered table-hover" id="table-justifikasi" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="7%">No.</th>
                                            <th>Justifikasi</th>
                                            <th>Deskripsi</th>
                                            <th>Jumlah Kompetensi</th>
                                            <th>Jumlah Training</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <!-- <tbody>
                                  
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>Pengembangan Produk Aplikasi Rantai Pasok Sabut Kelapa</td>
                                            <td>Seiring perkembangan produk perusahaan yang akan merambah ke sektor rantai pasok sabut kelapa, maka untuk menunjang produk tersebut dibutuhkan beberapa keahlian.</td>
                                            <td><span class="label label-info">2</span></td>
                                            <td><span class="label label-success">2</span></td>
                                            <td class="text-center">
                                                <a href="<?php echo site_url('tna/justifikasi/detail');?>" data-toggle='tooltip' data-placement='bottom' title='Detail'><button class='btn btn-info btn-xs'><i class='fa fa-eye' ></i> </button></a>
                                                <button data-toggle="tooltip" data-placement="bottom" title="edit" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button>&nbsp;
                                                <button data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger btn-xs hapus-bank" value='.$id_bank.'><i class="fa fa-trash"></i></button>&nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>Pengambangan Produk Drone pengirim paket (Dsky)</td>
                                            <td>Untuk menunjang keahlian pembuatan dan memeliharan asset baik software dan hardware Dsky maka dibutuhkan beberapa keahlian.</td>
                                            <td><span class="label label-info">3</span></td>
                                            <td><span class="label label-success">12</span></td>
                                            <td class="text-center">
                                                <a href="" data-toggle='tooltip' data-placement='bottom' title='Detail'><button class='btn btn-info btn-xs'><i class='fa fa-eye' ></i> </button></a>
                                                <button data-toggle="tooltip" data-placement="bottom" title="edit" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button>&nbsp;
                                                <button data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger btn-xs hapus-bank" value='.$id_bank.'><i class="fa fa-trash"></i></button>&nbsp;
                                            </td>
                                        </tr>
                                   
                                    
                                   
                                    </tbody> -->
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
<script type="text/javascript">
    var url_detail_justifikasi = '<?php echo base_url('tna/justifikasi/detail');?>';
    var url = '<?php echo base_url('tna/justifikasi/edit');?>';
</script>