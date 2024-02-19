<!-- Modal -->
<div class="modal fade" id="modalKelengkapanDokumen" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Ceklis Kelengkapan Dokumen </h4>
            </div>
            <div class="modal-body">
                <div>
                    <form method="post" action="javascript:;" class="form-horizontal form-kelengkapan-dokumen" id="form-kelengkapan-dokumen" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="dokumenId">
                        <input type="hidden" name="urutanId" id="urutanIdDokumen">
                        <input type="hidden" name="tahapanId" id="tahapanIdDokumen">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="col-md-4"> Peserta </label>
                                    <div class="col-md-6"> NIK <span id="dokumen_nik"></span> - <span id="dokumen_nama"></span>
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 10px">
                                    <div class="col-md-12">
                                        <label class="col-md-4"> Nama Penyelenggara </label>
                                        <div class="col-md-6"> <span id="dokumen_penyelenggara"></span></div>
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 10px">
                                    <div class="col-md-12">
                                        <label class="col-md-4"> Pelatihan  </label>
                                        <div class="col-md-6"> <span id="dokumen_pelatihan"></span> </div>
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 10px">
                                    <div class="col-md-12">
                                        <label class="col-md-4"> Subdit/unit  </label>
                                        <div class="col-md-6"> <span id="dokumen_unit"></span> </div>
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 10px">
                                    <div class="col-md-12">
                                        <label class="col-md-4">Form Pendaftaran</label>
                                        <div class="col-md-12">
                                            <input type="file" name="file-pendaftaran" id="fileNamePendaftaran" class="form-control" accept=".pdf">
                                            <input type="hidden" name="file-pendaftaran" value="file-pendaftaran">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 10px">
                                    <div class="col-md-12">
                                        <label class="col-md-4">Guarantee latter</label>
                                        <div class="col-md-12">
                                            <input type="file" name="file-gurantee" id="fileNameGurantee" class="form-control">
                                            <input type="hidden" name="file-gurantee" value="file-gurantee">
                                        </div>
                                    </div>
                                </div>


                                <div class="row" style="margin:-5px 5px"><hr></div>
                                <div class="row" style="padding-top: 10px">
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <input type="text" name="dokumen" id="dokumen" class="form-control" placeholder="Nama Dokumen">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 15px;margin-left: 1px">
                                    <div class="col-md-4">
                                        <div class="pull-left">
                                            <label class="btn btn-success btn-block">
                                                <i class="fa fa-upload"></i> Upload Dokumen Lainnya
                                                <input type="file" class="fileNameDokumenCSS" name="file-dokumen-lainnya" id="fileNameDokumen" style="display: none;">  
                                            </label>
                                            <input type="hidden" name="file-lainnya" value="file-dokumen-lainnya">

                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <span id="namaDokumen"></span>
                                    </div>

                                </div>
                                
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="">
                                <div class="pull-right"> 
                                    <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="false">Close</button>
                                    <button type="submit" class="btn btn-info submit-kelengkapan-dokumen" id="submit-kelengkapan-dokumen">Submit</button>
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
        $('.fileNameDokumenCSS').change(function() {
            var fileName = $(this).val().split('\\').pop();
            $('#namaDokumen').html('<b>Filename : </b>' + fileName)
        });
    })
</script>

