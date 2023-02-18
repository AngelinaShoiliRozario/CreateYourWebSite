<!-- Button trigger modal -->




<div class="image_uploader">
    <div class="text-center p-2" onclick="sec_5_show_image_upload_option5()">
        
        <img src="{{ asset('assets/myImages/camera-01.png') }}" alt="" height="30" width="30">
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
        <span type="button" class="btn mt-1 w-100 btn-outline-info" data-toggle="modal" data-target="#sec5">
            upload image
        </span>

        <select class="form-select select2">
            <option value="tile" selected>tile</option>
            <option value="center">Center</option>
            <option value="strech">Strech</option>
            <option value="fit">fit</option>
        </select>

        <span class="btn mt-1 w-100 btn-outline-danger" 
            onclick="remove_sec_5_img()">
            Remove
        </span><span class="btn mt-1 w-100 btn-outline-success mb-2" data-bs-toggle="modal"
            data-bs-target="#staticBackdrop">
            Save
        </span>
    </div>
</div>
<script>
    let remove_sec_5_img = () => {
        let s_5 = document.getElementById('sec_5_img__2');
        s_5.src="";
        let s_5_2 = document.getElementById('sec_5_img__1');
        s_5_2.classList.remove('d-none');
    }

    const sec_5_show_image_upload_option5 = () => {
        let sec_5_image_upload_subpart = document.getElementById('sec_5_image_upload_subpart_id');
        sec_5_image_upload_subpart.classList.toggle('d-none');
    }
</script>
