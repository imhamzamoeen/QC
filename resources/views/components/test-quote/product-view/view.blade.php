  <!-- app e-commerce details start -->
  {{-- {{dd($result_collection[0])}} --}}
  
  <section class="app-ecommerce-details">
      <div class="card">
          <!-- Product Details starts -->
          <div class="card-body">
              <div class="row my-2">
                  <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                      <div class="d-flex align-items-center justify-content-center">
                          <img src="{{ asset('images/Insurance_Companies') }}/{{ $result_collection[0]->image }}"
                              class="img-fluid product-img" alt="product image" />
                      </div>
                  </div>
                  <div class="col-12 col-md-7">
                      <h4>{{ $result_collection[0]->name }}</h4>
                      <span class="card-text item-company">email: <a
                              href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to={{ $result_collection[0]->email }}"
                              class="company-name">{{ $result_collection[0]->email }}</a></span>
                      <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                          <h4 class="item-price me-1 annaul_price">Annual:{{ $result_collection[0]->annual }}$</h4>
                          <h4 class="item-price me-1 semi_annual_price">Semi Annual:{{ $result_collection[0]->semi_annual }}$</h4>
                          <h4 class="item-price me-1 monthly_price">Monthly:{{ $result_collection[0]->monthly }}$</h4>


                      </div>
                      <hr />
                      @for ($i = 0; $i < $result_collection[0]->rating; $i++)
                          <i data-feather="star" class="filled-star"></i>

                      @endfor
                      <hr />
                      {{-- <p class="card-text">Available - <span class="text-success">In stock</span></p> --}}
                      <p class="card-text">


                          @foreach ($result_collection[0]->features as $feature)
                              <li class="ratings-list-item">{{ $feature }}</li>
                          @endforeach
                          </ul>
                      </p>

                  </div>
              </div>
          </div>
          <!-- Product Details ends -->

          <!-- Item features starts -->
          <div class="item-features">
              <div class="row ">
                  <div class="col-6 col-md-6">
                      <div class="w-75 mx-auto">
                          <i data-feather="award"></i><span style="color:blue;font-size:24px">
                              {{ ucfirst($result_collection[0]->policy_type) }} Policy </span>
                          <h4 class="mt-2 mb-1">Details</h4>
                          <ul class="card-text">
                              @if ($result_collection[0]->policy_type == 'term')

                              <li class="ratings-list-item">
                                For a <strong>
                                    {{ $result_collection[0]->what_tobaco == 'non-smoker' ? 'Non Tobacco user ' : 'Tobacco User' }}
                                </strong> , the rate company provides is <strong>   {{ isset($result_collection[0]->rate_from_db) ? $result_collection[0]->rate_from_db : "Not found"}}</strong>

                            </li>
                                  <li class="ratings-list-item">
                                      The <strong>{{ $result_collection[0]->name }} </strong> has a annaul policy fee of
                                      <strong>{{ ($result_collection[0]->annual_policy_fee) ??  0}} </strong>
                                  </li>
                                  <li class="ratings-list-item">
                                    The <strong>{{ $result_collection[0]->name }} </strong> has a semi annual policy fee of
                                    <strong>{{ ($result_collection[0]->semi_annual_policy_fee) ??  0}} </strong>
                                </li>
                                <li class="ratings-list-item">
                                    The <strong>{{ $result_collection[0]->name }} </strong> has a monthly  policy fee of
                                    <strong>{{ ($result_collection[0]->monthly_policy_fee) ??  0}} </strong>
                                </li>
                                <li class="ratings-list-item">
                                    For Annual: {{ $result_collection[0]->name }} has factor of
                                    <strong>{{ ($result_collection[0]->annual_factor) ??  0}}</strong>
                                </li>
                                  <li class="ratings-list-item">
                                      For monthly: {{ $result_collection[0]->name }} has factor of
                                      <strong>{{ ($result_collection[0]->monthly_factor) ??  0}}</strong>
                                  </li>
                                  <li class="ratings-list-item">
                                      For Semi Annual : {{ $result_collection[0]->name }} has factor of
                                      <strong>{{ ($result_collection[0]->semi_annual_factor) ?? 0 }}</strong>
                                  </li>

                                  <li class="ratings-list-item ">
                                    For This calculation the Legacy Factor is  : 
                                    <strong class="legacy_factor_point">{{ ($result_collection[0]->leagcay_factor) ?? 0 }}</strong>
                                </li>
                              
                                
                              @else

                              <li class="ratings-list-item">
                                For a <strong>
                                    {{$result_collection[0]->sub_policy_type}} 
                                </strong> , the rate company provides is <strong>   {{ isset($result_collection[0]->rate_from_db) ? $result_collection[0]->rate_from_db : "Not found"}}</strong>

                            </li>
                            <li class="ratings-list-item">
                                The <strong>{{ $result_collection[0]->name }} </strong> has a  Anuual  policy fee of
                                <strong>{{ ($result_collection[0]->annual_policy_fee) ?? 0 }} </strong>
                            </li>
                            <li class="ratings-list-item">
                                The <strong>{{ $result_collection[0]->name }} </strong> has a Semi Anuual  policy fee of
                                <strong>{{ ($result_collection[0]->semi_annual_policy_fee) ?? 0 }} </strong>
                            </li>

                            <li class="ratings-list-item">
                                The <strong>{{ $result_collection[0]->name }} </strong> has a Monthly Fee of
                                <strong>{{ ($result_collection[0]->monthly_policy_fee) ?? 0 }} </strong>
                            </li>

                            <li class="ratings-list-item">
                                For annual: {{ $result_collection[0]->name }} has factor of
                                <strong>{{ ($result_collection[0]->annual_factor) ?? 0 }}</strong>
                            </li>
                            <li class="ratings-list-item">
                                For Semi Annual : {{ $result_collection[0]->name }} has factor of
                                <strong>{{ ($result_collection[0]->semi_annual_factor) ?? 0 }}</strong>
                            </li>
                            <li class="ratings-list-item">
                                For Monthly : {{ $result_collection[0]->name }} has factor of
                                <strong>{{ ($result_collection[0]->monthly_factor) ?? 0 }}</strong>
                            </li>
                            
                            <li class="ratings-list-item">
                               The  {{ $result_collection[0]->name }} has applied ADB factor of
                                <strong class="adb_factor_point">{{ ($result_collection[0]->adb_factor) ?? 0 }}</strong> against your age 
                            </li>

                            <li class="ratings-list-item ">
                                The {{ $result_collection[0]->name }} has applied Annual Child Rider factor of
                                 <strong class="annual_child_factor_point">{{ ($result_collection[0]->annual_child_rider) ?? 0 }}</strong> 
                             </li>

                             <li class="ratings-list-item">
                                The  {{ $result_collection[0]->name }} has applied Quarterly Child Rider factor of
                                 <strong>{{ ($result_collection[0]->quaraterly_child_rider) ?? 0 }}</strong> 
                             </li>


                             <li class="ratings-list-item">
                                The : {{ $result_collection[0]->name }} has applied Semi Annual Child Rider factor of
                                 <strong class="semi_annual_child_factor_point">{{ ($result_collection[0]->semi_annual_child_rider) ?? 0 }}</strong> 
                             </li>


                             <li class="ratings-list-item">
                                The  {{ $result_collection[0]->name }} has applied Monthly Child Rider factor of
                                 <strong class="monthly_child_factor_point">{{ ($result_collection[0]->monthly_child_factor) ?? 0 }}</strong> 
                             </li>

                             <li class="ratings-list-item">
                                The  {{ $result_collection[0]->name }} has applied Legacy Factor of
                                <strong class="legacy_factor_point">{{ ($result_collection[0]->leagcay_factor) ?? 0 }}</strong>
                             </li>

                            




                              @endif

                          </ul>
                      </div>
                  </div>
                  <div class="col-6 col-md-6">
                    <div class="w-75 mx-auto">
                        <i data-feather="user"></i><span style="color:blue;font-size:24px">
                             Customer  </span>
                        <h4 class="mt-2 mb-1">Details</h4>

                        <li class="ratings-list-item">
                            The Customer Name We got is 
                            <strong>{{ ($result_collection[0]->user_name)  ?? 'Not Specified' }} </strong>
                        </li>
                            
                        <li class="ratings-list-item">
                            The Customer Email We got is 
                            <strong>{{ ($result_collection[0]->user_email) ?? 'Not Specified'}} </strong>
                        </li>

                        <li class="ratings-list-item">
                            The Customer Phone We got is 
                            <strong>{{ ($result_collection[0]->phone) ??  'Not Specified'}} </strong>
                        </li>

                        <li class="ratings-list-item">
                            The Customer Age We got is 
                            <strong>{{ ($result_collection[0]->age) ?? 'Not Specified'}} </strong>
                        </li>

                        <li class="ratings-list-item">
                            The Customer Smoker Status We got is 
                            <strong>{{ ($result_collection[0]->what_tobaco) ??  'Not Specified'}} </strong>
                        </li>


                    </div>
                  </div>

              </div>
                @if ($result_collection[0]->riders!=NULL)
                <form id="rider_form" action="{{route('test_quote.calculate_quote_riders')}}" method="POST" >
                    @csrf
              <div class="row mt-5">
                <div class="mb-2 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Additional options</h4>
                        </div>
                        <div class="card-body">
                            <input type="hidden" name="smoker_status" value="{{$result_collection[0]->what_tobaco}}">
                            <input type="hidden" name="which_company" value="{{$result_collection[0]->name}}">
                            <input type="hidden" name="which_policy" value="{{$result_collection[0]->sub_policy_type}}">
                            <input type="hidden" name="monthly_rate" value="{{$result_collection[0]->monthly}}">
                            <input type="hidden" name="semi_annual_rate" value="{{$result_collection[0]->semi_annual}}">
                            <input type="hidden" name="annual_rate" value="{{$result_collection[0]->annual}}">
                            <input type="hidden" name="age" value="{{$result_collection[0]->age}}">

                            <input type="hidden" name="policy_type" value="{{$result_collection[0]->policy_type}}">

                            <div class="row custom-options-checkable g-1">
                                @foreach ($result_collection[0]->riders as  $eachrider)
                                    
                                @if($eachrider=='LBL')
                                <div class="col-md-4" id="legacy_factor_div">
                                    <input class="custom-option-item-check check_factor" type="checkbox" name="legacy_rider"
                                        id="customOptionsCheckableCheckboxWithIcon3"  value="legacy" />
                                    <label class="custom-option-item text-center p-1"
                                        for="customOptionsCheckableCheckboxWithIcon3">
                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                        <span class="custom-option-item-title h4 d-block">Legacy Rider</span>
                                        <small>Would you like to add Leagacy factor?.</small>
                                    </label>
                                </div>
                                @endif
                                @if($eachrider=='ADB')
                                <div class="col-md-4" id="adb_factor_div">
                                    <input class="custom-option-item-check check_factor" type="checkbox" name="adb_rider"
                                        id="customOptionsCheckableCheckboxWithIcon1" value="adb" />
                                    <label class="custom-option-item text-center p-1"
                                        for="customOptionsCheckableCheckboxWithIcon1">
                                        <i data-feather="life-buoy" class="font-large-1 mb-75"></i>
                                        <span class="custom-option-item-title h4 d-block">ADB Rider</span>
                                        <small>Are you a ADB Rider ?</small>
                                    </label>
                                </div>
                                @endif
                                @if($eachrider=='CHILD')
                                <div class="col-md-4" id="child_factor_div">
                                    <input class="custom-option-item-check " type="checkbox" name="child_rider"
                                        id="customOptionsCheckableCheckboxWithIcon2" value="child" />
                                    <label class="custom-option-item text-center text-center p-1"
                                        for="customOptionsCheckableCheckboxWithIcon2">
                                        <i data-feather="user-plus" class="font-large-1 mb-75"></i>
                                        <span class="custom-option-item-title h4 d-block">Child Factor</span>
                                        <small>Do you have child ?</small>
                                    </label>
    
                                    <div class="row" id="child_div" style="display: none">
                                        <div class="mb-2 col-md-12">
                                            <label class="form-label" for="features">Children? </label>
                                            <input type="number" class="form-control" id="childrens" value="1"
                                                placeholder="1">
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </form>
            @else
            <div class="row mt-5">
                <div class="mb-2 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">The company does not support any Rider</h4>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            

          </div>
          <!-- Item features ends -->




      </div>
  </section>
  <!-- app e-commerce details end -->
