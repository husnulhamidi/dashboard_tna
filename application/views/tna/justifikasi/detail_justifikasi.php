<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            <?php // echo '<pre>'; print_r($this->session->userdata()); ?>

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo $title;?></h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-8">
                            <table class="table table-striped">
                                <tr><td >Justifikasi</td><td width="5px">:</td><td>Pengembangan Produk Aplikasi Rantai Pasok Sabut Kelapa</td></tr>
                                <tr><td >Deskripsi</td><td width="5px">:</td><td>Seiring perkembangan produk perusahaan yang akan merambah ke sektor rantai pasok sabut kelapa, maka untuk menunjang produk tersebut dibutuhkan beberapa keahlian.</td></tr>
                               
                                <tr><td colspan="3"></td></tr>
                            </table>
                        </div>

                       
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4><b>Daftar Kompetensi</b>&nbsp;&nbsp; <a data-toggle="modal" data-target="#AddKompetensi" class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Kompetensi</a></h4>
                           
                            <table class="table table-striped" id="table-bank">
                                <tr>
                                    <th width="20px">No.</th>
                                    <th>Job Family</th>
                                    <th>Job Function</th>
                                    <th>Job Role</th>
                                    <th>Kompetensi</th>
                                    <th>Action</th>
                                </tr>
                                <tr >
                                    <td width="20px">1</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Mengelola Rantai Pasok Sabut Kelapa</td>
                                    <td> 
                                        <button data-toggle="collapse" data-target="#demo1" class="accordion-toggle" class="btn btn-default btn-xs viewtraining" id="Kom01" value="Kom01"><i class="fa fa-eye"></i></button>
                                        <button data-toggle="tooltip" data-placement="bottom" title="edit" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button>&nbsp;
                                        <button data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger btn-xs hapus-bank" value='.$id_bank.'><i class="fa fa-trash"></i></button>&nbsp;
                                    </td>
                                </tr>
                                <tr >
                                    <td></td>
                                    <td colspan="5" class="hiddenRow">
							            <div class="accordian-body collapse" id="demo1" stale="padding-left:10px;"> 
                                        <div class="pull-right">
                                            <a data-toggle="modal" data-target="#ModalAddTraining" class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Training</a>
                                        </div>
                                        <br>
                                        <br>
                                        <table class="table table-striped">
                                            <tr class="info">
                                                <th>No</th>
                                                <th>Training</th>
                                                <th><i class="fa fa-cog"></i>
                                            </tr>
                                            <tr><td width="20px">1</td><td>Pelatihan rantai pasok sabut kelapa</td>
                                            <td>
                                            <button data-toggle="tooltip" data-placement="bottom" title="edit" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button>&nbsp;
                                        <button data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger btn-xs hapus-bank" value='.$id_bank.'><i class="fa fa-trash"></i></button>&nbsp;
                                            </td></tr>
                                            <tr><td>2</td><td>Sertifikasi rantai pasok sabut kelapa</td>
                                            <td>
                                            <button data-toggle="tooltip" data-placement="bottom" title="edit" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button>&nbsp;
                                        <button data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger btn-xs hapus-bank" value='.$id_bank.'><i class="fa fa-trash"></i></button>&nbsp;
                                            </td></tr>
                                            
                                        </table>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Memahami Proses Pengeringan Sabut Kelapa</td>
                                    <td> 
                                    </td>
                                </tr>
                               
                               
                            </table>
                        </div>
                    </div>

                </div>
            </div>

            <!-- <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Lukman - Manager IT ASSET LIFECYCLE MANAGEMENT</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div> 

                <div class="box-body">
                    <div class="row">
                    
        
                       
                        <div class="col-md-9">
                        
                            
                     


                    </div>
                   

                </div>
            </div> -->

      

            
        </div>
    </div>
</section>
<?php $this->load->view('tna/justifikasi/modal_form_training');?>
<?php $this->load->view('tna/justifikasi/modal_form_kompetensi');?>
<script type="text/javascript">
      $(document).on("click",".viewtraining",function(){
         var id = this.value;
         
      });
</script>