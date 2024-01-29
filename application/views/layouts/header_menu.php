
    <li class="<?php echo $status=='project'? 'active':'';?>">
        <a href="<?php echo site_url('project/update_data/'.$id_project); ?>">
            <i class="fa fa-cubes"></i> Project
        </a>
    </li>
    <li class="<?php echo $status=='node'? 'active':'';?> ">
        <a href="<?php echo site_url('node/data_node/'.$id_project); ?>">
            <i class="fa fa-list"></i> Node
        </a>
    </li>
    <li class="<?php echo $status=='tagihan'? 'active':'';?> ">
        <a href="<?php echo site_url('tagihan/data_tagihan/'.$id_project); ?>">
            <i class="fa fa-file-text-o"></i> Tagihan
        </a>
    </li>
    
