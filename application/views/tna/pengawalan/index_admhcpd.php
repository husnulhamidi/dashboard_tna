<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            <?php // echo '<pre>'; print_r($this->session->userdata()); ?>
            
            <?php $this->load->view('tna/pengawalan/dashlet');?>
            <div class="nav-tabs-custom-aqua">
                <div class="box box-info">
                    
                    <div class="box-header with-border">
                    
                        <div class="col-lg-12">
                        <ul class="nav nav-tabs">
                            <?php $this->load->view('tna/pengawalan/header_tab');?>
                            <div class="pull-right">
                                <a data-toggle='modal' data-target='#modalFilter'> 
                                    <button class="btn btn-grey btn-sm">
                                        <i class="fa fa-filter"></i> Filter
                                    </button>
                                </a>
                                <a href ="<?php echo base_url('tna/pengawalan/create'); ?>"><button class="btn btn-info btn-sm">
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
                                <table  class="table table-striped table-bordered table-hover" id="table-verifikasi" cellspacing="0" width="100%">
                                    <thead>
                                        
                                        <tr>
                                            <!-- <th width="7%">No</th> -->
                                            <th class="text-center text-nowrap">ID TNA</th>
                                            <th class="text-center text-nowrap">Nama Karyawan</th>
                                            <th class="text-center text-nowrap">Subdit/Unit</th>
                                            <th class="text-center text-nowrap">Status Karyawan</th>
                                            <th class="text-center text-nowrap">Kompetensi</th>
                                            <th class="text-center text-nowrap">Jenis Dev. Karyawan</th>
                                            <th class="text-center text-nowrap">Pelatihan/Sertifikasi</th>
                                            <th class="text-center text-nowrap">Justifikasi Pengajuan</th>
                                            <th class="text-center text-nowrap">Metode Pembelajaran</th>
                                            <th class="text-center text-nowrap">Estimasi Biaya</th>
                                            <th class="text-center text-nowrap">Nama Penyelenggara</th>
                                            <th class="text-center text-nowrap">Waktu Pelaksanaan</th>
                                            <th class="text-center text-nowrap">Status</th>
                                            <th class="text-center text-nowrap">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>       
                                    <tr>
                                            <td>S0001001</td>
                                            <td>8673444-Indah</td>
                                            <td>Corporate Secretary</td>
                                            <td>FTE</td>
                                            <td>Busines Enabler</td>
                                            <td>Sertifikasi</td>
                                            <td>CTNA</td>
                                            <td>-</td>
                                            <td>Offline</td>
                                            <td>Rp.2.000.000</td>
                                            <td>Gajayana</td>
                                            <td>Februari 2023</td>
                                            <td>
                                                Belum diusulkan <br>
                                                <i class="fa fa-circle-o">
                                                <i class="fa fa-circle-o">
                                                <i class="fa fa-circle-o">
                                                <i class="fa fa-circle-o">
                                               
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
                                                    <li><a class="usulkantna">Usulkan</a></li>
                                                    <!-- <li><a href="">Detail</a></li> -->
                                                    <li><a href="">Riwayat</a></li>
                                                    <li><a href="">Edit</a></li>
                                                    <li><a href="#" class="delete-tna">Hapus</a></li>
                                                </ul>
                                                </div>
                                            </td>
                                        </tr>  
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

                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                <button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle" data-toggle="dropdown" style="width: 80px;">
                                                    Action  <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <!-- <li>Usulkan</li> -->
                                                    <li><a href="">Detail</a></li>
                                                    <li><a href="">Riwayat</a></li>
                                                    <li><a href="">Edit</a></li>
                                                    <li><a href="">Hapus</a></li>
                                                </ul>
                                                </div>
                                            </td>
                                        </tr>                           
                                        <tr>
                                            <td>P0001001</td>
                                            <td>8674474-Citra Dewi</td>
                                            <td>Corporate Secretary</td>
                                            <td>FTE</td>
                                            <td>Busines Enabler</td>
                                            <td>Pelatihan</td>
                                            <td>Legal Compliance</td>
                                            <td>-</td>
                                            <td>Offline</td>
                                            <td>Rp.1.000.000</td>
                                            <td>Gajayana</td>
                                            <td>Maret 2023</td>
                                            <td>
                                                Menunggu verifikasi admin HCPD <br>
                                                <i class="fa fa-check-circle text-success"></i>
                                                <i class="fa fa-check-circle text-success"></i>
                                                <i class="fa fa-circle-o">
                                                <i class="fa fa-circle-o">
                                                <i class="fa fa-circle-o">

                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                <button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle" data-toggle="dropdown" style="width: 80px;">
                                                    Action  <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <!-- <li><a href="javascript;">Usulkan</a></li> -->
                                                    <li><a href="javascript;">Detail</a></li>
                                                    <li><a href="javascript;" data-toggle='modal' data-target='#ModalRiwayatUsulan'>Riwayat</a></li>
                                                    <li><a href="javascript;">Edit</a></li>
                                                    <li><a href="javascript;">Hapus</a></li>
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
<?php $this->load->view('tna/pengawalan/modal_filter');?>
<?php $this->load->view('tna/usulan/modal_riwayat');?>
<script type="text/javascript">
    
    $(document).ready(function(){
        $('#table-generate').DataTable();

        var data_project = "1";
      /*oTable = $('#table-node').DataTable({
            processing: true, 
            serverSide: true, 
            order: [], 
            ajax: {
                url : "",
                type : 'get',
                data:{
                    data: data_project
                } 


            },
            columnDefs: [
                {
                    targets: [5,6,7],
                    orderable: false,
                    className: 'text-left',

                },{
                    targets: [8],
                    orderable: false,
                    className: 'text-center',

                }

            ],
        });*/

        $(document).on("click",".usulkantna",function(){
            //var encrypt = this.value;
            
            swal({
                title: "Anda yakin akan mengusulkan pengajuan TNA ini ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#00c0ef",
                confirmButtonText: "Ya, Usulkan!",
                closeOnConfirm: false
            }, function () {

                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url();?>node/delete/",
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
                                   oTable.ajax.reload();
                                });
                            }, 1000);
                        }else{
                            setTimeout(function() {
                                swal({
                                    title: "Notification!",
                                    text: "Delete Failed",
                                    imageUrl: '<?= base_url("assets/img/danger-red2.png");?>'
                                }, function() {
                                     oTable.ajax.reload();
                                });
                            }, 1000);
                        }
                        
                    }

                });
               
            });
                
        });

        $(document).on("click",".delete-tna",function(){
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
                    url  : "<?php echo base_url();?>node/delete/",
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
                                   oTable.ajax.reload();
                                });
                            }, 1000);
                        }else{
                            setTimeout(function() {
                                swal({
                                    title: "Notification!",
                                    text: "Delete Failed",
                                    imageUrl: '<?= base_url("assets/img/danger-red2.png");?>'
                                }, function() {
                                     oTable.ajax.reload();
                                });
                            }, 1000);
                        }
                        
                    }

                });
               
            });
                
        });

        

        $(document).on("click",".btn-update",function(){
            $('#edit-deskripsi').val($(this).attr('data-deskripsi'));
            $('#edit-value').val($(this).attr('data-value'));
            $('#edit-cpe').val($(this).attr('data-cpe'));
            $('#edit-speed').val($(this).attr('data-speed'));
            $('#edit-tgl_tagih').val($(this).attr('data-tgl_tagih'));
            $('#edit-tgl_off').val($(this).attr('data-tgl_off'));
            $('#edit-otc').val($(this).attr('data-otc'));
            $('#edit-mrc').val($(this).attr('data-mrc'));
            $("#edit-pilih_produk").val($(this).attr('data-produk'));
            $('#edit-pilih_produk').select2().trigger('change');
        });

        $(document).on("click",".btn-generate",function(){
            var segmen = "<?= $this->uri->segment(3)?>"
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url();?>node/generate_tagihan/",
                dataType: "JSON",
                data : "data="+segmen,
                success:function(response){
                    //console.log(response.rc);
                    /*console.log(JSON.parse(response));*/
                    /*$.each(JSON.parse(response), function( index, item ) {*/
                        //console.log(item.rc);
                        $('#div-tagihan-temp').html(response.output);
                        $('.tagihan-temp').show();
                        
                    //});
                    
                }

            });
        });
    });
</script>