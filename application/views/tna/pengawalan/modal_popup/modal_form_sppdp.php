<!-- Modal -->
<style type="text/css">
    .select2-container {
        position: absolute;
        z-index: 9999; /* Atur z-index lebih tinggi dari elemen dropdown */
    }
</style>
<div class="modal fade" id="modalFormSPPDP" role="dialog" aria-hidden="true" enctype="multipart/form-data" style="z-index: 2000">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Form Input Pembayaran SPPDP </h4>
            </div>
            <div class="modal-body">
                <div>
                    <form id="form-sppdp">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-md-4"> Nilai SPPDP </label>
                                <div class="col-md-8">
                                    <input type="text" name="nilai_sppd" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Tanggal Pembayaran </label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="tgl_pembayaran" name="tgl_pembayaran_sppdp">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Mata Anggaran</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="sppdp_mata_anggaran" id="sppdp_mata_anggaran">
                                        <option> Pilih Mata Anggaran</option>
                                        <option> HCM </option>
                                        <option> Non HCM </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Nomor Mata Anggaran</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control pull-right" name="sppdp_nomor_mata_anggaran"  >
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Unit</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="sppdp_unit" id="unit_sppdp">
                                        <option value=""> Pilih Unit</option>
                                        <?php 
                                            foreach ($subdit as $sb) {
                                                echo "<option value='".$sb->m_organisasi_id."'>".$sb->nama.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->
<script type="text/javascript">
    
    $(document).ready(function(){
        $('#unit_sppdp').select2()
        $('#tgl_pembayaran').datepicker()

        $('#sppdp_mata_anggaran').change(function(){
            let mata_anggaran = $('#sppdp_mata_anggaran').val();
            if(mata_anggaran == 'HCM'){
                get_id_organisasi_sppdp(mata_anggaran);
            }else{
                $('#unit_sppdp').prop('disabled', false);
                $('#unit_sppdp').val('').trigger('change');
               
            }
        })
    })

     function get_id_organisasi_sppdp(name){
        $.ajax({
            type : "POST",
            url  : base_url+"tna/pengawalan/get_id_organisasi",
            data:{ name: name },
            dataType: "JSON",
            success:function(resp){

                $('#unit_sppdp').append('<option value="' + resp.id + '"> ' + resp.name + ' </option>'); 
                $('#unit_sppdp').val(resp.id).trigger('change');
                $('#unit_sppdp').prop('disabled', true);
            },
        });
    }
</script>
