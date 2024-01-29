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
                                <!-- <button class="btn btn-success btn-sm" data-toggle='modal' data-target='#ModalImportExcel'>
                                    <i class="fa fa-upload"></i> Import Excel
                                </button> -->
                                <button class="btn btn-info btn-sm btn-add-lembaga" data-toggle='modal' data-target='#AddLembaga'>
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
                                <table  class="table table-striped table-bordered table-hover" id="table-lembaga" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="7%">No.</th>
                                            <th>Nama Lembaga</th>
                                            <th>Nama PIC</th>
                                            <th>Telp</th>
                                            <th>Website</th>
                                            <th>Alamat</th>
                                            <th width="70px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                  
                                        <!-- <tr>
                                            <td class="text-center">1</td>
                                            <td>PT. Samudra Karya Mustika</td>
                                            <td>Deni</td>
                                            <td>0857-3432-4533, 0819-6733-8722 </td>
                                            <td>www.skmtraining.co.id/</td>
                                            <td>Ruko Tritunggal B8, Salakan, Bangunharjo, Sewon, Bantul Regency, Special Region of Yogyakarta 55188</td>
                                            <td class="text-center">
                                                <a href="<?php echo site_url('tna/referensi/lembaga/detail');?>"><button data-toggle="tooltip" data-placement="bottom" title="detail" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></button></a>
                                                <a data-toggle="modal" data-target="#AddLembagaUpdate"><button data-toggle="tooltip" data-placement="bottom" title="edit" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button></a>
                                                <button data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger btn-xs hapus-bank" value='.$id_bank.'><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr> -->
                                       
                                   
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
    $this->load->view('tna/lembaga/modal_form_lembaga');
    $this->load->view('tna/lembaga/modal_form_lembaga_update');
?>
<script type="text/javascript">
     var url_detail = '<?php echo base_url('tna/referensi/lembaga/detail');?>';
</script>