<?php

namespace App\Http\Middleware;

use Closure;

class TourokuMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      $data = [
        [
          '名前' => '太郎' , 'メール' => 'taro@yamada']
        ];
        $request -> merge(['data' => $data]);
        return $next($request);
    }
}
