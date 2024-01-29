<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            <?php // echo '<pre>'; print_r($this->session->userdata()); ?>
            <div class="row">
                <div class="col-lg-10">
                </div>
                <div class="col-lg-2">
                    <div id="year">
                        <div class="input-group date">
                            <span class="input-group-addon">Tahun </span>
                            <input autocomplete="off" type="text" class="form-control input-sm" name="tahun" id="tahun"  value="<?php echo date('Y');?>">
                        </div>
                    </div>
                  
                </div>
            </div>
            <br>
            <div class="row">
                
                <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                    <h3>150</h3>

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
                    <h3>53</sup></h3>

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
                    <h3>44</h3>

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
                    <h3>65</h3>

                    <p>Internal Sharing</p>
                    </div>
                    <div class="icon">
                    <i class="fa fa-clipboard"></i>
                    </div>
                    
                </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            
              <!-- USERS LIST -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Daftar Karyawan dengan Training Terbanyak</h3>

                  <div class="box-tools pull-right">
                    <!-- <span class="label label-danger">10 karyawan</span> -->
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    <li style="width:20%">
                      <img src="<?php echo base_url('assets/img/avatar5.png');?>" alt="User Image" style="width:128px;height:128px">
                      <a class="users-list-name" href="<?php echo site_url('tna/profil-training-karyawan/2');?>">Mochamad Yazid Saktiono, St</a>
                      <span class="users-list-date">Human Capital Management</span>
                    </li>
                     <li style="width:20%">
                      <img src="<?php echo base_url('assets/img/avatar2.png');?>" alt="User Image" style="width:128px;height:128px">
                      <a class="users-list-name" href="#">Ana T. Yuniarti</a>
                      <span class="users-list-date">Human Capital Management</span>
                    </li>
                     <li style="width:20%">
                      <img src="<?php echo base_url('assets/img/avatar2.png');?>" alt="User Image" style="width:128px;height:128px">
                      <a class="users-list-name" href="#">Erni Aji Prastiwi</a>
                      <span class="users-list-date">Human Capital Management</span>
                    </li>
                     <li style="width:20%">
                      <img src="<?php echo base_url('assets/img/avatar5.png');?>" alt="User Image" style="width:128px;height:128px">
                      <a class="users-list-name" href="#">Deva Wira Sanjaya</a>
                      <span class="users-list-date">Human Capital Management</span>
                    </li>
                     <li style="width:20%">
                      <img src="<?php echo base_url('assets/img/avatar2.png');?>" alt="User Image" style="width:128px;height:128px">
                      <a class="users-list-name" href="#">Poppie Diah Rachmawaty</a>
                      <span class="users-list-date">Human Capital Management</span>
                    </li>
                     <li style="width:20%">
                      <img src="<?php echo base_url('assets/img/avatar5.png');?>" alt="User Image" style="width:128px;height:128px">
                      <a class="users-list-name" href="#">Izz Hanif</a>
                      <span class="users-list-date">Human Capital Management</span>
                    </li>
                     <li style="width:20%">
                      <img src="<?php echo base_url('assets/img/avatar5.png');?>" alt="User Image" style="width:128px;height:128px">
                      <a class="users-list-name" href="#">Muhammad Harun Al Rasyid</a>
                      <span class="users-list-date">Human Capital Management</span>
                    </li>
                     <li style="width:20%">
                      <img src="<?php echo base_url('assets/img/avatar5.png');?>" alt="User Image" style="width:128px;height:128px">
                      <a class="users-list-name" href="#">Wendi Maksalmina</a>
                      <span class="users-list-date">Service Management & Operation</span>
                    </li>
                     <li style="width:20%">
                      <img src="<?php echo base_url('assets/img/avatar5.png');?>" alt="User Image" style="width:128px;height:128px">
                      <a class="users-list-name" href="#">Triwibowo</a>
                      <span class="users-list-date">Resource Management & Operation</span>
                    </li>
                     <li style="width:20%">
                      <img src="<?php echo base_url('assets/img/avatar2.png');?>" alt="User Image" style="width:128px;height:128px">
                      <a class="users-list-name" href="#">Rismalia</a>
                      <span class="users-list-date">Enterprise Service</span>
                    </li>
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <!-- <div class="box-footer text-center">
                  <a href="javascript:void(0)" class="uppercase">View All Users</a>
                </div> -->
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            
            
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
                           
                        <table  class="table table-striped table-bordered table-hover" id="table-bank" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="7%">No.</th>
                                            <th>Nama Karyawan</th>
                                            <th>NIK</th>
                                            <th>Unit</th>
                                            <th>Jumlah Pelatihan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                  
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td><a href="<?php echo site_url('tna/profil-training-personal/1');?>">Mochamad Yazid Saktiono, St</a></td>
                                            <td>8751701</td>
                                            <td>Human Capital Management </td>
                                            <td class="text-center">
                                                <span class="label label-success">30</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td><a href="">Ana T. Yuniarti</a></td>
                                            <td>8751702</td>
                                            <td>Human Capital Management </td>
                                            <td class="text-center">
                                                <span class="label label-success"> 28 </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td><a href="">Erni Aji Prastiwi</a></td>
                                            <td>8751703</td>
                                            <td>Human Capital Management </td>
                                            <td class="text-center">
                                                <span class="label label-success">26</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">1</td>
                                            <td><a href="">Deva Wira Sanjaya</a></td>
                                            <td>8751704</td>
                                            <td>Human Capital Management </td>
                                            <td class="text-center">
                                                <span class="label label-success">25</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td><a href="">Poppie Diah Rachmawaty</a></td>
                                            <td>8751705</td>
                                            <td>Human Capital Management </td>
                                            <td class="text-center">
                                                <span class="label label-success"> 23 </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td><a href="">Izz Hanif</a></td>
                                            <td>8751706</td>
                                            <td>Human Capital Management </td>
                                            <td class="text-center">
                                                <span class="label label-success">22</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">1</td>
                                            <td><a href="">Muhammad Harun Al Rasyid</a></td>
                                            <td>8751707</td>
                                            <td>Human Capital Management </td>
                                            <td class="text-center">
                                                <span class="label label-success">21</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">8</td>
                                            <td><a href="">Wendi Maksalmina</a></td>
                                            <td>8751708</td>
                                            <td>Service Management & Operation </td>
                                            <td class="text-center">
                                                <span class="label label-success"> 20 </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">9</td>
                                            <td><a href="">Triwibowo</a></td>
                                            <td>8751709</td>
                                            <td>Resource Management & Operation </td>
                                            <td class="text-center">
                                                <span class="label label-success">19</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">10</td>
                                            <td><a href="">Rismalia</a></td>
                                            <td>8751710</td>
                                            <td>Enterprise Service </td>
                                            <td class="text-center">
                                                <span class="label label-success">18</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">11</td>
                                            <td><a href="">Rismawati</a></td>
                                            <td>8751710</td>
                                            <td>Enterprise Service </td>
                                            <td class="text-center">
                                                <span class="label label-warning">7</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">12</td>
                                            <td><a href="">Rose Thorns</a></td>
                                            <td>8751710</td>
                                            <td>Enterprise Service </td>
                                            <td class="text-center">
                                                <span class="label label-danger">3</span>
                                            </td>
                                        </tr>
                                   
                                    
                                   
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
     $('#year .input-group.date').datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years"
    });
</script>
