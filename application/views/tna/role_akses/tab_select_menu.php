<div class="tab-content">
    <div class="tab-pane active">
        <form id="form-select-menu" method="post" action="javascript:;">
            <input type="hidden" name="group_id" value="<?php echo $group_id ;?>">
            <div class="col-md-12" style="padding-top: 10px">
                <label style="margin-bottom: 10px"><h4> Pilih Menu </h4></label>
                <hr style="margin-top: -10px">
                <div class="row">
                    <!-- data -->
                    <div class="checkbox-list-container">
                        <?php echo printTree($menuTree); ?>
                    </div>
                </div>
                <div class="row" style="padding-top:10px; margin-right:5px">
                    <div class="pull-right">
                        <button class="btn btn-primary btn-block" id="btn-save-menu" type="submit"> Simpan </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
    function printTree($tree, $isRoot = true) {
        static $first = true;
        $html = '<ul>';

        if ($isRoot && $first) {
            $html .= '<li><input type="checkbox" id="selectAll">&nbsp;&nbsp; <b>Select All</b></li>';
            $first = false;
        }

        foreach ($tree as $node) {
            $checked = !empty($node['group_id']) ? ' checked' : '';
            $html .= '<li>';
            $html .= '<input type="checkbox" name="select_menu[]" id="selectSingle" value="' . $node['id'] . '"' . $checked . '>&nbsp;&nbsp;' . $node['nama'];
            if (!empty($node['children'])) {
                $html .= '<ul class="collapsed">';
                $html .= printTree($node['children'], false);
                $html .= '</ul>';
            }
            $html .= '</li>';
        }

        $html .= '</ul>';
        return $html;
    }
?>

