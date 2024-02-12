<!-- Modal -->
<div class="modal fade" id="modalInternalSharing" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Jadwal Internal Sharing </h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-confirm" id="form-confirm">
                    <input type="hidden" name="jabatan" id="jabatan">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-md-4"> Peserta </label>
                                <div class="col-md-6"> NIK 001 - Citra Dewi</div>
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
                                <label class="col-md-4"> Pelatihan  </label>
                                <div class="col-md-6"> Legal Compliance </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px"><hr></div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                Waktu Internal Sharing
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Tanggal </label>
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
                                <label class="col-md-4">Waktu</label>
                                <div class="col-md-8">
                                    <input type="time" name="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Tempat</label>
                                <div class="col-md-8">
                                    <input type="text" name="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Biaya</label>
                                <div class="col-md-8">
                                    <input type="text" name="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Kuota</label>
                                <div class="col-md-8">
                                    <input type="text" name="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Peserta</label>
                                <div class="col-md-8">
                                    <a onclick="tambahPeserta()"> Tambah Peserta</a>
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
<?php $this->load->view('tna/pengawalan/modal_popup/modal_tambah_peserta');?>
<script type="text/javascript">
    function tambahPeserta(){
        $('#modalTambahPeserta').modal('show')
    }
</script>
