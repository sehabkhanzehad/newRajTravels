<?php

namespace App\Http\Middleware;

use App\Helper\JWTToken;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthCheck
{
    public function handle(Request $request, Closure $next): Response
    {
        $signInToken = $request->cookie('signInToken');
        $result = JWTToken::decodeToken($signInToken);
        if ($result == null) {
            return redirect()->route('auth.signin-page')->with('error', 'Unauthorized');
        } else {
            $request->headers->set('email', $result->email);
            $request->headers->set('id', $result->id);
            return $next($request);
        }
    }
}
