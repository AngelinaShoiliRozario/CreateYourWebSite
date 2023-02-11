<div id="Who" class="about who-we-wre ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="who-we-are-text-area">
                    <div class="default-section-title">
                        <span class="editabletext" contenteditable="true" name="section_2_top" onblur="section_2_top_change(this)">Who We Are</span>
                        <input class="d-none" type="text" name="section_2_top" id="section_2_top">
                        <h3 class="editabletext" contenteditable="true" name="section_2_title" onblur="section_2_title_change(this)">
                            We Help The Best Connectivity Across The Whole World
                        </h3>
                        <input class="d-none" type="text" name="section_2_title" id="section_2_title">
                        <p class="editabletext" contenteditable="true" name="section_2_desc"
                        onblur="section_2_desc_change(this)">
                            There are many variations of passages of Lorem Ipsum
                            available, but the majority in some form, by injected humour,
                            or randomised words which don't look.
                        </p>
                        <input class="d-none" type="text" name="section_2_desc" id="section_2_desc">
                        <p class="editabletext" contenteditable="true" name="section_2_desc_2"
                        onblur="section_2_desc_2_change(this)">
                            Slightly believable. If you are going to use a passage of
                            Lorem Ipsum, you need to be sthere isn't anything embarrassing
                            hidden in the middle of text. All the Lorem Ipgenerators onhe
                            Internet tend to repeat predefined chunks as necessary, making
                            this the first true.
                        </p>
                        <input class="d-none" type="text" name="section_2_desc_2" id="section_2_desc_2">
                    </div>
                    <a class="default-button-3 default-button-3-active"
                                    style="position: relative;" id="section_1_single_btn">
                                    <span id="section_2_btn_span">Know More About Us</span>
                                    <span id="sec_2_edit_btn_container"
                                        class="d-flex justify-content-center align-items-center d-none"
                                        style="position: absolute;background:rgba(255,255,255,0.6);inset:0;top:0;left:0;"
                                        data-toggle="modal" data-target="#section_2_Modal"><span
                                            id="section_2_btn_edit"
                                            style="background: black;text:white;padding:0.2em 0.5em;">
                                            Edit</span></span>

                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="section_2_Modal" tabindex="-1" role="dialog"
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
                                                            style="width:100%;" id="section_2_btn_text" name="section_2_btn_text">
                                                    </div>
                                                    <div class="input-group mt-1">
                                                        <input type="text" placeholder="Section Title"
                                                            style="width:100%;" id="section_2_btn_sec" name="section_2_btn_sec">
                                                    </div>
                                                    or
                                                    <div class="input-group mt-1">

                                                        <input type="text" placeholder="web url"
                                                            style="width:100%;" id="section_2_btn_web" name="section_2_btn_web">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancle</button>
                                                <button type="button" class="btn btn-primary"
                                                    id="sec_2_b_1_save_changes"  data-dismiss="modal">Save
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    $('#section_1_single_btn').hover(function() {
                                        if ($('#sec_2_edit_btn_container').hasClass('d-none')) {
                                            $('#sec_2_edit_btn_container').removeClass('d-none')
                                        } else {
                                            $('#sec_2_edit_btn_container').addClass('d-none')
                                        }
                                    });
                                    $('#sec_2_b_1_save_changes').click(function() {
                                        let text = $('#section_2_btn_text').val();
                                        let section = $('#section_2_btn_sec').val();
                                        let web = $('#section_2_btn_web').val();
                                        if (text != "" && section != "") {
                                            $('#section_2_btn_span').text(text);
                                        }
                                        if (section == "" && web != "") {
                                            $('#section_2_btn_span').text(text);
                                        }

                                    });
                                </script>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="who-we-wre-img-area">
                    <img src="assets/images/about/who-we.jpg" alt="img" />
                    <div class="about-img-text-area">
                        <div class="about-fun-facts abf-1">
                            <h2><span class="odometer" data-count="20">00</span>+</h2>
                            <p>Years Of Experiences</p>
                        </div>
                        {{-- <input class="d-none" type="text" name="section_2_btn" id="section_2_btn"> --}}
                        <div class="about-fun-facts abf-2">
                            <h2><span class="odometer" data-count="2708">00</span>+</h2>
                            <p>Client In The World</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>