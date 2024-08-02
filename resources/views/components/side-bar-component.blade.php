 <!-- BEGIN: Main Menu-->
 <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
     <div class="navbar-header">
         <ul class="nav navbar-nav flex-row">
             <li class="nav-item me-auto"><a class="navbar-brand" href="#"><span class="brand-logo">
                         <img src="{{ asset('assets/images/Quote calculator.png') }}">
                     </span>
                     <h2 class="brand-text">{{ env('APP_NAME') }}</h2>
                 </a></li>
             <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                         class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                         class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                         data-ticon="disc"></i></a></li>
         </ul>
     </div>
     <div class="shadow-bottom"></div>
     <div class="main-menu-content">

         <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

             <li class=" navigation-header"><span data-i18n="Hamza's Section" class="bx-flashing">Quote's
                     Section</span>
             </li>
             <!-- this is a test route by hamza, just making a fake quote calculaotr -->
             <li class="nav-item"><a class="d-flex align-items-center" href="#"><i
                         class="fa fa-calculator bx-tada" aria-hidden="true"></i><span class="menu-title text-truncate"
                         data-i18n="Quote Calculator">
                         Quote Calculator</span></a>
                 <ul class="menu-content">
                     <li class="@if (Route::is('policies.index')) active @endif"><a class="d-flex align-items-center"
                             href="{{ route('policies.index') }}"><i class="fa fa-calculator"
                                 aria-hidden="true"></i><span class="menu-item text-truncate"
                                 data-i18n="Preview">Calculate a Quote
                             </span></a>
                     </li>
                 </ul>
             </li>
             @canany(['super_admin_view', 'admin_view'])
                 <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fa fa-sign-language "
                             aria-hidden="true"></i><span class="menu-title text-truncate"
                             data-i18n="Roles &amp; Permission">Roles &amp;
                             Permissions</span></a>
                     <ul class="menu-content">
                         <li class="{{ Route::is(['Role']) ? 'active' : '' }}"><a class="d-flex align-items-center "
                                 href="{{ route('Role') }}"><i class="fa fa-lock" aria-hidden="true"></i><span
                                     class="menu-item text-truncate" data-i18n="Roles">Roles</span></a>
                         </li>
                         <li class="{{ Route::is(['Permission']) ? 'active' : '' }}"><a class="d-flex align-items-center "
                                 href="{{ route('Permission') }}"><i class="fa fa-lock" aria-hidden="true"></i><span
                                     class="menu-item text-truncate" data-i18n="Permission">Permissions</span></a>
                         </li>
                     </ul>
                 </li>
             @endcanany

             <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                 <li class=" navigation-header"><span data-i18n="Hamza's Section" class="bx-flashing">User's
                         Section</span>
                 </li>


                 <li class="@if (Route::is('profile')) active @endif"><a class="d-flex align-items-center"
                         href="{{ route('profile') }}"><i class="fa fa-eye " aria-hidden="true"></i><span
                             class="menu-item text-truncate" data-i18n="Preview">Profile
                         </span></a>
                 </li>


                 @canany(['super_admin_view', 'admin_view'])
                     <li class=" navigation-header"><span data-i18n="Insurance Companies Management"
                             class="bx-flashing">Admin Management</span>
                     </li>
                     <!-- this is a test route by hamza, just making a fake quote calculaotr -->
                     <li class="nav-item"><a class="d-flex align-items-center" href="#"><i class="fa fa-user-plus "
                                 aria-hidden="true"></i><span class="menu-title text-truncate" data-i18n="Quote Calculator">
                                 User Managment </span></a>
                         <ul class="menu-content">
                             <li class="@if (Route::is('register.index')) active @endif"><a
                                     class="d-flex align-items-center" href="{{ route('register.index') }}"><i
                                         class="fa fa-plus " aria-hidden="true"></i><span class="menu-item text-truncate"
                                         data-i18n="Preview">Manage
                                         User
                                     </span></a>
                             </li>


                         </ul>
                     </li>
                     <li class="nav-item"><a class="d-flex align-items-center" href="#"><i class="fa fa-credit-card "
                                 aria-hidden="true"></i><span class="menu-title text-truncate" data-i18n="Quote Calculator">
                                 Leads </span></a>
                         <ul class="menu-content">
                             <li class="@if (Route::is('Information.GetLeads')) active @endif"><a
                                     class="d-flex align-items-center" href="{{ route('Information.GetLeads') }}"><i
                                         class="fa fa-credit-card " aria-hidden="true"></i></i><span
                                         class="menu-item text-truncate" data-i18n="Preview">View Leads
                                     </span></a>
                             </li>


                         </ul>
                     </li>
                     <li class="nav-item"><a class="d-flex align-items-center" href="#"><i class="fa fa-newspaper "
                                 aria-hidden="true"></i><span class="menu-title text-truncate" data-i18n="Quote Calculator">
                                 Policies </span></a>
                         <ul class="menu-content">
                             <li class="@if (Route::is('PolicyManagement.PolicyManagement.index')) active @endif"><a
                                     class="d-flex align-items-center"
                                     href="{{ route('PolicyManagement.PolicyManagement.index') }}"><i
                                         class="fa fa-newspaper" aria-hidden="true"></i><span
                                         class="menu-item text-truncate" data-i18n="Preview">Edit
                                         Policies
                                     </span></a>
                             </li>
                             <li class="@if (Route::is('PolicyManagement.manage')) active @endif"><a
                                     class="d-flex align-items-center" href="{{ route('PolicyManagement.manage') }}"><i
                                         class="fa fa-language" aria-hidden="true"></i><span class="menu-item text-truncate"
                                         data-i18n="Preview">Manage
                                         Policies
                                     </span></a>
                             </li>
                             <li class="@if (Route::is('PolicyManagement.update_rate')) active @endif"><a
                                     class="d-flex align-items-center"
                                     href="{{ route('PolicyManagement.update_rate') }}"><i class="fa fa-file-excel"
                                         aria-hidden="true"></i><span class="menu-item text-truncate"
                                         data-i18n="Preview">Update
                                         A Policy File
                                     </span></a>
                             </li>

                         </ul>
                     </li>

                     <li class="nav-item"><a class="d-flex align-items-center" href="#"><i class="fa fa-globe "
                                 aria-hidden="true"></i><span class="menu-title text-truncate" data-i18n="Quote Calculator">
                                 Company State </span></a>
                         <ul class="menu-content">
                             <li class="@if (Route::is('CompanyManagment.Company-State.index')) active @endif">
                                 <a class="d-flex align-items-center"
                                     href="{{ route('CompanyManagment.Company-State.index') }}"><i class="fa fa-globe "
                                         aria-hidden="true"></i><span class="menu-item text-truncate"
                                         data-i18n="Preview">Update
                                      
                                     </span></a>
                             </li>
                             <li class="@if (Route::is('CompanyManagment.view')) active @endif">
                                 <a class="d-flex align-items-center" href="{{ route('CompanyManagment.view') }}"><i
                                         class="fa fa-globe " aria-hidden="true"></i><span class="menu-item text-truncate"
                                         data-i18n="Preview">View
                                     
                                     </span></a>
                             </li>

                         </ul>
                     </li>

                     <li class="nav-item"><a class="d-flex align-items-center" href="#"><i
                                 class="fa fa-user-secret bx-tada" aria-hidden="true"></i><span
                                 class="menu-title text-truncate" data-i18n="Quote Calculator">
                                 User Company </span></a>
                         <ul class="menu-content">
                             <li class="@if (Route::is('Company-User.index')) active @endif"><a
                                     class="d-flex align-items-center" href="{{ route('Company-User.index') }}"><i
                                         class="fa fa-user-secret " aria-hidden="true"></i><span
                                         class="menu-item text-truncate" data-i18n="Preview">Manage
                                         User Companies Assignment
                                     </span></a>
                             </li>

                         </ul>
                     </li>
                     <li class=" navigation-header"><span data-i18n="Insurance Companies Management"
                             class="bx-flashing">Companies Management</span>
                     </li>
                     <!-- this is a test route by hamza, just making a fake quote calculaotr -->
                     <li class="nav-item"><a class="d-flex align-items-center" href="#"><i class="fa fa-building "
                                 aria-hidden="true"></i><span class="menu-title text-truncate"
                                 data-i18n="Company">Insurance
                                 Companies</span></a>
                         <ul class="menu-content">
                             <li class="@if (Route::is('dashboard.insurance-company.create')) active @endif">
                                 <a class=" d-flex align-items-center"
                                     href="{{ route('dashboard.insurance-company.create') }}"><i class="fa fa-plus "
                                         aria-hidden="true"></i>
                                     <span class="menu-item text-truncate" data-i18n="List">Add Company
                                     </span>
                                 </a>
                             </li>
                             <li class="@if (Route::is('dashboard.insurance-company.index')) active @endif">
                                 <a class=" d-flex align-items-center"
                                     href="{{ route('dashboard.insurance-company.index') }}"><i class="fa fa-eye"
                                         aria-hidden="true"></i>
                                     <span class="menu-item text-truncate" data-i18n="List">View Companies
                                     </span>
                                 </a>
                             </li>
                             <li class="@if (Route::is('dashboard.UpdateCompanyDetails')) active @endif">
                                 <a class=" d-flex align-items-center"
                                     href="{{ route('dashboard.UpdateCompanyDetails') }}"><i class="fa fa-pencil"
                                         aria-hidden="true"></i>
                                     <span class="menu-item text-truncate" data-i18n="List">Edit Companies Data
                                     </span>
                                 </a>
                             </li>
                         </ul>
                     </li>

                     <li class=" navigation-header "><span data-i18n="Policies Management" class="bx-flashing">Policies
                             Management</span>
                     </li>
                     <!-- this is a test route by hamza, just making a fake quote calculaotr -->
                     <li class="nav-item"><a class="d-flex align-items-center" href="#"><i
                                 class="fas fa-edit "></i><span class="menu-title text-truncate"
                                 data-i18n="Policy">Company
                                 Policies</span></a>
                         <ul class="menu-content">
                             <li class="@if (Route::is('dashboard.company-policies.create')) active @endif">
                                 <a class=" d-flex align-items-center"
                                     href="{{ route('dashboard.company-policies.create') }}"><i class="fa fa-plus "
                                         aria-hidden="true"></i>
                                     <span class="menu-item text-truncate" data-i18n="List">Add Company Policy
                                     </span>
                                 </a>
                             </li>
                         </ul>

                     </li>
                 @endcanany
                 @can('testing')
                     <li class=" navigation-header"><span data-i18n="Testing seciton" class="bx-flashing">Height Weight
                             Testing Lab </span>
                     </li>
                     <!-- this is a test route by hamza, just making a fake quote calculaotr -->
                     <li class="nav-item"><a class="d-flex align-items-center" href="#"><i class="fa fa-flask "
                                 aria-hidden="true"></i><span class="menu-title text-truncate" data-i18n="Policy">Testing
                                 Lab</span></a>
                         <ul class="menu-content">
                             <li class="@if (Route::is('dashboard.test.hieght-weights.seniorlife.index')) active @endif">
                                 <a class=" d-flex align-items-center"
                                     href="{{ route('dashboard.test.hieght-weights.seniorlife.index') }}"><i
                                         class="fa fa-plus" aria-hidden="true"></i>
                                     <span class="menu-item text-truncate" data-i18n="List">Senior Life First File
                                     </span>
                                 </a>
                             </li>
                         </ul>
                         <ul class="menu-content">
                             <li class="@if (Route::is('dashboard.test.hieght-weights.seniorlife.ultimate-preferred')) active @endif">
                                 <a class=" d-flex align-items-center"
                                     href="{{ route('dashboard.test.hieght-weights.seniorlife.ultimate-preferred') }}"><i
                                         class="fa fa-plus " aria-hidden="true"></i>
                                     <span class="menu-item text-truncate" data-i18n="List">Upload Senior Ultimate
                                         Preferred,
                                         Super Preffered
                                     </span>
                                 </a>
                             </li>
                         </ul>
                         <ul class="menu-content">
                             <li class="@if (Route::is('dashboard.test.hieght-weights.seniorlife.standard-joint')) active @endif">
                                 <a class=" d-flex align-items-center"
                                     href="{{ route('dashboard.test.hieght-weights.seniorlife.standard-joint') }}"><i
                                         class="fa fa-plus " aria-hidden="true"></i>
                                     <span class="menu-item text-truncate" data-i18n="List">Upload Senior Standard, 20 Pay
                                         and
                                         Joint Weights
                                     </span>
                                 </a>
                             </li>
                         </ul>
                     </li>


                     <li class=" navigation-header"><span data-i18n="Testing seciton" class="bx-flashing">Testing Lab
                             section</span>
                     </li>
                     <!-- this is a test route by hamza, just making a fake quote calculaotr -->
                     <li class="nav-item"><a class="d-flex align-items-center" href="#"><i class="fa fa-flask "
                                 aria-hidden="true"></i><span class="menu-title text-truncate" data-i18n="Policy">Testing
                                 Lab</span></a>
                         <ul class="menu-content">
                             <li class="@if (Route::is('dashboard.test.aig-insurance.index')) active @endif">
                                 <a class=" d-flex align-items-center"
                                     href="{{ route('dashboard.test.aig-insurance.index') }}"><i class="fa fa-plus "
                                         aria-hidden="true"></i>
                                     <span class="menu-item text-truncate" data-i18n="List">Upload Aig Insurance File
                                     </span>
                                 </a>
                             </li>
                             <li class="@if (Route::is('dashboard.test.lbl-insurance.index')) active @endif">
                                 <a class=" d-flex align-items-center"
                                     href="{{ route('dashboard.test.lbl-insurance.index') }}"><i class="fa fa-plus "
                                         aria-hidden="true"></i>
                                     <span class="menu-item text-truncate" data-i18n="List">Upload Liberty Bankers Life
                                         Insurance File
                                     </span>
                                 </a>
                             </li>
                             <li class="@if (Route::is('dashboard.test.amam-insurance.index')) active @endif">
                                 <a class=" d-flex align-items-center"
                                     href="{{ route('dashboard.test.amam-insurance.index') }}"><i class="fa fa-plus "
                                         aria-hidden="true"></i>
                                     <span class="menu-item text-truncate" data-i18n="List">Upload Amam Rates Insurance
                                         File
                                     </span>
                                 </a>
                             </li>
                             <li class="@if (Route::is('dashboard.test.new-vista-insurance.index')) active @endif">
                                 <a class=" d-flex align-items-center"
                                     href="{{ route('dashboard.test.new-vista-insurance.index') }}"><i
                                         class="fa fa-plus" aria-hidden="true"></i>
                                     <span class="menu-item text-truncate" data-i18n="List">Upload New Vista Rates
                                         Insurance
                                         File
                                     </span>
                                 </a>
                             </li>
                             <li class="@if (Route::is('dashboard.test.siwl-insurance.index')) active @endif">
                                 <a class=" d-flex align-items-center"
                                     href="{{ route('dashboard.test.siwl-insurance.index') }}"><i class="fa fa-plus "
                                         aria-hidden="true"></i>
                                     <span class="menu-item text-truncate" data-i18n="List">Upload SIWL Insurance
                                         File
                                     </span>
                                 </a>
                             </li>
                             <li class="@if (Route::is('dashboard.test.senior-life.index')) active @endif">
                                 <a class=" d-flex align-items-center"
                                     href="{{ route('dashboard.test.senior-life.index') }}"><i class="fa fa-plus "
                                         aria-hidden="true"></i>
                                     <span class="menu-item text-truncate" data-i18n="List">Upload Senior Life Insurance
                                         File</span>
                                 </a>
                             </li>
                             <li class="@if (Route::is('dashboard.test.heritage-insurance.index')) active @endif">
                                 <a class=" d-flex align-items-center"
                                     href="{{ route('dashboard.test.heritage-insurance.index') }}"><i
                                         class="fa fa-plus " aria-hidden="true"></i>
                                     <span class="menu-item text-truncate" data-i18n="List">Upload Heritage Insurance
                                         File
                                     </span>
                                 </a>
                             </li>
                             <li class="@if (Route::is('dashboard.test.golden-agent-insurance.index')) active @endif">
                                 <a class=" d-flex align-items-center"
                                     href="{{ route('dashboard.test.golden-agent-insurance.index') }}"><i
                                         class="fa fa-plus " aria-hidden="true"></i>
                                     <span class="menu-item text-truncate" data-i18n="List">Upload Golden Agent Insurance
                                         File
                                     </span>
                                 </a>
                             </li>
                             <li class="@if (Route::is('dashboard.test.great-western-insurance.index')) active @endif">
                                 <a class=" d-flex align-items-center"
                                     href="{{ route('dashboard.test.great-western-insurance.index') }}"><i
                                         class="fa fa-plus " aria-hidden="true"></i>
                                     <span class="menu-item text-truncate" data-i18n="List">Upload Great Western Insurance
                                         File
                                     </span>
                                 </a>
                             </li>
                             <li class="@if (Route::is('dashboard.test.trinity-insurance.index')) active @endif">
                                 <a class=" d-flex align-items-center"
                                     href="{{ route('dashboard.test.trinity-insurance.index') }}"><i
                                         class="fa fa-plus " aria-hidden="true"></i>
                                     <span class="menu-item text-truncate" data-i18n="List">Upload Trinity Insurance
                                         File
                                     </span>
                                 </a>
                             </li>
                             <li class="@if (Route::is('dashboard.test.digital-agent-insurance.index')) active @endif">
                                 <a class=" d-flex align-items-center"
                                     href="{{ route('dashboard.test.digital-agent-insurance.index') }}"><i
                                         class="fa fa-plus" aria-hidden="true"></i>
                                     <span class="menu-item text-truncate" data-i18n="List">Upload Digital Agent Insurance
                                         File
                                     </span>
                                 </a>
                             </li>
                         </ul>
                     </li>
                 @endcan

             </ul>
             <hr>
             <h6 class="text-center mb-3">Crafted with ❤️ by <a href="#">PRIME-IT</a></h6>
     </div>
 </div>
 <!-- END: Main Menu-->
