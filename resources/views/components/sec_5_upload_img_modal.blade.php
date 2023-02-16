 <!-- modal start -->
 <div class="modal fade" id="sec_5_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
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
                 {{-- content --}}
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
 </div>
 <!-- modal end -->
