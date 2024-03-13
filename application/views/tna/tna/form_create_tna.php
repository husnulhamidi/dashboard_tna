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
                                                if(@$detail->waktu_pelaksanaan){
                                                    $tgl = explode('-',@$detail->waktu_pelaksanaan);
                                                    $waktu = $tgl[2].'-'.$tgl[1].'-'.$tgl[0];
                                                }
                                                
                                            ?>
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input autocomplete="off" type="text" class="form-control input-sm" name="waktu_pelaksanaan" id="waktu_pelaksanaan" value="<?php echo @$waktu;?>">
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
                                                            foreach ($direktorat as $dir) {
                                                                $selected = '';
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
                                                <label class="col-sm-3 control-label">Sub Direktorat / Unit <span style="color: red">*</span></label>
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
    $('#date .input-group.date').datepicker({
        format: "dd-mm-yyyy",
        viewMode: "date", 
        minViewMode: "date",
        autoclose: true
    });

    $('.input_mask').mask('000.000.000.000', {reverse: true});


    if($('#id').val()){
        $('#divBtnAdd').css('display','none')
        $('.remove-field').css('display','none')
        let subditId = $('#subdit').val();
        let karyawanId = '<?php echo @$detail->m_karyawan_id;?>'
        let varifikatorId = '<?php echo @$detail->verifikator_id_1;?>'
        let subdit = '<?php echo @$detail->m_organisasi_id;?>'
        getSubdit(1, subdit)
        getKaryawanBySubdit(1,karyawanId,varifikatorId)
        getDataDetailKaryawan(1, karyawanId)

        

        let trainingId = '<?php echo @$detail->r_tna_traning_id;?>'
        let lembaga = '<?php echo @$detail->nama_penyelenggara;?>'
        getDataLembaga(trainingId, lembaga)

        let jenis_development = '<?php echo @$detail->jenis_development;?>';
        if(jenis_development == 'Sertifikasi'){
            $('#typeSertifikasi').css('display','block')
            let jenis_sertifikasi = '<?php echo @$detail->jenis_sertifikasi;?>';
            console.log(jenis_sertifikasi)
            $("#"+jenis_sertifikasi).prop("checked", true);
        }

        let is_tna = '<?php echo @$detail->is_tna;?>';
        if(is_tna == 0){
            $("#is_non_tna").prop("checked", true);
        }else{
            $("#is_tna").prop("checked", true);
        }
    }

    $(".add-field", $(this)).click(function(e) {
        count = count + 1;
        appendRow(count)
    })

    // $('#select_lembaga').select2({
    //     minimumInputLength: 2,
    //     ajax: {
    //         url: base_url+'tna/get_lembaga',
    //         dataType: 'json',
    //         delay: 250, 
    //         data:function(params){
    //             return{
    //                 searchTerm:params.term
    //             }
    //         },
    //         processResults:function(response){
    //             console.log(response)
    //             return {
    //                 results:response
    //             }
    //         },
    //         cache:true
    //     },
    //     placeholder: 'Pilih Lembaga',
    //     templateResult: formatRepo,
    //     templateSelection: formatRepoSelection
    // })

});


var isHeader = true;
function formatRepo(repo) {
    var $container = $(`
        <table class="table">
            ${isHeader ? `
                <thead>   
                    <tr>
                        <th class="text-nowrap"> Nama Lembaga </th>    
                        <th class="text-nowrap"> PIC </th>       
                        <th class="text-nowrap"> Telp </th>       
                        <th class="text-nowrap"> Website </th>       
                        <th class="text-nowrap"> Alamat </th>       
                    </tr>    
                </thead>
            ` : ''}
            <tbody>
                <tr>
                    <td class="text-nowrap select2-result-repository__nama_lembaga"></td>
                    <td class="text-nowrap select2-result-repository__nama_pic"></td>
                    <td class="text-nowrap select2-result-repository__telp"></td>
                    <td class="text-nowrap select2-result-repository__website"></td>
                    <td class="text-nowrap select2-result-repository__alamat"></td>
                </tr>
            </tbody>
        </table>
    `);

    if(repo.nama_lembaga){
        isHeader = false;
    }else{
        isHeader = true;
    }
    

    // Mengisi data ke dalam kolom sesuai dengan repo
    $container.find(".select2-result-repository__nama_lembaga").text(repo.nama_lembaga);
    $container.find(".select2-result-repository__nama_pic").text(repo.nama_pic);
    $container.find(".select2-result-repository__telp").text(repo.telp);
    $container.find(".select2-result-repository__website").text(repo.website);
    $container.find(".select2-result-repository__alamat").text(repo.alamat);
    
    return $container;
}

function formatRepoSelection (repo) {
  return repo.nama_lembaga || repo.text;
}

function getSubdit(count, subdit = false){
    let direktoratId = $('#direktorat'+count).val();
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
        }
    });
}

function getKaryawanBySubdit(count, karyawanId = false, varifikatorId = false){
    let subditId = $('#subdit'+count).val();
    $.ajax({
        url: '<?php echo site_url('karyawan/ajax_get_karyawan_by_organisasi'); ?>',
        type: 'POST',
        async: false, 
        data: { id: subditId },
        dataType: 'json',
        success: function (result) {
            $('#karyawan'+count).empty(); 
            $('#karyawan'+count).append('<option value="">-- Pilih Karyawan --</option>');

            $('#verifikator_id_1'+count).empty(); 
            $('#verifikator_id_1'+count).append('<option value="">-- Pilih Atasan --</option>');
            if(result !== null){
                $.each(result, function(i, value) {
                    var selected = '';
                    var selected2 = '';
                    if(value['id'] == karyawanId){
                        selected = 'selected';
                    }
                    if(value['id'] == varifikatorId){
                        selected2 = 'selected';
                    }
                    $('#karyawan'+count).append('<option '+selected+' value=' + value['id'] + '>' + value['nama'] + ' | '+ value['nik_tg']+' | '+value['jabatan_nama']+'</option>');
                    $('#verifikator_id_1'+count).append('<option '+selected2+' value=' + value['id'] + '>' + value['nama'] + ' | '+ value['nik_tg']+' | '+value['jabatan_nama']+'</option>');
                });
            }
        }
    });
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
    let pelatihanId = $('#tna').val();
    getDataLembaga(pelatihanId)
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

// function getDataLembaga(pelatihanId, dataPenyelenggara = false){
//     $('#penyelenggara').empty()
//     $('#penyelenggara').append('<option value="">Pilih Penyelenggara</option')
//     $.ajax({
//         url:base_url+'tna/tna/getPenyelenggara',
//         method: 'post',
//         dataType: 'json',
//         data: { pelatihanId:pelatihanId},
//         success: function(response){
//             console.log(response)
//             for (var i = 0; i < response.length; i++) {
//                 var selected = "";
//                 if(dataPenyelenggara && dataPenyelenggara == response[i]['nama_lembaga']){
//                     selected = "selected";
//                 }
//                 $('#penyelenggara').append('<option '+selected+' >'+response[i]['nama_lembaga']+'</option>')
//             }
//         }
//     });
// }

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
            var selected = "";
            $.each(response, function(index, item) {
                if(dataPenyelenggara && dataPenyelenggara == item.nama_lembaga){
                    selected = "selected";
                }
                $('#penyelenggara').append('<option '+selected+' value="' + item.id + '">' + item.nama_lembaga + '</option>');
            });
            $('#penyelenggara').select2({
                data: response,
                placeholder: 'Pilih Penyelenggara',
                templateResult: formatRepo2,
                templateSelection: formatRepoSelection2,
            });
            isHeader2 = true;
        },
    });
}

function formatRepo2(repo){
    console.log(repo)
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
    $container.find(".select2-result-repository__nama_lembaga").text(repo.nama_lembaga);
    $container.find(".select2-result-repository__biaya").text(formatRupiah(repo.biaya, 'Rp.'));
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

// function btnClose(){
//     let new_penyelenggara = $('#new_penyelenggara').val()
//     if(new_penyelenggara){
//         $('#penyelenggara').prop('disabled', true)
//         $('#tmpPenyelenggara').val(new_penyelenggara)
//         $('#divNewPeneyelenggara').css('display', 'block')

       
//         let edit = `<li class="fa fa-edit"></li> Edit Penyelenggara</b>`;
//         $("#btnText").html(edit);
//     }
// }

// function deletePenyelenggara(){
//     $('#penyelenggara').prop('disabled', false)
//     $('#divNewPeneyelenggara').css('display', 'none')
//     $('#form-add-penyelenggara')[0].reset();
    
//     let tambah = `<li class="fa fa-plus"></li> Tambah Penyelenggara</b>`;
//     $("#btnText").html(tambah);
// }


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
                <label class="col-sm-3 control-label">Sub Direktorat / Unit <span style="color: red">*</span></label>
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

</script>
