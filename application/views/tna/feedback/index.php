
<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            
            <form method="post" action="javascript:;" class="form-horizontal form-feedback" id="form-feedback">
                    <input type="hidden" name="source_id" id="id">
                    <input type="hidden" name="source_type" value="Internal Sharing">
                    <input type="hidden" name="skor_materi" id="total_materi">
                    <input type="hidden" name="skor_narasumber" id="total_narasumber">
                    <input type="hidden" name="source_karyawan_id" id="source_karyawan_id">
                    <input type="hidden" name="is_update" id="is_update">
                    <div class="box-body">
                        <div>
                            <h3 class="text-center">FORM UMPAN BALIK (FEEDBACK) <BR> PELAKSANAAN PELATIHAN (INTERNAL & EKSTERNAL) / SERTIFIKASI</h3>
                            <p>Dalam rangka peningkatan mutu kegiatan pelatihan/sertifikasi yang telah dilaksanakan, serta mengukur kepuasan peserta. Maka, kami mohon kesediaan Bapak/Ibu untuk mengisi form umpan balik (feedback) dengan memberikan tanda (X) pada kotak yang sesuai.</p>
                            <p><strong>Keterangan :</strong></p>
                            <ul>
                                <li>5 : Baik Sekali</li>
                                <li>4 : Baik</li>
                                <li>3 : Cukup</li>
                                <li>2 : Kurang Baik</li>
                                <li>1 : Tidak Baik</li>
                            </ul>

                            <div class="form-section">
                                <h4>I. MATERI</h4>
                                <table class="table table-bordered  table-striped " id="table-materi">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>5</th>
                                            <th>4</th>
                                            <th>3</th>
                                            <th>2</th>
                                            <th>1</th>
                                        </tr>
                                    </thead>
                                    <tbody id="body-table-materi"></tbody>
                                </table>
                            </div>

                            <div class="form-section">
                                <h4>II. NARASUMBER</h4>
                                <table class="table table-bordered  table-striped " id="table-materi-narasumber">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>5</th>
                                            <th>4</th>
                                            <th>3</th>
                                            <th>2</th>
                                            <th>1</th>
                                        </tr>
                                    </thead>
                                   <tbody id="body-table-narasumber"></tbody>
                                </table>
                            </div>

                            <div class="form-section">
                                <h4>III. MANFAAT YANG DIPEROLEH DARI PELATIHAN/SERTIFIKASI INI :</h4>
                                <textarea class="textarea form-control" name="manfaat" id="manfaat" rows='3'></textarea>
                            </div>

                            <div class="form-section">
                                <h4>IV. KRITIK/SARAN UNTUK MATERI DAN FASILITATOR :</h4>
                                <textarea class="textarea form-control" name="kritik_saran" id="kritik_saran" rows='3'></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="pull-right">
                            <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="false">Close</button>
                            <button type="submit" style="display:none" class="btn btn-info submit-feedback" id="submit-feedback">Kirim Feedback</button>
                        </div>
                    </div>
                </form>
            
        </div>
    </div>
  
</section>

