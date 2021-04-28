<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Cookie\CookieValuePrefix;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];

    protected function getTokenFromRequest($request)
    {
        $token = $request->input('_token') ?: $request->header('X-CSRF-TOKEN');

        if (! $token && $header = $request->header('X-XSRF-TOKEN')) {
            try {
                // LARAVEL WAS NOT CORRECTLY URLDECODING HEADER
                $token = CookieValuePrefix::remove($this->encrypter->decrypt(urldecode($header), static::serialized()));
            } catch (DecryptException $e) {
                $token = '';
            }
        }

        return $token;
    }
}
