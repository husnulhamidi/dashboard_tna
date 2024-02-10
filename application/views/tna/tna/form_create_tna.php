<style type="text/css">
    .error{
        color: #a94442;
    }
</style>
<!-- Main content -->
<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            <div class="nav-tabs-custom-aqua">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo $title;?></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="post" action="<?php echo $action_url;?>" class="form-horizontal" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Id TNA</label>
                                        <div class="col-sm-7">
                                           <input type="text" name="tna_id" id="tna_id" class="form-control" placeholder="TNA ID">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Pelatihan</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="nama_pelatihan" id="nama_pelatihan" class="form-control" placeholder="Nama Pelatihan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Objective</label>
                                        <div class="col-sm-7">
                                             <input type="text" name="objective" id="objective" class="form-control" placeholder="Objective">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Jenis Development Karyawan</label>
                                        <div class="col-sm-7">
                                            <select class="select2 form-control" name="jenis_development" id="jenis_development" onchange="showJenisSertifikasi()">
                                                <option value="">Pilih Jenis Development</option>
                                                <option> Pelatihan </option>
                                                <option> Sertifikasi </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" id="divJenisDevelopment" style="display: none">
                                        <label class="col-sm-3 control-label">&nbsp</label>
                                        <div class="col-sm-7">
                                            <div class="grid grid-cols-2">
                                                <input type="radio" name=""><span style="margin-right: 50px"> Nasional </span>
                                                <input type="radio" name=""> Internasional
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Metode Pembelajaran</label>
                                        <div class="col-sm-7">
                                            <select class="select2 form-control" name="metode_pembelajaran" id="metode_pembelajaran">
                                                <option value="">Pilih Metode Pembelajaran</option>
                                                <option> Online </option>
                                                <option> Offline </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Jenis Pelatihan</label>
                                        <div class="col-sm-7">
                                            <select class="select2 form-control" name="jenis_pelatihan" id="jenis_pelatihan">
                                                <option value="">Pilih Jenis Pelatihan</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Kompetensi</label>
                                        <div class="col-sm-7">
                                            <select class="select2 form-control" name="kompetensi" id="kompetensi">
                                                <option value="1">Pilih Kompetensi</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Penyelenggara</label>
                                        <div class="col-sm-7">
                                            <input  class="form-control" name="nama_penyelenggara" id="nama_penyelenggara" placeholder="Nama Penyelenggara"> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Lokasi</label>
                                        <div class="col-sm-7">
                                            <input  class="form-control" name="lokasi" id="lokasi" placeholder="Lokasi"> 
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-sm-3 control-label">Rencana Waktu Pelaksanaan</label>
                                        <div class="col-sm-7">
                                            <input  class="form-control" name="waktu_pelaksanaan" id="waktu_pelaksanaan" placeholder="Rencanan Waktu Pelaksanaan"> 
                                        </div>
                                    </div>


                                    
                                </div> <!-- end col-12 -->

                            </div><!-- end row -->


                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">

                            <div class="col-sm-10">
                                <div class="pull-right"> 
                                    <a href="<?php echo base_url('tna');?>" class="btn btn-default">Kembali</a>
                                    <button type="submit" class="btn btn-info ">Simpan</button>

                                </div>
                            </div>
                            <div class="col-sm-6"> 
                            </div>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box -->


            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        $('.select2').select2({
            placeholder: "Please Select"
        });

        $('#waktu_pelaksanaan').datepicker()
    });

    function showJenisSertifikasi(){
        let data = $('#jenis_development').val()
        if(data == 'Sertifikasi'){
            $('#divJenisDevelopment').css('display', 'block')
        }else{
            $('#divJenisDevelopment').css('display', 'none')
        }
    }
</script>
