<!-- Modal -->
<div class="modal fade" id="modalTambahPeserta" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> <span id="labelPeserta"></span> </h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-add-peserta" enctype="multipart/form-data" id="form-add-peserta">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">
                            <input type="hidden"  name="KompetensiID" id="KompetensiID" placeholder="" class="form-control input-sm">
                            <input type="hidden" name="trainingId" id="trainingId" value="<?php echo $detail->id ;?>">
                            <input type="hidden" name="id" id="idPeserta">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Subunit/unit <span style="color: red">*</span> </label>
                                    <div class="col-sm-10">
                                         <select class="select2 form-control" placeholder="Pilih SubUnit" id="direktorat" name="direktorat" onchange="getDataPesertaByOrg()">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Karyawan<span style="color: red">*</span></label>
                                    <div class="col-sm-8">
                                        <select class="select2 form-control" placeholder="Pilih Narasumber" name="peserta" id="peserta">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    <div class="col-md-2" id="divBtnAddKaryawan" style="display:block">
                                        <button class="btn btn-info btn-sm pull-left" id="btn-add-karyawan" onclick="addKaryawan()"><b> <li class="fa fa-plus"></li> Tambah Karyawan</b> </button>
                                    </div>
                                    <div class="col-md-2" id="divBtnCancelKaryawan" style="display:none">
                                        <button class="btn btn-danger btn-sm pull-left" id="btn-cancel-karyawan" onclick="cancelKaryawan()"><b> <li class="fa fa-close"></li> Batal Tambah</b> </button>
                                    </div>
                                </div>
                                <div class="form-tambah" id="form-tambah" style="display:none">
                                    <div class="form-group divAddKaryawan">
                                        <label class="col-sm-2 control-label">Nama Peserta<span style="color: red">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="newKarywan" id="newKarywan" placeholder="Nama Peserta">
                                        </div>
                                    </div>
                                    <div class="form-group divAddKaryawan">
                                        <label class="col-sm-2 control-label">NIK Karyawan<span style="color: red">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK Peserta">
                                        </div>
                                    </div>
                                    <div class="form-group divAddKaryawan">
                                        <label class="col-sm-2 control-label">Jabatan<span style="color: red">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan Peserta">
                                        </div>
                                    </div>
                                    <div class="form-group divAddKaryawan">
                                        <label class="col-sm-2 control-label">Status Peserta<span style="color: red">*</span></label>
                                        <div class="col-sm-10">
                                            <!-- <input type="text" class="form-control" name="status_karyawan" id="status_karyawan" placeholder="Status Peserta"> -->
                                            <select name="status_karyawan" id="status_karyawan" class="form-control">
                                                <option> FTE </option>
                                                <option> Non FTE </option>
                                            </select>
                                        </div>
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
                                <button type="submit" class="btn btn-info submit-tambah-peserta">Simpan</button>
                                
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
    $(document).ready(function(){
        getDirektorat()
        // getDataPemateri()
    })

    function getDirektorat(unit = false){
        console.log(unit)
        $('#direktorat').empty()
        $('#direktorat').append('<option></option')
        $.ajax({
            url:base_url+'tna/internalSharing/getDirektorat',
            method: 'get',
            dataType: 'json',
            success: function(response){
                // console.log(response)
                for (var i = 0; i < response.length; i++) {
                    var selected = "";
                    if(unit == response[i]['id']){
                        selected = "selected";
                    }
                    $('#direktorat').append('<option ' + selected + ' value="' + response[i]['id'] + '#' + response[i]['nama'] + '">' + response[i]['nama'] + '</option>');
                }
            }
        });
    }

    function getDataPesertaByOrg(){
        var dirId = $('#direktorat').val()
        
        $('#pemateri').empty()
        $('#pemateri').append('<option></option')
        $.ajax({
            url: '<?php echo site_url('karyawan/ajax_get_karyawan_by_organisasi'); ?>',
            type: 'POST',
            async: false, 
            data: { id: dirId },
            dataType: 'json',
            success: function(response){
                console.log(response)
                for (var i = 0; i < response.length; i++) {
                    $('#peserta').append('<option value="'+response[i]['id']+'#'+response[i]['nik_tg']+'#'+response[i]['nama']+'">'+response[i]['nama']+'</option>')
                }
                
            }
        });
    }

    $('.select2').select2({
        placeholder: "Silahkan pilih"
    });

    function addKaryawan() {
        $('#divBtnCancelKaryawan').css('display','block')
        $('#divBtnAddKaryawan').css('display','none')
        $('#peserta').attr('disabled', true)
        $('#form-tambah').css('display','block')
    }

    function cancelKaryawan(){
        $('#divBtnCancelKaryawan').css('display','none')
        $('#divBtnAddKaryawan').css('display','block')
        $('#peserta').attr('disabled', false)
        $('#form-tambah').css('display','none')
    }

</script>