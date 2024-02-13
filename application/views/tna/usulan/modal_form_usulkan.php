<div class="modal fade" id="ModalFormUsulan" tabindex="-1" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-md" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Konfirmasi Usulkan Pengajuan Usulan TNA</h4>
            </div>
            <div class="modal-body">
                <form id="formUsulkanTNA" method="post" action="javascript:;" class="form-horizontal form-usulkantna" enctype="multipart/form-data">
                    <div class="box-body">
                    <div class="form-group">
                        <div class="col-sm-12">
                        <p>Yakin akan mengusulkan Pengajuan TNA INI ? <b><?php //echo$r->no_spb;?></b></p>
                        </div>
                    </div>
                   
                        <input type="hidden"  name="usulan_id" id="usulan_id" class="form-control input-sm" value="<?php //echo$r->id;?>">
                        <input type="hidden"  name="status_proses" id="status_proses" class="form-control input-sm" value="<?php //echo$r->status_proses;?>">
                        <input type="hidden"  name="last_status" id="last_status" class="form-control input-sm" value="<?php //echo$r->last_status;?>">
                    </div>
                    <div class="box-footer">
                        <div class="col-sm-12 "> 
                            <div class="pull-right">
                                <a  data-dismiss="modal" class="btn btn-default">Tidak</a>
                                <button type="submit" id="SubmitUsulkan" class="btn btn-info ">Ya, Usulkan</button>
                                
                            </div>
                        </div>
                    </div>
                            
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

$(document).ready(function () {

    // $('body').on('hidden.bs.modal', '.modal', function () {
    //   $(this).removeData('bs.modal');
    // });

   

});
</script>