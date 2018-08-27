<?php

namespace Cmarsiglia\TenantCore\Providers;

use Illuminate\Support\ServiceProvider;
//use Illuminate\Contracts\Http\Kernel;
use Illuminate\Routing\Router;
use Cmarsiglia\TenantCore\Middleware;

use Cmarsiglia\TenantCore\Commands\RecreateCommand;

class TenantCoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //$router->aliasMiddleware('Tenant', Middleware\Tenant::class);
        $this->commands(RecreateCommand::class);

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->publishes([
        __DIR__.'/../../assets/config/tenantcore.php' => config_path('tenantcore.php')],
        'tenantCore'
      );
      //Registramos el Middleware en las rutas
      $this->app['router']->aliasMiddleware('Tenant', Middleware\Tenant::class);








    }


}
