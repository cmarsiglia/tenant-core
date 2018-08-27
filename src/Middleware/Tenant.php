<?php

namespace Cmarsiglia\TenantCore\Middleware;

use Illuminate\Http\Request;
use Closure;

class Tenant
{

  public function handle(Request $request, Closure $next)
  {
      if (config('tenantcore.hostDatabase')) {

      }

      return $next($request);
  }
}
