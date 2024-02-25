<section class="content">
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            <div class="row">
                <div class="col-lg-10"></div>
                <div class="col-lg-2">
                    <div id="year">
                        <div class="input-group date">
                            <span class="input-group-addon">Tahun </span>
                            <input autocomplete="off" type="text" class="form-control input-sm filter-thn" name="tahun" id="tahun"  value="<?php echo date('Y');?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="padding-top: 15px">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3><span class="count" id="pelatihan"> </span></h3>

                            <p>Pelatihan Eksternal</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-briefcase"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3><span class="count" id="sertifikasi"> </span></h3>

                            <p>Sertifikasi</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-file-zip-o"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3><span class="count" id="e_learning"> </span></h3>

                            <p>E-Learning</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-server"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3><span class="count" id="internal_sharing"> </span></h3>

                            <p>Internal Sharing</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-clipboard"></i>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.row -->
            
            <!-- USERS LIST -->
            <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Daftar Karyawan dengan Training Terbanyak</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i> -->
                    </button>
                </div>
            </div>

            <div class="box-body no-padding">
              <ul class="users-list clearfix">
              </ul>
            </div>
        </div>


        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">List Training Seluruh Karyawan </h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-default btn-sm" >
                        <i class="fa fa-download"></i> Export Excel
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">

                        <table  class="table table-striped table-bordered table-hover" id="table-list-karyawan" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="7%" class="text-center">No.</th>
                                    <th class="text-center">Nama Karyawan</th>
                                    <th class="text-center">NIK</th>
                                    <th class="text-center">Unit</th>
                                    <th class="text-center">Jumlah Pelatihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <tr>
                                    <td class="text-center">1</td>
                                    <td><a href="<?php echo site_url('tna/profil-training-personal/1');?>">Mochamad Yazid Saktiono, St</a></td>
                                    <td>8751701</td>
                                    <td>Human Capital Management </td>
                                    <td class="text-center">
                                        <span class="label label-success">30</span>
                                    </td>
                                </tr> -->
                                
                            </tbody>
                        </table>
                    </div>

                </div>



        </div>
    </div>

</div>
</div>
</section>
<script type="text/javascript">
    $('#table-bank').DataTable();

</script>
