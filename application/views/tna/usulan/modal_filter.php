<!-- Modal -->
<div class="modal fade" id="ModalFilterUsulan" tabindex="-1" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Form Filter</h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript;" class="form-horizontal form-add" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">

                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Direktorat</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">.....</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Subdit/Unit</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">....</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Bidang</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">.....</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Nama Karyawan</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">Semua</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Status Karyawan</label>
                                            <div class="col-sm-8">
                                                <input  class="form-control" name="pilih_produk" id="edit-pilih_produk"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Kompetensi</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">Semua</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Jenis Development Karyawan</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">Semua</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Nama Pelatihan / Sertifikasi</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">Semua</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Justifikasi Pengajuan</label>
                                            <div class="col-sm-8">
                                                <textarea type="text"  name="jenis_rek" id="jenis_rek"  class="form-control input-sm" ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Metode Pembelajaran</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">Semua</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Estimasi Biaya</label>
                                            <div class="col-sm-8">
                                                <input  class="form-control" name="pilih_produk" id="edit-pilih_produk"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Nama Penyelenggara</label>
                                            <div class="col-sm-8">
                                                <input  class="form-control" name="pilih_produk" id="edit-pilih_produk"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Tahapan</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="pilih_produk" id="edit-pilih_produk">
                                                    <option value="1">Semua</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
    

                            </div> <!-- end col-12 -->
                            
                        </div><!-- end row -->
                        
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        
                        <div class="">
                            <div class="pull-right"> 
                                <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="false">Close</button>
                                <button type="submit" class="btn btn-info ">Simpan</button>
                                
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
   


    $('#tanggal .input-group.date').datepicker({
        format: "d-m-yyyy",
        viewMode: "date", 
        minViewMode: "date"
    });

</script>