<style type="text/css">
    .col-md-3 label {
        display: inline-block;
        vertical-align: super;
    }
    .checkbox-container:has(> input:disabled:checked)::after {
        width: 20px;
        height: 20px;
        font-size: 15px;
        background: #8585cf;
        display: inline-block;
        border: 1px solid #000000;
        border-radius: 3px;
        color: white;
        position: relative;
        content: "✔";
        text-align: center;
        float: left;
        /*margin: 2px 4px 0 5px;*/
    }

    /* remove display of default disabled checked checkbox */
    .checkbox-container input:disabled:checked {
        display: none
    }
</style>
<div class="tab-content">
    <div class="tab-pane active">
        <div class="col-md-12" style="padding-top: 10px">
            <label style="margin-bottom: 10px"><h3> Ceklis Kelengkapan Dokumen </h3></label>
            <hr style="margin-top: -10px">
            <div class="row">
                <div class="col-md-12" style="margin-top:5px">
                    <div class="col-md-3 checkbox-container">
                        <input type="checkbox" disabled="" id="pakta_integritas" style="width: 20px; height: 20px"> &nbsp;
                        <label> Surat Pernyataan Peserta (Non FTE) </label>
                    </div>
                    <div class="col-md-2">
                        <a href="#"> <span id="file_pakta_integritas"></span> </a>
                    </div>
                </div>
                <div class="col-md-12" style="margin-top:5px">
                    <div class="col-md-3 checkbox-container">
                        <input type="checkbox" disabled="" id="form_peserta" style="width: 20px; height: 20px"> &nbsp;
                        <label> Form Pendaftaran Peserta </label>
                    </div>
                    <div class="col-md-2">
                        <a href="#"> <span id="file_form_peserta"></span> </a>
                    </div>
                </div>
                 <div class="col-md-12" style="margin-top:5px">
                    <div class="col-md-3 checkbox-container">
                        <input type="checkbox" disabled="" id="dokumen_lainnya" style="width: 20px; height: 20px"> &nbsp;
                        <label> Dokumen Lainnya </label>
                    </div>
                    <div class="col-md-2">
                        <a href="#"> <span id="file_dokumen_lainnya"></span> </a>
                    </div>
                </div>
                <div class="col-md-12" style="margin-top:5px">
                    <div class="col-md-3 checkbox-container">
                        <input type="checkbox" disabled="" id="guarantee_latter" style="width: 20px; height: 20px"> &nbsp;
                        <label> Guarantee Letter </label>
                    </div>
                    <div class="col-md-2">
                        <a href="#"> <span id="file_guarantee_latter"></span> </a>
                    </div>
                </div>
                <div class="col-md-12" style="margin-top:5px">
                    <div class="col-md-3 checkbox-container">
                        <input type="checkbox" disabled="" id="nota_dinas" style="width: 20px; height: 20px"> &nbsp;
                        <label> Nota Dinas Penugasan </label>
                    </div>
                    <div class="col-md-2">
                        <a href="#"> <span id="file_nota_dinas"></span> </a>
                    </div>
                   
                </div>
                <div class="col-md-12" style="margin-top:5px">
                    <div class="col-md-3 checkbox-container">
                        <input type="checkbox" disabled="" id="sertifikat" style="width: 20px; height: 20px;"> &nbsp;
                        <label> Sertifikat </label>
                    </div>
                    <div class="col-md-2">
                        <a href="#"> <span id="file_sertifikat"></span> </a>
                        <!-- <button> <i class="fa fa-download"> </button> -->
                    </div>
                   
                </div>
                
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    // $('#tbl-riwayat').DataTable()
    var id = $('#id').val();
    $.ajax({
        type: "GET",
        dataType: "JSON",
        url: base_url + "tna/pengawalan/get_detail_dokumen",
        data: "id="+id,
        success: function(resp) {
            console.log(resp)
            resp.forEach(function(item) {
                if(item.tipe == 'pakta integritas'){
                    $('#pakta_integritas').attr('checked', true)
                    $('#file_pakta_integritas').html('<a target="_blank" href='+base_url+item.nama_dokumen+'> <button class="btn btn-primary"> <i class="fa fa-download"> Download Dokumen</button></a>')
                }
                if(item.tipe == 'form peserta'){
                    $('#form_peserta').attr('checked', true)
                    $('#file_form_peserta').html('<a target="_blank" href='+base_url+item.nama_dokumen+'> <button class="btn btn-primary"> <i class="fa fa-download"> Download Dokumen</button></a>')
                }
                if(item.tipe == 'guarantee latter'){
                    $('#guarantee_latter').attr('checked', true)
                    $('#file_guarantee_latter').html('<a target="_blank" href='+base_url+item.nama_dokumen+'> <button class="btn btn-primary"> <i class="fa fa-download"> Download Dokumen</button></a>')
                }
                if(item.tipe == 'dokumen lainnya'){
                    $('#dokumen_lainnya').attr('checked', true)
                    $('#file_dokumen_lainnya').html('<a target="_blank" href='+base_url+item.nama_dokumen+'> <button class="btn btn-primary"> <i class="fa fa-download"> Download Dokumen</button></a>')
                }
                if(item.tipe == 'nota dinas'){
                    $('#nota_dinas').attr('checked', true)
                    $('#file_nota_dinas').html('<a target="_blank" href='+base_url+item.nama_dokumen+'> <button class="btn btn-primary"> <i class="fa fa-download"> Download Dokumen</button></a>')
                }
                if(item.tipe == 'sertifikat'){
                    $('#sertifikat').attr('checked', true)
                    $('#file_sertifikat').html('<a target="_blank" href='+base_url+item.nama_dokumen+'> <button class="btn btn-primary"> <i class="fa fa-download"> Download Dokumen</button></a>')
                }
            });
        }
    });

</script>