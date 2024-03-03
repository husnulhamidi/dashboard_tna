<?php
 
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=List-Training-Seluruh-Karyawan.xls");
?>
<table  class="table table-striped table-bordered table-hover" id="table-list-karyawan" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th width="7%" class="text-center">No.</th>
            <th class="text-center">Nama Karyawan</th>
            <th class="text-center">NIK</th>
            <th class="text-center">Unit</th>
            <th class="text-center">Jumlah Pelatihan</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if(is_array($data) && !empty($data)) {
                foreach ($data as $key => $val){
                    echo '
                        <tr>
                            <td>'.($key+1).'</td>
                            <td>'.$val->nama.'</td>
                            <td>'.$val->nik_tg.'</td>
                            <td>'.$val->nama_organisasi.'</td>
                            <td>'.$val->jumlah_training.'</td>
                        </tr>
                    ';
                }
            } else {
                echo '<tr><td colspan="5" class="text-center">Tidak ada data</td></tr>';
            }
       ?>
    </tbody>
</table>