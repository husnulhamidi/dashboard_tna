<!-- Modal -->
<div class="modal fade" id="modalTambahPenyelenggara" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Form Tambah Penyelenggara </h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-add-penyelenggara" enctype="multipart/form-data" id="form-add-penyelenggara">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label"> Nama Lembaga </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="new_penyelenggara" id="new_penyelenggara">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label"> Jenis Pelatihan </label>
                                    <div class="col-sm-10">
                                        <select class="form-control select2" name="jenis_pelatihan">
                                                <option value="">--- Pilih Jenis Pelatihan ---</option>
                                                <?php 
                                                    foreach ($jenis_development as $jd) {
                                                        echo "<option value='".$jd->label."'>".$jd->label.'</option>';
                                                    }
                                                ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label"> Metoda Pelatihan </label>
                                    <div class="col-sm-10">
                                        <select class="form-control select2" name="metoda">
                                            <option value="">--- Pilih ---</option>
                                            <?php 
                                                foreach ($metoda as $mt) {
                                                    echo "<option value='".$mt->label."'>".$mt->label.'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label"> Biaya </label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="biaya" id="biaya">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label"> Kapasitas </label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="kapasitas" id="kapasitas">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label"> PIC </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="pic" id="pic">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label"> Telp </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="telp" id="telp">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label"> Website </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="website" id="website">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label"> Alamat </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="alamat" id="alamat">
                                    </div>
                                </div>
                                
                            </div> <!-- end col-12 -->
                            
                        </div><!-- end row -->
                        
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        
                        <div class="">
                            <div class="pull-right"> 
                                <button type="button" class="btn btn-default" onclick="btnClose()" data-dismiss="modal" aria-hidden="false">Close</button>
                                
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