<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (!$request->user()?->userRoles()->where('name', $role)->exists()) {
            // abort(403, 'Acceso no autorizado para este rol.');
            redirect('/login')->with('error', 'Acceso no autorizado a la zona rol de ' . $role);
        }

        return $next($request);
    }
}
