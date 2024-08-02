<div id="social-links" class="content" role="tabpanel" aria-labelledby="social-links-trigger">
    <div class="content-header">
        <h5 class="mb-0">Apply A Quote </h5>
        <small>Submit a Quote.</small>
    </div>
    <form id="image">
        <div class="row">
            <div class="mb-1 col-md-6">
                <label class="form-label" for="image">Image</label>
                <input type="file" id="pic" name="pic" class="form-control"  onchange="document.getElementById('preview_image').src = window.URL.createObjectURL(this.files[0])"/>
            </div>
            <div class="mb-1 col-md-6">
                <img src="{{asset('images/data/dummy-logo.png')}}" style="width:200px;height:200px;"   accept="image/png, image/jpeg" id="preview_image" alt="uploaded image">
            </div>
          
        </div>
       
    </form>
    <div class="d-flex justify-content-between">
        <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
        </button>
        <button class="btn btn-success btn-submit-form">Submit</button>
    </div>
</div>