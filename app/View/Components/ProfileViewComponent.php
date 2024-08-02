<?php

namespace App\View\Components;

use App\Models\InsuranceCompany;
use App\Models\User;
use App\Models\UserCompanyManagement;
use Illuminate\View\Component;
use Spatie\Activitylog\Models\Activity;

class ProfileViewComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
     
        $my_companies = collect([]); 
        $user = User::where('id', auth()->user()->id)->with(['UserAttributes'])->first();
        $last_activity = Activity::where('causer_id', auth()->user()->id)->latest()->take(5)->get();
        $my_setting = UserCompanyManagement::where('user_id', auth()->user()->id)->first();
        if(!is_null($my_setting)){
            $arr = json_decode($my_setting->companies);
            $my_companies = InsuranceCompany::whereIn('existance_name', $arr)->get();
        }
     
        return view('components.profile-view-component', compact('user', 'last_activity','my_companies'));
    }
}
