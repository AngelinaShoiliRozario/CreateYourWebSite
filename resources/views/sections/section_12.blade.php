<div id="Mail" class="contact pb-100">
    <div class="container">
        <div class="default-section-title default-section-title-middle">
            <span class=" editabletext" contenteditable="true" name="Sec_12_title" 
            onblur="Sec_12_title_change(this)">Send Message</span>
            <input class="d-none" type="text" name="Sec_12_title" id="Sec_12_title_id">
            <h3 class=" editabletext" contenteditable="true" name="Sec_12_heading" 
            onblur="Sec_12_heading_change(this)">Drop Us Message For Query</h3>
            <input class="d-none" type="text" name="Sec_12_heading" id="Sec_12_heading_id">
        </div>
        <div class="section-content">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-img-area mt-30">
                        <img src="assets/images/inner-images/contact-img.png" alt="image" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form-text-area pl-20 mt-30">

                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name"
                                        id="name" data-error="Please enter your name" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Email" id="email"
                                        data-error="Please enter your Email" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <input type="text" name="phone_number" class="form-control"
                                        placeholder="Phone Number" id="phone_number"
                                        data-error="Please enter your phone number" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" class="form-control"
                                        placeholder="Subject" id="msg_subject"
                                        data-error="Please enter your subject" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" placeholder="Your Messages.." cols="30"
                                        rows="5" data-error="Please enter your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-12">
                                <span class="default-button" type="submit">
                                    <span class=" editabletext" contenteditable="true" name="Sec_12_send_btn" 
                                    onblur="Sec_12_send_btn_change(this)">Send Message</span>
                                    <input class="d-none" type="text" name="Sec_12_send_btn" id="Sec_12_send_btn_id">
                                </span>
                                <div id="msgSubmit" class="h6 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>