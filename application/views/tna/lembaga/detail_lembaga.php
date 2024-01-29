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
                        <a href="<?php echo base_url('tna/referensi/lembaga/');?>" class="btn btn-default btn-sm">
                            <i class="fa fa-arrow-circle-left"></i> Kembali
                        </a>
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-8">
                            <table class="table table-striped">
                                <tr><td >Nama Lembaga</td><td width="5px">:</td><td><?php echo $lembaga['data']->nama_lembaga;?></td></tr>
                                <tr><td >Nama PIC</td><td width="5px">:</td><td><?php echo $lembaga['data']->nama_pic;?></td></tr>
                                <tr><td >Telp.</td><td width="5px">:</td><td> <?php echo $lembaga['data']->telp;?> </td></tr>
                                <tr><td >Webiste</td><td width="5px">:</td><td> <?php echo $lembaga['data']->website;?> </td></tr>
                                <tr><td >Alamat</td><td width="5px">:</td><td> <?php echo $lembaga['data']->alamat;?> </td></tr>
                                
                            </table>
                        </div>

                       
                    </div>
                   

                </div>
            </div>

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">List Pelatihan/sertifikasi </h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-info btn-sm btn-add-detail-lembaga" data-toggle='modal' data-target='#AddTrainingLembaga'>
                            <i class="glyphicon glyphicon-plus"></i> Tambah
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div> 

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table  class="table table-striped table-bordered table-hover" id="table-detail-lembaga" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width="7%">No.</th>
                                        <th>Nama Pelatihan / Sertifikasi</th>
                                        <th>Jenis Pelatihan</th>
                                        <th>Metoda</th>
                                        <th>Kapasitas</th>
                                        <th>Biaya</th>
                                        <th width="70px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Sertifikasi Tenaga Kerja Pada Ketinggian (TKPK) I - Kemnaker</td>
                                        <td>Sertifikasi</td>
                                        <td>Blended</td>
                                        <td>10</td>
                                        <td>Rp.2.000.000</td>
                                        <td>
                                            <a data-toggle="modal" data-target="#AddTrainingLembaga"><button data-toggle="tooltip" data-placement="bottom" title="edit" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button></a>
                                            <button data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger btn-xs hapus-bank" value='.$id_bank.'><i class="fa fa-trash"></i></button>
                                        </td>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                   

                </div>
            </div>

      

            
        </div>
    </div>
</section>
<?php $this->load->view('tna/lembaga/modal_form_training');?>
<script type="text/javascript">
      $(document).on("click",".viewtraining",function(){
         var id = this.value;
         
      });
</script>