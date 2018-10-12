<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App;
class Language
{
    public function handle($request, Closure $next)
{
    if ($request->session()->has('locale')  ) {
        $locale = $request->session()->get('locale');
        App::setLocale($locale);
    }
    return $next($request);
}

}
