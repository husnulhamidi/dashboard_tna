<style type="text/css">
    .error{
        color: #a94442;
    }
    .select2-container--default .select2-results__option.select2-results__option--highlighted {
        background-color: #f0f0f0;
        color: #333;
    }
    .table-border {
        width: 100%;
    }

    .table-border th,
    .table-border td {
        width: 33.33%; 
        text-align: center; 
        border: 1px solid #ddd; 
    }
    .text-right {
        text-align: right; 
    }
    
    /* .table thead {
        position: fixed;
        top: 140px;
        z-index: 999; 
    } */

    

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
                        <input type="hidden" name="code_tna" id="code_tna" value="<?php echo @$detail->code_tna?>">
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
                                        <label class="col-sm-3 control-label">Job Family</label>
                                        <div class="col-sm-8">
                                            <select class="select2 form-control" name="jobFamily" id="jobFamily" onChange="getJobFunc()">
                                                <option value="">--- Pilih Job Family ---</option>
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Job Function</label>
                                        <div class="col-sm-8">
                                            <select class="select2 form-control" name="jobFunc" id="jobFunc" onChange="getJobRole()">
                                                <option value="">--- Pilih Job Function ---</option>
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Job Role</label>
                                        <div class="col-sm-8">
                                            <select class="select2 form-control" name="jobRole" id="jobRole" onChange="getDataKompetensi()">
                                                <option value="">--- Pilih Job Role ---</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Kompetensi <span style="color: red">*</span></label>
                                        <div class="col-sm-8">
                                            <select class="select2 form-control" name="kompetensi" id="kompetensi" onChange="getDataTraining()">
                                                <option value="">--- Pilih Kompetensi ---</option>
                                                <!-- <?php 
                                                foreach ($kompetensi as $kom) {
                                                    $selected = '';
                                                    if($kom->id == @$detail->r_tna_kompetensi_id){
                                                        $selected = 'selected';
                                                    }
                                                    echo "<option ".$selected." value='".$kom->id."'>".$kom->code.' | '.$kom->name.'</option>';
                                                }
                                                ?> -->
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
                                    <div class="form-group" id="typeSertifikasi" style="display:none">
                                        <label class="col-sm-3 control-label">&nbsp;</label>
                                        <div class="col-sm-8">
                                            <input type="radio" id="Nasional" name="jenis_sertifikasi" value="Nasional" /> Nasional
                                            <input type="radio" id="Internasional" name="jenis_sertifikasi" value="Internasional" style="margin-left:20px"/> Internasional
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Pelatihan / Sertifikasi (TNA) <span style="color: red">*</span></label>
                                        <div class="col-sm-8">
                                            <select class="select2 form-control" name="tna" id="tna" onchange="getCode()">
                                                <option value="">--- Pilih Pelatihan/Sertifikasi ---</option>
                                                <!-- <?php 
                                                    foreach ($tna as $tna) {
                                                        $selected = '';
                                                        if($tna->id == @$detail->r_tna_traning_id){
                                                            $selected = 'selected';
                                                        }
                                                        echo "<option ".$selected." value='".$tna->id.'|'.$tna->name."'>".$tna->code.' | '.$tna->name.'</option>';
                                                    }
                                                ?> -->
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
                                    <label class="col-sm-3 control-label">Justifikasi Pengajuan <span style="color: red">*</span></label>
                                    <div class="col-sm-8">
                                        <textarea type="text"  name="justifikasi" id="justifikasi"  class="form-control input-sm" ><?php echo @$detail->justifikasi_pengajuan;?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Metode Pembelajaran <span style="color: red">*</span></label>
                                    <div class="col-sm-8">
                                        <select class="select2 form-control" name="metoda" id="metoda">
                                            <option value="">--- Pilih ---</option>
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
                                    <div class="col-sm-6">
                                        <select class="select2 form-control" name="penyelenggara" id="penyelenggara">
                                            <option value=""> Pilih Lembaga</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2" id="divBtnAddPenyelenggara">
                                        <button class="btn btn-info btn-sm pull-left" id="btnText" onclick="addPenyelenggara()"><b> <li class="fa fa-plus"></li> Tambah Penyelenggara</b> </button>
                                    </div>
                                </div>

                                <!-- <div class="form-group" id="divNewPeneyelenggara" style="display:none">
                                    <label class="col-sm-3 control-label"> &nbsp; </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" readonly="" id="tmpPenyelenggara">
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-danger btn-sm pull-left " onclick="deletePenyelenggara()"><b> <li class="fa fa-close"></li></b> </button>
                                    </div>
                                </div> -->
                                
                                <div class="form-group">                    
                                    <label class="col-sm-3 control-label">Rencana Waktu Pelaksanaan <span style="color: red">*</span></label>
                                    <div class="col-sm-8" id="date">
                                        <div class="input-group date">
                                            <?php
                                                $waktu = '';
                                                if(@$detail->waktu_pelaksanaan_mulai && @$detail->waktu_pelaksanaan_selesai){
                                                    $tgl = explode('-',@$detail->waktu_pelaksanaan_mulai);
                                                    $tgl2 = explode('-',@$detail->waktu_pelaksanaan_selesai);
                                                    $waktu = $tgl[1].'/'.$tgl[2].'/'.$tgl[0] . ' - ' . $tgl2[1].'/'.$tgl2[2].'/'.$tgl2[0];
                                                }
                                                
                                            ?>
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input autocomplete="off" type="text" class="form-control input-sm" name="waktu_pelaksanaan" id="waktu_pelaksanaan" value="<?php echo $waktu ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" id="typeSertifikasi">
                                    <label class="col-sm-3 control-label"> TNA / Non TNA</label>
                                    <div class="col-sm-8">
                                        <input type="radio" id="is_tna" name="is_tna" value="1" /> TNA
                                        <input type="radio" id="is_non_tna" name="is_tna" value="0" style="margin-left:20px"/> Non TNA
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label class="col-sm-3 control-label">Urgent ?</label>
                                    <div class="col-sm-8">
                                        <input type="radio" id="ya" name="is_urgent" value="1" /> Ya
                                        <input type="radio" id="tidak" name="is_urgent" value="0" style="margin-left:20px"/> Tidak
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
                                        <div class="multi-field1">

                                            <!-- <span class="remove-field1 pull-right" data-toggle="tooltip" title="Hapus Peserta" > 
                                                <button type="button" class="btn btn-danger btn-sm  ">
                                                    <li class="fa fa-trash"></li>
                                                </button>
                                            </span> -->
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Direktorat <span style="color: red">*</span></label>
                                                <div class="col-sm-8">
                                                    <select class="select2 form-control" name="direktorat[]" id="direktorat1" onchange="getSubdit(1)" >
                                                        <option value="">--- Pilih Direktorat ---</option>
                                                        <?php 
                                                            $selected = '';
                                                            foreach ($direktorat as $dir) {
                                                                
                                                                if($dir->id == @$detail->direktorat_id){
                                                                    $selected = 'selected';
                                                                }
                                                                echo "<option ".$selected." value='".$dir->id."'>".$dir->o5.'</option>';
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Sub Direktorat / Unit </label>
                                                <div class="col-sm-8">
                                                    <select class="select2 form-control" name="subdit[]" id="subdit1" onchange="getKaryawanBySubdit(1)">
                                                        <option value="">--- Pilih Subdit ---</option>
                                                        <!-- <?php 
                                                        foreach ($subdit as $sb) {
                                                            $selected = '';
                                                            if($sb->m_organisasi_id == @$detail->m_organisasi_id){
                                                                $selected = 'selected';
                                                            }
                                                            echo "<option ".$selected." value='".$sb->m_organisasi_id."'>".$sb->nama.'</option>';
                                                        }
                                                        ?> -->
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Nama Karyawan <span style="color: red">*</span></label>
                                                <div class="col-sm-8">
                                                    <select class="select2 form-control" name="karyawan[]" id="karyawan1" onchange="getDataDetailKaryawan(1)">
                                                        <option value="">---Pilih Karyawan ---</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Jabatan / Posisi <span style="color: red">*</span></label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly class="form-control" name="jabatan[]" id="jabatan1"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Status Karyawan <span style="color: red">*</span></label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly class="form-control" name="status_karyawan[]" id="status_karyawan1"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-8">
                                                    <input type="hidden" class="form-control" name="status_fte[]" id="status_fte1"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Nama Atasan <span style="color: red">*</span></label>
                                                <div class="col-sm-8">
                                                    <select class="select2 form-control" name="verifikator_id_1[]" id="verifikator_id_11" >
                                                        <option value="">---Pilih Atasan ---</option>
                                                    </select>
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
<?php $this->load->view('tna/tna/modal_add_penyelenggara'); ?>
<script>

var count = 1;
$(document).ready(function () {
    $('.select2').select2();
    // $('#date .input-group.date').daterangepicker({
    //     // format: "dd-mm-yyyy",
    //     // viewMode: "date", 
    //     // minViewMode: "date",
    //     // autoclose: true
    // });
    $('#waktu_pelaksanaan').daterangepicker();

    $('.input_mask').mask('000.000.000.000', {reverse: true});

    if($('#id').val()){
        $('#divBtnAdd').css('display','none')
        $('.remove-field').css('display','none')

        let karyawanId = '<?php echo @$detail->m_karyawan_id;?>'
        let direktoratId = '<?php echo @$detail->direktorat_id;?>'
        let varifikatorId = '<?php echo @$detail->verifikator_id_1;?>'        
        getAtasan(1, direktoratId, varifikatorId)
        let subdit = '<?php echo @$detail->m_organisasi_id;?>'
        if(subdit != 0){
            getSubdit(1, subdit, varifikatorId)
            getKaryawanBySubdit(1,subdit, karyawanId)
        }else{
            // console.log('sini', karyawanId)
            getKaryawanBySubdit(1,direktoratId, karyawanId)
        }
        // getKaryawanBySubdit(1,direktoratId, karyawanId)
       

        getDataDetailKaryawan(1,karyawanId)

        let trainingId = '<?php echo @$detail->r_tna_traning_id;?>'
        let lembaga = '<?php echo @$detail->nama_penyelenggara;?>'
        getDataLembaga(trainingId, lembaga)

        let kompetensi = '<?php echo @$detail->r_tna_kompetensi_id;?>'
        getDataJob(kompetensi)

        let jenis_development = '<?php echo @$detail->jenis_development;?>';
        if(jenis_development == 'Sertifikasi'){
            $('#typeSertifikasi').css('display','block')
            let jenis_sertifikasi = '<?php echo @$detail->jenis_sertifikasi;?>';
            // console.log(jenis_sertifikasi)
            $("#"+jenis_sertifikasi).prop("checked", true);
        }

        let is_tna = '<?php echo @$detail->is_tna;?>';
        if(is_tna == 0){
            $("#is_non_tna").prop("checked", true);
        }else{
            $("#is_tna").prop("checked", true);
        }

        let is_urgent = '<?php echo @$detail->is_urgent;?>';
        if(is_urgent == 0){
            $("#tidak").prop("checked", true);
        }else{
            $("#ya").prop("checked", true);
        }

        let kompetensiId = '<?php echo @$detail->r_tna_kompetensi_id;?>';
        getDataTraining(kompetensiId, trainingId)
    }else{
        getJobFamily()
    }

    $(".add-field", $(this)).click(function(e) {
        count = count + 1;
        appendRow(count)
    })

    // getDataKompetensi();

});



function getSubdit(count, subdit = false, varifikatorId = false){
    // console.log(subdit)
    let direktoratId = $('#direktorat'+count).val();
    // console.log('direktoratId', direktoratId)
    // if(subdit){
    //     direktoratId = subdit
    // }
    // console.log(varifikatorId)
    $.ajax({
        url: '<?php echo site_url('karyawan/ajax_get_subdit'); ?>',
        type: 'POST',
        async: false, 
        data: { id: direktoratId },
        dataType: 'json',
        success: function (result) {
            $('#subdit'+count).empty(); 
            $('#subdit'+count).append('<option value="">-- Pilih Subdit --</option>');

            if(result !== null){
                $.each(result, function(i, value) {
                    var selected = '';
                    if(value['id'] == subdit){
                        selected = 'selected';
                    }
                    $('#subdit'+count).append('<option '+selected+' value=' + value['id'] + '>' + value['name'] +'</option>');
                });
            }
        },
        complete: function (data) {
            getAtasan(count, direktoratId, varifikatorId)
            getKaryawanBySubdit(count, direktoratId)
        }
    });
}

var isHeaderKaryawan = true;
function getKaryawanBySubdit(count, direktoratId = false, karyawanId = false){
    let subditId = $('#subdit'+count).val();
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
            $('#karyawan'+count).empty(); 
            $('#karyawan'+count).append('<option value="">-- Pilih Karyawan --</option>');
            console.log('karyawanId2', karyawanId)
            if(result !== null){
                
                $.each(result, function(i, value) {
                    var selected = '';
                    if(value['id'] == karyawanId){
                        selected = 'selected';
                    }
                    $('#karyawan'+count).append('<option '+selected+' value=' + value['id'] + '>' + value['nama'] + ' | '+ value['nik_tg']+' | '+value['jabatan_nama']+'</option>');
                });
                $('#karyawan'+count).select2({
                    data: result,
                    placeholder: 'Pilih Karyawan',
                    templateResult: formatRepoKarywan,
                    templateSelection: formatRepoSelectionKaryawan,
                    matcher: function(params, data) {
                        isHeaderKaryawan = true;
                        if ($.trim(params.term) === '') {
                            return data;
                        }
                        var term = params.term.toLowerCase();
                        for (var key in data) {
                            if (Object.prototype.hasOwnProperty.call(data, key) && data[key] != null && typeof data[key] === 'string') {
                                var value = data[key].toString().toLowerCase();
                                if (value.indexOf(term) !== -1) {
                                    return data;
                                }
                            }
                        }
                        
                        return null;
                    },
                });
                isHeaderKaryawan = true;
            }
        }
    });
}

function formatRepoKarywan(repo){
    if (repo.loading) {
        return repo.text;
    }
    var $container = $(`
        <table class="table table-border">
            ${isHeaderKaryawan ? `
                <thead>   
                    <tr>
                        <th class="text-nowrap"> NIK </th>    
                        <th class="text-nowrap"> Nama </th>       
                        <th class="text-nowrap"> Jabatan </th>       
                    </tr>    
                </thead>
            ` : ''}
            <tbody>
                <tr>
                    <td class="text-nowrap select2-result-repository__nik"></td>
                    <td class="text-nowrap text-right select2-result-repository__nama"></td>
                    <td class="text-nowrap text-right select2-result-repository__jabatan"></td>
                </tr>
            </tbody>
        </table>
    `);  
    console.log(repo.biaya)
    $container.find(".select2-result-repository__nik").text(repo.nik_tg);
    $container.find(".select2-result-repository__nama").text(repo.nama);
    $container.find(".select2-result-repository__jabatan").text(repo.jabatan_nama);
    $container.find(".select2-result-repository__status_fte").text(repo.status_fte);
    isHeaderKaryawan = false;
    return $container; 
}

function formatRepoSelectionKaryawan(repo){
    isHeaderKaryawan = true;
    return repo.nama || repo.text;
}

var isHeaderAtasan = true;
function getAtasan(count, direktoratId, varifikatorId = false){
    // console.log(varifikatorId)
    $.ajax({
        url: '<?php echo site_url('karyawan/ajax_get_karyawan_by_organisasi'); ?>',
        type: 'POST',
        async: false, 
        data: { id: direktoratId },
        dataType: 'json',
        success: function (result) {
            $('#verifikator_id_1'+count).empty(); 
            $('#verifikator_id_1'+count).append('<option value="">-- Pilih Atasan --</option>');
            if(result !== null){
                
                $.each(result, function(i, value) {
                    var selected2 = '';
                    if(value['id'] == varifikatorId){
                        selected2 = 'selected';
                    }
                    $('#verifikator_id_1'+count).append('<option '+selected2+' value=' + value['id'] + '>' + value['nama'] + ' | '+ value['nik_tg']+' | '+value['jabatan_nama']+'</option>');
                });
                $('#verifikator_id_1'+count).select2({
                    data: result,
                    placeholder: 'Pilih Atasan',
                    templateResult: formatRepoAtasan,
                    templateSelection: formatRepoSelectionAtasan,
                    matcher: function(params, data) {
                        isHeaderAtasan = true;
                        if ($.trim(params.term) === '') {
                            return data;
                        }
                        var term = params.term.toLowerCase();
                        for (var key in data) {
                            if (Object.prototype.hasOwnProperty.call(data, key) && data[key] != null && typeof data[key] === 'string') {
                                var value = data[key].toString().toLowerCase();
                                if (value.indexOf(term) !== -1) {
                                    return data;
                                }
                            }
                        }
                        
                        return null;
                    },
                });
                isHeaderAtasan = true;
            }
        }
    });
}

function formatRepoAtasan(repo){
    if (repo.loading) {
        return repo.text;
    }
    var $container = $(`
        <table class="table table-border">
            ${isHeaderAtasan ? `
                <thead>   
                    <tr>
                        <th class="text-nowrap"> NIK </th>    
                        <th class="text-nowrap"> Nama </th>       
                        <th class="text-nowrap"> Jabatan </th>    
                        <th class="text-nowrap"> Status FTE </th>    
                    </tr>    
                </thead>
            ` : ''}
            <tbody>
                <tr>
                    <td class="text-nowrap select2-result-repository__nik"></td>
                    <td class="text-nowrap text-right select2-result-repository__nama"></td>
                    <td class="text-nowrap text-right select2-result-repository__jabatan"></td>
                </tr>
            </tbody>
        </table>
    `);  
    $container.find(".select2-result-repository__nik").text(repo.nik_tg);
    $container.find(".select2-result-repository__nama").text(repo.nama);
    $container.find(".select2-result-repository__jabatan").text(repo.jabatan_nama);
    isHeaderAtasan = false;
    return $container; 
}

function formatRepoSelectionAtasan(repo){
    isHeaderAtasan = true;
    return repo.nama || repo.text;
}

function getDataDetailKaryawan(count, karyawanId = false){
    var subdit_id = $('#subdit'+count).val();
    var karyawan_id = $('#karyawan'+count).val();
    $.ajax({
        url: '<?php echo site_url('karyawan/ajax_get_karyawan_by_karyawanid'); ?>',
        type: 'POST',
        async: false, 
        data: { karyawan_id:karyawan_id,subdit_id: subdit_id},
        dataType: 'json',
        success: function (result) {
            $("#jabatan"+count).empty(); 
            if(result !== null){
                $.each(result, function(i, value) {
                    sk = value['status_karyawan']+" ( "+value['status_fte']+" )";
                    $('#jabatan'+count).val(value['jabatan_nama']);
                    $('#status_karyawan'+count).val(sk);
                    $('#status_fte'+count).val(value['status_fte']);
                });

            }
        }
    });
}

function getCode() {
    var countData;
    let exp = $('#tna').val().split('|');
    console.log($('#tna').val())
    // let pelatihanId = $('#tna').val();
    let pelatihanId = exp[0];
    $('#nama_kegiatan').val(exp[1])
    // cosole.log(pelatihanId)
    getDataLembaga(pelatihanId)
    getDataLembagawithotPelatihan(pelatihanId)
    getSum(pelatihanId)
    .then(function(result) {
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

var isHeader2 = true;
function getDataLembaga(pelatihanId, dataPenyelenggara = false){
    $('#penyelenggara').empty()
    $('#penyelenggara').append('<option value="">Pilih Penyelenggara</option')
    $.ajax({
        url:base_url+'tna/tna/getPenyelenggara',
        method: 'post',
        dataType: 'json',
        data: { pelatihanId:pelatihanId},
        success: function(response){
            // console.log(response)
           
            $.each(response, function(index, item) {
                var selected = "";
                if(dataPenyelenggara && dataPenyelenggara == item.nama_lembaga){
                    selected = "selected";
                }
                $('#penyelenggara').append('<option '+selected+' value="'+item.id+'" >' + item.nama_lembaga + '</option>');
            });
            $('#penyelenggara').select2({
                data: response,
                placeholder: 'Pilih Penyelenggara',
                templateResult: formatRepo2,
                templateSelection: formatRepoSelection2,
                matcher: function(params, data) {
                    isHeader2 = true;
                    if ($.trim(params.term) === '') {
                        return data;
                    }
                    var term = params.term.toLowerCase();
                    for (var key in data) {
                        if (Object.prototype.hasOwnProperty.call(data, key) && data[key] != null && typeof data[key] === 'string') {
                            var value = data[key].toString().toLowerCase();
                            if (value.indexOf(term) !== -1) {
                                return data;
                            }
                        }
                    }
                    
                    return null;
                },
            });
            isHeader2 = true;
        },
    });
}

function formatRepo2(repo){
    // console.log(repo)
    if (repo.loading) {
        return repo.text;
    }
    var $container = $(`
        <table class="table table-border">
            ${isHeader2 ? `
                <thead>   
                    <tr>
                        <th class="text-nowrap"> Nama Lembaga </th>    
                        <th class="text-nowrap"> Biaya </th>       
                        <th class="text-nowrap"> Kapasitas </th>    
                    </tr>    
                </thead>
            ` : ''}
            <tbody>
                <tr>
                    <td class="text-nowrap select2-result-repository__nama_lembaga"></td>
                    <td class="text-nowrap text-right select2-result-repository__biaya"></td>
                    <td class="text-nowrap text-right select2-result-repository__kapasitas"></td>
                </tr>
            </tbody>
        </table>
    `);  
    console.log(repo.biaya)
    $container.find(".select2-result-repository__nama_lembaga").text(repo.nama_lembaga);
    $container.find(".select2-result-repository__biaya").text(repo.biaya === null ? 0 : formatRupiah(repo.biaya, 'Rp.'));
    $container.find(".select2-result-repository__kapasitas").text(repo.kapasitas);
    isHeader2 = false;
    return $container;    
}

function formatRepoSelection2(repo){
    isHeader2 = true;
    return repo.nama_lembaga || repo.text;
}

function addPenyelenggara(){
    // alert('tamabah')
    $('#modalTambahPenyelenggara').modal({backdrop: 'static', keyboard: false}) 
    $('#modalTambahPenyelenggara').modal('show')
   
}

function appendRow(count){
    var html = `
        <div class="multi-field`+count+`">
            <span class="remove-field`+count+` pull-right" data-toggle="tooltip" title="Hapus Peserta" > 
                <button type="button" class="btn btn-danger btn-sm" onclick="deleteRow(${count})">
                    <li class="fa fa-trash"></li>
                </button>
            </span>
            <div class="form-group">
                <label class="col-sm-3 control-label">Direktorat <span style="color: red">*</span></label>
                <div class="col-sm-8">
                    <select class="select2 form-control" name="direktorat[]" id="direktorat`+count+`" onchange="getSubdit(${count})">
                        <option value="">--- Pilih Direktorat ---</option>
                        <?php 
                            foreach ($direktorat as $dir) {
                                $selected = '';
                                if($dir->id == @$detail->direktorat_id){
                                    $selected = 'selected';
                                }
                                echo "<option  value='".$dir->id."'>".$dir->o5.'</option>';
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Sub Direktorat / Unit </label>
                <div class="col-sm-8">
                    <select class="select2 form-control" name="subdit[]" id="subdit`+count+`" onchange="getKaryawanBySubdit(`+count+`)">
                        <option value="">--- Pilih Subdit ---</option>
                        // <?php 
                        // foreach ($subdit as $sb) {
                        //     $selected = '';
                        //     if($sb->m_organisasi_id == @$detail->m_organisasi_id){
                        //         $selected = 'selected';
                        //     }
                        //     echo "<option ".$selected." value='".$sb->m_organisasi_id."'>".$sb->nama.'</option>';
                        // }
                        // ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Nama Karyawan <span style="color: red">*</span></label>
                <div class="col-sm-8">
                    <select class="select2 form-control" name="karyawan[]" id="karyawan`+count+`" onchange=getDataDetailKaryawan(`+count+`)>
                        <option value="">---Pilih Karyawan ---</option>

                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Jabatan / Posisi <span style="color: red">*</span></label>
                <div class="col-sm-8">
                    <input type="text" readonly class="form-control" name="jabatan[]" id="jabatan`+count+`"> 
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Status Karyawan <span style="color: red">*</span></label>
                <div class="col-sm-8">
                    <input type="text" readonly class="form-control" name="status_karyawan[]" id="status_karyawan`+count+`"> 
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-8">
                    <input type="hidden" class="form-control" name="status_fte[]" id="status_fte`+count+`"> 
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Nama Atasan <span style="color: red">*</span></label>
                <div class="col-sm-8">
                    <select class="select2 form-control" name="verifikator_id_1[]" id="verifikator_id_1`+count+`" >
                        <option value="">---Pilih Atasan ---</option>

                    </select>
                </div>
            </div>
            <hr>
        </div>
    `

    $('.multi-fields').append(html)
    $('.select2').select2()
}

function deleteRow(id){
    $(".multi-field"+id).remove();
}

var isHeaderKom = true;
function getDataKompetensi(datakompetensi = false){
    // console.log(datakompetensi)
    $('#kompetensi').empty()
    $('#kompetensi').append('<option value="">Pilih kompetensi</option')
    let jobRole = $('#jobRole').val()
    $.ajax({
        url:base_url+'tna/tna/getkompetensi/'+jobRole,
        method: 'get',
        dataType: 'json',
        success: function(response){
            // console.log(response)
            var selected = "";
            $.each(response, function(index, item) {
                if(datakompetensi && datakompetensi == item.id){
                    // console.log(item.id)
                    // console.log(datakompetensi)
                    selected = "selected";
                }
                $('#kompetensi').append('<option '+selected+' value="'+item.id+'" >' + item.kompetensi + '</option>');
            });
            isHeaderKom = true;
            $('#kompetensi').select2({
                data: response,
                placeholder: 'Pilih Kompetensi',
                templateResult: formatRepoKom,
                templateSelection: formatRepoSelectionKom,
                matcher: function(params, data) {
                    isHeaderKom = true;
                    if ($.trim(params.term) === '') {
                        return data;
                    }
                    var term = params.term.toLowerCase();
                    for (var key in data) {
                        if (Object.prototype.hasOwnProperty.call(data, key) && data[key] != null && typeof data[key] === 'string') {
                            var value = data[key].toString().toLowerCase();
                            if (value.indexOf(term) !== -1) {
                                return data;
                            }
                        }
                    }
                    
                    return null;
                },
            });
            
        },
    });
}

function formatRepoKom(repo){
    // console.log(repo)
    if (repo.loading) {
        return repo.text;
    }
    var $container = $(`
        <table class="table table-border">
            ${isHeaderKom ? `
                <thead>   
                    <tr>
                        <th class="text-nowrap"> Kode </th>    
                        <th class="text-nowrap"> Kode Job Role </th>       
                        <th class="text-nowrap"> Kompetensi </th>    
                    </tr>    
                </thead>
            ` : ''}
            <tbody>
                <tr>
                    <td class="text-nowrap select2-result-repository__code"></td>
                    <td class="text-nowrap text-right select2-result-repository__job_role"></td>
                    <td class="text-nowrap text-right select2-result-repository__kompetensi"></td>
                </tr>
            </tbody>
        </table>
    `);  
    $container.find(".select2-result-repository__code").text(repo.code);
    $container.find(".select2-result-repository__job_role").text(repo.job_role);
    $container.find(".select2-result-repository__kompetensi").text(repo.kompetensi);
    isHeaderKom = false;
    return $container;    
}

function formatRepoSelectionKom(repo){
    isHeaderKom = true;
    return repo.kompetensi  || repo.text;
}

function getDataTraining(detailKompetensiId = false, trainingId = false){
    // value='".$tna->id.'|'.$tna->name."'
    let kompetensiId = $('#kompetensi').val()
    if(detailKompetensiId){
        kompetensiId = detailKompetensiId
    }
    // console.log(kompetensiId)
    $('#tna').empty()
    $('#tna').append('<option value="">Pilih Pelatihan/Sertifikasi</option')
    $.ajax({
        url:base_url+'tna/tna/getDataTraining',
        method: 'post',
        dataType: 'json',
        data: { kompetensiId:kompetensiId},
        success: function(response){
            // console.log('response', response)
            let selected = '';
            for (var i = 0; i < response.length; i++) {
                // console.log('response', response[i]['id'])
                if(response[i]['id'] == trainingId) selected = 'selected';
                $('#tna').append('<option '+selected+' value="'+response[i]['id']+'|'+response[i]['name']+'"> '+ response[i]['code']+' | '+response[i]['name']+'</option>');
            }
        }
    });
}

function getJobFamily(jobFamily = false,jobFunc=false,jobRole=false,kompetensi=false){
    // console.log('jobFamily', jobFamily)
    $('#jobFamily').empty()
    $('#jobFamily').append('<option>Pilih Job Family</option>');
    $.ajax({
        url:base_url+'tna/justifikasi/getDataDropdown/jobFamily',
        method: 'get',
        dataType: 'json',
        success: function(response){
            for (var i = 0; i < response.length; i++) {
                var selected = "";
                if(jobFamily == response[i]['id']){
                    selected = "selected";
                }
                $('#jobFamily').append('<option '+selected+' value='+response[i]['id']+'>'+response[i]['name']+'</option>')
            }
            if(jobFamily)getJobFunc(jobFunc,jobRole,kompetensi);
            
        }
    });
    
}

function getJobFunc(jobFunc=false,jobRole=false,kompetensi=false){
    $('#jobFunc').empty()
    $('#jobFunc').append('<option>Pilih Job Function</option>');
    // console.log('jobFamily', $('#jobFamily').val())
    let jobFamily = $('#jobFamily').val()
    $.ajax({
        url:base_url+'tna/justifikasi/getDataDropdown/jobFunc/'+jobFamily,
        method: 'get',
        dataType: 'json',
        success: function(response){
            for (var i = 0; i < response.length; i++) {
                var selected = "";
                if(jobFunc == response[i]['id']){
                    selected = "selected";
                }
                $('#jobFunc').append('<option '+selected+' value='+response[i]['id']+'>'+response[i]['name']+'</option>')
            }
            if(jobFunc)getJobRole(jobRole,kompetensi);
            
        }
    }); 
}

function getJobRole(jobRole = false,kompetensi=false){
    $('#jobRole').empty()
    $('#jobRole').append('<option>Pilih Job Role</option>');
    let jobFunc = $('#jobFunc').val()
    $.ajax({
        url:base_url+'tna/justifikasi/getDataDropdown/jobRole/'+jobFunc,
        method: 'get',
        dataType: 'json',
        success: function(response){
            for (var i = 0; i < response.length; i++) {
                var selected = "";
                if(jobRole == response[i]['id']){
                    selected = "selected";
                }
                $('#jobRole').append('<option '+selected+' value='+response[i]['id']+'>'+response[i]['name']+'</option>')
            }
            if(jobRole)getDataKompetensi(kompetensi);
            
        }
    });
}

function getDataJob(kompetensi){
    $.ajax({
        url:base_url+'tna/tna/getDataJob/'+kompetensi,
        method: 'get',
        dataType: 'json',
        success: function(response){
        //    console.log('response', response)
           getJobFamily(response.job_family_id, response.job_function_id, response.job_role_id, response.kompetensi_id)
        }
    }); 
}


</script>
