<style type="text/css">
    .dropdown-menu {
        left: auto;
        right: 0;
        z-index: 5000 !important;
        position: relative;
        margin-left: -100px
    }
</style>
<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            <?php // echo '<pre>'; print_r($this->session->userdata()); ?>

            <div class="nav-tabs-custom-aqua">
                <div class="box box-info">
                    
                    <div class="box-header with-border">
                        <div class="col-lg-6">
                            <h3 class="box-title" style="padding-top:5px"><?php echo $title;?></h3>
                        </div>
                    </div>
                </div>

                <div class="tab-content">
                    <div class="tab-pane active">                       
                        <div class="row">
                            <div class="col-md-12">
                               <label class="col-md-2"> ID TNA </label>
                               <div class="col-md-10">: A002 </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                               <label class="col-md-2"> Nama Pelatihan </label>
                               <div class="col-md-10">: Legal Compliance </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                               <label class="col-md-2"> Objective </label>
                               <div class="col-md-10">: - </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                               <label class="col-md-2"> Jenis Pelatihan </label>
                               <div class="col-md-10">: Pelatihan </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                               <label class="col-md-2"> Metode Pembelajaran </label>
                               <div class="col-md-10">: Online </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                               <label class="col-md-2"> Jenis Pelatihan </label>
                               <div class="col-md-10">: Bussinies Support </div>
                            </div>
                        </div>
                        
                         <div class="row">
                            <div class="col-md-12">
                               <label class="col-md-2"> Kompetensi</label>
                               <div class="col-md-10">: Bussinies Ebaler </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-md-12">
                               <label class="col-md-2"> Nama Penyelenggara </label>
                               <div class="col-md-10">: Hukum Online </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-md-12">
                               <label class="col-md-2"> Area </label>
                               <div class="col-md-10">: Nasional </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-md-12">
                               <label class="col-md-2"> Waktu Pelaksanaan </label>
                               <div class="col-md-10">: 20 Juni 2023 </div>
                            </div>
                        </div>
                        <div class="row">
                            <hr>
                        </div>
                        <div class="row">
                            <div class="pull-right" style="padding-right: 2%; padding-bottom: 10px">
                                <button
                                    onclick="btnAddPeserta()"
                                    class="btn btn-sm btn-primary">
                                    <i class="fa fa-plus"></i> 
                                    &nbsp;Tambah Peserta 
                                </button>
                            </div>
                            <div class="col-md-12">
                                <table class="table" id="tbl-peserta">
                                    <thead>
                                        <tr>
                                            <td> No </td>
                                            <td> NIK </td>
                                            <td> Nama Peserta </td>
                                            <td> Subunit/Unit </td>
                                            <td> Status Karyawan </td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 1 </td>
                                            <td> 1234567 </td>
                                            <td> Firman </td>
                                            <td> IT & Digital </td>
                                            <td> FTE </td>
                                            <td>
                                                <button 
                                                    onclick="btnAddPeserta(1)" 
                                                    class="btn-success btn-xs" 
                                                    title="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button class="btn-danger btn-xs" title="Hapus">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <!-- /.tab-content -->
            </div>
        </div>
    </div>
</section>
<?php 
    $this->load->view('tna/tna/modal_upload');
    $this->load->view('tna/tna/modal_form_peserta');
?>
<script type="text/javascript">
    $(document).ready(function(){
        $('#tbl-peserta').DataTable()
    })
    function btnAddPeserta(id = false){
        var label = 'Form Tambah Peserta'
        if(id){
            label = 'Form Ubah Peserta'
            $('#idPeserta').val(id)
        }
        $('#labelPeserta').text(label)
        $('#modalTambahPeserta').modal('show')
    }
</script>
