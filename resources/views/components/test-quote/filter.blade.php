 <!-- Ecommerce Sidebar Starts -->
 <div class="sidebar-shop">
    <div class="row">
        <div class="col-sm-12">
            <h6 class="filter-heading d-none d-lg-block">Filters</h6>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
              <!-- Policy Filter starts -->
              <div class="multi-range-price">
                <label class="form-label" for="policy_filters">Policy Type </label>
                <select class="select2 w-100" name="policy_filters" id="policy_filters">
                    <option value="Investment">Investment</option>
                    <option value="Car">Car</option>
                    <option value="Health" selected selected>Health</option>
                    <option value="Life">Life </option>
                </select>
            </div>

               <!-- Categories Starts -->
               <div id="product-categories">
                <h6 class="filter-title">Coverage</h6>
                <ul class="list-unstyled categories-list">
                    <li>
                        <div class="form-check">
                            <input type="radio" id="category1" name="coverage-filter" class="form-check-input" value="1" checked />
                            <label class="form-check-label" for="category1">$1000</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="radio" id="category2" name="coverage-filter" value="2" class="form-check-input" />
                            <label class="form-check-label" for="category2">$2000</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="radio" id="category3"name="coverage-filter" value="3" class="form-check-input" />
                            <label class="form-check-label" for="category3">$3000</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="radio" id="category4" name="coverage-filter" value="4" class="form-check-input" />
                            <label class="form-check-label" for="category4">$4000</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="radio" id="category5" name="coverage-filter" value="5" class="form-check-input" />
                            <label class="form-check-label" for="category5">$5000</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="radio" id="category6" name="coverage-filter" value="6" class="form-check-input" />
                            <label class="form-check-label" for="category6">$6000</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="radio" id="category7" name="coverage-filter" value="7" class="form-check-input" />
                            <label class="form-check-label" for="category7">$7000</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="radio" id="category8" name="coverage-filter" value="8" class="form-check-input" />
                            <label class="form-check-label" for="category8">$8000</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="radio" id="category9" name="coverage-filter" value="9" class="form-check-input" />
                            <label class="form-check-label" for="category9">$9000</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="radio" id="category10" name="coverage-filter" value="10" class="form-check-input" />
                            <label class="form-check-label" for="category10">$1000</label>
                        </div>
                    </li>
                </ul>
            </div>
            <hr>
            <h3 id="policy_heading">Health insurance </h3>
            <!-- Policy Filter ends -->
            <form  name="filter_form" id="Health_form" novalidate>
                @csrf
            <!-- Age Slider starts -->
            <div class="price-slider">
                <h6 class="filter-title">Age</h6>
                <div class="price-slider">
                    <div class="range-slider mt-2" name="age" id="price-slider" ></div>
                </div>
            </div>
            <!-- Price Range ends -->

         
            <!-- Categories Ends -->
            <!-- Clear Filters Starts -->
        </form>
        <form id="Car_form" name="filter_form" style="display:none;" novalidate>
            <div class="form-row car_brand_auto_form">
            <label class="form-label" for="car_brand">Brand </label>
            <select class="select2 w-100" name="car_brand" id="car_brand" required>
                <option label="" selected disabled>Choose a Brand</option>
                <option value="Suzuki" >Suzuki</option>
                <option value="Toyota">Toyota</option>
                <option value="Honda">Honda</option>
                <option value="MG">MG</option>
                <option value="KIA">KIA</option>
                <option value="Changan">Changan</option>
            </select>
        </div>  
        <div class="form-row car_model_auto_form" style="display:none">
            <label class="form-label" for="car_model">Model</label>
            <select class="select2 w-100" name="car_model" id="car_model" required>
                
            </select>
        </div>

        <div class="form-row car_year_auto_form" style="display:none">
            <label class="form-label" for="car_year">Model</label>
            <select class="select2 w-100" name="car_year" id="car_year" required>
                <option label=""></option>
                <option label="">2000</option>
                <option label="">2001</option>
                <option label="">2002</option>
                <option label="">2003</option>
                <option label="">2004</option>
                <option label="">2005</option>
                <option label="">2006</option>
                <option label="">2007</option>
                <option label="">2008</option>
                <option label="">2009</option>
                <option label="">2010</option>
                <option label="">2011</option>
                <option label="">2012</option>
                <option label="">2013</option>
                <option label="">2014</option>
                <option label="">2015</option>
                <option label="">2016</option>
                <option label="">2017</option>
                <option label="">2018</option>
                <option label="">2019</option>
                <option label="">2020</option>
                <option label="">2021</option>
            </select>
        </div>
        
        <div class="form-row car_price_auto_form" style="display:none">
            <label class="form-label" for="expected_price">Expected Price</label>
            <input type="number" class="form-control" name="expected_price" id="expected_price" required>
        </div>

        </form>

        <form id="Investment_form" name="filter_form" style="display:none;" novalidate>
            <div class="form-row investment_amount__investment_form">
            <label class="form-label" for="investment_amount">Your Assets </label>
            <input type="number" class="form-control" name="investment_amount" id="investment_amount" placeholder="$" required>
             
        </div>  
        </form>

        <form id="Life_form" name="filter_form" style="display:none;" novalidate>
            <div class="form-row age__life_form">
            <label class="form-label" for="age">DOB </label>
            <input type="date" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" name="DOB" id="DOB" required>
             
        </div>  
        </form>
        <div id="clear-filters" style="padding-top: 10px">
            <button type="button" class="btn w-100 btn-primary filter-button">Search</button>
        </div>
        <!-- Clear Filters Ends -->
   
        </div>
    </div>
</div>
<!-- Ecommerce Sidebar Ends -->