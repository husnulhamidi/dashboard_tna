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
                    <input type="hidden" id="keterangan" name="keterangan">
                    <input type="hidden" id="r_tna_training_id" name="r_tna_training_id">
                    <input type="hidden" id="nama_pelatihan" name="nama_pelatihan">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label"> Pilih Lembaga </label>
                                    <div class="col-sm-8">
                                        <select class="form-control select2 selectLembaga" name="select_lembaga" id="select_lembaga">
                                                <option value="">--- Pilih Lembaga ---</option>
                                                <?php 
                                                    foreach ($lembaga as $val) {
                                                        echo "<option value=".$val->id.">".$val->nama_lembaga.'</option>';
                                                    }
                                                ?>
                                        </select>
                                    </div>
                                    <div class="col-md-2 tambah-baru" >
                                        <button class="btn btn-info btn-sm pull-left input-baru" ><b> <li class="fa fa-plus"></li> Input Baru </b> </button>
                                    </div>
                                    <div class="col-md-2 batal-tambah-baru" style="display:none">
                                        <button class="btn btn-danger btn-sm pull-left batal-input-baru" ><b> <li class="fa fa-close"></li> Batal Input Baru</b> </button>
                                    </div>
                                    <span id="errorLembaga1" style="color:red; margin-left:18%; display:none">Lembaga Wajib diisi</span>
                                </div>
                                

                                <div id="input-baru" class="divInputBaru" style="display:none">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"> Nama Lembaga <span style="color:red">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="new_penyelenggara" id="new_penyelenggara">
                                        </div>
                                        <span id="errorLembaga2" style="color:red; margin-left:18%; display:none">Lembaga Wajib diisi</span>
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
                                <div class="divInputBaru" style="display:none">
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
                                </div>
                                
                            </div> <!-- end col-12 -->
                            
                        </div><!-- end row -->
                        
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        
                        <div class="">
                            <div class="pull-right"> 
                                <button type="submit" id="btn-submit-add-penyelenggara" class="btn btn-primary" >Simpan</button>
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
        $('#keterangan').val('dropDown')
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

    $('.input-baru').click(function(){
        $('.divInputBaru').css('display', 'block');
        $('.selectLembaga').attr('disabled', true)
        $('.input-baru').css('display', 'none')
        $('.batal-tambah-baru').css('display', 'block')
        $('#keterangan').val('inputBaru')
        $('#errorLembaga1').css('display','none')
    })

    $('.batal-input-baru').click(function(){
        $('.divInputBaru').css('display', 'none');
        $('.selectLembaga').attr('disabled', false)
        $('.input-baru').css('display', 'block')
        $('.batal-tambah-baru').css('display', 'none')
        $('#keterangan').val('dropDown')
        $('#errorLembaga2').css('display','none')
    })

    $('#btn-submit-add-penyelenggara').click(function(){
        var idTNA = $('#tna').val()
        var kegiatan = $('#nama_kegiatan').val()

        $('#r_tna_training_id').val(idTNA)
        $('#nama_pelatihan').val(kegiatan)
        if(idTNA){
            submitLembaga();
        }else{
            setTimeout(function() {
                swal({
                    title: "Notifikasi!",
                    text: "Wajib memilih Pelatihan / Sertifikasi (TNA) terlebih dahulu!",
                    imageUrl: img_icon_error
                }, function() {
                    $('#modalTambahPenyelenggara').modal('hide')
                });
            }, 1000);
        }
    })

    function submitLembaga(){
        let keterangan = $('#keterangan').val()
        var lembaga = '#select_lembaga';
        var error = '#errorLembaga1'
        if(keterangan != 'dropDown'){
            lembaga = '#new_penyelenggara';
            error = '#errorLembaga2'
        }
        let checkLembaga = $(lembaga).val()
        console.log(checkLembaga)
        if(!checkLembaga){
            $(error).css('display','block')
        }else{
            $.ajax({
                url: base_url+"tna/submit_lembaga",
                type: 'POST',
                dataType: "JSON",
                data: $('#form-add-penyelenggara').serializeArray(),
                success: function(response) {
                    // console.log(response)  
                    $('#penyelenggara').append('<option selected>'+response+'</option>') 
                    $('#modalTambahPenyelenggara').modal('hide')                     
                }            
            });
        }
       
    }


</script>