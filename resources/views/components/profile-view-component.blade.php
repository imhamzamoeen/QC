@push('extended-css')
<style>
    .zoom {

  background-color:transparent;
  transition: transform .2s;

  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(6.5); /* IE 9 */
  -webkit-transform: scale(6.5); /* Safari 3-8 */
  transform: scale(6.5); 
}
</style>
@endpush

<div id="user-profile">
    <!-- profile header -->
    <div class="row">
        <div class="col-12">
            <div class="card profile-header mb-2">
                <!-- profile cover photo -->
                <img class="card-img-top" src="{{ asset('images/headers/header.jpg') }}" alt="QC" />
                <!--/ profile cover photo -->

                <div class="position-relative">
                    <!-- profile picture -->
                    <div class="profile-img-container d-flex align-items-center">
                        <div class="profile-img">
                            <div class="img-hover-zoom--colorize profilepic">


                                <img class="edit-user-img profilepic__image rounded img-fluid"
                                    style="cursor: pointer;height:152px;width: 100%"
                                    onerror="this.onerror=null;this.src='{{ asset('images/users/QC_default.png') }}';"
                                    src="{{ asset('images/users/') }}/{{ $user->UserAttributes->image }}" alt=""
                                    onclick="image_change()">
                                <div class="profilepic__content">

                                    <input id="file_pic" class="profilepic__icon" name="profile_pic"
                                        accept=".jpg, .jpeg, .png" type="file" style="display: none" />
                                    <button type="button" id="pro1" class="btn btn-icon"
                                        style="min-height: 100%;min-width:100%;">
                                        <i data-feather="camera"></i>
                                        <span class="profilepic__text">Update Pic</span>
                                    </button>
                                </div>

                            </div>
                            {{-- <img src="{{ asset('images/users/') }}/{{ $user->UserAttributes->image }}" onerror="this.onerror=null;this.src='{{ asset('images/users/QC_default.png') }}';" class="rounded img-fluid" alt="Card image" /> --}}
                        </div>
                        <!-- profile title -->
                        <div class="profile-title ms-3">
                            <h2 class="text-white user_name">{{ ucwords($user->name) }}</h2>
                            <p class="text-white">{{ ucwords($user->UserAttributes->user_type) }}</p>
                        </div>
                    </div>
                </div>

                <!-- tabs pill -->
                <div class="profile-header-nav">
                    <!-- navbar -->
                    <nav
                        class="navbar navbar-expand-md navbar-light justify-content-end justify-content-md-between w-100">
                        <button class="btn btn-icon navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i data-feather="align-justify" class="font-medium-5"></i>
                        </button>

                        <!-- collapse  -->
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="profile-tabs d-flex justify-content-between flex-wrap mt-1 mt-md-0">
                                <ul class="nav nav-pills mb-0">

                                </ul>
                                <!-- edit button -->
                                <button class="btn btn-primary edit-btn">
                                    <i data-feather="edit" class="d-block d-md-none "></i>
                                    <span class="fw-bold d-none d-md-block">Edit</span>
                                </button>
                            </div>
                        </div>
                        <!--/ collapse  -->
                    </nav>
                    <!--/ navbar -->
                </div>
            </div>
        </div>
    </div>
    <!--/ profile header -->

    <!-- profile info section -->
    <section id="profile-info">
        <div class="row">
            <!-- left profile info section -->
            <div class="col-lg-3 col-12 order-2 order-lg-1">
                <!-- about -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-75">Name</h5>
                        <p class="card-text user_name">
                            {{ ucwords($user->name) }}
                        </p>
                        <div class="mt-2">
                            <h5 class="mb-75">Email:</h5>
                            <p class="card-text user_email"> {{ ucwords($user->email) }}</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="mb-75">Role</h5>
                            <p class="card-text ">{{ ucwords($user->UserAttributes->user_type) }}</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="mb-75">Joined:</h5>
                            <p class="card-text">{{ $user->created_at->format(' M d,Y ') }}</p>
                        </div>

                    </div>
                </div>
                <!--/ about -->



                <!-- My companies -->
                <div class="card">
                    <div class="card-body">
                        <h5>My Companies</h5>

                        @forelse ($my_companies as $item)
                            <div class="profile-twitter-feed mt-1">
                                <div class="d-flex justify-content-start align-items-center mb-1">
                                    <div class="avatar me-1">
                                        <img class="zoom" src="{{ asset('images/Insurance_Companies/' . $item->company_image) }}"
                                            alt="{{ $item->name }}" height="40" width="40" />
                                    </div>
                                    <div class="profile-user-info">
                                        <h6 class="mb-0">{{ $item->existance_name }} : {{ $item->name }}
                                        </h6>
                                        <a href="#">
                                            <small class="text-muted">{{ $item->email }}</small>
                                            <i data-feather="check-circle"></i>
                                        </a>
                                    </div>
                                    <div class="profile-star ms-auto">
                                        <i data-feather="star" class="profile-favorite font-medium-3"></i>
                                    </div>
                                </div>
                                <p class="card-text mb-50">{{ $item->address }}
                                </p>

                            </div>
                        @empty
                            <div class="profile-twitter-feed mt-1">

                                <p class="card-text mb-50">No Companies Assigned
                                </p>

                            </div>
                        @endforelse


                    </div>
                </div>
                <!--/ twitter feed card -->
            </div>
            <!--/ left profile info section -->

            <!-- center Last leads info section -->
            <div class="col-lg-6 col-12 order-1 order-lg-2">
                <!-- post 1 -->
                @forelse ($last_activity as $item)
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-start align-items-center mb-1">
                                <!-- avatar -->
                                <div class="avatar me-1">
                                    <img src="{{ asset('images/users/QC_default.png') }}" alt="avatar img"
                                        height="50" width="50" />
                                </div>
                                <!--/ avatar -->
                                <div class="profile-user-info">
                                    <h6 class="mb-0">
                                        {{ $item->properties['user_name'] ? $item->properties['user_name'] : 'Not Specified' }}
                                    </h6>
                                    <small class="text-muted">{{ $item->created_at->diffForHumans() }}</small>
                                </div>
                            </div>
                            <p class="card-text">
                            <h6> <strong> Age : </strong> {{ $item->properties['age'] }}</h6>
                            <h6> <strong> Smoker Status : </strong> {{ $item->properties['what_tobaco'] }}</h6>
                            <h6> <strong> Policy Type : </strong> {{ $item->properties['policy_type'] }}</h6>
                            <h6> <strong> Level : </strong> {{ $item->properties['level'] }}</h6>
                            <h6> <strong> Annual Rate : </strong> {{ $item->properties['annual'] }} <strong> Semi
                                    Annual Rate : </strong> {{ $item->properties['semi_annual'] }} <strong> Monthly
                                    Rate : </strong> {{ $item->properties['monthly'] }}</h6>

                            <h6> <strong> {{ $item->properties['name'] }} : </strong>
                                {{ $item->properties['sub_policy_type'] }}</h6>
                            </p>
                            <!-- post img -->
                            <img class="img-fluid rounded mb-75"
                                src="{{ asset('images/Insurance_Companies/') }}/{{ $item->properties['image'] }}"
                                alt="avatar img" />
                            <!--/ post img -->
                        </div>
                    </div>
                @empty
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-start align-items-center mb-1">
                                <!-- avatar -->
                                <div class="avatar me-1">
                                    <img src="{{ asset('images/users/QC_default.png') }}" alt="avatar img"
                                        height="50" width="50" />
                                </div>
                                <!--/ avatar -->
                                <div class="profile-user-info">
                                    <h6 class="mb-0">Admin</h6>
                                    <small class="text-muted">Now</small>
                                </div>
                            </div>
                            <p class="card-text">
                                No Activity Found agaist you. Hopping to see you in the best employers
                            </p>
                            <!-- post img -->
                            <img class="img-fluid rounded mb-75" src="{{ asset('images/test_quote/work.gif') }}"
                                alt="avatar img" />
                            <!--/ post img -->
                        </div>
                    </div>
                @endforelse






            </div>
            <!--/ centerLast lead info section -->

            <!-- right profile update info section -->
            <div class="col-lg-3 col-12 order-3">
                <!-- latest profile pictures -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-1">Edit Profile <small>Only fill feild that you want to update</small>
                        </h5>
                        <div class="row">
                            <form id="ProifleUpdateForm" action="{{ route('profile.updatedetails') }}" method="POST"
                                autocomplete="off">
                                <div class="col-md-12 mb-2">
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    <div class="d-flex justify-content-between">
                                        <label for="name" class="form-label">Name</label>
                                    </div>
                                    <input type="text" name="name" class="form-control" placeholder="name"
                                        autocomplete="off">
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="email" class="form-label">Email</label>
                                    </div>
                                    <input type="email" name="email" class="form-control" placeholder="email"
                                        autocomplete="off">
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="password" class="form-label">Password</label>
                                    </div>
                                    <input type="password" name="password" class="form-control" autocomplete="off"
                                        placeholder="password">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--/ latest profile pictures -->



            </div>
            <!--/ right profile info section -->
        </div>


    </section>
    <!--/ profile info section -->
</div>
