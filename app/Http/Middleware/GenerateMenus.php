<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Lavary\Menu\Menu;

class GenerateMenus
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
        (new \Lavary\Menu\Menu)->make('MyNavBar', function ($menu) {
            $menu->add('Home');
            $menu->add('About', 'about');
            $menu->add('Blog', 'blog');
            $menu->add('Team', 'team');
            $menu->add('Stats', 'stats');
            $menu->add('Contacts', 'contacts');
        });

        return $next($request);
    }
}
