<style type="text/css">
    .error{
        color: #a94442;
    }
    #fieldset1 {
        border: 1px solid #DDDDDD;
        display: inline-block;
        /* font-size: 14px; */
        padding: 1em 2em;
        width: 100%;
    }

    legend {
        font-size: 18px;
        width:auto;
        border-bottom:none;
    }

    .card{
        /*border: 1px solid #DDDDDD;*/
        display: inline-block;
        padding: 1em 2em;
        width: 100%;
        height: 150px;
    }
    .card1{
        border: 1px solid #DDDDDD;
        display: inline-block;
        /*padding: 1em 2em;*/
        width: 97%;
        height:auto;
        margin-left: 20px;
    }
</style>
<div class="tab-content">
    <div class="tab-pane active">
        <div class="col-md-6" style="padding-top: 10px; margin-left: -5px">
            <div class="col-md-12" style="margin-left: -5px">
                <label style="margin-bottom: 10px"><h3> Data Pembayaran </h3></label>
                <hr style="margin-top: -10px">
                <div class="pull-right">
                    <button class="btn btn-xs btn-primary" id="btn-edit-pembayaran">
                        <i class="fa fa-edit"></i>
                    </button>
                </div>
            </div>
            <fieldset id="fieldset1">
                <legend> Data Pembayaran </legend>
                <div class="row" style="margin-left: -30px;margin-top: -20px">
                    <div class="col-md-12">
                        <label class="col-md-6">Nilai Pembayaran</label>
                        <div class="col-md-6"><b> : <span id="nilai_pembayaran"></span> </b></div>
                    </div>
                </div>
                <div class="row" style="margin-left: -30px;margin-top: 10px">
                    <div class="col-md-12">
                        <label class="col-md-6">Tanggal Pembayaran</label>
                        <div class="col-md-6"><b> : <span id="tgl_pembayaran"></span> </b></div>
                    </div>
                </div>
                <div class="row" style="margin-left: -30px;margin-top: 10px">
                    <div class="col-md-12">
                        <label class="col-md-6">Mata Anggaran</label>
                        <div class="col-md-6"><b> : <span id="mata_anggaran_pembayaran"></span> </b></div>
                    </div>
                </div>
                <div class="row" style="margin-left: -30px;margin-top: 10px">
                    <div class="col-md-12">
                        <label class="col-md-6">Nomor Mata Anggaran</label>
                        <div class="col-md-6"><b> : <span id="nomor_mata_anggaran_pembayaran"></span> </b></div>
                    </div>
                </div>
                <div class="row" style="margin-left: -30px;margin-top: 10px">
                    <div class="col-md-12">
                        <label class="col-md-6">Subunit/unit</label>
                        <div class="col-md-6"><b> : <span id="unit_pembayaran"></span> </b></div>
                    </div>
                </div>
            </fieldset>
        </div>

        <div class="col-md-6" style="padding-top: 10px">
            <label style="margin-bottom: 10px"><h3> Data Pembayaran SPPD </h3></label>
            <hr style="margin-top: -10px">
            <div class="pull-right">
                &nbsp;
            </div>
            <fieldset id="fieldset1">
                <legend> Data Pembayaran SPPD </legend>
                <div class="row" style="margin-left: -30px;margin-top: -20px">
                    <div class="col-md-12">
                        <label class="col-md-6">Nilai Pembayaran</label>
                        <div class="col-md-6"><b> : <span id="nilai_pembayaran_sppdp"></span> </b></div>
                    </div>
                </div>
                <div class="row" style="margin-left: -30px;margin-top: 10px">
                    <div class="col-md-12">
                        <label class="col-md-6">Tanggal Pembayaran</label>
                        <div class="col-md-6"><b> : <span id="tgl_pembayaran_sppdp"></span> </b></div>
                    </div>
                </div>
                <div class="row" style="margin-left: -30px;margin-top: 10px">
                    <div class="col-md-12">
                        <label class="col-md-6">Mata Anggaran</label>
                        <div class="col-md-6"><b> : <span id="mata_anggaran_pembayaran_sppdp"></span> </b></div>
                    </div>
                </div>
                <div class="row" style="margin-left: -30px;margin-top: 10px">
                    <div class="col-md-12">
                        <label class="col-md-6">Nomor Mata Anggaran</label>
                        <div class="col-md-6"><b> : <span id="nomor_mata_anggaran_pembayaran_sppdp"></span> </b></div>
                    </div>
                </div>
                <div class="row" style="margin-left: -30px;margin-top: 10px">
                    <div class="col-md-12">
                        <label class="col-md-6">Subunit/unit</label>
                        <div class="col-md-6"><b> : <span id="unit_pembayaran_sppdp"></span> </b></div>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_edit_pembayaran');?>
<script type="text/javascript">
    var dataPembayaran;
    $('document').ready(function(){
        var id = $('#id').val();
        $.ajax({
            type: "GET",
            dataType: "JSON",
            url: base_url + "tna/pengawalan/get_detail_pembayaran",
            data: "id="+id,
            success: function(resp) {
                // console.log(resp)
                if(resp){
                    $('#nilai_pembayaran').text(formatRupiah(resp.nominal,'Rp.'))
                    $('#tgl_pembayaran').text(formatDate(resp.tanggal))
                    $('#mata_anggaran_pembayaran').text(resp.mata_anggaran)
                    $('#nomor_mata_anggaran_pembayaran').text(resp.no_mata_anggaran)
                    $('#unit_pembayaran').text(resp.unit)
                    if(resp.is_sppd == 1){
                        $('#nilai_pembayaran_sppdp').text(resp.nominal_sppd ? formatRupiah(resp.nominal_sppd, 'Rp') : 0)
                        $('#tgl_pembayaran_sppdp').text(formatDate(resp.tanggal_sppd))
                        $('#mata_anggaran_pembayaran_sppdp').text(resp.mata_anggaran_sppd)
                        $('#nomor_mata_anggaran_pembayaran_sppdp').text(resp.no_mata_anggaran_sppd)
                        $('#unit_pembayaran_sppdp').text(resp.unit_sppdp)
                    }
                   
                }
            },
            complete(data){
                dataPembayaran = data.responseJSON
            }
        });
    })
    

    $('#btn-edit-pembayaran').click(function(){
        console.log('dataPembayaran',dataPembayaran)
        $('#edit_nilai').val(dataPembayaran.nominal)
        $('#pembayaranId').val(dataPembayaran.id)
        $('#edit_tgl').val(formatDate2(dataPembayaran.tanggal))
        $('#edit_mata_anggaran').val(dataPembayaran.mata_anggaran)
        $('#edit_nomor_mata_anggaran').val(dataPembayaran.no_mata_anggaran)
        if(dataPembayaran.mata_anggaran == 'HCM'){
            $('#unit_tmp').val(dataPembayaran.m_organisasi_id)
            $('#unit').val(dataPembayaran.m_organisasi_id).trigger('change');
            $('#unit').prop('disabled', true);
        }
        if(dataPembayaran.is_sppd == 1){
            $('#nilai_sppd').val(dataPembayaran.nominal_sppd)
            $('#tgl_pembayaran').val(formatDate2(dataPembayaran.tanggal_sppd))
            $('#sppdp_mata_anggaran').val(dataPembayaran.mata_anggaran_sppd)
            $('#sppdp_nomor_mata_anggaran').val(dataPembayaran.no_mata_anggaran_sppd)
            // $('#sppdp_nomor_mata_anggaran').val(dataPembayaran.no_mata_anggaran_sppd)
            if(dataPembayaran.mata_anggaran_sppd == 'HCM'){
                $('#sppd_unit_tmp').val(dataPembayaran.m_organisasi_id_sppd)
                $('#unit_sppdp').val(dataPembayaran.m_organisasi_id_sppd).trigger('change');
                $('#unit_sppdp').prop('disabled', true);
            }


            $('#biayasppdpYa').prop("checked", true);
            $('#biayasppdpTidak').prop("checked", false);
        }else{
            $('#biayasppdpYa').prop("checked", false);
            $('#biayasppdpTidak').prop("checked", true);
        }


        
        $('#modalEditPembayaran').modal('show')
    })

    $('.submit-pembayaran-edit').click(function(){
        $(".form-pembayaran").validate({
            rules: {
                nilai: "required",
                tgl: "required",
                mata_anggaran: "required",
                nomor_mata_anggaran: "required",
                unit: "required",
                biayasppdp: "required",
            },
            messages: {
                nilai:{
                    required:"<i class='fa fa-times'></i> Nilai pembayaran wajib diisi"
                }, 
                tgl:{
                    required:"<i class='fa fa-times'></i> Tanggal pembayaran wajib diisi"
                }, 
                mata_anggaran:{
                    required:"<i class='fa fa-times'></i> Mata anggaran rilis wajib diisi"
                }, 
                nomor_mata_anggaran:{
                    required:"<i class='fa fa-times'></i> Nomor mata anggaran oleh wajib diisi"
                }, 
                unit:{
                    required:"<i class='fa fa-times'></i> Unit wajib diisi"
                },
                biayasppdp:{
                    required:"<i class='fa fa-times'></i> Pilihan biaya sppdp wajib diisi"
                },            
            },
            submitHandler: function(form) {
                const formData = new FormData();
                const pembayaranFormData = new FormData($("#form-pembayaran")[0]);
                for (const [key, value] of pembayaranFormData.entries()) {
                    formData.append(key, value);
                }
                const sppdpSerializedData = $('#form-sppdp').serialize();
                formData.append('sppdp', sppdpSerializedData);
                $.ajax({
                    url: base_url+"tna/pengawalan/edit_pembayaran",
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData:false,
                    success: function(response) {
                        console.log(response)
                        var newResponse = JSON.parse(response);
                        console.log(newResponse)
                        if(newResponse.success){
                            setTimeout(function() {
                                swal({
                                    title: "Notifikasi!",
                                    text: "Data berhasil diubah",
                                    imageUrl: img_icon_success
                                }, function(d) {
                                    location.reload();
                                });
                            }, 1000);
                        }else{
                            setTimeout(function() {
                                swal({
                                    title: "Notifikasi!",
                                    text: newResponse.msg,
                                    imageUrl: img_icon_error
                                }, function() {
                                    location.reload();
                                });
                            }, 1000);
                        } 
                    }            
                });
            }
        });
    })

</script>