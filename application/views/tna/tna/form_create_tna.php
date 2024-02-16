<style type="text/css">
    .error{
        color: #a94442;
    }
</style>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            <div class="nav-tabs-custom-aqua">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo $title;?></h3>
                    </div>
                    <form method="post" action="javascript:;" class="form-horizontal form-tna" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id" value=<?php echo @$id?>>
                        <input type="hidden" name="tahapan_id" value=<?php echo @$tahapan_id->id?> >
                        <input type="hidden" name="code_tna" id="code_tna" >
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Jenis Pelatihan/Sertifikasi  <span style="color: red">*</span></label>
                                        <div class="col-sm-8">
                                            <select class="select2 form-control" name="jenis_pelatihan" id="jenis_pelatihan" >
                                                <option value="">--- Pilih ---</option>
                                                <?php 
                                                foreach ($jenis_pelatihan as $jp) {
                                                    $selected = '';
                                                    if($jp->name == @$detail->jenis_pelatihan){
                                                        $selected = 'selected';
                                                    }
                                                    echo "<option ".$selected." value='".$jp->name."'>".$jp->name.'</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Kompetensi <span style="color: red">*</span></label>
                                        <div class="col-sm-8">
                                            <select class="select2 form-control" name="kompetensi" id="kompetensi">
                                                <option value="">--- Pilih Kompetensi ---</option>
                                                <?php 
                                                foreach ($kompetensi as $kom) {
                                                    $selected = '';
                                                    if($kom->id == @$detail->r_tna_kompetensi_id){
                                                        $selected = 'selected';
                                                    }
                                                    echo "<option ".$selected." value='".$kom->id."'>".$kom->code.' | '.$kom->name.'</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Jenis Development Karyawan <span style="color: red">*</span></label>
                                        <div class="col-sm-8">
                                            <select class="select2 form-control" name="jenis_development" id="jenis_development">
                                                <option value="">--- Pilih Jenis development Karyawan ---</option>
                                                <?php 
                                                foreach ($jenis_development as $jd) {
                                                    $selected = '';
                                                    if($jd->label == @$detail->jenis_development){
                                                        $selected = 'selected';
                                                    }
                                                    echo "<option ".$selected." value='".$jd->label."'>".$jd->label.'</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Pelatihan / Sertifikasi (TNA) <span style="color: red">*</span></label>
                                        <div class="col-sm-8">
                                            <select class="select2 form-control" name="tna" id="tna" onchange="getCode()">
                                                <option value="">--- Pilih Pelatihan/Sertifikasi ---</option>
                                                <?php 
                                                foreach ($tna as $tna) {
                                                 $selected = '';
                                                 if($tna->id == @$detail->r_tna_traning_id){
                                                    $selected = 'selected';
                                                }
                                                echo "<option ".$selected." value='".$tna->id."'>".$tna->code.' | '.$tna->name.'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nama Kegiatan <span style="color: red">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text"  name="nama_kegiatan" id="nama_kegiatan"  class="form-control input-sm" value="<?php echo @$detail->nama_kegiatan;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Objective</label>
                                    <div class="col-sm-8">
                                        <input type="text"  name="objective" id="objective"  class="form-control input-sm" value="<?php echo @$detail->objective;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Justifikasi Pengajuan</label>
                                    <div class="col-sm-8">
                                        <textarea type="text"  name="justifikasi" id="justifikasi"  class="form-control input-sm" ><?php echo @$detail->justifikasi_pengajuan;?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Metode Pembelajaran <span style="color: red">*</span></label>
                                    <div class="col-sm-8">
                                        <select class="select2 form-control" name="metoda" id="metoda">
                                            <option value="1">--- Pilih ---</option>
                                            <?php 
                                            foreach ($metoda as $mt) {
                                                $selected = '';
                                                if($mt->label == @$detail->metoda_pembelajaran){
                                                    $selected = 'selected';
                                                }
                                                echo "<option ".$selected." value='".$mt->label."'>".$mt->label.'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Estimasi Biaya <span style="color: red">*</span></label>
                                    <div class="col-sm-8">
                                        <input  class="form-control input_mask" name="estimasi_biaya" id="estimasi_biaya" value="<?php echo number_format(@$detail->estimasi_biaya);?>"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nama Penyelenggara <span style="color: red">*</span></label>
                                    <div class="col-sm-8">
                                        <input  class="form-control" name="penyelenggara" id="penyelenggara" value="<?php echo @$detail->nama_penyelenggara;?>"> 
                                    </div>
                                </div>
                                <div class="form-group">                    
                                    <label class="col-sm-3 control-label">Rencana Waktu Pelaksanaan <span style="color: red">*</span></label>
                                    <div class="col-sm-8" id="date">
                                        <div class="input-group date">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input autocomplete="off" type="text" class="form-control input-sm" name="waktu_pelaksanaan" id="waktu_pelaksanaan" value="<?php echo @$detail->waktu_pelaksanaan;?>">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="multi-field-wrapper">
                                    <div class="form-group" id="divBtnAdd">
                                        <label class="col-sm-3 control-label"></label>
                                        <div class="col-sm-8">
                                            <span class="btn btn-info btn-sm add-field pull-right"><b> <li class="fa fa-plus"></li> Tambah Peserta</b> </span>
                                        </div>
                                    </div>
                                    <div class="multi-fields">
                                        <div class="multi-field">

                                            <span class="remove-field pull-right" data-toggle="tooltip" title="Hapus Peserta" > <button type="button" class="btn btn-danger btn-sm  "><li class="fa fa-trash"></li></button></span>
                                            <div class="form-group" id="divParrent">
                                                <label class="col-sm-3 control-label">Sub Direktorat / Unit <span style="color: red">*</span></label>
                                                <div class="col-sm-8">
                                                    <select class="select2 form-control" name="subdit" id="subdit">
                                                        <option value="">--- Pilih Subdit ---</option>
                                                        <?php 
                                                        foreach ($subdit as $sb) {
                                                            $selected = '';
                                                            if($sb->m_organisasi_id == @$detail->m_organisasi_id){
                                                                $selected = 'selected';
                                                            }
                                                            echo "<option ".$selected." value='".$sb->m_organisasi_id."'>".$sb->nama.'</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Nama Karyawan <span style="color: red">*</span></label>
                                                <div class="col-sm-8">
                                                    <select class="select2 form-control" name="karyawan" id="karyawan">
                                                        <option value="">---Pilih Karyawan ---</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Jabatan / Posisi <span style="color: red">*</span></label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly class="form-control" name="jabatan" id="jabatan"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Status Karyawan <span style="color: red">*</span></label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly class="form-control" name="status_karyawan" id="status_karyawan"> 
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-sm-8">
                                                    <input type="hidden" class="form-control" name="status_fte" id="status_fte"> 
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">

                        <div class="col-sm-11">
                            <div class="pull-right"> 
                                <a href="<?php echo base_url('tna/tna');?>" class="btn btn-default">Kembali</a>
                                <button type="submit" class="btn btn-success submit-tna">Simpan</button>

                            </div>
                        </div>
                        <div class="col-sm-6"> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>

$(document).ready(function () {

    $('.select2').select2();

    $('#date .input-group.date').datepicker({
        format: "dd-mm-yyyy",
        viewMode: "date", 
        minViewMode: "date",
        autoclose: true
    });

    $('.input_mask').mask('000.000.000.000', {reverse: true});

    $('.multi-field-wrapper').each(function() {
        var $wrapper = $('.multi-fields', this);
        $(".add-field", $(this)).click(function(e) {
            $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
            $(".multi-field:last").find('select').select2();       
        });

        $('.multi-field .remove-field', $wrapper).click(function() {
            if ($('.multi-field', $wrapper).length > 1)
                $(this).parent('.multi-field').remove();
            //alert(x-1);
        });
    });
   
    $('#karyawan').on('change', function(){
        let subditId = $('#subdit').val();
        let karyawanId = $('#karyawan').val();
        getDataDetailKaryawan(subditId, karyawanId)
    })

    $('#subdit').on('change', function(){
        let subditId = $(this).val();
        getKaryawanBySubdit(subditId)
    })

    if($('#id').val()){
        $('#divBtnAdd').css('display','none')
        $('.remove-field').css('display','none')
        let subditId = $('#subdit').val();
        let karyawanId = '<?php echo @$detail->m_karyawan_id;?>'
        getKaryawanBySubdit(subditId, karyawanId)
        getDataDetailKaryawan(subditId, karyawanId)
    }

});

function getKaryawanBySubdit(subdiId, karyawanId = false){
    $.ajax({
        url: '<?php echo site_url('karyawan/ajax_get_karyawan_by_organisasi'); ?>',
        type: 'POST',
        async: false, 
        data: { id: subdiId },
        dataType: 'json',
        success: function (result) {
            $("#karyawan").empty(); 
            $('#karyawan').append('<option value="">-- Pilih Karyawan --</option>');
            if(result !== null){
                $.each(result, function(i, value) {
                    var selected = '';
                    if(value['id'] == karyawanId){
                        selected = 'selected';
                    }
                    $('#karyawan').append('<option '+selected+' value=' + value['id'] + '>' + value['nama'] + ' | '+ value['nik_tg']+' | '+value['jabatan_nama']+'</option>');
                });
            }
        }
    });
}

function getDataDetailKaryawan(subdiId, karyawanId){
    var subdit_id = $('#subdit').val();
    var karyawan_id = $('#karyawan').val();
    $.ajax({
        url: '<?php echo site_url('karyawan/ajax_get_karyawan_by_karyawanid'); ?>',
        type: 'POST',
        async: false, 
        data: { karyawan_id:karyawan_id,subdit_id: subdit_id},
        dataType: 'json',
        success: function (result) {
            $("#jabatan").empty(); 
            if(result !== null){
                $.each(result, function(i, value) {
                    sk = value['status_karyawan']+" ( "+value['status_fte']+" )";
                    $('#jabatan').val(value['jabatan_nama']);
                    $('#status_karyawan').val(sk);
                    $('#status_fte').val(value['status_fte']);
                });
            }
        }
    });
}

function getCode() {
    var countData;

    let pelatihanId = $('#tna').val();
    getSum(pelatihanId)
    .then(function(result) {
        // console.log('getSum result:', result);
        countData = parseInt(result)+1
        if(countData < 1000){
            countData = '000'+countData
        }else if(countData < 100){
            countData = '00'+countData
        }else if(countData < 10){
            countData = '0'+countData
        }
        
        $.ajax({
            url: '<?php echo site_url('tna/get_code_training'); ?>',
            type: 'POST',
            data: { id: pelatihanId },
            dataType: 'json',
            success: function(result) {
                code = result.code;
                let code_tna = code+countData
                $('#code_tna').val(code_tna)
            }
        });
    })
    .catch(function(error) {
        console.error('Error in getCode:', error);
    });

}

function getSum(pelatihanId) {
    return new Promise(function(resolve, reject) {
        $.ajax({
            url: '<?php echo site_url('tna/get_sum_data'); ?>',
            type: 'POST',
            data: { r_tna_traning_id: pelatihanId },
            dataType: 'json',
            success: function(result) {
            resolve(result); // Kirim hasil getSum ke resolve
        },
        error: function(xhr, status, error) {
            reject(error); // Kirim error ke reject
        }
    });
    });
}
</script>
