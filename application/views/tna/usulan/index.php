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
                                <a data-toggle='modal' data-target='#ModalFilterUsulan'> 
                                    <button class="btn btn-grey btn-sm">
                                        <i class="fa fa-filter"></i> Filter
                                    </button>
                                </a>
                                <?php 
                                if($role=='admin unit'){
                                ?>
                                <a href ="<?php echo base_url('tna/usulan/create'); ?>"><button class="btn btn-info btn-sm">
                                        <i class="glyphicon glyphicon-plus"></i> Tambah Data
                                    </button>
                                </a>
                                <?php 
                                }
                                ?>
                             
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
                                <table  class="table table-striped table-bordered table-hover" id="table-usulan-tna" cellspacing="0" width="100%">
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
<?php $this->load->view('tna/usulan/modal_filter');?>
<?php //$this->load->view('tna/usulan/modal_riwayat');?>
<?php $this->load->view('tna/usulan/modal_form_usulkan');?>
<?php $this->load->view('tna/usulan/modal_form_verifikasi');?>
<!-- <style type="text/css">
    .select2 {
        width:100%!important;
    }
</style> -->
<script type="text/javascript">
    
    $(document).ready(function(){
        
        var data_project = "1";
        $('.select2').select2({
            placeholder: "Please Select"
        });

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