<?php

namespace App\Services;

use App\Jobs\SendEmailWithCredentialsJob;
use App\Repositories\Interfaces\CustomerRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class CustomerStoreService
{
    protected $customerRepository;

    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function saveCustomerData(array $data, $id,  $password)
    {
        $fileName = false;
        if (isset($data['avatar'])) {
            $avatar = $data['avatar'];
            $extension = $avatar->getClientOriginalExtension();
            $fileName =  substr(md5(uniqid(rand(1, 6))), 0, 10) . '.' . $extension;
            $avatar->move(public_path('images/customers/' . auth()->user()->id . '/' . $id), $fileName); //original
            copy(public_path('images/customers/' . auth()->user()->id . '/' . $id . '/' . $fileName), public_path('assets/images/Profile/') . $fileName); //backup
        }
        $customer = $this->customerRepository->create(array_merge(
            $data,
            [
                'owner_id' => auth()->user()->id,
                'user_id' => $id,
            ]
        ));
        dispatch(new SendEmailWithCredentialsJob($customer, $password, 'customer'));
        return $fileName;
    }
}
