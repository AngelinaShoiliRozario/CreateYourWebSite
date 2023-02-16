<div id="Fan" class="fun-facts fun-facts-1 fun-facts-3 pt-70 pb-100">
    <div class="shape">
        <img class="shape1" src="assets/images/shapes/shape9.png" alt="image" />
        <img class="shape2" src="assets/images/shapes/shape15.png" alt="image" />
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="fun-facts-card">
                    <div>
                        <p id="sec_10_world_icon">
                            <span id="sec_10_world_icon_span"><i class="flaticon-world-map"></i></span>
                            <span id="sec_10_world_icon_container"
                            class="d-flex justify-content-center align-items-center d-none"
                            style="position: absolute;background:rgba(255,255,255,0.6);inset:0;top:0;left:0;"
                            data-bs-toggle="modal" data-bs-target="#"><span
                            id="sec_10_world_icon_edit"
                            style="background: black;text:red;padding:0.2em 0.5em;">
                            Edit</span></span>
                        </p>
                    </div>

                    <script>
                        $('#sec_10_world_icon').hover(function(){
                            if($('#sec_10_world_icon_container').hasClass('d-none')){
                                $('#sec_10_world_icon_container').removeClass('d-none')
                            }
                            else{
                                $('#sec_10_world_icon_container').addClass('d-none')
                            }
                        })
                    </script>
                    {{-- <h2><span class="odometer" data-count="4520">00</span>+</h2> --}}
                    <h2 class="editabletext" contenteditable="true" name="Sec_10_1_count_facts" 
                        onblur="Sec_10_1_count_facts_change(this)">4220+
                    </h2>
                    <input class="d-none" type="text" name="Sec_10_1_count_facts" id="Sec_10_1_count_facts_id">
                    <p class="editabletext" contenteditable="true" name="Sec_10_1_Fun_facts" 
                    onblur="Sec_10_1_Fun_facts_change(this)">Clients In The World</p>
                    <input class="d-none" type="text" name="Sec_10_1_Fun_facts" id="Sec_10_1_Fun_facts_id">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="fun-facts-card">
                    <i class="flaticon-wifi-signal"></i>
                    {{-- <h2><span class="odometer" data-count="2520">00</span>+</h2> --}}
                    <h2 class="editabletext" contenteditable="true" name="Sec_10_2_count_facts" 
                        onblur="Sec_10_2_count_facts_change(this)">4220+
                    </h2>
                    <input class="d-none" type="text" name="Sec_10_2_count_facts" id="Sec_10_2_count_facts_id">
                    <p class="editabletext" contenteditable="true" name="Sec_10_2_Fun_facts" 
                    onblur="Sec_10_2_Fun_facts_change(this)">Connection Provided</p>
                    <input class="d-none" type="text" name="Sec_10_2_Fun_facts" id="Sec_10_2_Fun_facts_id">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="fun-facts-card">
                    <i class="flaticon-calendar"></i>
                    {{-- <h2><span class="odometer" data-count="20">00</span>+</h2> --}}
                    <h2 class="editabletext" contenteditable="true" name="Sec_10_3_count_facts" 
                        onblur="Sec_10_3_count_facts_change(this)">20+
                    </h2>
                    <input class="d-none" type="text" name="Sec_10_3_count_facts" id="Sec_10_3_count_facts_id">
                    <p class="editabletext" contenteditable="true" name="Sec_10_3_Fun_facts" 
                    onblur="Sec_10_3_Fun_facts_change(this)">Years Of Experience</p>
                    <input class="d-none" type="text" name="Sec_10_3_Fun_facts" id="Sec_10_3_Fun_facts_id">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="fun-facts-card">
                    <i class="flaticon-smart-tv"></i>
                    {{-- <h2><span class="odometer" data-count="450">00</span>+</h2> --}}
                    <h2 class="editabletext" contenteditable="true" name="Sec_10_4_count_facts" 
                        onblur="Sec_10_4_count_facts_change(this)">2954+
                    </h2>
                    <input class="d-none" type="text" name="Sec_10_4_count_facts" id="Sec_10_4_count_facts_id">
                    <p class="editabletext" contenteditable="true" name="Sec_10_4_Fun_facts" 
                    onblur="Sec_10_4_Fun_facts_change(this)">Satellite TV</p>
                    <input class="d-none" type="text" name="Sec_10_4_Fun_facts" id="Sec_10_4_Fun_facts_id">
                </div>
            </div>
        </div>
    </div>
</div>