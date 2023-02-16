<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Link of CSS files -->
      <link rel="stylesheet" href="{{ asset('/assets/css/animate.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('/assets/css/fontawsome.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('/assets/fonts/font/flaticon.css') }}" />
      <link rel="stylesheet" href="{{ asset('/assets/css/meanmenu.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('/assets/css/owl.carousel.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('/assets/css/nice-select.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('/assets/css/owl.theme.default.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('/assets/css/magnific-popup.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('/assets/css/jquery-ui.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('/assets/css/odometer.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('/assets/css/barfiller.css') }}" />
      <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}" />
      <link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}" />
  
  
      <title>Noso - Broadband & Internet Services HTML Template</title>
      <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
          crossorigin="anonymous"></script>
      <link rel="icon" type="image/png" href="assets/images/fav-icon.png" />
      <style>
          .editabletext:focus {
              border: 1px solid black;
          }
  
          .image_container {
              position: relative;
          }
  
          .image_uploader {
              position: absolute;
              text-transform: uppercase;
              padding: 0px 10px;
              background-color: #2e2e2f;
              color: white;
              top: 0;
              right: 10px;
              cursor: pointer;
          }
  
          .img_preview img {
              border: 1px solid black;
          }
  
          .img_preview img:hover {
              border: 1px solid white;
          }
  
          .nice-select {
              padding: 6px 10px;
              margin-top: 3px;
              border: 2px solid rgb(219, 8, 156);
          }
  
          .nice-select .current {
              color: white;
  
          }
      </style>
    <title>Document</title>
</head>
<body>
    <div id="WhyAgain" class="why-we why-we-3 pb-100 bg-f9f9f9">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="why-we-text-area-3">
                        <div class="default-section-title">
                            <span class=" editabletext" contenteditable="true" name="Section_5_title" 
                            onblur="Section_5_title_change(this)">Why Choose Us</span>
                            <input class="d-none" type="text" name="Section_5_title" id="Section_5_title_id">
                            <h3 class=" editabletext" contenteditable="true" name="Section_5_heading" 
                            onblur="Section_5_heading_change(this)">More Great Reasons To Choose Noso Broadband Internet</h3>
                            <input class="d-none" type="text" name="Section_5_heading" id="Section_5_heading_id">
                            
                        {{-- onblur="Section_5_body_change(this)" onchange="Section_5_body_change()" --}}
                            <p class=" editabletext" contenteditable="true" name="Section_5_body" 
                            onblur="Section_5_body_change(this)">
                                Here are many variations of passages of Lorem Ipsum available,
                                but the majority in some form, by injected humour, or
                                randomised words which don't look even.
                            </p>
                            <input class="d-none" type="text" name="Section_5_body" id="Section_5_body_id">
                        </div>
                        <div class="why-we-list-area-3">
                            <ul>
                                <li class=" editabletext" contenteditable="true" name="Section_5_list_1" 
                                onblur="Section_5_list_1_change(this)"><i class="flaticon-seen"></i> Fast Connection</li>
                                <input class="d-none" type="text" name="Section_5_list_1" id="Section_5_list_1_id">
    
                                <li class=" editabletext" contenteditable="true" name="Section_5_list_2" 
                                onblur="Section_5_list_2_change(this)"><i class="flaticon-seen"></i> Satellite TV</li>
                                <input class="d-none" type="text" name="Section_5_list_2" id="Section_5_list_2_id">
    
                                <li class=" editabletext" contenteditable="true" name="Section_5_list_3" 
                                onblur="Section_5_list_3_change(this)"><i class="flaticon-seen"></i> Free Installation</li>
                                <input class="d-none" type="text" name="Section_5_list_3" id="Section_5_list_3_id">
    
                                <li class=" editabletext" contenteditable="true" name="Section_5_list_4" 
                                onblur="Section_5_list_4_change(this)"><i class="flaticon-seen"></i> Home Security</li>
                                <input class="d-none" type="text" name="Section_5_list_4" id="Section_5_list_4_id">
    
                                <li class=" editabletext" contenteditable="true" name="Section_5_list_5" 
                                onblur="Section_5_list_5_change(this)"><i class="flaticon-seen"></i> 24/7 Support</li>
                                <input class="d-none" type="text" name="Section_5_list_5" id="Section_5_list_5_id">
    
                                <li class=" editabletext" contenteditable="true" name="Section_5_list_6" 
                                onblur="Section_5_list_6_change(this)"><i class="flaticon-seen"></i> Best Pricing</li>
                                <input class="d-none" type="text" name="Section_5_list_6" id="Section_5_list_6_id">
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="why-we-img-3 ">
                        <img src="assets/images/why-we/ww-3.png" alt="image" />
                        <div class="image_uploader">
                            <div class="text-center p-2" onclick="sec_5_show_image_upload_option()">
                                <img src="{{ asset('assets/myImages/camera.png') }}" alt="" height="30" width="30">
                                Background
                            </div>
                        
                            <div class="dropdown d-none" style="width: 300px" id="sec_5_image_upload_subpart_id">
                                <div class="img_preview d-flex flex-wrap">
                                    <img src="./assets/images/banner/banner-1-bg.jpg" alt="" style="width: 33.3333%; height: auto" />
                                    <img src="./assets/images/banner/banner-3.png" alt="" style="width: 33.3333%; height: auto" />
                                    <img src="./assets/images/banner/banner-1-bg.jpg" alt="" style="width: 33.3333%; height: auto" />
                                    <img src="./assets/images/banner/banner-3.png" alt="" style="width: 33.3333%; height: auto" />
                                    <img src="./assets/images/banner/banner-1-bg.jpg" alt="" style="width: 33.3333%; height: auto" />
                                    <img src="./assets/images/banner/banner-3.png" alt="" style="width: 33.3333%; height: auto" />
                                </div>
                                <span class="btn mt-1 w-100 btn-outline-info" data-bs-toggle="modal" data-bs-target="#exampleModalCenter5">
                                    upload image
                                </span>
                                
                                <select class="form-select select2">
                                    <option value="tile" selected>tile</option>
                                    <option value="center">Center</option>
                        
                                    <option value="strech">Strech</option>
                        
                                    <option value="fit">fit</option>
                        
                                </select>
                                <span class="btn mt-1 w-100 btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModalCenter5">
                                    Remove
                                </span><span class="btn mt-1 w-100 btn-outline-success mb-2" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalCenter5">
                                    Save
                                </span>
                            </div>
                        </div>
                    </div>
                    {{-- @include('components.sec_5_upload_img_modal') --}}
                     <!-- modal start -->
                    {{-- <div class="modal fade" id="sec_5_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">
                                    Upload image here
                                </h5>
                                <span type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></span>
                            </div>
                            <div class="modal-body">
                            
                                <input type="file" name="section_5_img" id="" onchange="sec_5_preview_image(this)">
                            </div>
                            <div class="modal-footer">
                                <span type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    Close
                                </span>
                                <span type="button" class="btn btn-primary">
                                    Understood
                                </span>
                            </div>
                        </div>
                    </div>
                    </div> --}}

                    <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Modal titleEEEEEEEEE</h5>
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
<!-- modal end -->
                </div>
            </div>
        </div>
    </div>
    <script>
        let sec_5_preview_image = (tag) => {
            let sec_5_image_upload_subpart = document.getElementById('sec_5_image_upload_subpart_id');
            sec_5_image_upload_subpart.classList.add('d-none');
            const [file] = tag.files;
            if (file) {
                blah.src = URL.createObjectURL(file);
            }
            console.log(tag.files);
        }
    
        const sec_5_show_image_upload_option = () => {
            let sec_5_image_upload_subpart = document.getElementById('sec_5_image_upload_subpart_id');
            sec_5_image_upload_subpart.classList.toggle('d-none');
        }
    </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="{{ asset('/assets/js/mycustom.js') }}"></script>
    <!-- Link of JS files -->
    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('/assets/js/owl.carousel2.thumbs.js') }}"></script>
    <script src="{{ asset('/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/assets/js/TweenMax.js') }}"></script>
    <script src="{{ asset('/assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('/assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('/assets/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('/assets/js/ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('/assets/js/appear.min.js') }}"></script>
    <script src="{{ asset('/assets/js/tilt.js') }}"></script>
    <script src="{{ asset('/assets/js/barfiller.js') }}"></script>
    <script src="{{ asset('/assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('/assets/js/custom.js') }}"></script>
</body>
</html>