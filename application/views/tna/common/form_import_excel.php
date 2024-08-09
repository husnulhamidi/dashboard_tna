<style type="text/css">
    .panel-info>.panel-heading {
        background-color: #00c0ef !important;
        border-color: #00acd6 !important;
        color: #fff;
    }
</style>
<div class="modal fade" id="ModalImportExcel" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="defaultModalLabel">Import Data</h4>
            </div>
            <div class="modal-body">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <b>Import Excel</b>
                            <span class="pull-right clickable" data-menu="penlok"><a data-toggle="collapse" href="#collapseOne"><i class="glyphicon glyphicon-chevron-down" style="color:white"></i></a></span>
                        </h5>
                    </div>
                    <div id="collapseOne" class="panel-collapse">
                        <div class="panel-body">
                            <div class="col-sm-12">
                                <form action="#" id="import-excel"  enctype="multipart/form-data">
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <label>File Excel </label>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="file" name="file-import" id="file-import" required accept=".csv,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" >
                                                    <input type="hidden" name="input-file-excel" value="file-import">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row clearfix">
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <!-- <label>&nbsp;&nbsp;</label> -->
                                                     <input type="hidden" id="internalSharingId" name="internalSharingId">
                                                    <button type="submit" class="btn btn-primary btn-md" id="btn-submit-import">Upload</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                   <span id="template_upload"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="progress pgrs-project" style="display: none;">
                                        <div class="progress-bar progress-bar-striped active persentase-project" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">0%</div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-12" id="div-duplicate" style="display: none;">
                                <div class="col-md-6"><label>Data Duplikat</label></div>
                                <table class="table table-bordered table-responsive table-hover table-striped" width="50%">
                                    <thead>
                                        <tr>
                                            <td class="text-center">No</td>
                                            <td>No WO</td>
                                        </tr>
                                    </thead>
                                    <tbody class="tbody-content">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#file-import').filestyle({
        btnClass : 'btn-success',
        text : 'Select File',
        htmlIcon : '<span class="fa fa-folder"></span> ',
    }); 
    

    $("#btn-submit-import").click(function(e){
        //alert();
        e.preventDefault();

        $("#div-duplicate").hide();
        $(".tbody-content").html('');
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
                              $('#form-invoice')[0].reset();
                            }, 5000);

                        }

                    }
                }, false);

                return xhr;
            },
            url: url_submit_import,
            type: "POST",
            data:  new FormData($("#import-excel")[0]),
            contentType: false,
            cache: false,
            processData:false,
            success: function(response) {
                 
                $.each(JSON.parse(response), function( index, item ) {
                    if(item.rc=='0000'){
                        setTimeout(function() {
                            swal({
                                title: "Notification!",
                                text: "Success Import Data",
                                imageUrl: img_icon_success
                            }, function() {
                               oTable.ajax.reload();
                            });
                        }, 1000);

                    }else if(item.rc=='0005'){
                        setTimeout(function() {
                            swal({
                                title: "Notification!",
                                text: "Gagal import data",
                                imageUrl: img_icon_error
                            }, function() {
                                oTable.ajax.reload();
                            });
                        }, 1000);
                    }else if(item.rc=='0001'){
                        setTimeout(function() {
                            swal({
                                title: "Notification!",
                                text: "Terjadi kesalahan Database / File!",
                                imageUrl: img_icon_error
                            }, function() {
                                oTable.ajax.reload();
                            });
                        }, 1000);
                    }else if(item.rc=='0008'){
                        setTimeout(function() {
                            swal({
                                title: "Notification!",
                                text: "Import di batalkan, Terdapat duplikasi No WO excel dengan database",
                                imageUrl: img_icon_error
                            }, function() {
                                $("#div-duplicate").show();
                                $.each(JSON.parse(JSON.stringify((item.data))), function( index_parent, item_parent ) {
                                    $(".tbody-content").append('<tr><td class="text-center">'+item_parent.no+'</td><td >'+item_parent.no_wo_duplicate+'</td></tr>');
                                });
                                oTable.ajax.reload();
                            });
                        }, 1000);
                    }
                });
            }          
        });
        
        return false;
    });

</script>