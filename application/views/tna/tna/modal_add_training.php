<!-- Modal -->
<div class="modal fade" id="modalTambahTraining" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Form Tambah Pelatihan </h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-add-training" enctype="multipart/form-data" id="form-add-training">
                    <input type="hidden" id="notes" name="notes">
                    <input type="hidden" id="type" name="type">
                    <input type="hidden" id="komp" name="komp">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label"> Pelatihan / Sertifikasi (TNA)  </label>
                                    <div class="col-sm-6">
                                        <select class="form-control select2 selectTraining" name="select_training" id="select_training">
                                            <option value="">--- Pelatihan / Sertifikasi (TNA)  ---</option>
                                            <?php 
                                                foreach ($tna as $val) {
                                                    echo '<option value="' . $val->id . '|' . $val->name . '">' .$val->code .' | '.$val->name . '</option>';
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
                                        <label class="col-sm-3 control-label"> &nbsp; </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="new_training" id="new_training">
                                        </div>
                                        <span id="errorLembaga2" style="color:red; margin-left:18%; display:none">Lembaga Wajib diisi</span>
                                    </div>
                                </div>
                                
                            </div> <!-- end col-12 -->
                            
                        </div><!-- end row -->
                        
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        
                        <div class="">
                            <div class="pull-right"> 
                                <button type="submit" id="btn-submit-add-training" class="btn btn-primary" >Simpan</button>
                                <button type="button" class="btn btn-default"  data-dismiss="modal" aria-hidden="false">Close</button>
                                
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
        $('#notes').val('dropDown')
        
        $('#jenis_development').on('change', function(){
            $('#type').val(this.value)
        })

        $('#kompetensi').on('change', function(){
            $('#komp').val(this.value)
        })
    })

    $('.input-baru').click(function(){
        $('.divInputBaru').css('display', 'block');
        $('.selectTraining').attr('disabled', true)
        $('.input-baru').css('display', 'none')
        $('.batal-tambah-baru').css('display', 'block')
        $('#notes').val('inputBaru')
        $('#errorLembaga1').css('display','none')

        // $('#tna').empty()
        // $('#tna').append('<option></option')
        // $('#nama_kegiatan').val()
    })

    $('.batal-input-baru').click(function(){
        $('.divInputBaru').css('display', 'none');
        $('.selectTraining').attr('disabled', false)
        $('.input-baru').css('display', 'block')
        $('.batal-tambah-baru').css('display', 'none')
        $('#notes').val('dropDown')
        $('#errorLembaga2').css('display','none')
    })

    $('#btn-submit-add-training').click(function(){
        const type = $('#type').val()
        const komp = $('#komp').val()
        const notes = $('#notes').val()
        if(notes != 'dropDown'){
            if(type == '' || komp == ''){
                setTimeout(function() {
                    swal({
                        title: "Notifikasi!",
                        text: "Wajib memilih Jenis Development Karyawan dan Kompetensi terlebih dahulu!",
                        imageUrl: img_icon_error
                    }, function() {
                        $('#modalTambahTraining').modal('hide')
                    });
                }, 1000);
            }else{
                submitTraining()
            }
            
        }else{
            const training = $('#select_training').val().split('|');
            $('#tna').append('<option selected value="'+training[0]+'|'+training[1]+'" >' + training[1] + '</option>');
            getCode()
            $('#modalTambahTraining').modal('hide')
        }
       
    })

    function submitTraining(){
        $.ajax({
            url: base_url+"tna/submit_training",
            type: 'POST',
            dataType: "JSON",
            data: $('#form-add-training').serializeArray(),
            success: function(response) {
                console.log(response)
                $('#tna').append('<option selected value="'+response.id+'|'+response.name+'" >' + response.code +' | '+response.name + '</option>');
                getCode()
                $('#modalTambahTraining').modal('hide')
            }            
        });
    }

</script>