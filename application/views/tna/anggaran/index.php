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
                        <div class="col-lg-6 ">
                            <div class="pull-right">
                                <!-- <button class="btn btn-default btn-sm" data-toggle='modal' data-target='#AddFilterAnggaran'>
                                    <i class="glyphicon glyphicon-filter"></i> Filter
                                </button> -->
                                <button class="btn btn-info btn-sm btn-add-anggaran" data-toggle='modal' data-target='#AddAnggaran'>
                                    <i class="glyphicon glyphicon-plus"></i> Tambah
                                </button>
                            </div>
                        </div>
                    </div>
                   

                </div>

                <div class="tab-content"  >
                     
                    <div class="tab-pane active">

                       
                        <div class="row">
                            <div class="col-md-12">
                                <table  class="table table-striped table-bordered table-hover" id="table-anggaran" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="7%">No.</th>
                                            <th width="20%">Jumlah Anggaran</th>
                                            <th>Tahun</th>
                                            <th>Kategori Anggaran</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   
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
<?php $this->load->view('tna/anggaran/modal_form_anggaran');?>
<?php $this->load->view('tna/anggaran/modal_filter');?>
<script type="text/javascript">
     const url_anggaran = "<?php echo site_url("tna/anggaran/data") ?>";
     oTable = $('#table-anggaran').DataTable({
            processing: true, 
            serverSide: true, 
            order: [], 
            ajax: {
                url     : url_anggaran,
                type    : "get",
                datatype: "json",
                data    : function(d){
                   
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
                { "data": "nominal" },
                { "data": "year" },
                { "data": "type" },
                {
                    "data": "encrypt_id",
                    "className": "text-center",
                    "width": "80px",
                    "orderable" : false,
                    render: function (data, type, row, meta) {
                        var aksi = '';
                       
                        aksi += '<a  data-toggle="modal" data-target="#AddAnggaran" id="'+data+'" uid="'+data+'" >'+
                                 '<button value="'+data+'" id="'+data+'" uid="'+data+'" class="btn btn-success btn-xs btn_edit_anggaran" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fa fa-edit"></i> </button>'+   
                                '</a> ';

                        aksi +=  '<button  class="btn btn-danger btn-xs btn_delete_anggaran" value="'+data+'" uid="'+data+'" data-toggle="tooltip" title="Hapus" data-placement="bottom">'+
                                    '<i class="fa fa-trash"></i>'+
                                '</button>';
                       
                        return aksi;
                    }
                },
            ],
            columnDefs: [
                {
                    targets: [0],
                    orderable: false,
                    className: 'text-center',

                }

            ],
        });
      
</script>