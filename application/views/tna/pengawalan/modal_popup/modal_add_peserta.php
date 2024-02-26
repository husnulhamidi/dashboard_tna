<!-- Modal -->
<div class="modal fade" id="modalTambahPeserta" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Form tambah peserta </h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-add-peserta" enctype="multipart/form-data" id="form-add-peserta">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">
                            <input type="hidden" name="isId" id="isId">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Subunit/unit <span style="color: red">*</span> </label>
                                    <div class="col-sm-10">
                                         <select class="select2 form-control" placeholder="Pilih SubUnit" id="direktorat" name="direktorat" onchange="getDataPemateri()">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Karyawan<span style="color: red">*</span></label>
                                    <div class="col-sm-10">
                                        <select class="select2 form-control" placeholder="Pilih Narasumber" name="peserta" id="peserta">
                                            <option value=""></option>
                                        </select>
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
        $('.select2').select2({
            placeholder: "Silahkan pilih"
        });
        getDirektorat()
        $('.form-add-peserta').click(function(){
            submitAddPeserta();
        })
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

    function getDataPemateri(){
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
                    $('#peserta').append('<option value='+response[i]['id']+'>'+response[i]['nama']+'</option>')
                }
                
            }
        });
    }

    function submitAddPeserta(){
        $("#form-add-peserta").validate({
        rules: {
            direktorat: "required",
            peserta: "required",
        },
        messages: {
            dokumentasi:{
                direktorat:"<i class='fa fa-times'></i> Subunit harus diisi"
            },
            peserta:{
                direktorat:"<i class='fa fa-times'></i> Peserta harus diisi"
            }, 
                        
        },
        highlight: function (element) {
            $(element).parent().parent().addClass("has-error")
            $(element).parent().addClass("has-error")
        },
        unhighlight: function (element) {
            $(element).parent().removeClass("has-error")
            $(element).parent().parent().removeClass("has-error")
        },
        submitHandler: function(form) {
            $.ajax({
                url: base_url+"tna/pengawalan/add_peserta",
                type: 'POST',
                data:$('#form-add-peserta').serialize(),
                dataType: "JSON",
                success: function(response) {
                    console.log(response)
                    // var newResponse = JSON.parse(response);
                    // console.log(newResponse)
                    if(response.success){
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: "Data berhasil disimpan",
                                imageUrl: img_icon_success
                            }, function(d) {
                                location.reload();
                            });
                        }, 1000);
                    }else{
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: newResponse.msg,
                                imageUrl: img_icon_error
                            }, function() {
                                location.reload();
                            });
                        }, 1000);
                    }                   
                }            
            });
        }
    });
    }

    

</script>]