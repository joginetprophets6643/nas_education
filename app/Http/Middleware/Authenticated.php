<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class Authenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()){
            if(!Auth::user()->address)
            {
                $url=$request->url();
                $url=explode('/',$url);
                foreach($url as $u){
                    $url=array_merge(explode('-',$u),$url);
                }
                $permission=permissions(Auth::user()->id);
                $view=json_decode($permission->view);
                $view=array_map('strtolower',$view);
                foreach($url as $item){
                if($item=='district' || $item=='state'){
                    $item="master";
                }
                if($item=='events' || $item=='videos' || $item=='event' || $item=='image' || $item=='images' || $item=='video' || $item=='video_event'){
                    $item="media";
                }
                if($item=='member'){
                    $item="team";
                }
                if($item=='national'){
                    $item="statistic";
                }
                if($item=='upload'){
                    $item="data";
                }
                if(in_array($item,$view))
                {
                    return $next($request);
                }
                }
                // dd($url);
                return redirect()->back();
            }
            else{
                return redirect()->route('secure-admin');
            }
        }
        else{
            return redirect()->route('secure-admin');
        }
    }
}
