<!-- Modal -->
<div class="modal fade" id="modalPaktaIntegrias" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Pakta Integritas </h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-pakta-integritas" id="form-pakta-integritas" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="idPaktaIntegritas">
                    <input type="hidden" name="urutanId" id="urutanIdPaktaIntegritas">
                    <input type="hidden" name="tahapanId" id="tahapanIdPaktaIntegritas">
                    <input type="hidden" name="tipe" id="tipe" value="pakta integritas">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                Telah terupdate secara otomatis oleh system pada data berikut
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px; margin-left:20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Nama </label>
                                <div class="col-md-6"> <span id="namaKaryawanPaktaIntegritas"></span> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px; margin-left:20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> NIK </label>
                                <div class="col-md-6"> <span id="nikPaktaIntegritas"></span> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px; margin-left:20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Nama Penyelenggara </label>
                                <div class="col-md-6"> <span id="penyelenggaraPaktaIntegritas"></span> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px; margin-left:20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Pelatihan  </label>
                                <div class="col-md-6"> <span id="pelatihanPaktaIntegritas"></span> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px;margin-left:20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Unit  </label>
                                <div class="col-md-6"> <span id="organisasiPaktaIntegritas"></span> </div>
                            </div>
                        </div>
                      <!--   <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <div class="col-md-4"> Lampiran </div>
                                <div class="col-md-6">
                                    <a href="#"> lihat Dokumen </a>
                                </div>
                            </div>
                        </div>  -->
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <label class="btn btn-primary btn-block">
                                        <i class="fa fa-file-o"></i> 
                                        Upload File
                                        <input type="file" name="fileName" id="file-pakta-integritas" style="display: none;" accept=".pdf">
                                        <input type="hidden" name="file-pakta-integritas" value="file-pakta-integritas">
                                    </label>
                                </div>
                                <div class="col-md-8">
                                    <span class="fileName"></span>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="box-footer">
                        
                        <div class="">
                            <div class="pull-right"> 
                                <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="false">Batal</button>
                                <button 
                                    type="submit" 
                                    class="btn btn-info submit-pakta-integritas" id="submit-pakta-integritas">
                                    Simpan
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
        $('#fileName').change(function() {
            var fileName = $(this).val().split('\\').pop();
            $('.fileName').html('<b>Filename : </b>' + fileName)
        });
    })
</script>
