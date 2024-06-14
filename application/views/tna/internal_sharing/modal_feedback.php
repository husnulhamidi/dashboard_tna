<!-- Modal -->
<style>
    .form-container {
        width: 70%;
        margin: 0 auto;
    }
    .form-section {
        margin-bottom: 20px;
    }
    .form-section h3 {
        margin-bottom: 10px;
    }
    .form-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    .form-table th, .form-table td {
        border: 1px solid #000;
        padding: 8px;
        text-align: center;
    }
    .form-table th {
        background-color: #f2f2f2;
    }
    .modal-dialog-custom {
        max-width: 90%;
        width: 60%;
    }
    .box-footer .pull-right {
        display: flex;
        align-items: center; /* Ensures vertical alignment */
    }

    .box-footer .pull-right .btn {
        margin-left: 5px; /* Adds space between buttons, adjust as needed */
    }

</style>

<div class="modal fade" id="modalFeedback" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-dialog-custom">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                FORM UMPAN BALIK (FEEDBACK)
            </div>
            <div class="modal-body" style="margin-top:-10px">
                <form method="post" action="javascript:;" class="form-horizontal form-feedback" id="form-feedback">
                    <input type="hidden" name="source_id" id="id">
                    <input type="hidden" name="source_type" value="Internal Sharing">
                    <input type="hidden" name="skor_materi" id="total_materi">
                    <input type="hidden" name="skor_narasumber" id="total_narasumber">
                    <input type="hidden" name="source_karyawan_id" id="source_karyawan_id">
                    <input type="hidden" name="is_update" id="is_update">
                    <div class="box-body">
                        <div>
                            <h3>FORM UMPAN BALIK (FEEDBACK) PELAKSANAAN PELATIHAN (INTERNAL & EKSTERNAL)/SERTIFIKASI</h3>
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
                                <h3>MATERI</h3>
                                <table class="form-table" id="table-materi">
                                    <thead>
                                        <tr>
                                            <th>Pernyataan</th>
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
                                <h3>NARASUMBER</h3>
                                <table class="form-table" id="table-materi-narasumber">
                                    <thead>
                                        <tr>
                                            <th>Pernyataan</th>
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
                                <h3>MANFAAT YANG DIPEROLEH DARI PELATIHAN/SERTIFIKASI INI :</h3>
                                <textarea class="textarea form-control" name="manfaat" id="manfaat" rows='3'></textarea>
                            </div>

                            <div class="form-section">
                                <h3>KRITIK/SARAN UNTUK MATERI DAN FASILITATOR :</h3>
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
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->
