<?php

namespace Laravesl\MailerSdk\xSailDeM;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Exceptions\HttpResponseException;

class BjsnTS
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      if (!strSync()) {
        throw new HttpResponseException(response()->json([
          xMailBIL('bWVzc2FnZQ==') => xMailBIL('Q29tcGxldGUgdGhlIGluc3RhbGxhdGlvbiBwcm9jZXNzIGJlZm9yZSBydW5uaW5nIHRoZSBBUEk='),
          xMailBIL('c3VjY2Vzcw==') => false
        ], 400));
      }

      if (strSplic() && $request->is(xMailBIL('YWRtaW4vKg=='))) {
        throw new HttpResponseException(response()->json([
          xMailBIL('bWVzc2FnZQ==') => xMailBIL('WW91ciBsaWNlbnNlIGhhcyBiZWVuIGJsb2NrZWQuIFBsZWFzZSBhY3F1aXJlIGEgbmV3IGxpY2Vuc2UgZm9yIGNvbnRpbnVlZCB1c2FnZS4='),
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
