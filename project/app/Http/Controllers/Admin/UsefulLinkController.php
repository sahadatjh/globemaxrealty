<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Usefullink;
use Illuminate\Http\Request;


class UsefulLinkController extends Controller
{
    public function usefull()
    {
        $usefull = Usefullink::first();
        return view('admin.usefull-link.edit')->with('usefull', $usefull);
        
    }

    public function useFullUpdate(Request $request)
    {
        $request->validate([
            'title'       => 'required',
            'description' => 'required',
        ]);

        $usefull = Usefullink::first();
        if( $usefull ){
            $usefull->update( $request->all() );
            $message = "Data updated!!";
        }else {
            Usefullink::create( $request->all() );
            $message = "Data inseted!!";
        }

       return back()->with('message', $message);

    }
}
