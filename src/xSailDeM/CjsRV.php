<?php

namespace Laravesl\MailerSdk\xSailDeM;

use Closure;
use Illuminate\Http\Request;

class CjsRV
{
  /**
   * Handle an incoming request.
   *
   * @return mixed
    */

    public function handle(Request $request, Closure $next)
    {
      if (schSync()) {
        return to_route(xMailBIL('aW5zdGFsbC52ZXJpZnkuc2V0dXA='));
      }

      $response = $next($request);
      if ($response instanceof \Symfony\Component\HttpFoundation\BinaryFileResponse) {
        return $response;
      }

      return $next($request)->header('Cache-control', 'no-control, no-store, max-age=0, must-revalidate')->header('Pragma', 'no-cache')->header('Exprires', 'Sat 01 Jan 1990 00:00:00 GMT');
    }
}
