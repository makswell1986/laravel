<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Services\ProviderService;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;



class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
     
     /* FOR BINDING CONTINER AND NEEDED */

     /*    App::bind(ProviderService::class, function ($app) {
            return new ProviderService();
    });                      */
            App::setLocale($request->locale);
                
        return $next($request);
    }
}
