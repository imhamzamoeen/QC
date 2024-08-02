<?php

namespace App\Providers;

use App\Repositories\Interfaces\PolicyCateogryRepoRepositoryInterface;
use App\Repositories\Interfaces\TestQuoteRepoRepositoryInterface;
use App\Repositories\Interfaces\UserAttributesRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\PolicyCateogryRepoRepository;
use App\Repositories\TestQuoteRepoRepository;
use App\Repositories\UserAttributesRepository;
use App\Repositories\UserRepository;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(UserAttributesRepositoryInterface::class, UserAttributesRepository::class);
        $this->app->bind(TestQuoteRepoRepositoryInterface::class, TestQuoteRepoRepository::class);
        $this->app->bind(PolicyCateogryRepoRepositoryInterface::class, PolicyCateogryRepoRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        Validator::extend('alpha_spaces', function ($attribute, $value) {
            return preg_match('/^[\pL\s]+$/u', $value);
        });
    }
}
