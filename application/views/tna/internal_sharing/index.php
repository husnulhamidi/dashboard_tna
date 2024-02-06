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
                            <h3 class="box-title" style="padding-top:5px"><?php echo $title;?></h3>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="pull-right">
                                <button class="btn btn-default btn-sm" data-toggle='modal' data-target='#modalFilter'  style="padding-right: 20px;padding-left: 20px;">
                                    <i class="glyphicon glyphicon-filter"></i> Filter
                                </button>

                                <a href="<?php echo site_url('tna/InternalSharing/create');?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-plus" ></i> Tambah</a>
                            </div>
                        </div>
                    </div>
                   

                </div>

                <div class="tab-content"  >
                     
                    <div class="tab-pane active">

                       
                        <div class="row">
                            <div class="col-md-12">
                                <table  class="table table-striped table-bordered table-hover" id="tbl-internal-sharing-hcpd" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="7%" class="text-center">No.</th>
                                            <th class="text-nowrap text-center">Materi</th>
                                            <th class="text-nowrap text-center">Nara Sumber</th>
                                            <th class="text-nowrap text-center">Subdit/Unit</th>
                                            <th class="text-nowrap text-center">Tanggal</th>
                                            <th class="text-nowrap text-center">Waktu</th>
                                            <th class="text-nowrap text-center">Tempat</th>
                                            <th class="text-nowrap text-center">Biaya</th>
                                            <th class="text-nowrap text-center">Ket</th>
                                            <th class="text-nowrap text-center">Jumlah Peserta</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                  
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>Pengembangan Produk Aplikasi Rantai Pasok Sabut Kelapa</td>
                                            <td>Firman</td>
                                            <td>IT & Digital</td>
                                            <td>20 Oktober 2023</td>
                                            <td>14:00</td>
                                            <td>Room 1</td>
                                            <td>Rp. 300.000</td>
                                            <td>via zoom (http://zoom.com)</td>
                                            <td>500 Peserta</td>

                                            <td class="text-center">
                                                <div class="input-group-btn">
                                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Aksi
                                                    <span class="fa fa-caret-down"></span></button>
                                                  <ul class="dropdown-menu">
                                                    <li><a href="<?php echo $action_url_edit.'/1';?>">Edit</a></li>
                                                    <li>
                                                        <a onclick="deleteData(1)">Hapus</a>
                                                    </li>
                                                    <li><a href="<?php echo $action_url_detail.'/1';?>">Detail</a></li>
                                                    <li>
                                                        <a
                                                        target="_blank" 
                                                        href="<?php echo $action_url_generate;?>">Generate Sertifikat
                                                        </a>
                                                    </li>
                                                  </ul>
                                                </div>
                                                <!-- <a 
                                                    href="<?php echo site_url('tna/justifikasi/detail');?>" 
                                                    data-toggle='tooltip' 
                                                    data-placement='bottom' 
                                                    title='Detail' 
                                                    class='btn btn-info btn-xs'>
                                                   <i class='fa fa-eye' ></i> 
                                                </a>&nbsp;
                                                <button 
                                                    data-toggle="tooltip" 
                                                    data-placement="bottom" 
                                                    title="edit" 
                                                    class="btn btn-success btn-xs">
                                                    <i class="fa fa-edit"></i>
                                                </button>&nbsp;
                                                <button 
                                                    data-toggle="tooltip" 
                                                    data-placement="bottom" 
                                                    title="Hapus" 
                                                    class="btn btn-danger btn-xs hapus-bank" value='.$id_bank.'>
                                                    <i class="fa fa-trash"></i>
                                                </button>&nbsp; -->
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
<?php 
    $this->load->view('tna/internal_sharing/modal_filter');
?>
<script type="text/javascript">
     $('#table-bank').DataTable();
      $(document).on("click",".hapus-bank",function(){
        var encrypt = this.value;
        
        swal({
            title: "Yakin Hapus Data ini ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, Hapus!",
            closeOnConfirm: false
        }, function () {

            $.ajax({
                type : "POST",
                url  : "<?php echo base_url();?>bank/delete/",
                dataType: "JSON",
                data : "data="+encrypt,
                success:function(data){
                    
                    if(data.rc=='0000'){
                        setTimeout(function() {
                            swal({
                                title: "Notification!",
                                text: "Success Delete Data",
                                imageUrl: '<?= base_url("assets/img/success.png");?>'
                            }, function() {
                               location.reload();
                            });
                        }, 1000);
                    }else{
                        setTimeout(function() {
                            swal({
                                title: "Notification!",
                                text: "Delete Failed",
                                imageUrl: '<?= base_url("assets/img/danger-red2.png");?>'
                            }, function() {
                                location.reload();
                            });
                        }, 1000);
                    }
                    
                }

            });
           
        });
            
    });
</script>