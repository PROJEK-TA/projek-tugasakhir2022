<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('barang', function($user){
            return $user->role == "approval";
        });
        Gate::define('kategbarang', function($user){
            return $user->role == "approval";
        });
        Gate::define('lokbarang', function($user){
            return $user->role == "approval";
        });
        Gate::define('merkbarang', function($user){
            return $user->role == "approval";
        });
        Gate::define('statusbarang', function($user){
            return $user->role == "approval";
        });
        Gate::define('peminjamanbarang', function($user){
            return $user->role == "approval";
        });
        Gate::define('servis', function($user){
            return $user->role == "approval";
        });
        Gate::define('nonaktif', function($user){
            return $user->role == "approval";
        });
        Gate::define('ruangan', function($user){
            return $user->role == "approval";
        });
        Gate::define('kategruangan', function($user){
            return $user->role == "approval";
        });
        Gate::define('gudang', function($user){
            return $user->role == "approval";
        });
        Gate::define('peminjamanruangan', function($user){
            return $user->role == "approval";
        });
        Gate::define('departemen', function($user){
            return $user->role == "approval";
        });
        Gate::define('users', function($user){
            return $user->role == "approval";
        });


        Gate::define('requestorbarang', function($user){
            return $user->role == "requestor";
        });
        Gate::define('statuspinjambarang', function($user){
            return $user->role == "requestor";
        });
        Gate::define('ajukanpinjambarang', function($user){
            return $user->role == "requestor";
        });
        Gate::define('statuspinjamruangan', function($user){
            return $user->role == "requestor";
        });
        Gate::define('ajukanpinjamruangan', function($user){
            return $user->role == "requestor";
        });
    }
}
