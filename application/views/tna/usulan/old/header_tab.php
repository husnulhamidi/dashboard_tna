
    <li class="<?php echo $active_tab=='all'? 'active':'';?>">
        <a href="<?php echo site_url('tna/usulan/list/all'); ?>">
            <i class="fa fa-list"></i> Semua
        </a>
    </li>
    <!-- <li class="<?php echo $active_tab=='proses-verifikasi'? 'active':'';?> ">
        <a href="<?php echo site_url('tna/usulan/list/proses-verifikasi'); ?>">
            <i class="fa fa-list"></i> Proses Verifikasi
        </a>
    </li> -->
    <li class="<?php echo $active_tab=='verifikasi'? 'active':'';?> ">
        <a href="<?php echo site_url('tna/usulan/list/verifikasi'); ?>">
            <i class="fa fa-list"></i> Verifikasi
        </a>
    </li>
    <li class="<?php echo $active_tab=='ditolak'? 'active':'';?> ">
        <a href="<?php echo site_url('tna/usulan/list/ditolak/'); ?>">
            <i class="fa fa-close"></i> Ditolak
        </a>
    </li>
    <li class="<?php echo $active_tab=='disetujui'? 'active':'';?> ">
        <a href="<?php echo site_url('tna/usulan/list/disetujui/'); ?>">
            <i class="fa fa-check-square"></i> Disetujui
        </a>
    </li>
    
