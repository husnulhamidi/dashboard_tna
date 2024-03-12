
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
    <?php
    if($role!='admin unit'){
    ?>
    <li class="<?php echo $active_tab=='verifikasi'? 'active':'';?> ">
        <a href="<?php echo site_url('tna/usulan/list/verifikasi'); ?>">
            <i class="fa fa-list"></i> Verifikasi
        </a>
    </li>
    <?php 
    }
    if($role=='admin hcpd'){
    ?>
    <li class="<?php echo $active_tab=='verifikasi-vp-hcm'? 'active':'';?> ">
        <a href="<?php echo site_url('tna/usulan/list/verifikasi-vp-hcm'); ?>">
            <i class="fa fa-list"></i> Verifikasi VP HCM
        </a>
    </li>
    <?php
    }
    ?>
   
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
    <?php
    if($role=='admin hcpd' OR $role=='manager hcpd' OR $role=='vp hcm' OR $role=='avp hcm'){
    ?>
    <li class="<?php echo $active_tab=='dokumen'? 'active':'';?> ">
        <a href="<?php echo site_url('tna/usulan/list/dokumen/'); ?>">
            <i class="fa fa-check-square"></i> Dokumen Verifikisi VP HCM
        </a>
    </li>
    <?php
    }
    ?>
    
