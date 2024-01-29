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
                                <button class="btn btn-default btn-sm" data-toggle='modal' data-target='#ModalImportExcel'>
                                    <i class="fa fa-upload"></i> Import Excel
                                </button>
                                <button class="btn btn-info btn-sm btn-add-job-function" data-toggle='modal' data-target='#AddJobFunction'>
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
                                <table  class="table table-striped table-bordered table-hover" id="table-job-function" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="7%">No.</th>
                                            <th>Job Family</th>
                                            <th>Kode Job Function</th>
                                            <th>Job Function</th>
                                            <th>ObjID Job Function</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                  
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>1. DIGITAL TECHNOLOGY</td>
                                            <td>JFU-DIC</td>
                                            <td>1.1 DIGITAL CONNECTIVITY</td>
                                            <td>80114675 </td>
                                            <td class="text-center">
                                                <button data-toggle="tooltip" data-placement="bottom" title="edit" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button>&nbsp;
                                                <button data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger btn-xs hapus-bank" value='.$id_bank.'><i class="fa fa-trash"></i></button>&nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>1. DIGITAL TECHNOLOGY</td>
                                            <td>JFU-DPI</td>
                                            <td>1.2 DIGITAL PLATFORM AND IT</td>
                                            <td>80114676 </td>
                                            <td class="text-center">
                                                <button data-toggle="tooltip" data-placement="bottom" title="edit" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button>&nbsp;
                                                <button data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger btn-xs hapus-bank" value='.$id_bank.'><i class="fa fa-trash"></i></button>&nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td>1. DIGITAL TECHNOLOGY</td>
                                            <td>JFU-DIS</td>
                                            <td>1.3 DIGITAL SERVICE</td>
                                            <td>80114677 </td>
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
    $this->load->view('tna/job_function/modal_form_function');
    $this->load->view('tna/common/form_import_excel');
?>
<script type="text/javascript">
    const url_submit_import = '<?php echo $url_submit_import;?>';
    const code_import = "Kode Job Function";
    
</script>