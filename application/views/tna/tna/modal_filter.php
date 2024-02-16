<!-- Modal -->
<div class="modal fade" id="ModalFilter" tabindex="-1" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Form Filter</h4>
            </div>
            <div class="modal-body">
                <div>
                    <form method="post" action="javascript:;" class="form-horizontal" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Subdit/Unit</label>
                                        <div class="col-sm-8">
                                            <select class="select2 form-control" name="filter_subdit" id="filter_subdit">
                                                <option value="all">Semua</option>
                                                <?php 
                                                foreach ($subdit as $sb) {
                                                    echo "<option value='".$sb->m_organisasi_id."'>".$sb->nama.'</option>';
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Nama Karyawan</label>
                                        <div class="col-sm-8">
                                            <select class="select2 form-control" name="filter_karyawan" id="filter_karyawan">
                                                <option value="all">Semua</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Status Karyawan</label>
                                        <div class="col-sm-8">
                                           <!--  <input  class="form-control" name="filter_status_karyawan" id="filter_status_karyawan">  -->
                                           <select class="form-control" name="filter_status_karyawan" id="filter_status_karyawan">
                                               <option value="all"> Semua </option>
                                               <option> FTE </option>
                                               <option> Non FTE </option>
                                           </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Kompetensi</label>
                                        <div class="col-sm-8">
                                            <select class="select2 form-control" name="filter_kompetensi" id="filter_kompetensi">

                                                <option value="all">Semua</option>
                                                <?php 
                                                foreach ($kompetensi as $kom) {
                                                    echo "<option value='".$kom->id."'>".$kom->code.' | '.$kom->name.'</option>';
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Jenis Development Karyawan</label>
                                        <div class="col-sm-8">
                                            <select class="select2 form-control" name="filter_jenis_development" id="filter_jenis_development">

                                                <option value="all">Semua</option>
                                                <?php 
                                                foreach ($jenis_development as $jd) {
                                                    echo "<option  value='".$jd->label."'>".$jd->label.'</option>';
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Nama Pelatihan / Sertifikasi</label>
                                        <div class="col-sm-8">
                                            <select class="select2 form-control" name="filter_nama_pelatihan" id="filter_nama_pelatihan">
                                                <option value="all">Semua</option>
                                                <?php 
                                                foreach ($tna as $tna) {
                                                    echo "<option  value='".$tna->id."'>".$tna->code.' | '.$tna->name.'</option>';
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Justifikasi Pengajuan</label>
                                        <div class="col-sm-8">
                                            <textarea type="text" name="filter_justifikasi" id="filter_justifikasi" class="form-control input-sm" ></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Metode Pembelajaran</label>
                                        <div class="col-sm-8">
                                            <select class="select2 form-control" name="filter_metoda_pembelajaran" id="filter_metoda_pembelajaran">
                                                <option value="all">Semua</option>
                                                <?php 
                                                foreach ($metoda as $mt) {
                                                    echo "<option  value='".$mt->label."'>".$mt->label.'</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Estimasi Biaya</label>
                                        <!-- <div class="col-sm-8">
                                            <input  class="form-control" name="filter_estimasi" id="filter_estimasi"> 
                                        </div> -->
                                        <div class="col-sm-4">
                                             <input type="number" class="form-control" name="filter_biaya_min" id="filter_biaya_min">
                                        </div>
                                        <div class="col-sm-1">s/d</div>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" name="filter_biaya_max" id="filter_biaya_max">
                                           
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Waktu Pelaksanaan</label>
                                        <!-- <div class="col-sm-8">
                                            <input  class="form-control" name="filter_estimasi" id="filter_estimasi"> 
                                        </div> -->
                                        <div class="col-sm-4">
                                             <input type="text" class="form-control tgl" name="filter_waktu_awal" id="filter_waktu_awal">
                                        </div>
                                        <div class="col-sm-1">s/d</div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control tgl" name="filter_waktu_akhir" id="filter_waktu_akhir">
                                           
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Nama Penyelenggara</label>
                                        <div class="col-sm-8">
                                            <input  class="form-control" name="filter_penyelenggara" id="filter_penyelenggara"> 
                                        </div>
                                    </div>
                                </div> <!-- end col-12 -->

                            </div><!-- end row -->

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
        placeholder: "Please Select"
    });

    $('.tgl').datepicker({
        fomat:'yyyy-mm-dd'
    })
</script>

<style type="text/css">
    .select2 {
        width:100%!important;
    }
</style>