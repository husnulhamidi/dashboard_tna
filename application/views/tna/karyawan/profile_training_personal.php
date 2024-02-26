<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>
                                <span class="count">
                                    <?php echo $getCountDashboard['Pelatihan'];?>
                                </span>
                            </h3>
                            <p>Pelatihan Eksternal</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-briefcase"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>
                                <span class="count">
                                    <?php echo $getCountDashboard['Sertifikasi'];?>
                                </span>
                            </h3>
                            <p>Sertifikasi</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-file-zip-o"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>
                                <span class="count">
                                    0
                                </span>
                            </h3>
                            <p>E-Learning</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-server"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>
                                <span class="count">
                                    <?php echo $getCountDashboard['internal_sharing'];?>
                                </span>
                            </h3>
                            <p>Internal Sharing</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-clipboard"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="box box-info">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="">
                                        <div class="box-body box-profile">
                                            <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/img/avatar5.png'); ?>" alt="User profile picture">
                                            <h3 class="profile-username text-center"><?php echo $detailKaryawan->nama;?> <br><?php echo $detailKaryawan->nik_tg;?></h3>
                                            <p class="text-muted text-center"><?php echo $detailKaryawan->jabatan_nama;?></p>
                                            <ul class="list-group list-group-unbordered">
                                                <li class="list-group-item">
                                                    <b>Direktorat</b> <a class="pull-right">-</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Subdit/Unit</b> <a class="pull-right">-</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Sub Unit</b> <a class="pull-right">-</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Bidang</b> <a class="pull-right">-</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <h4><b>Daftar Kompetensi</b></h4>
                                    <table class="table table-striped" id="table-kompetensi">
                                        <thead>
                                            <tr>
                                                <th width="20px">No.</th>
                                                <th>Kompetensi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="bodyKompetensi">
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="box box-info">
                        <div class="box-body">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-xs-12">
                                            <h4><b>LIST TRAINING YANG PERNAH DIIKUTI</b></h4>
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th width="20px">No.</th>
                                                        <th>Nama Training</th>
                                                        <th width="20%">Kategori Pelatihan</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="bodyTraining">
                                                   
                                                </tbody>
                                            </table>      
                                        </div>

                                        <div class="col-lg-12 col-xs-12">
                                            <hr>
                                            <h4><b>LIST REKOMENDASI TRAINING</b></h4>
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th width="20px">No.</th>
                                                        <th>Nama Pelatihan</th>
                                                        <th width="20%" >Kategori Pelatihan</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="bodyRekomendasiTraining">
                                                   
                                                </tbody>
                                            </table>       
                                        </div>

                                        <div class="col-lg-12 col-xs-12">
                                            <hr>
                                            <h4><b>LIST AGENDA TRAINING HCM</b></h4>
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th width="20px">No.</th>
                                                        <th>Nama Pelatihan</th>
                                                        <th width="20%">Kategori Pelatihan</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="bodyNextTraining">
                                                </tbody>   
                                            </table>
                                        </div>         
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function(){
        $('.count').each(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 1000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(nominalAngka(Math.ceil(now)));
                }
            });
        });

        let jabatan_id = "<?php echo $detailKaryawan->jabatan_id;?>";
        let karyawan_id = "<?php echo $detailKaryawan->id;?>";
        getKompetensi(jabatan_id,karyawan_id)
        getRekomendasiTraining(jabatan_id,karyawan_id)
        getTraining(karyawan_id)
        getNextTraining(karyawan_id)
        // getDetailKaryawan(id)
        // console.log(id)
    })

    function getKompetensi(jabatan_id,karyawan_id){
        var bodyTable = '';
        $.ajax({
            url:base_url+'tna/TrainingMandiri/getKompetensi',
            method: 'post',
            data:{jabatan_id :jabatan_id, karyawan_id:karyawan_id },
            dataType: 'json',
            success: function(response) {
                $('#bodyKompetensi').empty();
                if (response.length > 0) {
                    response.forEach(function(element, index) {
                        if (element.nama_kompetensi) {
                            var no = index + 1;
                            bodyTable = `
                                <tr>
                                    <td>${no}</td>
                                    <td>${element.nama_kompetensi}</td>
                                </tr>
                            `;
                            $('#bodyKompetensi').append(bodyTable);
                        }
                    });
                }
            }
        });
    }
    
    function getTraining(karyawan_id){
        var bodyTable = '';
        $.ajax({
            url:base_url+'tna/TrainingMandiri/getTraining',
            method: 'post',
            data:{karyawan_id:karyawan_id },
            dataType: 'json',
            success: function(response) {
                console.log(response)
                $('#bodyTraining').empty();
                if (response.length > 0) {
                    response.forEach(function(element, index) {
                        if (element.training) {
                            var no = index + 1;
                            var kategori = element.kategori ?? "Pelatihan";
                            bodyTable = `
                                <tr>
                                    <td>${no}</td>
                                    <td>${element.training}</td>
                                    <td>${kategori}</td>
                                </tr>
                            `;
                            $('#bodyTraining').append(bodyTable);
                        }
                    });
                }
            }
        });
    }

    function getRekomendasiTraining(jabatan_id,karyawan_id){
        var bodyTable = '';
        $.ajax({
            url:base_url+'tna/TrainingMandiri/getRekomendasiTraining',
            method: 'post',
            data:{jabatan_id :jabatan_id, karyawan_id:karyawan_id },
            dataType: 'json',
            success: function(response) {
                console.log(response)
                $('#bodyRekomendasiTraining').empty();
                if (response.length > 0) {
                    response.forEach(function(element, index) {
                        if (element.nama_training) {
                            var no = index + 1;
                            bodyTable = `
                                <tr>
                                    <td>${no}</td>
                                    <td>${element.nama_training}</td>
                                    <td>${element.type}</td>
                                </tr>
                            `;
                            $('#bodyRekomendasiTraining').append(bodyTable);
                        }
                    });
                }
            }
        });
    }

    function getNextTraining(karyawan_id){
        var bodyTable = '';
        $.ajax({
            url:base_url+'tna/TrainingMandiri/getNextTraining',
            method: 'post',
            data:{karyawan_id:karyawan_id },
            dataType: 'json',
            success: function(response) {
                console.log(response)
                $('#bodyNextTraining').empty();
                if (response.length > 0) {
                    response.forEach(function(element, index) {
                        if (element.training) {
                            var no = index + 1;
                            var kategori = element.kategori ?? "Pelatihan";
                            bodyTable = `
                                <tr>
                                    <td>${no}</td>
                                    <td>${element.training}</td>
                                    <td>${kategori}</td>
                                </tr>
                            `;
                            $('#bodyNextTraining').append(bodyTable);
                        }
                    });
                }
            }
        });
    }

</script>
