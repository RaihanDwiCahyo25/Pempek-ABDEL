<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NgrokCorsHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Add headers to fix ngrok asset loading issues
        $response->header('Access-Control-Allow-Origin', '*');
        $response->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS, HEAD');
        $response->header('Access-Control-Allow-Headers', 'Content-Type, Authorization, X-Requested-With');
        $response->header('Access-Control-Max-Age', '3600');
        $response->header('Cross-Origin-Resource-Policy', 'cross-origin');
        $response->header('Cross-Origin-Embedder-Policy', 'credentialless');

        // Add cache headers for assets
        if (str_contains($request->path(), '/build/')) {
            $response->header('Cache-Control', 'public, max-age=31536000, immutable');
        }

        return $response;
    }
}
