<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * @param  array|string  $roles
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $userRole = auth()->user()->role;

        // Super Admin selalu punya akses
        if ($userRole === 'superadmin') {
            return $next($request);
        }

        // Jika role user sesuai, lanjutkan
        if (in_array($userRole, $roles)) {
            return $next($request);
        }

        abort(403, 'Unauthorized access');
    }
}
