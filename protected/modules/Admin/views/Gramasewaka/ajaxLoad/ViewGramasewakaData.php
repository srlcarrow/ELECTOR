<?php
$ref = 0;
foreach ($gramasewaka as $grama) {
    $ref++;
    ?>
    <div class="row mb-0 company-cards ">
        <div class="col s12">
            <div class="card-panel expand-card detail-card outer-tb-15">
                <div class="row mb-0 expand-card-head">
                    <div class="col s11">
                        <div class="row mb-0">
                            <div class="col s6">
                                <h6 class="grey-text text-darken-1 "><?php echo $grama->gramasewaka_name; ?></h6>
                            </div>
                            <div class="col s3">
                                <h6 class="grey-text text-darken-1"><?php echo $grama->ref_gramaniladhari_devision; ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col s1 mt-5">
                        <i class="right material-icons btn_expand">expand_more</i>
                    </div>
                </div>

                <div class="row expand-card-content mb-0 ">
                    <div class="col s12 mt-20">
                        <div class="row mb-0">
                            <div class="col s8">
                                <ul class="tabs">
                                    <li class="tab col s3"><a class="pl-0 left-align active"
                                                              href="#tab1_<?php echo $ref; ?>">General</a></li>                                   
                                </ul>
                            </div>
                            <div id="tab1_<?php echo $ref; ?>" class="col s12 mt-30">

                                <div class="row mb-0">
                                    <div class="col s4">
                                        <div class="row mb-0">
                                            <div class="col s12">
                                                <div class="logo-wrp ">
                                                    <img
                                                        src="<?php echo Yii::app()->baseUrl ?>/uploads/company/logo/Lalith.png"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col s12 mt-15">
                                                <h5 class="f-18 center-align grey-text text-darken-2"><?php echo $grama->gramasewaka_name; ?></h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col s8">
                                        <div class="row">
                                            <div class="col s12">
                                                <h6 class="f-12 grey-text text-darken-1">Address</h6>
                                                <h5 class="f-14 grey-text text-darken-3"><?php echo $grama->gramasewaka_address; ?></h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s6">
                                                <h6 class="f-12 grey-text text-darken-1">Email</h6>
                                                <h5 class="f-14 grey-text text-darken-3"><?php echo $grama->gramasewaka_email; ?></h5>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col s6">
                                                <h6 class="f-12 grey-text text-darken-1">Contact No</h6>
                                                <h5 class="f-14 grey-text text-darken-3"><?php echo $grama->gramasewaka_tel; ?></h5>
                                            </div>
                                            <div class="col s6">
                                                <h6 class="f-12 grey-text text-darken-1">Contact No(Optional)</h6>
                                                <h5 class="f-14 grey-text text-darken-3"><?php echo $grama->gramasewaka_mobi; ?></h5>
                                            </div>
                                        </div>

                                        <div class="row ">
                                            <div class="col s12">
                                                <button type="button"
                                                        class="right btn waves-effect waves-light red lighten-1">Edit
                                                </button>
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
    </div>
    <?php
}
?>

<ul class="pagination right">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
</ul>


<script>
    $(function () {
        $('.btn_expand').on('click', function () {
            var $this = $(this);
            var card = $this.parents('.expand-card');

            if (!$this.hasClass('expand')) {
                $this.addClass('expand').html('expand_less');
                card.find('.expand-card-content').slideDown('fast');
                loadTab();
            } else {
                $this.removeClass('expand').html('expand_more');
                card.find('.expand-card-content').slideUp('fast');
            }
        });
    });


    function loadTab() {
        $('.company-cards').each(function () {
            $(this).find('ul.tabs').tabs();
        });
    }

    function getPopupTemplate() {
        var html = null;
        $.ajax({
            type: 'POST',
            url: "<?php echo Yii::app()->baseUrl . '/Admin/Employer/LoadPaymentPopup'; ?>",
            success: function (res) {
                html = res;
            }
        });

        return html;
    }

    $('.btnActive').on('click', function () {
        var $this = $(this);
        var $rowId = $this.parents('tr').prop('id');

        Modal.show({
            loadAjax: function (modal) {
                $.ajax({
                    type: 'POST',
                    url: "<?php echo Yii::app()->baseUrl . '/Admin/Employer/LoadPaymentPopup'; ?>",
                    success: function (res) {
                        $(modal).html(res);
                    }
                });


            }
        });
    });
</script>