<div class="container mb-2 mt-2">
    <div class="col-12">
        <img src="{{asset('images/Insurance_Companies/')}}/{{$company->company_image}}"
            onerror="{{asset('images/Insurance_Companies/Companies_Default.png')}}'" class="img-fluid card-img-top" style="width:100%;height:70%" 
            alt="company Logo">
        <div class="card-body">
            <h4 class="card-title">{{ $company->name }}</h4>
            <div class="d-flex">
                <div class="avatar me-50">
                    <img src="{{asset('images/users/')}}/{{$company->owner->UserAttributes->image}}" alt="Company_image" width="24"
                        height="24">
                </div>
                <div class="author-info">
                    <small class="text-muted me-25">by</small>
                    <small><a href="#" class="text-body">{{ $company->owner->name }}</a></small>
                    <span class="text-muted ms-50 me-25">|</span>
                    <small class="text-muted">{{ $company->created_at->diffForHumans() }}</small>
                </div>
            </div>
            <div class="my-1 py-25">
                <a href="#">
                    <span class="badge rounded-pill badge-light-success me-50 bx-flashing">Active</span>
                </a>
            </div>
            <p class="card-text mb-2">
                {{ $company->description }}
            </p>
            <hr class="my-2">
        </div>
    </div>
</div>

<x-form-set-ajax-data companyId="{{ $company->id }}" />
