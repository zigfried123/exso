<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function index($page='main'){

        /*
        Mail::to('zigfried123@mail.ru')
            ->send(new OrderShipped());
        */



      return view($page);
    }

}
