<?php

namespace Laravesl\MailerSdk\xSailDeM;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class BjsTS
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      if (!strSync()) {
        DB::connection()->getPDO();
        if (DB::connection()->getDatabaseName()) {
            if (env(xMailBIL('REJfREFUQUJBU0U=')) && env(xMailBIL('REJfVVNFUk5BTUU=')) && env(xMailBIL('REJfQ09OTkVDVElPTg=='))) {
                if (Schema::hasTable(xMailBIL('c2VlZGVycw==')) && !migSync()) {
                  if (DB::table(xMailBIL('c2VlZGVycw=='))->count()) {
                    return to_route(xMailBIL('aW5zdGFsbC5saWNlbnNl'));
                  }
                }
            }
        }

        return to_route(xMailBIL('aW5zdGFsbC5yZXF1aXJlbWVudHM='));
      }

      if (strSplic() && $request->is(xMailBIL('YWRtaW4vKg=='))) {
        return to_route(xMailBIL('aW5zdGFsbC5ibG9jay5zZXR1cA=='));
      }

      $response = $next($request);
      if ($response instanceof \Symfony\Component\HttpFoundation\BinaryFileResponse) {
        return $response;
      }

      return $next($request)->header('Cache-control', 'no-control, no-store, max-age=0, must-revalidate')->header('Pragma', 'no-cache')->header('Exprires', 'Sat 01 Jan 1990 00:00:00 GMT');
    }
}
