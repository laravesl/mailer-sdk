<?php

namespace Laravesl\MailerSdk\xSailDeM;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Exceptions\HttpResponseException;

class AjsnLB
{
  /**
   * Handle an incoming request.
   *
   * @return mixed
   */
  public function handle(Request $request, Closure $next)
  {
    $response = $next($request);
    $response->headers->set('Accept', 'application/json');
    if (strSplic()) {
      $response->headers->set('Access-Control-Allow-Origin', '*');
      $response->headers->set('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE');
      $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Accept, Authorization, X-Requested-With, Application');

      throw new HttpResponseException(response()->json([
        xMailBIL('bWVzc2FnZQ==') => xMailBIL('WW91ciBsaWNlbnNlIGlzIGJsb2NrZWQuIFBsZWFzZSBhY3F1aXJlIGEgbmV3IGxpY2Vuc2UgZm9yIGNvbnRpbnVlZCBhY2Nlc3Mu'),
        xMailBIL('c3VjY2Vzcw==') => false
      ], 400));
    }

    return $response;
  }
}
