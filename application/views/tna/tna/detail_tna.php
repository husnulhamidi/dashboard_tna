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
                    <input type="hidden" name="id" id="id" value=<?php echo $detail->id ;?>>
                    <div class="tab-pane active">                       
                        <div class="row">
                            <div class="col-md-12">
                               <label class="col-md-2"> ID TNA </label>
                               <div class="col-md-10">: <?php echo $detail->code_tna ;?> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                               <label class="col-md-2"> Nama Karyawan </label>
                               <div class="col-md-10">: <?php echo $detail->nama_karyawan ;?> </div>
                            </div>
                        </div> 
                        <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                               <label class="col-md-2"> Subunit/Unit </label>
                               <div class="col-md-10">: <?php echo $detail->nama_organisasi ;?> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                               <label class="col-md-2"> Status Karyawan </label>
                               <div class="col-md-10">: <?php echo $detail->status_karyawan ;?> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                               <label class="col-md-2"> Nama Pelatihan </label>
                               <div class="col-md-10">: <?php echo $detail->training ;?> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                               <label class="col-md-2"> Objective </label>
                               <div class="col-md-10">: <?php echo $detail->objective ;?> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                               <label class="col-md-2"> Jenis Pelatihan </label>
                               <div class="col-md-10">: <?php echo $detail->jenis_pelatihan ;?> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                               <label class="col-md-2"> Metode Pembelajaran </label>
                               <div class="col-md-10">: <?php echo $detail->metoda_pembelajaran ;?> </div>
                            </div>
                        </div>
                      
                        
                         <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                               <label class="col-md-2"> Kompetensi</label>
                               <div class="col-md-10">: <?php echo $detail->kompetensi ;?> </div>
                            </div>
                        </div>
                         <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                               <label class="col-md-2"> Nama Penyelenggara </label>
                               <div class="col-md-10">: <?php echo $detail->nama_penyelenggara ;?> </div>
                            </div>
                        </div>
                         <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                               <label class="col-md-2"> Area </label>
                               <div class="col-md-10">: Nasional </div>
                            </div>
                        </div>
                         <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                               <label class="col-md-2"> Waktu Pelaksanaan </label>
                               <div class="col-md-10">: <?php echo date('d F Y', strtotime($detail->waktu_pelaksanaan)); ?> </div>
                            </div>
                        </div>
                        <div class="row">
                            <hr>
                        </div>
                       
                    </div>
                </div>
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
        // builTablePeserta();
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

    function builTablePeserta(){
        $('#tbl-peserta').DataTable({
            processing: true, 
            serverSide: true, 
            scrollX: true,
            order: [], 
            ajax: {
                url     : base_url+"tna/tna/getDataPeserta",
                type    : "get",
                datatype: "json",
                data    : function(d){
                    console.log(d)
                }
                          
            },
            columns: [
                {
                    "data": "id",
                    "width": "50px",
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                { "data": "training" },
                { 
                    "data": "training",
                    render:function(data, type, row, meta){
                        return "-"
                    } 
                },
                { "data": "jenis_development"},
                { "data": "metoda_pembelajaran"},
                { "data": "jenis_pelatihan"},
                { "data": "kompetensi"},
                { "data": "nama_penyelenggara"},
                { 
                    "data": "nama_penyelenggara",
                    render:function(data,type,row,meta){
                        return "lokasi"
                    }
                },
                { 
                    "data": "waktu_pelaksanaan",
                    render:function(data, type, row, meta){
                        let date = '-'
                        if(data !== '0000-00-00'){
                            date = formatDate(data)
                        }
                        return date
                    }
                },
                { 
                    "data": "estimasi_biaya",
                    "class":"text-right",
                    render:function(data,type,row, meta){
                        return formatRupiah(data,'Rp.')
                    }
                },
                { 
                    "data": "nama_penyelenggara",
                    render:function(data,type,row,meta){
                        return "jumlah peserta"
                    }
                },
                {
                    "data": "id",
                    "className": "text-center",
                    "width": "80px",
                    "orderable" : false,
                    render: function (data, type, row, meta) {
                       var action = `
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Aksi
                                    <span class="fa fa-caret-down"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a onclick="showModalProses()">
                                            Prosess / Usulkan 
                                        </a>
                                    </li>
                                    <li><a href="`+url_detail+data+`"> Daftar Peserta </a></li>
                                    <li>
                                        <a href="`+url_edit+data+`">Edit</a>
                                    </li>
                                    <li><a onclick="deleteData(1)">Hapus</a></li>
                                </ul>
                            </div>

                       `
                       return action
                    }
                },
            ],
        });
    }
</script>
