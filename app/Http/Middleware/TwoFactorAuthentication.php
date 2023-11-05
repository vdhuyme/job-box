<?php

namespace App\Http\Middleware;

use App\Support\Google2FAAuthenticator;
use Closure;

class TwoFactorAuthentication
{
    public function handle($request, Closure $next)
    {
        $authenticator = app(Google2FAAuthenticator::class)->boot($request);

        if ($authenticator->isAuthenticated()) {
            return $next($request);
        }

        return $authenticator->makeRequestOneTimePasswordResponse();
    }
}
