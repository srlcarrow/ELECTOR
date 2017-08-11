<!--echo  $this->module->assetsUrl-->
<!-- Include external CSS. -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"
      type="text/css"/>
<link rel="stylesheet" href="<?php echo $this->module->assetsUrl ?>/css/plugins/editor/codemirror.css">

<!-- Include Editor style. -->
<link href="<?php echo $this->module->assetsUrl ?>/css/plugins/editor/froala_editor.pkgd.min.css" rel="stylesheet"
      type="text/css"/>
<link href="<?php echo $this->module->assetsUrl ?>/css/plugins/editor/froala_style.min.css" rel="stylesheet"
      type="text/css"/>


<div class="row">

    <div class="col s12">
        <button class="cm-btn add right addNew">
            <i class="material-icons left">&#xE148;</i>Add New
        </button>
    </div>

    <div class="col s12 addForm hide-block">
        <div class="card ">
            <div class="card-content">
                <h5 class="grey-text text-darken-1">Add Advertisement</h5>

                <div class="row">
                    <div class="col s12 m4">
                        <div class="input-field">
                            <select name="" id="">
                                <option value="" selected="selected" disabled>Select</option>
                                <option value="1">Colombo</option>
                            </select>
                            <label>District</label>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="input-field">
                            <select name="" id="">
                                <option value="" selected="selected" disabled>Select</option>
                                <option value="1">Colombo</option>
                            </select>
                            <label>City</label>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="input-field">
                            <select name="" id="">
                                <option value="" selected="selected" disabled>Select</option>
                                <option value="1">Lorem ipsum</option>
                            </select>
                            <label>Industry</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m4">
                        <div class="input-field">
                            <select name="" id="">
                                <option value="" selected="selected" disabled>Select</option>
                                <option value="1">Lorem ipsum.</option>
                            </select>
                            <label>Job Category</label>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="input-field">
                            <select name="" id="">
                                <option value="" selected="selected" disabled>Select</option>
                                <option value="1">Lorem ipsum.</option>
                            </select>
                            <label>Sub Category</label>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="input-field">
                            <select name="" id="">
                                <option value="" selected="selected" disabled>Select</option>
                                <option value="1">Lorem ipsum</option>
                            </select>
                            <label>Designation</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m4">
                        <div class="input-field">
                            <select name="" id="">
                                <option value="" selected="selected" disabled>Select</option>
                                <option value="1">Lorem ipsum.</option>
                            </select>
                            <label>Industry</label>
                        </div>
                    </div>
                    <div class="col s12 m8">
                        <div class="col m4">
                            <div class="input-field">
                                <input type="text" class="salary-input">
                                <label>Salary</label>
                            </div>
                        </div>
                        <div class="col m4">
                            <div class="input-field">
                                <input class="filled-in" type="checkbox" id="negotiable"/>
                                <label for="negotiable">Negotiable</label>
                            </div>
                        </div>
                        <div class="col m4">
                            <div class="input-field">
                                <select name="" id="">
                                    <option value="" selected="selected" disabled>Select</option>
                                    <option value="1">Lorem ipsum</option>
                                </select>
                                <label>Type</label>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col s12 m4">
                        <div class="input-field">
                            <input type="text" class="designation">
                            <label>Advertisement title</label>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="input-field">
                            <input class="filled-in" type="checkbox" id="designation"/>
                            <label for="designation">Use designation as title</label>
                        </div>
                    </div>

                    <div class="col m4">
                        <div class="input-field">
                            <input type="text" class="datepicker">
                            <label for="designation">Expire Date</label>
                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col m6">
                        <p>
                            <input class="with-gap uploaderOrEditor" name="group1" type="radio" id="uploader"
                                   value="1"/>
                            <label for="uploader">Upload Image</label>
                        </p>
                    </div>
                    <div class="col m6">
                        <p>
                            <input class="with-gap uploaderOrEditor" name="group1" type="radio" id="text-editor"
                                   value="2"/>
                            <label for="text-editor">User Text Editor</label>
                        </p>
                    </div>

                    <div class="col s12 uploader">
                        <div class="col s12">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>Upload</span>
                                    <input type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 editor hide-block">
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1">Textarea</label>
                        </div>
                    </div>
                </div>


            </div>
            <div class="card-action right-align">
                <button type="button"
                        class=" btn_close btn waves-effect waves-light red lighten-1">Close
                </button>
                <button type="button" class=" btn waves-effect waves-light red lighten-1">Clear</button>
                <button type="submit" class="btn waves-effect waves-light blue lighten-1">Save</button>
            </div>
        </div>
    </div>
</div>

<div class="row search-area">
    <div class="col s12">
        <div class="card-panel">
            <div class="search-input-wrp grey lighten-3">
                <div class="search-input">
                    <i class="material-icons search-icon blue-text text-lighten-3">search</i>
                    <input class="input-search" type="text" placeholder="Search">
                </div>
                <div class="search-action">
                    <button class="border-r-0 btn waves-effect waves-light btn-search deep-orange">Search</button>
                </div>
                <div class="search-action">
                    <button class="waves-effect waves-teal btn-flat btnAdvance">Advance</button>
                </div>
            </div>

            <div class="row hide-block more-panel">
                <div class="col s4">
                    <div class="input-field">
                        <input type="text">
                        <label>Label</label>
                    </div>
                </div>
                <div class="col s4">
                    <div class="input-field">
                        <input type="text">
                        <label>Label</label>
                    </div>
                </div>
                <div class="col s4">
                    <div class="input-field">
                        <input type="text">
                        <label>Label</label>
                    </div>
                </div>

                <!--Action Area-->
                <div class="col s12 right-align">
                    <button type="button" class=" btn waves-effect waves-light btnAdvance red">Close</button>
                    <button type="button" class=" btn waves-effect waves-light deep-orange">Search</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row details-cards">
    <div class="col s12">
        <div class="card-panel expand-card detail-card outer-tb-15">
            <div class="row mb-0 expand-card-head">
                <div class="col s11">
                    <div class="row mb-0">
                        <div class="col s1 ps-relative">
                            <input value="12" type="text" disabled="disabled" class="disabled h-20">
                            <button class="cm-btn ps-absolute right-5 btn-editAndSave">
                                <i class="material-icons m-0 red-text">edit</i>
                            </button>
                        </div>
                        <div class="col s3">
                            <h6 class="grey-text text-darken-1 ">ad/023/231</h6>
                        </div>
                        <div class="col s4">
                            <h6 class="grey-text text-darken-1">QA Engineer</h6>
                        </div>
                        <div class="col s4">
                            <h6 class="grey-text text-darken-1">Lorem ipsum.</h6>
                        </div>
                    </div>
                </div>
                <div class="col s1 mt-5">
                    <i class="right material-icons btn_expand">expand_more</i>
                </div>
            </div>

            <div class="row expand-card-content mb-0 ">
                <div class="col s12 mt-20">
                    <div class="row">
                        <div class="col s4">
                            <h6 class="f-12 grey-text text-darken-1">District</h6>
                            <h5 class="f-14 grey-text text-darken-3">Lorem.</h5>
                        </div>
                        <div class="col s4">
                            <h6 class="f-12 grey-text text-darken-1">City</h6>
                            <h5 class="f-14 grey-text text-darken-3">Lorem.</h5>
                        </div>
                        <div class="col s4">
                            <h6 class="f-12 grey-text text-darken-1">Industry</h6>
                            <h5 class="f-14 grey-text text-darken-3">Lorem.</h5>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col s4">
                            <h6 class="f-12 grey-text text-darken-1">Job Category</h6>
                            <h5 class="f-14 grey-text text-darken-3">Lorem.</h5>
                        </div>
                        <div class="col s4">
                            <h6 class="f-12 grey-text text-darken-1">Sub Category</h6>
                            <h5 class="f-14 grey-text text-darken-3">Lorem.</h5>
                        </div>
                        <div class="col s4">
                            <h6 class="f-12 grey-text text-darken-1">Designation</h6>
                            <h5 class="f-14 grey-text text-darken-3">Lorem.</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s4">
                            <h6 class="f-12 grey-text text-darken-1">Industry</h6>
                            <h5 class="f-14 grey-text text-darken-3">Lorem.</h5>
                        </div>
                        <div class="col s4">
                            <h6 class="f-12 grey-text text-darken-1">Salary</h6>
                            <h5 class="f-14 grey-text text-darken-3">Lorem.</h5>
                        </div>
                        <div class="col s4">
                            <h6 class="f-12 grey-text text-darken-1">Type</h6>
                            <h5 class="f-14 grey-text text-darken-3">Lorem.</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s4">
                            <h6 class="f-12 grey-text text-darken-1">Advertisement Title</h6>
                            <h5 class="f-14 grey-text text-darken-3">Lorem ipsum.</h5>
                        </div>
                        <div class="col s4">
                            <h6 class="f-12 grey-text text-darken-1">Expire Date</h6>
                            <h5 class="f-14 grey-text text-darken-3">Lorem.</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <h6 class="f-12 grey-text text-darken-1">Upload image or Note</h6>
                            <h5 class="f-14 grey-text text-darken-3">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Ipsam obcaecati odit veniam!</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12 right-align">
                            <button type="button" class="btn waves-effect waves-light red lighten-1">Delete</button>
                            <button type="button" class="btn waves-effect waves-light green lighten-1">Edit</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    //Add New
    $('.addNew').on('click', function () {
        $('.addNew,.search-area,.details-cards').slideUp('fast', function () {

            $('.addForm').slideDown('slow');

        });
    });

    //Close Form
    $('.btn_close').click(function (e) {
        $('.addForm').slideUp('fast', function () {
            $('.search-area,.details-cards').slideDown('slow', function () {
                $('.addNew').slideDown('fast');
            });
        })
    });

    //Card expand script
    $(function () {
        $('.btn_expand').on('click', function () {
            var $this = $(this);
            var card = $this.parents('.expand-card');

            if (!$this.hasClass('expand')) {
                $this.addClass('expand').html('expand_less');
                card.find('.expand-card-content').slideDown('fast');
            } else {
                $this.removeClass('expand').html('expand_more');
                card.find('.expand-card-content').slideUp('fast');
            }
        });
    });

    $('#negotiable').on('change', function () {
        if ($(this).is(':checked')) {
            $('.salary-input').prop('disabled', true);
        } else {
            $('.salary-input').prop('disabled', false);
        }
    });

    $('#designation').on('change', function () {
        if ($(this).is(':checked')) {
            $('.designation').prop('disabled', true);
        } else {
            $('.designation').prop('disabled', false);
        }
    });

    //Uploader or Editor
    $('.uploaderOrEditor').on('change', function () {
        if ($(this).val() == 1) {
            $('.editor').slideUp('fast', function () {
                $('.uploader').slideDown('fast');
            });

        } else {
            $('.uploader').slideUp('fast', function () {
                $('.editor').slideDown('fast');
            });
        }
    });


    $('.datepicker').pickadate({
        selectMonths: true,
        selectYears: 15,
        today: 'Today',
        clear: 'Clear',
        close: 'Ok',
        closeOnSelect: false
    });

    //Order edit
    $('.btn-editAndSave').on('click', function () {
        var $this = $(this);
        var input = $this.prev('input');
        if (input.is(':disabled')) {
            input.prop('disabled', false);
            $this.find('i').html('save');
        } else {
            input.prop('disabled', true);
            $this.find('i').html('edit');
        }
    });

    $(document).ready(function () {
        $('select').material_select();
    });
</script>

<!-- Include external JS libs. -->
<script type="text/javascript"
        src="<?php echo $this->module->assetsUrl ?>/js/plugins/editor/codemirror.min.js"></script>
<script type="text/javascript"
        src="<?php echo $this->module->assetsUrl ?>/js/plugins/editor/xml.min.js"></script>

<!-- Include Editor JS files. -->
<script type="text/javascript"
        src="<?php echo $this->module->assetsUrl ?>/js/plugins/editor/froala_editor.pkgd.min.js"></script>

<!-- Initialize the editor. -->
<script> $(function () {
        $('textarea').froalaEditor({
            heightMin: 380
        })
    });
</script>