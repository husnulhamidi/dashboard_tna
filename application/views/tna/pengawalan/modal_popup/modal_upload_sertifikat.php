<!-- Modal -->
<!-- modalUploadSertifikat -->
<div class="modal fade" id="modalUploadSertifikat" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Upload Sertifikat </h4>
            </div>
            <div class="modal-body">
                <div>
                    <form method="post" action="javascript:;" class="form-horizontal form-upload_sertifikat" id="form-upload_sertifikat">
                       <input type="hidden" name="id" id="sertifikat_id">
                       <input type="hidden" name="urutanId" id="sertifikat_urutanId">
                       <input type="hidden" name="tahapanId" id="sertifikat_tahapanId">
                       <div class="box-body">
                        <div class="col-md-12">
                            <label class="col-md-4"> Peserta </label>
                            <div class="col-md-6"> NIK <span id="sertifikat_nik"></span> - <span id="sertifikat_nama"></span>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Nama Penyelenggara </label>
                                <div class="col-md-6"> <span id="sertifikat_penyelenggara"></span></div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Pelatihan  </label>
                                <div class="col-md-6"> <span id="sertifikat_pelatihan"></span> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Subdit/unit  </label>
                                <div class="col-md-6"> <span id="sertifikat_unit"></span> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px"><hr></div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Nomor Sertikat  <span style="color:red">*</span> </label>
                                <div class="col-md-8">
                                    <input type="text" name="nomor_serifikat" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Masa Berlaku  <span style="color:red">*</span> </label>
                                <div class="col-md-3">
                                    <input type="text" name="masa_berlaku_awal" class="form-control masa_berlaku" id="masa_berlaku_awal">
                                </div>
                                <div class="col-md-1"> s/d </div>
                                <div class="col-md-4">
                                    <input type="text" name="masa_berlaku_akhir" class="form-control masa_berlaku" id="masa_berlaku_akhir">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Upload File <span style="color:red">*</span> </label>
                                <div class="col-md-8">
                                    <input type="file" name="upload_file" id="upload_file" class="form-control">

                                    <input type="hidden" name="file_sertifikat" value="upload_file">
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
                                class="btn btn-info submit-upload_sertifikat" id="submit-upload_sertifikat">
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
<script>
    $(document).ready(function () {
        $('.masa_berlaku').datepicker()
    })
</script>
