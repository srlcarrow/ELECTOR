<div class="row">
    <div class="col s12">
        <div class="card">
            <div class="card-content">

                <h5 class="grey-text text-darken-1">Provinces</h5>

                <table class="responsive-table bordered striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $row = 1;
                        foreach ($provinces as $province) {
                            ?>
                            <tr>
                                <td><?php echo $row; ?></td>
                                <td><?php echo $province->province_name; ?></td>
                                <td class="adm-tbl-action_2">
                                    <a id="<?php echo $province->province_id; ?>" onclick="editProvince(this.id)"><i class="material-icons grey-text lighten-2">mode_edit</i></a>
                                    <a id="<?php echo $province->province_id; ?>" onclick="deleteProvince(this.id)"><i class="material-icons red-text lighten-2">delete</i></a>
                                </td>
                            </tr>
                            <?php
                            $row++;
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

    var row = 0;
    function deleteProvince(id) {
        function _deleteProvince(id) {
            $.ajax({
                type: 'POST',
                url: "<?php echo Yii::app()->baseUrl . '/Admin/Settings/DeleteProvince'; ?>",
                data: {id: id},
                dataType: 'json',
                success: function (responce) {
                    if (responce.code == 200) {
                        $("#formAddCategory")[0].reset();
                        $('.pr-20').attr('value', '');
                        $('.row-input > .input-no-label').not(':first').remove();
                        loadCategoryData();
                    }
                }
            });
        }

        Alert.confirm({
            confirmed: function () {
                _deleteProvince(id);
            }
        });

    }

    function editProvince(id) {
        $.ajax({
            type: 'POST',
            url: "<?php echo Yii::app()->baseUrl . '/Admin/Settings/GetEditProvinceData'; ?>",
            data: {id: id},
            dataType: 'json',
            success: function (responce) {
                if (responce.code == 200) {
                    loadDataToEdit(responce.data);
                }
            }
        });
    }


</script>