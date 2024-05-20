<!-- Modal -->
<div class="modal fade" id="ModalFilterUsulan" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Form Filter</h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript;;" class="form-horizontal form-filter-usulan" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Direktorat</label>
                                    <div class="col-sm-8">
                                        <select class="select2 form-control" name="filter_direktorat" id="filter_direktorat" onchange="getSubdit()">
                                            <option value="all">Semua</option>
                                            <?php 
                                                foreach ($direktorat as $dir) {
                                                                
                                                    echo "<option value='".$dir->id."'>".$dir->o5.'</option>';
                                                }
                                            ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Subdit/Unit</label>
                                    <div class="col-sm-8">
                                        <select class="select2 form-control" name="filter_subdit" id="filter_subdit" onChange="getKaryawanBySubdit()">
                                            <option value="all">Semua</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Nama Karyawan</label>
                                    <div class="col-sm-8">
                                        <select class="select2 form-control" name="filter_karyawan" id="filter_karyawan" >
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
                                    <label class="col-sm-4 control-label">Nama Penyelenggara</label>
                                    <div class="col-sm-8">
                                        <input  class="form-control" name="filter_penyelenggara" id="filter_penyelenggara"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Tahapan</label>
                                    <div class="col-sm-8">
                                        <select class="select2 form-control" name="filter_tahapan" id="filter_tahapan">
                                            <option value="all">Semua</option>
                                            <?php 
                                                foreach ($tahapan as $val) {
                                                                
                                                    echo "<option value='".$val->id."'>".$val->nama.'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="">
                            <div class="pull-right"> 
                                <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="false">Close</button>
                                <button type="button" class="btn btn-info btn-filter">Cari</button>
                                
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('.tgl').datepicker({
        fomat:'yyyy-mm-dd'
    })
    $('#tanggal .input-group.date').datepicker({
        format: "d-m-yyyy",
        viewMode: "date", 
        minViewMode: "date"
    });

    function getSubdit(){
        
        let direktoratId = $('#filter_direktorat').val();
        $.ajax({
            url: '<?php echo site_url('karyawan/ajax_get_subdit'); ?>',
            type: 'POST',
            async: false, 
            data: { id: direktoratId },
            dataType: 'json',
            success: function (result) {
                $('#filter_subdit').empty(); 
                $('#filter_subdit').append('<option value="">-- Pilih Subdit --</option>');

                if(result !== null){
                    $.each(result, function(i, value) {
                       
                        $('#filter_subdit').append('<option  value=' + value['id'] + '>' + value['name'] +'</option>');
                    });
                }
            },
            complete: function (data) {
                getKaryawanBySubdit(direktoratId)
            }
        });
    }

    function getKaryawanBySubdit(direktoratId){
        // let subditId = $('#filter_subdit').val();
        let subditId = $('#filter_subdit').val();
        if( direktoratId ){
            subditId = direktoratId
        }
       
        $.ajax({
            url: '<?php echo site_url('karyawan/ajax_get_karyawan_by_organisasi'); ?>',
            type: 'POST',
            async: false, 
            data: { id: subditId },
            dataType: 'json',
            success: function (result) {
                console.log('result', result)
                $('#filter_karyawan').empty(); 
                $('#filter_karyawan').append('<option value="">-- Pilih Karyawan --</option>');
                if(result !== null){
                    $.each(result, function(i, value) {
                        $('#filter_karyawan').append('<option value=' + value['id'] + '>' + value['nama'] + ' | '+ value['nik_tg']+' | '+value['jabatan_nama']+'</option>');
                    });
                }
            }
        });
    }

</script>