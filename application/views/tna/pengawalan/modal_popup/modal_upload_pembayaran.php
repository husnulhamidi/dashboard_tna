<!-- Modal -->
<div class="modal fade" id="modalUploadPembayaran" role="dialog" aria-hidden="true" enctype="multipart/form-data" tabindex="-1">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Upload Pembayaran </h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-confirm" id="form-confirm">
                    <input type="hidden" name="jabatan" id="jabatan">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h5> <b> Telah didaftarkan peserta training pada kegiatan : </b></h5>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Nama Peserta </label>
                                <div class="col-md-6"> Citra Dewi</div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Nama Pelatihan  </label>
                                <div class="col-md-6"> Legal Compliance </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Nama Penyelenggara </label>
                                <div class="col-md-6"> Hukum Online </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Biaya </label>
                                <div class="col-md-6"> Rp. 12.000.000 </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <hr>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Nilai Pembayaran</label>
                                <div class="col-md-8">
                                    <input type="text" name="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Tanggal Pembayaran</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control pull-right" id="tgl" name="tgl"  >
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Mata Anggaran</label>
                                <div class="col-md-8">
                                    <select class="form-control">
                                        <option> Pilih Mata Anggaran</option>
                                        <option> HCM </option>
                                        <option> Non HCM </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Nomor Mata Anggaran</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control pull-right" name="tgl"  >
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Unit</label>
                                <div class="col-md-8">
                                    <select class="form-control">
                                        <option> Pilih Unit</option>
                                        <option> HCM </option>
                                        <option> IT & Cyber Security </option>
                                         <option> Finance </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Upload Bukti Pembayaran</label>
                                <div class="col-md-8">
                                    <input type="file" name="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Ada Biaya SPDP</label>
                                <div class="col-md-8">
                                    <div class="grid grid-cols-2">
                                        <input type="radio" name="biayasppdp" id="biayasppdp" onclick="showFormSPDP('ya')"><span style="margin-right: 50px"> Ya </span>
                                        <input type="radio" name="biayasppdp" id="biayasppdp" onclick="showFormSPDP('tidak')"> Tidak
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
                                    class="btn btn-info submit-confirm" id="submit-confirm">
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
