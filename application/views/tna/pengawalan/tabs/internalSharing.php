 <div class="tab-content">
    <div class="tab-pane active">
        <div class="col-md-12" style="padding-top: 10px">
            <!-- <label> Internal Sharing </label> -->
            <div class="col-md-6">
                <label class="col-md-10"> Internal Sharing </label>
                <div class="pull-left">
                    <button class="btn btn-xs btn-primary">
                        <i class="fa fa-edit"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="row" style="padding-top:20px">
                    <div class="col-md-12">
                        <label class="col-md-3"> Materi </label>
                        <div class="col-md-9"><b>: Legal Compliance </b> </div>
                    </div>

                </div>
                <div class="row" style="padding-top:10px">
                    <div class="col-md-12">
                        <label class="col-md-3"> Pemateri </label>
                        <div class="col-md-9"><b>: 12345678 | Citra Dewi </b> </div>
                    </div>

                </div>
                <div class="row" style="padding-top:10px">
                    <div class="col-md-12">
                        <label class="col-md-3"> Tanggal </label>
                        <div class="col-md-2"><b>: 02 Oktober 2023 </b> </div>
                    </div>
                </div>
                <div class="row" style="padding-top:10px">
                    <div class="col-md-12">
                        <label class="col-md-3"> Waktu </label>
                        <div class="col-md-2"><b>: 14:00 </b> </div>
                    </div>
                </div>
                <div class="row" style="padding-top:10px">
                    <div class="col-md-12">
                        <label class="col-md-3"> Tempat </label>
                        <div class="col-md-9"><b>: Room DGPC </b> </div>
                    </div>

                </div>
                <div class="row" style="padding-top:10px">
                    <div class="col-md-12">
                        <label class="col-md-3"> Biaya </label>
                        <div class="col-md-9"><b>: Rp. 1.500.00 </b> </div>
                    </div>

                </div>
                <div class="row" style="padding-top: 10px">
                    <hr>
                </div>
                <div class="row" style="padding-top: 10px">
                    <label> Data Peserta </label>
                    <table class="table" id="tbl-peserta">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> NIk </th>
                                <th> Nama Peserta </th>
                                <th> Subunit/unit </th>
                                <th> Status Karyawan </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 1 </td>
                                <td> L12345 </td>
                                <td> Firman </td>
                                <td> IT & Digital </td>
                                <td> FTE </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#tbl-peserta').DataTable()
</script>