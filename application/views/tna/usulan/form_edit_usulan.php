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

                    <form method="post" action="<?php echo $action_url;?>" class="form-horizontal" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Subdit/Unit</label>
                                        <div class="col-sm-7">
                                            <?php echo $detail->subdit ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Karyawan</label>
                                        <div class="col-sm-7">
                                            <?php echo $detail->nama ?> 
                                        </div>
                                    </div>
                                        <!-- <div class="form-group">
                                            <label class="col-sm-3 control-label">Posisi</label>
                                            <div class="col-sm-7">
                                                Officer 1 IT Enterprise & Automation System
                                            </div>
                                        </div> -->
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Status Karyawan</label>
                                            <div class="col-sm-7">
                                                <?php echo $detail->status_karyawan ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Job Family</label>
                                            <div class="col-sm-7">
                                                <select class="select2 form-control" name="jobFamily" id="jobFamily" onChange="getJobFunc()">
                                                    <option value="">--- Pilih Job Family ---</option>
                                                    
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Job Function</label>
                                            <div class="col-sm-7">
                                                <select class="select2 form-control" name="jobFunc" id="jobFunc" onChange="getJobRole()">
                                                    <option value="">--- Pilih Job Function ---</option>
                                                    
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Job Role</label>
                                            <div class="col-sm-7">
                                                <select class="select2 form-control" name="jobRole" id="jobRole" onChange="getDataKompetensi()">
                                                    <option value="">--- Pilih Job Role ---</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Kompetensi</label>
                                            <div class="col-sm-7">
                                                <select class="select2 form-control" name="kompetensi" id="kompetensi" onChange="getDataTraining()">
                                                    <option value="">--- Pilih Kompetensi ---</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Kategori Pelatihan</label>
                                            <div class="col-sm-7">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">Pelatihan</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama Pelatihan</label>
                                            <div class="col-sm-7">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">Pelatihan IT Asset Lifecircle Management</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Justifikasi Pengajuan</label>
                                            <div class="col-sm-7">
                                                <textarea type="text"  name="justifikasi" id="justifikasi"  class="form-control input-sm" ><?php echo @$detail->justifikasi_pengajuan;?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Metode Pembelajaran</label>
                                            <div class="col-sm-7">
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
                                            <label class="col-sm-3 control-label">Estimasi Biaya Per Orang</label>
                                            <div class="col-sm-7">
                                                <!-- <input  class="form-control" name="pilih_produk" id="edit-pilih_produk" value="1.000.000">  -->
                                                <input  class="form-control input_mask" name="estimasi_biaya" id="estimasi_biaya" value="<?php echo number_format(@$detail->estimasi_biaya);?>"> 
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama Penyelenggara</label>
                                            <div class="col-sm-7">
                                                <input  class="form-control" name="pilih_produk" id="edit-pilih_produk" value="Pusditlat Telkom"> 
                                            </div>
                                        </div> -->
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama Penyelenggara <span style="color: red">*</span></label>
                                            <div class="col-sm-5">
                                                <select class="select2 form-control" name="penyelenggara" id="penyelenggara">
                                                    <option value=""> Pilih Lembaga</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2" id="divBtnAddPenyelenggara">
                                                <button type="button" class="btn btn-info btn-sm pull-left" id="btnText" onclick="addPenyelenggara()"><b> <li class="fa fa-plus"></li> Tambah Penyelenggara</b> </button>
                                            </div>
                                        </div>
                                        <div class="form-group" style="display:none" id="divAddNew">
                                            <label class="col-sm-3 control-label">&nbsp;</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="new_penyelenggara" id="new_penyelenggara">
                                            </div>
                                            <div class="col-md-1">
                                                <button type="button" class="btn btn-danger btn-sm pull-left" onclick="deletePenyelenggara()"><b> <li class="fa fa-remove"></li> Batal tambah baru </b> </button>
                                            </div>
                                        </div>
                                        <div class="form-group">                    
                                            <label class="col-sm-3 control-label">Rencana Waktu Pelaksanaan <span style="color: red">*</span></label>
                                            <div class="col-sm-7" id="date">
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
                                    </div> 
                                </div>
                            </div>
                        
                            <div class="box-footer">

                                <div class="col-sm-10">
                                    <div class="pull-right"> 
                                        <a href="<?php echo base_url('tna/usulan');?>" class="btn btn-default">Kembali</a>
                                        <button type="submit" class="btn btn-info ">Simpan</button>
                                        
                                    </div>
                                </div>
                                <div class="col-sm-6"> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script>

// const base_url = '<?php echo site_url(); ?>'

$(document).ready(function () {
    $('#waktu_pelaksanaan').daterangepicker();

    $('.input_mask').mask('000.000.000.000', {reverse: true});

    let kompetensi = '<?php echo @$detail->r_tna_kompetensi_id;?>'
    getDataJob(kompetensi)

    let lembaga = '<?php echo @$detail->nama_penyelenggara;?>'
    getDataLembaga(lembaga)

    $('.select2').select2({
        placeholder: "Please Select"
    });


    $(".form-horizontal").validate({
        rules: {
            name_bank: "required",
            cabang_bank: "required",
            address_bank: "required",
            jenis_rek: "required",
            norek: "required",

        },
        messages: {
            name_bank:{
                required:"<i class='fa fa-times'></i> Nama bank harus diisi"
            },
            cabang_bank:{
                required:"<i class='fa fa-times'></i> Cabang bank harus diisi"
            }, 
            address_bank:{
                required:"<i class='fa fa-times'></i> Alamat bank harus diisi"
            },
            jenis_rek:{
                required:"<i class='fa fa-times'></i> Jenis rekening harus diisi"
            }, 
            norek:{
                required:"<i class='fa fa-times'></i> Nomor rekening harus diisi"
            },
            
        },
        highlight: function (element) {
            $(element).parent().parent().addClass("has-error")
            $(element).parent().addClass("has-error")
        },
        unhighlight: function (element) {
            $(element).parent().removeClass("has-error")
            $(element).parent().parent().removeClass("has-error")
        }
    });
});

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

function getDataLembaga(lembaga){
    let pelatihanId = $('#tna').val();
    $('#penyelenggara').empty()
    $('#penyelenggara').append('<option value="">Pilih Penyelenggara</option')
    $.ajax({
        url:base_url+'tna/tna/getPenyelenggara',
        method: 'post',
        dataType: 'json',
        data: { pelatihanId:99999},
        success: function(response){
            console.log(response)
            for (var i = 0; i < response.length; i++) {
                var selected = "";
                if(lembaga == response[i]['nama_lembaga']){
                    selected = "selected";
                }
                $('#penyelenggara').append('<option '+selected+'>'+response[i]['nama_lembaga']+'</option>')
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
</script>
