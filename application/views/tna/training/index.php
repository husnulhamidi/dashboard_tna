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
                                <button class="btn btn-success btn-sm" data-toggle='modal' data-target='#ModalImportExcel'>
                                    <i class="fa fa-upload"></i> Import Excel
                                </button>
                                <button class="btn btn-info btn-sm" data-toggle='modal' data-target='#AddTraining'>
                                    <i class="glyphicon glyphicon-plus"></i> Tambah
                                </button>
                            </div>
                        </div>
                    </div>
                   

                </div>

                <div class="tab-content"  >
                     
                    <div class="tab-pane active">

                       
                        <div class="row">
                            <div class="col-md-12">
                                <table  class="table table-striped table-bordered table-hover" id="table-bank" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="7%">No.</th>
                                            <th>Kompetensi</th>
                                            <th>Kode Training</th>
                                            <th>Training</th>
                                            <th>Kategori</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                  
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>IT Infrastructure </td>
                                            <td>P0001</td>
                                            <td>Pelatihan IT Infrastructure </td>
                                            <td>Pelatihan </td>
                                            <td class="text-center">
                                                
                                                <button data-toggle="tooltip" data-placement="bottom" title="edit" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button>&nbsp;
                                                <button data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger btn-xs hapus-bank" value='.$id_bank.'><i class="fa fa-trash"></i></button>&nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>IT ASSET LIFECYCLE MANAGEMENT </td>
                                            <td>P0002</td>
                                            <td>Pelatihan IT ASSET LIFECYCLE MANAGEMENT </td>
                                            <td>Pelatihan </td>
                                            <td class="text-center">
                                            
                                                <button data-toggle="tooltip" data-placement="bottom" title="edit" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button>&nbsp;
                                                <button data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger btn-xs hapus-bank" value='.$id_bank.'><i class="fa fa-trash"></i></button>&nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>IT ASSET LIFECYCLE MANAGEMENT </td>
                                            <td>S0001</td>
                                            <td>Sertifikasi IT ASSET LIFECYCLE MANAGEMENT </td>
                                            <td>Sertifikasi </td>
                                            <td class="text-center">
                                            
                                                <button data-toggle="tooltip" data-placement="bottom" title="edit" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button>&nbsp;
                                                <button data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger btn-xs hapus-bank" value='.$id_bank.'><i class="fa fa-trash"></i></button>&nbsp;
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
    $this->load->view('tna/training/modal_form_training');
    $this->load->view('tna/common/form_import_excel');
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