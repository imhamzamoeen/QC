<?php

namespace App\Providers;

use App\Repositories\CompanyPolicyRepository;
use App\Repositories\InsuranceCompanyRepository;
use App\Repositories\Interfaces\CompanyPolicyRepositoryInterface;
use App\Repositories\Interfaces\InsuranceCompanyRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryPatternProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(InsuranceCompanyRepositoryInterface::class, InsuranceCompanyRepository::class);
        $this->app->bind(CompanyPolicyRepositoryInterface::class, CompanyPolicyRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
