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
                                <button class="btn btn-default btn-sm" data-toggle='modal' data-target='#AddFilterLibraryMateri'>
                                    <i class="glyphicon glyphicon-filter"></i> Filter
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
                                            <th width="20%">Nama Pelatihan/Sertifikasi</th>
                                            <th>Kompetensi</th>
                                            <th>Penyelenggara</th>
                                            <th>Tahun</th>
                                            <th>Jenis</th>
                                            <th>File</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        // $no=0;
                                        // $total=0;
                                        // foreach ($bank as $key) {
                                        //     $id_bank = encrypt_url($key->bank_id);
                                        // $no++;
                                        
                                        // $update = anchor(site_url('bank/update_data/'.$id_bank), '<button data-toggle="tooltip" data-placement="bottom" title="edit" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button>', array('class' => ''))."&nbsp;";
                                        // $hapus = '<button data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger btn-xs hapus-bank" value='.$id_bank.'><i class="fa fa-trash"></i></button>&nbsp;';                                   
                                    ?>
                                        <tr>
                                            <td class="text-center"><?php echo @$key->bank_id;?></td>
                                            <td><?php echo @$key->nama_bank;?></td>
                                            <td><?php echo @$key->alamat1;?></td>
                                            <td><?php echo @$key->alamat2;?></td>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                           
                                        </tr>
                                    <?php
                                        //}
                                    ?>
                                    
                                   
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
<?php $this->load->view('tna/anggaran/modal_form_anggaran');?>
<?php $this->load->view('tna/anggaran/modal_filter');?>
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