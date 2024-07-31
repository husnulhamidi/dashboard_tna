<div class="tab-content">
    <div class="tab-pane active">
        <form id="form-select-user" method="post" action="javascript:;">
            <input type="hidden" name="group_id" value="<?php echo $group_id ;?>">
            <div class="col-md-12" style="padding-top: 10px">
                <label style="margin-bottom: 10px"><h4> Pilih User </h4></label>
                <hr style="margin-top: -10px">
                <div class="row">
                    <div class="search-box">
                        <input type="text" id="searchInput" placeholder="Cari User..." class="form-control">
                    </div>
                    <!-- data -->
                    <div class="checkbox-list-container">
                        <ul id="userList">
                            <li>
                                <input type="checkbox" id="selectAll"> &nbsp;&nbsp; <b>Select All</b>
                            </li>
                            <?php
                                foreach ($user as $key => $value) {
                                    $checked = !empty($value['group_id']) ? ' checked' : '';
                                    echo '
                                        <li>
                                            <input type="checkbox" name="select_user[]" id="selectSingle" value="' . $value['id'] . '"' . $checked . '> ' . $value['nik_tg'] . ' - ' . $value['nama'] . '
                                        </li>
                                    ';
                                }
                            ?>
                        </ul>
                    </div>
                    
                </div>
                <div class="row" style="padding-top:10px; margin-right:5px">
                    <div class="pull-right">
                        <button class="btn btn-primary btn-block" id="btn-save-user" type="submit"> Simpan </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    document.getElementById('searchInput').addEventListener('input', function() {
        console.log('sini')
        const filter = this.value.toLowerCase();
        const listItems = document.querySelectorAll('#userList li');

        listItems.forEach(function(item) {
            const text = item.textContent || item.innerText;
            item.style.display = text.toLowerCase().includes(filter) ? '' : 'none';
        });
    });
</script>
