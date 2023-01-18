<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\Contact\ContactRepositoryInterface;
use App\Repositories\Contact\ContactRepository;
use App\Repositories\Department\DepartmentRepositoryInterface;
use App\Repositories\Department\DepartmentRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            ContactRepositoryInterface::class,
            ContactRepository::class
        );
        $this->app->bind(
            DepartmentRepositoryInterface::class,
            DepartmentRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
