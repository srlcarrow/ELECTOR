<?php $form = $this->beginWidget('CActiveForm', array('id' => 'formAddSecratarial')); ?>
<div class="row">
    <div class="col s12">
        <div class="card ">
            <div class="card-content">
                <h5 class="grey-text text-darken-1">Add Secratarial Devisions</h5>

                <div class="row">
                    <div class="col s12 m8">
                        <div class="input-field">
                            <select id="district" name="district" class="mb-0" required>
                                <option value="" disabled selected>Choose District</option>
                                <?php for ($i = 0; $i < count($districts); $i++) {
                                    ?>
                                    <option id="sel_<?php echo $districts[$i]->district_id; ?>" value="<?php echo $districts[$i]->district_id; ?>"><?php echo $districts[$i]->district_name; ?></option>
                                <?php } ?>
                            </select>                        
                            <label>District</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m8">
                        <div class="input-field">
                            <input id="hiddenId" name="hiddenId" type="hidden" value="0" required>
                            <input id="name" name="name" type="text" required>
                            <label>Secratarial Devision Name</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <button type="button" class="cm-btn add right add-new-input"><i class="material-icons left">
                                &#xE148;</i>Add
                            New
                        </button>
                    </div>
                </div>

                <div class="row row-input">
                    <div class="col s4 input-no-label">
                        <label>Grama Niladhari Devisions</label>
                        <input id="hiddenGramaId[]" name="hiddenGrama[]" type="hidden" value="0" class="hiddenGrama">
                        <input id="gramaId[]" name="gramaName[]" type="text" class="pr-20">
                        <button id="gramaId_0" class="cm-btn ps-absolute right-5 btn-delete-input">
                            <i class="material-icons m-0 red-text">delete</i>
                        </button>
                    </div>
                </div>

            </div>
            <div class="card-action right-align">
                <button type="button" class=" btn waves-effect waves-light red lighten-1" onclick="clearSecratarials()">
                    Clear
                </button>
                <button id="saveSecratarials" type="submit" class="btn waves-effect waves-light blue lighten-1">Save
                </button>

            </div>
        </div>
    </div>
</div>
<?php $this->endWidget(); ?>

<!--Data Showing area-->
<div class="ajaxLoad"></div>

<!-- ===========================================================================
        Custom Script
============================================================================ -->

<script>
    $(document).ready(function () {
        $('select').material_select();
    });

    var i = 0;
    function buildInput(appendEle) {
        i = i + 1;
        //Clear old
        if (arguments[1]) {
            $(appendEle).html('');
        }

        var html = '';
        html += '<div class="col s4 input-no-label">';
        html += ' <label>Grama Niladhari Devisions</label>';
        html += '<input type="hidden" id="hiddenGramaId_' + i + '" name="hiddenGrama[]" value="0" class="hiddenGrama">';
        html += '<input type="text" id="gramaId_' + i + '" name="gramaName[]" class="pr-20">';
        html += '<button id="gramaId_0" class="cm-btn ps-absolute right-5 btn-delete-input">';
        html += '<i class="material-icons m-0 red-text">delete</i>';
        html += '</button>';
        html += '</div>';

        $(appendEle).append($(html));
        $('.input-no-label input[type="text"]').focus();
    }

    //Add new inputs
    $('.add-new-input').on('click', function () {
        buildInput('.row-input');
    });

    //Delete Input
    $(document).on('click', '.btn-delete-input', function () {
        var clickedId = this.id;
        var id = clickedId.split("_")[1];
        if (id > 0) {
            deleteDistrict(id);
        }

        $(this).parents('.input-no-label').remove();
    });

    //Form clean
    $(document).on('click', '.btn-form-clean', function () {
        buildInput('.row-input', true);
        $('input').val('');
        $(document).ready(function () {
            Materialize.updateTextFields();
        });
    });


</script>

<!-- ===========================================================================
        Backend Script
============================================================================ -->
<script type="text/javascript">
    $(document).ready(function (e) {
        loadSecratarialDevisionData();
    });

    function loadSecratarialDevisionData() {
        $.ajax({
            type: 'POST',
            url: "<?php echo Yii::app()->baseUrl . '/Admin/Settings/ViewSecratarialDevisionsData'; ?>",
            data: '',
            success: function (responce) {
                $(".ajaxLoad").html(responce);
            }
        });
    }

    $("#formAddSecratarial").validate({
        submitHandler: function () {
            SaveSecratarialDevision();
        }
    });

    function SaveSecratarialDevision() {
        $.ajax({
            type: 'POST',
            url: "<?php echo Yii::app()->baseUrl . '/Admin/Settings/SaveSecratarialDevision'; ?>",
            data: $('#formAddSecratarial').serialize(),
            dataType: 'json',
            success: function (responce) {
                if (responce.code == 200) {
                    Message.success(responce.msg);
                    $("#formAddSecratarial")[0].reset();
                    $('.pr-20').attr('value', '');
                    $('.row-input > .input-no-label').not(':first').remove();
                    loadSecratarialDevisionData();
                }
            }
        });
    }

    function loadDataToEdit(data) {

        //Update Text fields
        $(document).ready(function () {
            Materialize.updateTextFields();
            //page Scroll to up
            Scroll.toUp();
        });

        $("#formAddProvince")[0].reset();
        var province = data.provinceData;
        var districts = data.districtData;

        $('#hiddenId').val(province.province_id);
        $('#name').val(province.province_name);

        if (districts.length > 0) {
            $('.row-input > .input-no-label').remove();
        } else {
            $('.pr-20').attr('value', '');
            $('.row-input > .input-no-label').not(':first').remove();
        }

        for (var i = 0, max = districts.length; i < max; i++) {
            var html = '';
            html += '<div class="col s4 input-no-label">';
            html += '<label>Grama Niladhari Devisions</label>';
            html += '<input type="hidden" id="hiddenGramaId_' + i + '" name="hiddenGrama[]" value="' + districts[i]['district_id'] + '" class="hiddenGrama">';
            html += '<input type="text" id="gramaId_' + i + '"  name="gramaName[]" value="' + districts[i]['district_name'] + '" class="pr-20">';
            html += '<button id="gramaId_' + districts[i]['district_id'] + '" class="cm-btn ps-absolute right-5 btn-delete-input">';
            html += '<i class="material-icons m-0 red-text">delete</i>';
            html += '</button>';
            html += '</div>';

            $('.row-input').append(html);
        }
    }

    function deleteDistrict(id) {
        $.ajax({
            type: 'POST',
            url: "<?php echo Yii::app()->baseUrl . '/Admin/Settings/DeleteDistrict'; ?>",
            data: {id: id},
            dataType: 'json',
            success: function (responce) {
                if (responce.code == 200) {
                    Message.success(responce.msg);
                }
            }
        });
    }

    function clearSecratarials() {
        $("#formAddProvince")[0].reset();
        $('.pr-20').attr('value', '');
        $('.row-input > .input-no-label').not(':first').remove();
        $(document).ready(function () {
            Materialize.updateTextFields();
        });
    }

</script>
