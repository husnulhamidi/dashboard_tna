<!-- Modal -->
<div class="modal fade" id="ModalAddTraining" tabindex="-1" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> <span id="label"></span></h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="#" id="formTraining" class="form-horizontal formTraining" enctype="multipart/form-data">
                    <input type="hidden" placeholder="id kompetensi" name="idKompetensi" id="idKompetensi">
                    <input type="hidden" placeholder="id training" name="idTraining" id="idTraining">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nama TNA (Pelatihan/Sertifikasi)</label>
                                    <div class="col-sm-9">
                                        <input type="text"  name="name" id="name" placeholder="" class="form-control input-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kategori Pelatihan</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control" name="type" id="type">
                                            <option value=""></option>
                                            <option value="Pelatihan">Pelatihan</option>
                                            <option value="Sertifikasi">Sertifikasi</option>
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
                                <button type="submit" class="btn btn-info btn-form-training">Simpan</button>
                                
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
