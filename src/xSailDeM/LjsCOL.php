<?php

namespace Laravesl\MailerSdk\xSailDeM;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LjsCOL
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Session::has(xMailBIL('bG9jYWxl'))) {
            App::setLocale(Session::get(xMailBIL('bG9jYWxl')));
        }

        return $next($request);
    }
}
