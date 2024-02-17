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
                    <form method="post" action="javascript:;" class="form-horizontal form-InternalSharing" id="form-InternalSharing" enctype="multipart/form-data">
                        <input type="hidden" name="id" value=<?php echo @$detail->id;?>>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Judul Materi <span class="text-red">*</span></label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Judul materi" name="judul" id="judul" value="<?php echo @$detail->judul_materi;?>" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Subdit / Unit <span class="text-red">*</span></label>
                                        <div class="col-sm-6">
                                           <select class="select2 form-control" id="direktorat" name="direktorat" onchange="getDataPemateri()">
                                               <option value=""> Pilih Subdit / Unit</option>
                                           </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Pemateri <span class="text-red">*</span></label>
                                        <div class="col-sm-6">
                                           <select class="select2 form-control" id="pemateri" name="pemateri">
                                               <option value=""> Pilih Pemateri</option>
                                           </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tanggal <span class="text-red">*</span></label>
                                        <div class="col-sm-3">
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
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Temapt" name="tempat" id="tempat" value="<?php echo @$detail->tempat;?>" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Biaya <span class="text-red">*</span></label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Biaya" value="<?php echo @$detail->biaya;?>" name="biaya" id="biaya">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Kuota <span class="text-red">*</span></label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="kuota" value="<?php echo @$detail->kuota;?>" name="kuota" id="kuota">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Link Zoom </label>
                                        <div class="col-sm-6">
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
                            <div class="col-sm-6"> 
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
</script>
