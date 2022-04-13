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
                $add=json_decode($permission->add);
                $add=array_map('strtolower',$add);
                $edit=json_decode($permission->edit);
                $edit=array_map('strtolower',$edit);


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
                            if(in_array('add',$url)){
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
                                    if(in_array($item,$add))
                                    {
                                        return $next($request);
                                    }
                                }
                            }
                            else if(in_array('edit',$url)){
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
                                    if(in_array($item,$edit))
                                    {
                                        return $next($request);
                                    }
                                }
                            }
                            else{
                                return $next($request);
                            }
                        }
                    }
               
                return redirect()->route('dashboard');
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
