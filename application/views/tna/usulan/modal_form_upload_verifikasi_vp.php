<!-- Modal -->
<div class="modal fade" id="ModalUploadVerifikasiVP" tabindex="-1" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-md" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Upload Verifikasi VP</h4>
            </div>
            <div class="modal-body">
                    <form method="post" action="javascript;" id="form_upload_verifikasi_vp" class="form-horizontal form-add" enctype="multipart/form-data">
                    
                    <div class="box-body">
                    
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Kode Download</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="kode_download" id="kode_download">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Upload verifikasi</label>
                        <div class="col-sm-8">
                            <div class="form-line">
                                <input type="file" name="file-import" id="file-import" required accept="application/pdf" >
                                <input type="hidden" name="input-file-pdf" value="file-import">
                            </div>
                        </div>
                    </div>
                    <div class="progress pgrs-project" style="display: none;">
                        <div class="progress-bar progress-bar-striped active persentase-project" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">0%</div>
                    </div>
                   
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        
                        <div class="">
                            <div class="pull-right"> 
                                <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="false">Close</button>
                                <button type="submit" id="btn_submit_upload_verifikasi_vp" class="btn btn-info ">Simpan</button>
                                
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
    $('#file-import').filestyle({
        btnClass : 'btn-success',
        text : 'Select File',
        htmlIcon : '<span class="fa fa-folder"></span> ',
    }); 

    $("#btn_submit_upload_verifikasi_vpx").click(function(e){
        //alert();
        e.preventDefault();

        //$("#div-duplicate").hide();
        //$(".tbody-content").html('');
        $(".persentase-project").attr('aria-valuenow','0');
        $(".persentase-project").css('width','0%');
        $(".persentase-project").html('0%');
        $(".pgrs-project").show();
        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();

                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = evt.loaded / evt.total;
                        percentComplete = parseInt(percentComplete * 100);
                        console.log(percentComplete);
                        $(".persentase-project").attr('aria-valuenow',percentComplete);
                        $(".persentase-project").css('width',percentComplete+'%');
                        $(".persentase-project").html(percentComplete+'%');
                        if (percentComplete === 100) {
                            setTimeout(function() {
                              $(".pgrs-project").fadeOut('slow');
                              $('#form_upload_verifikasi_vp')[0].reset();
                            }, 5000);

                        }

                    }
                }, false);

                return xhr;
            },
            url: base_url+"usulan/upload/vp-hcm",
            type: "POST",
            data:  new FormData($("#form_upload_verifikasi_vp")[0]),
            contentType: false,
            cache: false,
            processData:false,
            success: function(response) {
                 
            }          
        });
        
        return false;
    });
    </script>


