  <!-- Modal -->
  <div class="modal fade" id="sec5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Upload a Image</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <input type="file" name="sec_5_img" id="section_5_image" onchange="printt(this)">
              </div>\
              <script>
                  const printt = (tag) => {
                      let s_5 = document.getElementById('sec_5_img__');
                      const [file] = tag.files;
                      console.log(file);
                      if (file) {
                          s_5.src = URL.createObjectURL(file);
                      }
                      
                  }
              </script>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cancle_sec_5_img()">Cancle</button>
                  <button type="button" class="btn btn-primary" class="close" data-dismiss="modal" aria-label="Close">Save changes</button>
              </div>
              <script>
                const cancle_sec_5_img =()=>{

                }
              </script>
          </div>
      </div>
  </div>
