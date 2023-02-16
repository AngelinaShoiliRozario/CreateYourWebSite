<div id="Home" class="banner pt-100" style="padding-bottom: 175px;">
    <img class="bottom-shape" src="assets/images/banner/bottom-shape.png" alt="shape" />
    <div class="container-fluid container-large">
        <div class="row align-items-center">
            <div class="col-lg-6 image_container">
                <div class="banner-img-3 pr-20">
                    <img src="assets/images/banner/banner-3.png" alt="image" id="blah" />

                    @include('components.image_background_adder')
                </div>
            </div>
            @include('components.upload_img_modal')

            <div class="col-lg-6">
                <div class="banner-text-area banner-text-area-3 pl-20">
                    <h1 class="editabletext" contenteditable="true" name="section_1_title"
                    onblur="section_1_title_change(this)">
                        Enjoy High Speed Internet With FASTNET BD
                    </h1>
                    <input class="d-none" type="text" name="section_1_title" id="section_1_title">
                    <p class="editabletext" contenteditable="true" name="section_1_desc"
                    onblur="section_1_desc_change(this)">
                        Dea of denouncing pleasure and praising pain was born and I will
                        giyou a completeact of the system, and expound the ac teachings
                        sed quia non numquam eiusmodi.
                    </p>
                    <input class="d-none" type="text" name="section_1_desc" id="section_1_desc">

                    <div class="banner-button-group">
                        <ul>
                            <li style="position:relative;">
                                <a class="default-button-3 default-button-3-active"
                                    style="position: relative;" id="section_1_btn_1">
                                    <span id="section_1_btn_1_span">Learn More</span>
                                    <span id="sec_1_edit_btn_1_container"
                                        class="d-flex justify-content-center align-items-center d-none"
                                        style="position: absolute;background:rgba(255,255,255,0.6);inset:0;top:0;left:0;"
                                        data-toggle="modal" data-target="#exampleModal"><span
                                            id="section_1_btn_1_edit"
                                            style="background: black;text:red;padding:0.2em 0.5em;">
                                            Edit</span></span>

                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                
                                                <button type="button" class="close ms-auto" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">Close</span>
                                                </button>
                                              </div>
                                            <div class="modal-body">
                                                <div class="edit_changes " style="padding:5px;z-index:1000;">
                                                    <div class="input-group ">
                                                        <input type="text" placeholder="Enter Button Text"
                                                            style="width:100%;" id="sec_1_btn_1_text" name="sec_1_btn_1_text">
                                                    </div>
                                                    <div class="input-group mt-1">
                                                        <input type="text" placeholder="Section Title"
                                                            style="width:100%;" id="sec_1_btn_1_section" name="sec_1_btn_1_section">
                                                    </div>
                                                    or
                                                    <div class="input-group mt-1">

                                                        <input type="text" placeholder="web url"
                                                            style="width:100%;" id="sec_1_btn_1_web" name="sec_1_btn_1_web">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancle</button>
                                                <button type="button" class="btn btn-primary"
                                                    id="sec_1_b_1_save_changes"  data-dismiss="modal">Save
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    $('#section_1_btn_1').hover(function() {
                                        if ($('#sec_1_edit_btn_1_container').hasClass('d-none')) {
                                            $('#sec_1_edit_btn_1_container').removeClass('d-none')
                                        } else {
                                            $('#sec_1_edit_btn_1_container').addClass('d-none')
                                        }
                                    });
                                    $('#sec_1_b_1_save_changes').click(function() {
                                        let text = $('#sec_1_btn_1_text').val();
                                        let section = $('#sec_1_btn_1_section').val();
                                        let web = $('#sec_1_btn_1_web').val();
                                        if (text != "" && section != "") {
                                            $('#section_1_btn_1_span').text(text);
                                        }
                                        if (section == "" && web != "") {
                                            $('#section_1_btn_1_span').text(text);
                                        }

                                    });
                                </script>
                            </li>
                            <li>
                                {{-- <a class="default-button-3" href="#Mail">
                                    <span>Get A Connection</span>
                                </a> --}}

                                {{-- Button 2 start --}}
                                <a class="default-button-3 default-button-3-active"
                                    style="position: relative;" id="section_1_btn_2">
                                    <span id="section_1_btn_2_span">Get A Connection</span>
                                    <span id="sec_1_edit_btn_2_container"
                                        class="d-flex justify-content-center align-items-center d-none"
                                        style="position: absolute;background:rgba(255,255,255,0.6);inset:0;top:0;left:0;"
                                        data-toggle="modal" data-target="#section_1_btn_2_Modal"><span
                                            id="section_1_btn_2_edit"
                                            style="background: black;text:white;padding:0.2em 0.5em;">
                                            Edit</span></span>

                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="section_1_btn_2_Modal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                
                                                <button type="button" class="close ms-auto" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">Close</span>
                                                </button>
                                              </div>
                                            <div class="modal-body">
                                                <div class="edit_changes " style="padding:5px;z-index:1000;">
                                                    <div class="input-group ">
                                                        <input type="text" placeholder="Enter Button Text"
                                                            style="width:100%;" id="sec_1_btn_2_text" name="sec_1_btn_2_text">
                                                    </div>
                                                    <div class="input-group mt-1">
                                                        <input type="text" placeholder="Section Title"
                                                            style="width:100%;" id="sec_1_btn_2_section" name="sec_1_btn_2_section">
                                                    </div>
                                                    or
                                                    <div class="input-group mt-1">

                                                        <input type="text" placeholder="web url"
                                                            style="width:100%;" id="sec_1_btn_2_web" name="sec_1_btn_2_web">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancle</button>
                                                <button type="button" class="btn btn-primary"
                                                    id="sec_1_b_2_save_changes"  data-dismiss="modal">Save
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    $('#section_1_btn_2').hover(function() {
                                        if ($('#sec_1_edit_btn_2_container').hasClass('d-none')) {
                                            $('#sec_1_edit_btn_2_container').removeClass('d-none')
                                        } else {
                                            $('#sec_1_edit_btn_2_container').addClass('d-none')
                                        }
                                    });
                                    $('#sec_1_b_2_save_changes').click(function() {
                                        let text = $('#sec_1_btn_2_text').val();
                                        let section = $('#sec_1_btn_2_section').val();
                                        let web = $('#sec_1_btn_2_web').val();
                                        console.log(text, section, web,"omar 222222");
                                        if (text != "" && section != "") {
                                            $('#section_1_btn_2_span').text(text);
                                        }
                                        if (section == "" && web != "") {
                                            $('#section_1_btn_2_span').text(text);
                                        }

                                    });
                                </script>
                                <script>
                                    let preview_image = (tag) => {
                                        let image_upload_subpart = document.getElementById('image_upload_subpart');
                                        image_upload_subpart.classList.add('d-none');
                                        const [file] = tag.files;
                                        if (file) {
                                            blah.src = URL.createObjectURL(file);
                                        }
                                        console.log(tag.files);
                                    }
                            
                                    const show_image_upload_option = () => {
                                        let image_upload_subpart = document.getElementById('image_upload_subpart');
                                        image_upload_subpart.classList.toggle('d-none');
                                    }
                                </script>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>