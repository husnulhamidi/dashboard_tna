<!-- Modal -->
<div class="modal fade" id="modalConfirm" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Konfirmasi Waktu Pelaksanaan </h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-confirm-schedule" id="form-confirm-schedule">
                    <input type="hidden" name="id" id="idKonfirmasi">
                    <input type="hidden" name="urutanId" id="urutanId">
                    <input type="hidden" name="tahapanIdKonfirmasi" id="tahapanIdKonfirmasi">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-md-4"> Karyawan </label>
                                <div class="col-md-6"> NIK <span id="nik"></span> - <span id="namaKaryawan"></span></div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Nama Penyelenggara </label>
                                <div class="col-md-6"> <span id="penyelenggara"></span> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Pelatihan  </label>
                                <div class="col-md-6"> <span id="pelatihan"></span> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Waktu Awal Pelaksanaan <span style="color:red">*</span></label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input type="text" class="form-control pull-right tgl" id="tanggalPertama" name="waktu_pelaksanaan_awal">
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Waktu Akhir Pelaksanaan <span style="color:red">*</span></label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input type="text" class="form-control pull-right tgl" id="tanggalKedua" name="waktu_pelaksanaan_akhir">
                                    </div>
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
                                    class="btn btn-info submit-confirm-schedule" id="submit-confirm">
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
</div>

