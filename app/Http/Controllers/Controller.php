<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Enquiry;

class Controller extends BaseController
{







        public function welcome(Request $request)
        {
            return view('welcome');
        }








    function makeaenquiry(Request $request)
    {
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email ?? '';
        $data['need'] = $request->need;

        $data = Enquiry::create($data);
        return redirect()->back()->with('success', 'We will reach you soon!');
    }






}








