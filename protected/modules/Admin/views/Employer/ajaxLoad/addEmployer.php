<?php $form = $this->beginWidget('CActiveForm', array('id' => 'formAddEmployer')); ?>
<div class="row">
    <div class="col s12 company-form">
        <div class="card ">
            <div class="card-content">
                <h5 class="grey-text text-darken-1">Add Company</h5>

                <div class="row">
                    <div class="col s12 m5">
                        <div class="row">
                            <div class="col s12">
                                <div class="logo-wrp ">
                                    <img src="/myProjects/uploads/company/logo/logo23.png" alt="">
                                </div>
                            </div>

                            <div class="col s12 mt-30">

                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>Upload Logo</span>
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m7">
                        <div class="row">
                            <div class="col s6">
                                <div class="input-field">
                                    <?php echo Chtml::dropDownList('ref_ind_id', "", CHtml::listData(AdmIndustry::model()->findAll(), 'ind_id', 'ind_name'), array('empty' => 'Select Industry')); ?>
                                    <label>Industry</label>
                                </div>
                            </div>
                            <div class="col s6">
                                <div class="input-field">
                                    <input name="comName" type="text" autocomplete="off" required>
                                    <label>Company Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field">
                                    <input name="comAddress" type="text" autocomplete="off" required>
                                    <label>Address</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s6">
                                <div class="input-field">
                                    <input name="comTel" type="tel" autocomplete="off" required>
                                    <label>Contact No</label>
                                </div>
                            </div>
                            <div class="col s6">
                                <div class="input-field">
                                    <input name="comMobi" autocomplete="off" type="tel">
                                    <label>Contact No (Optional)</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col s6">
                                <div class="input-field">
                                    <input name="comEmail" type="email" autocomplete="off" required>
                                    <label>Email</label>
                                </div>
                            </div>

                            <div class="col s6">
                                <div class="input-field">
                                    <input name="comConPerson" autocomplete="off" type="text">
                                    <label>Contact Person</label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
            <div class="card-action right-align">
                <button id="closeAddEmployer" type="button"
                        class=" btn_close_Company btn waves-effect waves-light red lighten-1">Close
                </button>
                <button id="clearAddEmployer" type="button" class=" btn waves-effect waves-light red lighten-1">Clear
                </button>
                <button id="saveEmployer" type="submit" class="btn waves-effect waves-light blue lighten-1">Save
                </button>
            </div>
        </div>
    </div>
</div>
<?php $this->endWidget(); ?>
<!--</div>-->

<script>
    $("#formAddEmployer").validate({
        submitHandler: function () {
            saveEmployer();
        }
    });

    function saveEmployer() {
        $.ajax({
            type: 'POST',
            url: "<?php echo Yii::app()->baseUrl . '/Admin/Employer/SaveEmployer'; ?>",
            data: $('#formAddEmployer').serialize(),
            dataType: 'json',
            success: function (responce) {
                if (responce.code == 200) {
                    Message.success(responce.msg);
                    $("#formAddEmployer")[0].reset();
                }
            }
        });
    }

    $('#clearAddEmployer').click(function (e) {
        $("#formAddEmployer")[0].reset();
    });

    $('#closeAddEmployer').click(function (e) {
        $("#formAddEmployer")[0].reset();
        $('.company-form').slideUp('fast', function () {
            $('.search-area,.company-cards').slideDown('slow');
            loadEmployerData();
        })
    });

    $(document).ready(function () {
        $('select').material_select();
    });
</script>