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
                    <form method="post" action="javascript:;" class="form-horizontal form-InternalSharing" id="form-InternalSharing" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id" value=<?php echo @$detail->id;?>>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12">
                                <div class="form-group">
                                        <label class="col-sm-2 control-label">Job Family <span class="text-red">*</span></label>
                                        <div class="col-sm-8">
                                            <select class="select2 form-control" name="jobFamily" id="jobFamily" onChange="getJobFunc()">
                                                <option value="">--- Pilih Job Family ---</option>
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Job Function <span class="text-red">*</span></label>
                                        <div class="col-sm-8">
                                            <select class="select2 form-control" name="jobFunc" id="jobFunc" onChange="getJobRole()">
                                                <option value="">--- Pilih Job Function ---</option>
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Job Role <span class="text-red">*</span></label>
                                        <div class="col-sm-8">
                                            <select class="select2 form-control" name="jobRole" id="jobRole" onChange="getDataKompetensi()">
                                                <option value="">--- Pilih Job Role ---</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Kompetensi <span style="color: red">*</span></label>
                                        <div class="col-sm-8">
                                            <select class="select2 form-control" name="kompetensi" id="kompetensi" >
                                                <option value="">--- Pilih Kompetensi ---</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Judul Materi <span class="text-red">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Judul materi" name="judul" id="judul" value="<?php echo @$detail->judul_materi;?>" >
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label class="col-sm-2 control-label">Materi <span class="text-red">*</span></label>
                                        <div class="col-sm-8">
                                            
                                            <input type="file" name="file_materi" id="file_materi" class="form-control" >
                                            <input type="hidden" name="upload_file_materi" value="file_materi">
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Subdit / Unit <span class="text-red">*</span></label>
                                        <div class="col-sm-8">
                                           <select class="select2 form-control" id="direktorat" name="direktorat" onchange="getDataPemateri()">
                                               <option value=""> Pilih Subdit / Unit</option>
                                           </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Pemateri <span class="text-red">*</span></label>
                                        <div class="col-sm-8">
                                           <select class="select2 form-control" id="pemateri" name="pemateri">
                                               <option value=""> Pilih Pemateri</option>
                                           </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tanggal <span class="text-red">*</span></label>
                                        <div class="col-sm-2">
                                            <div class="input-group">
                                                <input type="text" class="form-control pull-right" id="tgl" name="tgl"  >
                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>

                                        <label class="col-sm-1 control-label">Jam <span class="text-red">*</span></label>
                                        <div class="col-sm-2">
                                            <!-- <div class="input-group">
                                                
                                                <input type="time" class="form-control pull-right timepicker" id="time" name="time">
                                                <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
                                            </div> -->
                                            <input type="time" class="form-control pull-right timepicker" value="<?php echo @$detail->jam;?>" id="time" name="time" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tempat <span class="text-red">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Temapt" name="tempat" id="tempat" value="<?php echo @$detail->tempat;?>" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Biaya <span class="text-red">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Biaya" value="<?php echo @$detail->biaya;?>" name="biaya" id="biaya">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Kuota <span class="text-red">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="kuota" value="<?php echo @$detail->kuota;?>" name="kuota" id="kuota">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">No Urut <span class="text-red">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="number" max=9999 class="form-control" placeholder="No Urut" value="<?php echo @$detail->no_urut;?>" name="no_urut" id="no_urut">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Link Zoom </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Link Zoom" name="linkZoom" id="linkZoom" value="<?php echo @$detail->link_zoom;?>">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="box-footer">

                            <div class="col-sm-8">
                                <div class="pull-right"> 
                                    <a href="<?php echo base_url('tna/InternalSharing');?>" class="btn btn-default">Kembali</a>
                                    <button type="submit" class="btn btn-info submit-internal-sharing">Simpan</button>

                                </div>
                            </div>
                            <div class="col-sm-8"> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    // var base_url = '<?php echo base_url('tna/internalSharing');?>';
</script>
<script type="text/javascript">
$(document).ready(function () {
    $('.select2').select2({
        placeholder: "Pilih Opsi"
    });

    $('#tgl').datepicker({
        autoclose: true
    });

    const tgl = '<?php echo @$detail->tanggal ;?>';
    if(tgl){
        $('#tgl').val(formatDate2(tgl))
    }
    
    var unit = '<?php echo @$detail->m_organisasi_id ;?>'
    getDirektorat(unit)
    if(unit){
        var karyawan = '<?php echo @$detail->m_karyawan_id ;?>'
        getDataPemateri(unit,karyawan)
    }

    if($('#id').val()){
        const jobFamily = '<?php echo @$detail->r_tna_job_family_id ;?>'
        const jobFunct = '<?php echo @$detail->r_tna_job_function_id ;?>'
        const jobRole = '<?php echo @$detail->r_tna_job_role_id ;?>'
        const kompetensi = '<?php echo @$detail->r_tna_kompetensi_id ;?>'
        // console.log('jobFamily', jobFamily)
        getJobFamily(jobFamily, jobFunct, jobRole, kompetensi)
    }else{
        getJobFamily()
    }
    
    
})

function getDirektorat(unit){
    $('#direktorat').empty()
    $('#direktorat').append('<option></option')
    $.ajax({
        url:base_url+'tna/internalSharing/getDirektorat',
        method: 'get',
        dataType: 'json',
        success: function(response){
            for (var i = 0; i < response.length; i++) {
                var selected = "";
                if(unit == response[i]['id']){
                    selected = "selected";
                }
                $('#direktorat').append('<option '+selected+' value='+response[i]['id']+'>'+response[i]['nama']+'</option>')
            }
        }
    });
}

function getDataPemateri(idDir = false, karyawan = false){
    var dirId = $('#direktorat').val()
    if(dirId == ''){
        dirId = idDir
    }
    
    $.ajax({
        url: '<?php echo site_url('karyawan/ajax_get_karyawan_by_organisasi'); ?>',
        type: 'POST',
        async: false, 
        data: { id: dirId },
        dataType: 'json',
        success: function (result) {
            $("#pemateri").empty(); 
            $('#pemateri').append('<option value="">-- Pilih Karyawan --</option>');
            if(result !== null){
                $.each(result, function(i, value) {
                    var selected = "";
                    if(karyawan == value['id']){
                        selected = "selected";
                    }
                    $('#pemateri').append('<option '+selected+' value=' + value['id'] + '>' + value['nama'] + ' | '+ value['nik_tg']+' | '+value['jabatan_nama']+'</option>');
                });
            }
        }
    });
    /*$.ajax({
        url:base_url+'tna/internalSharing/getPemateriByDirKom/'+dirId,
        method: 'get',
        dataType: 'json',
        success: function(response){
            console.log(response)
            for (var i = 0; i < response.length; i++) {
                var selected = "";
                if(karyawan == response[i]['id']){
                    selected = "selected";
                }
                $('#pemateri').append('<option '+selected+' value='+response[i]['id']+'>'+response[i]['nama']+'</option>')
            }
        }
    });*/
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
            $.each(response, function(index, item) {
                var selected = "";
                if(datakompetensi && datakompetensi == item.id){
                    // console.log(item.id)
                    // console.log(item.kompetensi)
                    selected = "selected";
                }
                $('#kompetensi').append('<option '+selected+' value="'+item.id+'" >' + item.code + ' | ' + item.kompetensi + '</option>');
            });
           
            
        },
    });
}


</script>
