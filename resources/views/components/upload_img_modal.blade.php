 <!-- modal start -->
 <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
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
                 <input type="file" name="section_1_img" id="" onchange="preview_image(this)">
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
