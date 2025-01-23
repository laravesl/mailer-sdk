<?php

namespace Laravesl\MailerSdk\xSailDeM;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Exceptions\HttpResponseException;

class CjsnRV
{
  /**
   * Handle an incoming request.
   *
   * @return mixed
    */

    public function handle(Request $request, Closure $next)
    {
      if (schSync()) {
        throw new HttpResponseException(response()->json([
          xMailBIL('bWVzc2FnZQ==') => xMailBIL('UGxlYXNlIHZlcmlmeSB0aGUgcHVyY2hhc2UgbGljZW5zZSBjb2RlIGJlZm9yZSBleGVjdXRpbmcgdGhlIEFQSS4='),
          xMailBIL('c3VjY2Vzcw==') => false
        ], 400));
      }

      $response = $next($request);

      $response->headers->set('Cache-control', 'no-control, no-store, max-age=0, must-revalidate');
      $response->headers->set('Pragma', 'no-cache');
      $response->headers->set('Exprires', 'Sat 01 Jan 1990 00:00:00 GMT');

      return $response;
    }
}
