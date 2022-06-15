<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Auth\SessionGuard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //user roles
        Gate::define('admin', function (User $user){
            return $user->role()->first()->role_name === 'admin';
        });

        Gate::define('user', function (User $user){
            return $user->role()->first()->role_name !== 'admin';
        });

        Gate::define('player', function (User $user){
            return $user->role()->first()->role_name === 'player';
        });

        Gate::define('referee', function (User $user){
            return $user->role()->first()->role_name === 'referee';
        });

        Blade::if('is', function($role){
            return request()->user()->can($role);
        });

        Blade::if('are', function($roles){
            $allowed = false;
            foreach ($roles as $role){
                $allowed = (bool)request()->user()->can($role);
                if ($allowed) {return true;}
            }
            return $allowed;
        });

    }
}
