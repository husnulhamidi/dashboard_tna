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
            <?php // echo '<pre>'; print_r($this->session->userdata()); ?>
            <div class="nav-tabs-custom-aqua">
            
                    
                    <!-- Horizontal Form -->
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title"><?php echo $title;?></h3>
                            </div>
                        <!-- /.box-header -->
                            <!-- form start -->
                            <form method="post" action="javascript:;" class="form-horizontal form-usulan-tna" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="hidden"  name="usulan_id" id="usulan_id"  class="form-control input-sm" >
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Jenis Pelatihan/Sertifikasi</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="jenis_pelatihan" id="jenis_pelatihan">
                                                    <option value="">--- Pilih ---</option>
                                                    <?php 
                                                        foreach ($jenis_pelatihan as $jp) {
                                                            echo "<option value='".$jp->name."'>".$jp->name.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Kompetensi</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="kompetensi" id="kompetensi">
                                                    <option value="">--- Pilih Kompetensi ---</option>
                                                    <?php 
                                                        foreach ($kompetensi as $kom) {
                                                            echo "<option value='".$kom->id."'>".$kom->code.' | '.$kom->name.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Jenis Development Karyawan</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="jenis_development" id="jenis_development">
                                                    <option value="">--- Pilih Jenis development Karyawan ---</option>
                                                    <?php 
                                                        foreach ($jenis_development as $jd) {
                                                            echo "<option value='".$jd->label."'>".$jd->label.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Pelatihan / Sertifikasi (TNA)</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="tna" id="tna" onchange="getDataLembaga()">
                                                    <option value="">--- Pilih Pelatihan/Sertifikasi ---</option>
                                                    <?php 
                                                        foreach ($tna as $tna) {
                                                            echo "<option value='".$tna->id."&".$tna->code."&".$tna->name."'>".$tna->code.' | '.$tna->name.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama Kegiatan</label>
                                            <div class="col-sm-8">
                                                <input type="hidden"  name="tna_id" id="tna_id"  class="form-control input-sm" >
                                                <input type="hidden"  name="tna_code" id="tna_code"  class="form-control input-sm" >
                                                <input type="text"  name="nama_kegiatan" id="nama_kegiatan"  class="form-control input-sm" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Justifikasi Pengajuan</label>
                                            <div class="col-sm-8">
                                                <textarea type="text"  name="justifikasi" id="justifikasi"  class="form-control input-sm" ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Metode Pembelajaran</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="metoda" id="metoda">
                                                    <option value="1">--- Pilih ---</option>
                                                    <?php 
                                                        foreach ($metoda as $mt) {
                                                            echo "<option value='".$mt->label."'>".$mt->label.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Estimasi Biaya Per Orang</label>
                                            <div class="col-sm-8">
                                                <input  class="form-control input_mask" name="estimasi_biaya" id="estimasi_biaya"> 
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama Penyelenggara</label>
                                            <div class="col-sm-8">
                                                <input  class="form-control" name="penyelenggara" id="penyelenggara"> 
                                            </div>
                                        </div> -->
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
                                        <div class="form-group" style="display:none" id="divAddNew">
                                            <label class="col-sm-3 control-label">&nbsp;</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="new_penyelenggara" id="new_penyelenggara">
                                            </div>
                                            <div class="col-md-2">
                                                <button class="btn btn-danger btn-sm pull-left" onclick="deletePenyelenggara()"><b> <li class="fa fa-remove"></li> Batal tambah baru </b> </button>
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
                                            <label class="col-sm-3 control-label">Rencana Waktu Pelaksanaan</label>
                                            <div class="col-sm-8" id="date">
                                                <div class="input-group date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input autocomplete="off" type="text" class="form-control input-sm" name="waktu_pelaksanaan" id="waktu_pelaksanaan" >
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
                                                <div class="multi-field1">
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
                                                    <!-- <span class="remove-field1 pull-right" data-toggle="tooltip" title="Hapus Peserta" > <button type="button" class="btn btn-danger btn-sm  "><li class="fa fa-trash"></li></button></span> -->
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Sub Direktorat / Unit</label>
                                                        <div class="col-sm-8">
                                                            <select class="select2 form-control" name="subdit[]" id="subdit1" onchange="getKaryawanBySubdit(1)">
                                                                <option value="1">--- Pilih Subdit ---</option>
                                                                <!-- <?php 
                                                                foreach ($subdit as $sb) {
                                                                    echo "<option value='".$sb->m_organisasi_id."'>".$sb->nama.'</option>';
                                                                }
                                                                ?> -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Nama Karyawan</label>
                                                        <div class="col-sm-8">
                                                            <select class="select2 form-control" name="karyawan[]" id="karyawan1" onchange="getDataDetailKaryawan(1)">
                                                                <option value="">---Pilih Karyawan ---</option>
                                                            
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Jabatan / Posisi</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" readonly class="form-control" name="jabatan[]" id="jabatan1"> 
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Status Karyawan</label>
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
                                        

                                    </div> <!-- end col-12 -->
                                   
                                </div><!-- end row -->
                              
                               
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                
                                <div class="col-sm-11">
                                    <div class="pull-right"> 
                                        <a href="<?php echo base_url('tna/usulan');?>" class="btn btn-default">Kembali</a>
                                        <button type="submit" class="btn btn-info submit-draft">Simpan sebagai Draft</button>
                                        <button type="submit" class="btn btn-success submit-usulkan">Simpan dan Usulkan</button>
                                        
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
<!-- <?php $this->load->view('tna/tna/modal_add_penyelenggara'); ?> -->
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

    // $('.multi-field-wrapper').each(function() {
    //     var $wrapper = $('.multi-fields', this);
    
    //     $(".add-field", $(this)).click(function(e) {
    //         $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();           
    //     });
    //     $('.multi-field .remove-field', $wrapper).click(function() {
    //         if ($('.multi-field', $wrapper).length > 1)
    //             $(this).parent('.multi-field').remove();
    //             //alert(x-1);
    //     });
    // });

    if($('#id').val()){
        $('#divBtnAdd').css('display','none')
        $('.remove-field').css('display','none')
        // let subditId = $('#subdit').val();
        // let karyawanId = '<?php echo @$detail->m_karyawan_id;?>'
        // getKaryawanBySubdit(1,karyawanId)
        // getDataDetailKaryawan(1, karyawanId)
        let karyawanId = '<?php echo @$detail->m_karyawan_id;?>'
        let varifikatorId = '<?php echo @$detail->verifikator_id_1;?>'
        let subdit = '<?php echo @$detail->m_organisasi_id;?>'
        getSubdit(1, subdit)
        getKaryawanBySubdit(1,karyawanId,varifikatorId)
        getDataDetailKaryawan(1, karyawanId)
    }

     $(".add-field", $(this)).click(function(e) {
        count = count + 1;
        appendRow(count)
        // alert("test");
    })

    $('#tna').on('change',function(){
        var tna = $(this).val();
        var arr = tna.split("&");
        $("#tna_id").val(arr[0]);
        $("#tna_code").val(arr[1]);
        $("#nama_kegiatan").val(arr[2]);

    })


    // $('#subdit').on('change',function(){
    //     var subdit_id = $(this).val();

    //     $.ajax({
    //         url: '<?php echo site_url('karyawan/ajax_get_karyawan_by_organisasi'); ?>',
    //         type: 'POST',
    //         async: false, 
    //         data: { id: subdit_id },
    //         dataType: 'json',
    //         success: function (result) {
    //             $("#karyawan").empty(); 
    //             $('#karyawan').append('<option value="">-- Pilih Karyawan --</option>');
    //             if(result !== null){
    //                 $.each(result, function(i, value) {
    //                     $('#karyawan').append('<option value=' + value['id'] + '>' + value['nama'] + ' | '+ value['nik_tg']+' | '+value['jabatan_nama']+'</option>');
    //                 });
    //             }
    //         }
    //     });

    // })

    // $('#karyawan').on('change',function(){
    //     var subdit_id = $('#subdit').val();
    //     var karyawan_id = $(this).val();
    //      var sk ="";
    //     $.ajax({
    //         url: '<?php echo site_url('karyawan/ajax_get_karyawan_by_karyawanid'); ?>',
    //         type: 'POST',
    //         async: false, 
    //         data: { karyawan_id:karyawan_id,subdit_id: subdit_id},
    //         dataType: 'json',
    //         success: function (result) {
    //             $("#jabatan").empty(); 
    //             if(result !== null){
    //                 $.each(result, function(i, value) {
    //                         sk = value['status_karyawan']+" ( "+value['status_fte']+" )";
    //                         $('#jabatan').val(value['jabatan_nama']);
    //                         $('#status_karyawan').val(sk);
    //                         $('#status_fte').val(value['status_fte']);
    //                 });
    //             }
    //         }
    //     });
    // })

    

});

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
            <hr>
        </div>
    `

    $('.multi-fields').append(html)
    $('.select2').select2()
}

function deleteRow(id){
    $(".multi-field"+id).remove();
}

function getDataLembaga(){
    let pelatihanId = $('#tna').val();
    $('#penyelenggara').empty()
    $('#penyelenggara').append('<option value="">Pilih Penyelenggara</option')
    $.ajax({
        url:base_url+'tna/tna/getPenyelenggara',
        method: 'post',
        dataType: 'json',
        data: { pelatihanId:pelatihanId},
        success: function(response){
            console.log(response)
            for (var i = 0; i < response.length; i++) {
                $('#penyelenggara').append('<option>'+response[i]['nama_lembaga']+'</option>')
            }
        }
    });
}

function addPenyelenggara(){
    $('#divAddNew').css('display', 'block')
    $('#penyelenggara').prop('disabled', true)
    $('#divBtnAddPenyelenggara').css('display', 'none')


}

function deletePenyelenggara(){
    $('#penyelenggara').prop('disabled', false)
    $('#divAddNew').css('display', 'none')
    $('#new_penyelenggara').val('');
    $('#divBtnAddPenyelenggara').css('display', 'block')
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


</script>
