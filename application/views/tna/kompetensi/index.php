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
                                <button class="btn btn-info btn-sm btn-add-kompetensi" data-toggle='modal' data-target='#AddKompetensi'>
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
                                <table  class="table table-striped table-bordered table-hover" id="table-kompetensi" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="7%">No.</th>
                                            <th>Job Role</th>
                                            <th>Kode Kompetensi</th>
                                            <th>Kompetensi</th>
                                            <th>Owner</th>
                                            <!-- <th>Jabatan</th> -->
                                            <!-- <th>Job Function</th>
                                            <th width="20%">Job Family</th> -->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                  
                                        <!-- <tr>
                                            <td class="text-center">1</td>
                                            <td>Access Network</td>
                                            <td>KOM001</td>
                                            <td>IT Infrastructure </td>
                                            <td>Telkom </td>
                                           
                                            <td class="text-center">
                                                <a href="<?php echo site_url('tna/referensi/kompetensi/detail');?>" data-toggle='tooltip' data-placement='bottom' title='Detail'><button class='btn btn-info btn-xs'><i class='fa fa-eye' ></i> </button></a>
                                                <button data-toggle="tooltip" data-placement="bottom" title="edit" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button>&nbsp;
                                                <button data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger btn-xs hapus-bank" value='.$id_bank.'><i class="fa fa-trash"></i></button>&nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>SOFTWARE ENGINEERING</td>
                                            <td>KOM002</td>
                                            <td>IT ASSET LIFECYCLE MANAGEMENT </td>
                                            <td>Telkom </td>
                                         
                                            <td class="text-center">
                                                <a href="" data-toggle='tooltip' data-placement='bottom' title='Detail'><button class='btn btn-info btn-xs'><i class='fa fa-eye' ></i> </button></a>
                                                <button data-toggle="tooltip" data-placement="bottom" title="edit" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button>&nbsp;
                                                <button data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger btn-xs hapus-bank" value='.$id_bank.'><i class="fa fa-trash"></i></button>&nbsp;
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">3</td>
                                            <td>-</td>
                                            <td>KOM003</td>
                                            <td>Satellite-specialized support </td>
                                            <td>Tsat </td>
                                            
                                            <td class="text-center">
                                                <a href="" data-toggle='tooltip' data-placement='bottom' title='Detail'><button class='btn btn-info btn-xs'><i class='fa fa-eye' ></i> </button></a>
                                                <button data-toggle="tooltip" data-placement="bottom" title="edit" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button>&nbsp;
                                                <button data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger btn-xs hapus-bank" value='.$id_bank.'><i class="fa fa-trash"></i></button>&nbsp;
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
    $this->load->view('tna/kompetensi/modal_form_kompetensi');
    $this->load->view('tna/common/form_import_excel');
?>
<script type="text/javascript">
     const url_submit_import = '<?php echo $url_submit_import;?>';
    const code_import = "Kode Kompetensi";
</script>