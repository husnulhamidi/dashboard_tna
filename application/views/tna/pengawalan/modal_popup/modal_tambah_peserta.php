<!-- Modal -->
<div class="modal fade" id="modalTambahPeserta" role="dialog" aria-hidden="true" enctype="multipart/form-data" tabindex="2000">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Form Tambah Peserta </h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="col-sm-2 control-label">Bidang <span style="color: red">*</span> </label>
                                <div class="col-sm-10">
                                    <select class="select2 form-control divAddPeserta" id="bidang">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="padding-top: 10px">
                            <div class="col-lg-12">
                                <label class="col-sm-2 control-label">Subunit/unit <span style="color: red">*</span> </label>
                                <div class="col-sm-10">
                                    <select onchange="getDataPemateri()" class="select2 form-control divAddPeserta" id="direktorat">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="padding-top: 10px">
                            <div class="col-lg-12">
                                <label class="col-sm-2 control-label">Karyawan <span style="color: red">*</span> </label>
                                <div class="col-sm-10">
                                    <select class="select2 divAddPeserta" id="peserta">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="pull-right"> 
                            <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="false">Close</button>
                            <button type="submit" class="btn btn-info submit-tambah-peserta">Simpan</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $(".divAddPeserta").select2({
            dropdownParent: $("#modalTambahPeserta")
        });
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

        $('#pemateri').empty()
        $('#pemateri').append('<option></option')
        $.ajax({
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
                    $('#peserta').append('<option '+selected+' value='+response[i]['id']+'>'+response[i]['nama']+'</option>')
                }
            }
        });
    }

    $('.select2').select2({
        placeholder: "Silahkan pilih"
    });

</script>