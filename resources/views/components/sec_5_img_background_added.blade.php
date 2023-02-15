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
        <span class="btn mt-1 w-100 btn-outline-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            upload image
        </span>
        <select class="form-select select2">
            <option value="tile" selected>tile</option>
            <option value="center">Center</option>

            <option value="strech">Strech</option>

            <option value="fit">fit</option>

        </select>
        <span class="btn mt-1 w-100 btn-outline-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Remove
        </span><span class="btn mt-1 w-100 btn-outline-success mb-2" data-bs-toggle="modal"
            data-bs-target="staticBackdrop">
            Save
        </span>
    </div>
</div>