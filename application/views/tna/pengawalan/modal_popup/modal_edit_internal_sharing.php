<!-- Modal -->
<div class="modal fade" id="modalEditInternalSharing" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Edit Jadwal Internal Sharing </h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-internal-sharing" id="form-internal-sharing">
                    <input type="hidden" name="id" id="internal_sharing_id">
                    <div class="box-body">
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                Waktu Internal Sharing
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Tanggal  <span style="color:red">*</span> </label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input type="text" class="form-control pull-right tgl" id="tgl" name="tgl">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Waktu <span style="color:red">*</span> </label>
                                <div class="col-md-8">
                                    <input type="time" name="waktu" id="waktu" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Tempat <span style="color:red">*</span> </label>
                                <div class="col-md-8">
                                    <input type="text" name="tempat" id="tempat" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Biaya <span style="color:red">*</span> </label>
                                <div class="col-md-8">
                                    <input type="text" name="biaya" id="biaya" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Kuota <span style="color:red">*</span> </label>
                                <div class="col-md-8">
                                    <input type="text" name="kuota" id="kuota" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Link Zoom  </label>
                                <div class="col-md-8">
                                    <input type="text" name="linkZoom" id="linkZoom" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        
                        <div class="">
                            <div class="pull-right"> 
                                <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="false">Close</button>
                                <button 
                                    type="submit" 
                                    class="btn btn-info submit-internal-sharing-edit" id="submit-internal-sharing-edit">
                                    Submit
                                </button>
                                
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
        $('.submit-internal-sharing-edit').click(function(){
             $(".form-internal-sharing").validate({
                rules: {
                    tgl: "required",
                    waktu: "required",
                    tempat: "required",
                    biaya: "required",
                    kuota: "required",
                },
                messages: {
                    tgl:{
                        required:"<i class='fa fa-times'></i> Tanggal wajib dipilih"
                    },
                    waktu:{
                        required:"<i class='fa fa-times'></i> Waktu wajib dipilih"
                    },
                    tempat:{
                        required:"<i class='fa fa-times'></i> Tempat wajib dipilih"
                    },
                    biaya:{
                        required:"<i class='fa fa-times'></i> Biaya wajib dipilih"
                    },
                    kuota:{
                        required:"<i class='fa fa-times'></i> Kuota wajib dipilih"
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
                        url: base_url+"tna/pengawalan/edit_internal_sharing",
                        type: 'POST',
                        dataType: "JSON",
                        data: $('#form-internal-sharing').serialize(),
                        success: function(response) {
                            console.log(response)
                            if(response.success){
                                setTimeout(function() {
                                    swal({
                                        title: "Notifikasi!",
                                        text: "Data berhasil diubah",
                                        imageUrl: img_icon_success
                                    }, function(d) {
                                        location.reload();
                                    });
                                }, 1000);
                            }else{
                                setTimeout(function() {
                                    swal({
                                        title: "Notifikasi!",
                                        text: "Data gagal diubah",
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
        })
    })
</script>
