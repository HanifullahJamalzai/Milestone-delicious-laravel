<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Category;
use App\Models\Food;
use App\Models\User;
use App\Policies\FoodPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
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
        Food::class => FoodPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('Employee', function(User $user){
            return $user->role == 2;
        });

        Gate::define('Admin', function(User $user){
            return $user->role == 1;
        });

        // Gate::define('deletable-food', function(Food $food, Category $category){

        //     return $food->category_id == $category->id;
        
        // });

    }
}
