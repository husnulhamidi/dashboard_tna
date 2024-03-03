<!-- Modal -->
<style type="text/css">
    .datepicker.dropdown-menu {
        max-width: 500px;
    }
</style>
<div class="modal fade" id="modalFilter" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Form Filter </h4>
            </div>
            <div class="modal-body">
                <div>
                    <form method="post" action="javascript:;" class="form-horizontal form-filter" enctype="multipart/form-data" id="form-filter">
                        <input type="hidden" id="tabs" name="tabs" value="<?php echo $active_tab;?>">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Peserta </label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="filter_peserta" id="filter_peserta" placeholder="Nama Peserta" class="form-control input-sm">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Subunit/unit</label>
                                        <div class="col-sm-9">
                                            <select class="select2 form-control" placeholder="Pilih Unir" name="filter_unit" id="filter_unit">
                                                <option value="all"> Semua </option>
                                                <?php 
                                                    foreach ($subdit as $sb) {
                                                        echo "<option value='".$sb->m_organisasi_id."'>".$sb->nama.'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Pelatihan/sertifikasi </label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="filter_pelatihan" id="filter_pelatihan" placeholder="Nama Pelatihan/sertifikasi" class="form-control input-sm">
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Penyelenggara </label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="filter_penyelenggara" id="filter_penyelenggara" placeholder="Nama Penyelenggara" class="form-control input-sm">
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Jenis Development </label>
                                        <div class="col-sm-9">
                                            <select class="select2 form-control" placeholder="Pilih Unir" name="filter_development" id="filter_development">
                                               <option value="all">Semua</option>
                                                <?php 
                                                foreach ($jenis_development as $jd) {
                                                    echo "<option  value='".$jd->label."'>".$jd->label.'</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Metode Pembelajaran</label>
                                        <div class="col-sm-9">
                                            <select class="select2 form-control" placeholder="Pilih Unir" name="filter_pembelajaran" id="filter_pembelajaran">
                                                <option value="all">Semua</option>
                                                <?php 
                                                foreach ($metoda as $mt) {
                                                    echo "<option  value='".$mt->label."'>".$mt->label.'</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Jenis Pelatihan/Sertifikasi</label>
                                        <div class="col-sm-9">
                                            <select class="select2 form-control" placeholder="Pilih Unir" name="filter_jenis_pelatihan" id="filter_jenis_pelatihan">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Kompetensi </label>
                                        <div class="col-sm-9">
                                            <select class="select2 form-control" placeholder="Pilih Unir" name="filter_kompetensi" id="filter_kompetensi">
                                                <option value="all"></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Lokasi </label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="filter_lokasi" id="filter_lokasi" placeholder="Lokasi" class="form-control input-sm">
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Waktu Pelaksanaan</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="filter_tgl_mulai" id="filter_tgl_mulai">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                <div class="col-sm-1">s/d</div>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="filter_tgl_selesai" id="filter_tgl_selesai">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Masa Berlaku Sertifikasi</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="filter_tgl_mulai_sertifikat" id="filter_tgl_mulai_sertifikat">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                <div class="col-sm-1">s/d</div>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="filter_tgl_selesai_sertifikat" id="filter_tgl_selesai_sertifikat">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Status Sertifikasi </label>
                                        <div class="col-sm-9">
                                            <select class="select2 form-control" placeholder="Pilih Unir" name="filter_status_sertifikasi" id="filter_status_sertifikasi">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Tahapan Proses (Status) </label>
                                        <div class="col-sm-9">
                                            <select class="select2 form-control" placeholder="Pilih Unir" name="filter_tahapan" id="filter_tahapan">
                                                <option value="all">semua</option>
                                                 <?php 
                                                foreach ($tahapan_proses as $tp) {
                                                    echo "<option  value='".$tp->id."'>".$tp->nama.'</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Biaya</label>
                                <div class="col-sm-4">
                                   <input type="number" class="form-control" name="filter_biaya_min" id="filter_biaya_min">
                               </div>
                               <div class="col-sm-1">s/d</div>
                               <div class="col-sm-4">
                                <input type="number" class="form-control" name="filter_biaya_max" id="filter_biaya_max">

                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">

                        <div class="">
                            <div class="pull-right"> 
                                <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="false">Close</button>
                                <button type="submit" class="btn btn-info btn-filter">Cari</button>
                                
                            </div>
                        </div>
                        
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
    </div> <!-- /.modal-content -->
</div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->

<script type="text/javascript">
    $('.select2').select2({
        placeholder: "Silahkan pilih narasumber"
    });

    $('#filter_tgl_mulai').datepicker({
        autoclose: true
    })

    $('#filter_tgl_selesai').datepicker({
        autoclose: true
    })

</script>

<style type="text/css">

</style>