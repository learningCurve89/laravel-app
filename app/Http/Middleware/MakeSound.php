<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MakeSound
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle(Request $request, Closure $next)
    {
        $makeSound = $request->exists('Woof');
        $bestSound = $request->exists('Gna');
        if ($makeSound) {
            return $next($request);
        } else if($bestSound){
            return redirect()->route('foxes.show');
        }
        else {
            return response('What does the fox say?');
        }
    }
}
