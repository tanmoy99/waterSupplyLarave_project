<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Check if the permission doesn't already exist
        if (!Permission::where('name', 'manage_admin_dashboard')->exists()) {
            Permission::create(['name' => 'manage_admin_dashboard']);
        }

        // Check if the role doesn't already exist
        if (!Role::where('name', 'admin')->exists()) {
            $adminRole = Role::create(['name' => 'admin']);
            $adminRole->givePermissionTo('manage_admin_dashboard');
        }
    }
}
