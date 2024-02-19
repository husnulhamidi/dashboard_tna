<!-- Modal -->
<div class="modal fade" id="modalNotaDinasPenugasan" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Form Nota Dinas Penugasan </h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-nota-dinas" id="form-nota-dinas" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="notaDinasId">
                    <input type="hidden" name="urutanId" id="notaDinasUrutanId">
                    <input type="hidden" name="tahapanId" id="notaDinasTahapanId">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h5> Upload Dokumen NDE </h5>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px; margin-left: 20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> No NDE <span style="color:red">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" name="no_nde" class="form-control" placeholder="No NDE">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px; margin-left: 20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Perihal <span style="color:red">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" name="perihal" class="form-control" placeholder="Perihal">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px; margin-left: 20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Tanggal Rilis <span style="color:red">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" name="tgl_rilis" class="form-control" placeholder="Tanggal Rilis" id="tgl_rilis">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px; margin-left: 20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Disetujui Oleh <span style="color:red">*</span></label>
                                <div class="col-md-8">
                                    <!-- <input type="text" name="disetujui_oleh" class="form-control" placeholder="Disetujui Oleh"> -->
                                    <select id="approved_by" class="select2 form-control" name="disetujui_oleh">
                                        <option value=""> Disetujui Oleh</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px; margin-left: 20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Keterangan <span style="color:red">*</span></label>
                                <div class="col-md-8">
                                    <textarea class="form-control" name="keterangan"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px; margin-left: 20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Uplaod Dokumen <span style="color:red">*</span></label>
                                <div class="col-md-8">
                                    <input type="file" name="upload_dokumen" id="upload_dokumen" class="form-control">

                                    <input type="hidden" name="file_dokumen" value="upload_dokumen">
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
                                    class="btn btn-info submit-nota-dinas" id="submit-nota-dinas">
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
<?php $this->load->view('tna/pengawalan/modal_popup/modal_form_sppdp');?>
<script type="text/javascript">
    $(document).ready(function(){
        $('#tgl_rilis').datepicker({
          autoclose: true
        });

        $('#approved_by').select2({
            minimumInputLength: 2,
            ajax: {
                url: base_url+'tna/get_karyawan',
                dataType: 'json',
                delay: 250, 
                data:function(params){
                    return{
                        searchTerm:params.term
                    }
                },
                processResults:function(response){
                    return {
                        results:response
                    }
                },
                cache:true
            }
        })
    })
    
</script>
