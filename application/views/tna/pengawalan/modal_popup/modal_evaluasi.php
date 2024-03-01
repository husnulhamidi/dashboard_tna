<!-- Modal -->
<style>
    .scrollable-table-container {
        width: 100%;
        overflow-x: auto;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
</style>
<div class="modal fade" id="modalEvaluasi" role="dialog" aria-hidden="true" enctype="multipart/form-data" tabindex="-1">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Form Evaluasi Hasil Pelatihan  </h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-evaluasi" id="form-evaluasi">
                    <input type="hidden" name="id" id="evaluasi_id">
                    <input type="hidden" name="urutanId" id="evaluasi_urutanId">
                    <input type="hidden" name="tahapanId" id="evaluasi_tahapanId">
                    <input type="hidden" name="is_complete" id="evaluasi_isComplete">
                    <input type="hidden" name="jumlah_pertanyaan" id="jumlah_pertanyaan">
                    <div class="box-body">
                        <div class="row" style="padding-top: 10px; margin-left:20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Nama Peserta</label>
                                <div class="col-md-6"> <span id="evaluasi_nama"></span> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px; margin-left:20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> NIK </label>
                                <div class="col-md-6"> <span id="evaluasi_nik"></span> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px;margin-left:20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Unit  </label>
                                <div class="col-md-6"> <span id="evaluasi_unit"></span> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px;margin-left:20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Nama Pelatihan  </label>
                                <div class="col-md-6"> <span id="evaluasi_pelatihan"></span> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px;margin-left:20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Tanggal Pelatihan  </label>
                                <div class="col-md-6"> <span id="evaluasi_tanggal"></span> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px;margin-left:20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Materi Pelatihan  </label>
                                <div class="col-md-6"> <span id="evaluasi_materi"></span> </div>
                            </div>
                        </div>
                        <div class="row" style="margin-left:20px">
                            <hr width="100%">
                        </div>
                        <div class="row" style="margin-left:20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Kriteria Evaluasi </label>
                            </div>
                        </div>
                        <div class="row" style="margin-left:20px">
                            <div class="col-md-12">
                                <div class="col-md-12"><span id="catatan"></span></div>
                            </div>
                        </div>
                        <div class="row" style="margin-left:30px">
                            <div class="col-md-12">
                                <table class="table table-bordered" id="tbl-evaluasi">
                                    <thead>
                                        <tr>
                                            <th class="text-center text-nowrap"> No </th>
                                            <th class="text-center text-nowrap"> Uraian </th>
                                            <th class="text-center text-nowrap"> Baik Sekali</th>
                                            <th class="text-center text-nowrap"> Baik</th>
                                            <th class="text-center text-nowrap"> Cukup</th>
                                            <th class="text-center text-nowrap"> Kurang</th>
                                            <th class="text-center text-nowrap"> Kurang Sekali</th>
                                        </tr>
                                    </thead>
                                    <tbody id="body-tbl-evaluasi"></tbody>
                                    <tfooter>
                                        <tr>
                                            <th colspan="7"> 
                                                Score :
                                                <p style="margin-left:15px"> a. 16 - 25 : Baik </p>
                                                <p style="margin-left:15px"> b. 10 - 15 : Cukup </p>
                                                <p style="margin-left:15px"> c. 5 - 9 : Kurang (Perlu tindak lanjut, training ulang, breefing, dll) </p>
                                            </th>
                                        </tr>
                                    </tfooter>
                                </table>
                            </div>
                        </div>
                        <div class="row" style="margin-left:20px">
                            <hr width="100%">
                        </div>
                        <div class="row" style="margin-left:20px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Hasil Evaluasi  </label>
                            </div>
                        </div>
                        <div class="row" style="margin-left:20px">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <textarea class="form-control" rows="5" placeholder="Komentar tambahan dari pemimpin" name="komentar"></textarea>
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
                                    class="btn btn-info submit-evaluasi" id="submit-evaluasi">
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
