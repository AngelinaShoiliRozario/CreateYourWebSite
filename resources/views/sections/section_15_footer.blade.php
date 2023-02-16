<div id="Footer" class="footer-group footer-group-3">
    <div class="shape">
        <img class="shape1" data-speed="0.15" data-revert="true" src="assets/images/footer/shape1.png"
            alt="image" />
        <img class="shape2" data-speed="0.1" data-revert="true" src="assets/images/footer/shape1.png"
            alt="image" />
    </div>
    <div class="footer ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-logo-area">
                        <a href="index.html"><img src="assets/images/white-logo.png" alt="image" /></a>
                        <p class="editabletext" contenteditable="true" name="sec_15_footer_icons_text"
                        onblur="sec_15_footer_icons_text_change(this)" >
                            On the other hand, we denounce whteous indignation and dislike
                            men wh beguiled and er hand, we denounce whteous indignation
                            and dislike.
                        </p>
                        <input class="d-none" type="text" name="sec_15_footer_icons_text" id="sec_15_footer_icons_text">
                        <div class="footer-icons-area">
                            <ul>
                                <li>
                                    {{-- <a href="https://www.facebook.com/" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a> --}}
                                    

                                    {{-- <a class="footerIcon-btn-3 default-button-3-active" --}}
                                        {{-- <a class="footerIcon-btn-3 default-button-3-active"
                                        style="position: relative;" id="sec_15_fb_btn">
                                        <span id="sec_15_fb_btn_span"><i class="fab fa-facebook-f"></i></span>
                                        <span id="sec_15_fb_btn_container"
                                        class="d-flex justify-content-center align-items-center d-none"
                                        style="position: absolute;background:rgba(255,255,255,0.6);inset:0;top:0;left:0;"
                                        data-toggle="modal" data-target='#facebookModal'><span
                                        id="sec_15_fb_btn_edit"
                                        style="background: black;text:red;padding:0.2em 0.5em;">
                                        Edit</span></span>

                                    </a> --}}
                                <!-- Modal -->
                                {{-- <div class="modal fade" id='facebookModal' tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                
                                                <button type="button" class="close ms-auto" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">Close</span>
                                                </button>
                                              </div>
                                            <div class="modal-body">
                                                <div class="edit_changes " style="padding:5px;z-index:1001;">
                                                    
                                                    <div class="input-group mt-1">

                                                        <input type="text" placeholder="web url"
                                                            style="width:100%;" id="sec_15_fb_btn_web" name="sec_15_fb_btn_web">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancle</button>
                                                <button type="button" class="btn btn-primary"
                                                    id="sec_15_fb_btn_save_changes"  data-dismiss="modal">Save
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                                {{-- <script>
                                    $('#sec_15_fb_btn').hover(function() {
                                        if ($('#sec_15_fb_btn_container').hasClass('d-none')) {
                                            $('#sec_15_fb_btn_container').removeClass('d-none')
                                        } else {
                                            $('#sec_15_fb_btn_container').addClass('d-none')
                                        }
                                    });
                                    $('#sec_15_fb_btn_save_changes').click(function() {
                                        let web = $('#sec_15_fb_btn_web').val();

                                    });
                                </script> --}}



                                </li>
                                <li>
                                    <!-- Button trigger modal -->
                                    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Launch static backdrop modal
                                    </button> --}}
                                    <a class="footerIcon-btn-3 default-button-3-active"
                                        {{-- style="position: relative;"  --}}
                                        id="sec_15_fb_btn">
                                        <span id="sec_15_fb_btn_span"><i class="fab fa-facebook-f"></i></span>
                                        <span id="sec_15_fb_btn_container"
                                        class="d-flex justify-content-center align-items-center d-none"
                                        style="position: absolute;background:rgba(255,255,255,0.6);inset:0;top:0;left:0;"
                                        data-toggle="modal" data-target="#facebook_modal"><span
                                        id="sec_15_fb_btn_edit"
                                        style="background: black;text:red;padding:0.2em 0.5em;">
                                        Edit</span></span>
                                    </a>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="facebook_modal" tabindex="-1" role="dialog" 
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLongTitle">Modal titlerrrrrrrrrt</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                              ...
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                              <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                    {{-- <script>
                                        $('#sec_15_fb_btn').hover(function() {
                                            if ($('#sec_15_fb_btn_container').hasClass('d-none')) {
                                                $('#sec_15_fb_btn_container').removeClass('d-none')
                                            } else {
                                                $('#sec_15_fb_btn_container').addClass('d-none')
                                            }
                                        });
                                    </script> --}}
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"><i
                                            class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.pinterest.com/" target="_blank"><i
                                            class="fab fa-pinterest-p"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-links quick-links flp">
                        <h3 class="editabletext" contenteditable="true" name="sec_15_footer_quick_links"
                        onblur="sec_15_footer_quick_links_change(this)">Quick Links</h3>
                        <input class="d-none" type="text" name="sec_15_footer_quick_links" id="sec_15_footer_quick_links">
                        <ul>
                            <li>
                                <i class="fas fa-arrow-right"></i>
                                <a href="#About">About Us</a>
                            </li>
                            <li>
                                <i class="fas fa-arrow-right"></i>
                                <a href="#Features">Features</a>
                            </li>
                            <li>
                                <i class="fas fa-arrow-right"></i>
                                <a href="#Pricing">Our Plans</a>
                            </li>
                            <li>
                                <i class="fas fa-arrow-right"></i>
                                <a href="#Contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-links flp">
                        <h3 class="editabletext" contenteditable="true" name="sec_15_footer_other_page"
                        onblur="sec_15_footer_other_page_change(this)">Other Pages</h3>
                        <input class="d-none" type="text" name="sec_15_footer_other_page" id="sec_15_footer_other_page">
                        <ul>
                            <li>
                                <i class="fas fa-arrow-right"></i>
                                <a href="#Products">Products</a>
                            </li>
                            <li>
                                <i class="fas fa-arrow-right"></i>
                                <a href="https://fastnetbd.isperp.net/ispcare">Pay Bill</a>
                            </li>
                            <li>
                                <i class="fas fa-arrow-right"></i>
                                <a href="privacy.html">Privacy Policy</a>
                            </li>
                            <li>
                                <i class="fas fa-arrow-right"></i>
                                <a href="terms.html">Terms & Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-links footer-contact">
                        <h3 class="editabletext" contenteditable="true" name="sec_15_footer_get_in"
                        onblur="sec_15_footer_get_in_change(this)">Get In Touch</h3>
                        <input class="d-none" type="text" name="sec_15_footer_get_in" id="sec_15_footer_get_in">
                        <div class="footer-contact-card">
                            <i class="flaticon-phone-call"></i>
                            <a href="tel:802162020">+880 187 269 5474</a>
                        </div>
                        <div class="footer-contact-card">
                            <i class="flaticon-mailing"></i>
                            <a href="../../cdn-cgi/l/email-protection.html#ec85828a83ac82839f83c28f8381"><span
                                    class="__cf_email__"
                                    data-cfemail="fa93949c95ba94958995d4999597">[email&#160;protected]</span></a>
                        </div>
                        <div class="footer-contact-card">
                            <i class="flaticon-location"></i>
                            {{-- <a href="https://goo.gl/maps/uVirgW7ijJ5harhy5" target="_blank">House:03 (2th
                                floor),
                                Road: 16, Sector: 11, Dhaka 1230</a> --}}
                                <p class="contact-address editabletext" contenteditable="true" name="sec_11_address"
                                onblur="sec_11_address_change(this)">CA 560 bush st & 20th ave, apt 5 san francisco, 230909, Canada</p>
                                <input class="d-none" type="text" name="sec_11_address" id="sec_11_address">
                                <a href="https://goo.gl/maps/uVirgW7ijJ5harhy5" target="_blank">House:03 (2th
                                floor),
                                Road: 16, Sector: 11, Dhaka 1230</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <p>
                Copyright @
                <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                <script>
                    document.write(new Date().getFullYear());
                </script>
                . <strong>Fastnet BD</strong> All Rights Reserved By
                <a target="_blank" href="https://ztrios.com/">Ztrios Tech & Marketing</a>
            </p>
        </div>
    </div>
</div>