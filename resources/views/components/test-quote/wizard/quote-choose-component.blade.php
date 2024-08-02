<div id="personal-info" class="content" role="tabpanel" aria-labelledby="personal-info-trigger">
    <div class="content-header">
        <h5 class="mb-0">Check Quotes</h5>
        <small>Find a Suitable Quote for you.</small>
    </div>
 
   
    <div class="row">
        <div class="col-lg-12">
        <x-sponsered-cards  />
        
    
        <div class="content-detached content-right">
            <div class="content-body">
                <x-search-header/>
                <!-- background Overlay when sidebar is shown  starts-->
                <div class="body-content-overlay"></div>
                <!-- background Overlay when sidebar is shown  ends-->
                <div id="ecommerce-products-div">
                <x-view />
            </div>
            </div>
        </div>       
        
        {{-- <div class="sidebar-detached sidebar-left">
            <div class="sidebar">
                <x-filter/>
            </div>
        </div> --}}
    </div>

    

</div>
       

    <div class="d-flex justify-content-between">    
        <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
        </button>
        {{-- <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
        </button> --}}
    </div>
</div>