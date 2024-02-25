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

    // function getDataPemateri(idDir = false, karyawan = false){
    //     var dirId = $('#direktorat').val()
    //     if(dirId == ''){
    //         dirId = idDir
    //     }
       
    //     $('#pemateri').empty()
    //     $('#pemateri').append('<option></option')
    //     $.ajax({
    //         url:base_url+'tna/internalSharing/getPemateriByDirKom/'+dirId,
    //         method: 'get',
    //         dataType: 'json',
    //         success: function(response){
    //             console.log(response)
                // for (var i = 0; i < response.length; i++) {
                //     var selected = "";
                //     if(karyawan == response[i]['id']){
                //         selected = "selected";
                //     }
                //     $('#peserta').append('<option '+selected+' value='+response[i]['id']+'>'+response[i]['nama']+'</option>')
                // }
    //         }
    //     });
    // }

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
                    $('#peserta').append('<option value='+response[i]['id']+'>'+response[i]['nama']+'</option>')
                }
                
            }
        });
    }

    $('.select2').select2({
        placeholder: "Silahkan pilih"
    });

</script>