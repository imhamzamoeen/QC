<?php

namespace App\Http\Controllers;
use App\Http\Requests\GetCompanyDataRequest;
use App\Models\InsuranceCompany;

class GetCompanyDataController extends Controller
{
    public function __invoke(GetCompanyDataRequest $request)
    {
        return view('components.company-details-component', [
            'company' => InsuranceCompany::where('id',$request->id)->with(['owner.UserAttributes'])->first(),
        ])->render();
    }
}
