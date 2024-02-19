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
                <form method="post" action="javascript:;" class="form-horizontal form-internal-sharing" id="form-internal-sharing">
                    <input type="hidden" name="id" id="internal_sharing_id">
                    <input type="hidden" name="urutanId" id="internal_sharing_urutanId">
                    <input type="hidden" name="tahapanId" id="internal_sharing_tahapanId">
                    <div class="box-body">
                        <div class="col-md-12">
                            <label class="col-md-4"> Peserta </label>
                            <div class="col-md-6"> NIK <span id="internal_sharing_nik"></span> - <span id="internal_sharing_nama"></span>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Nama Penyelenggara </label>
                                <div class="col-md-6"> <span id="internal_sharing_penyelenggara"></span></div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Pelatihan  </label>
                                <div class="col-md-6"> <span id="internal_sharing_pelatihan"></span> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Subdit/unit  </label>
                                <div class="col-md-6"> <span id="internal_sharing_unit"></span> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px"><hr></div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                Waktu Internal Sharing
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <input type="hidden" name="judul" id="judul">
                            <input type="hidden" name="direktorat" id="direktorat">
                            <input type="hidden" name="pemateri" id="pemateri">
                            <div class="col-md-12">
                                <label class="col-md-4"> Tanggal  <span style="color:red">*</span> </label>
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
                                <label class="col-md-4">Waktu <span style="color:red">*</span> </label>
                                <div class="col-md-8">
                                    <input type="time" name="waktu" id="waktu" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Tempat <span style="color:red">*</span> </label>
                                <div class="col-md-8">
                                    <input type="text" name="tempat" id="tempat" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Biaya <span style="color:red">*</span> </label>
                                <div class="col-md-8">
                                    <input type="text" name="biaya" id="biaya" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Kuota <span style="color:red">*</span> </label>
                                <div class="col-md-8">
                                    <input type="text" name="kuota" id="kuota" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Link Zoom  </label>
                                <div class="col-md-8">
                                    <input type="text" name="linkZoom" id="linkZoom" class="form-control">
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
                                    class="btn btn-info submit-internal-sharing" id="submit-internal-sharing">
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
