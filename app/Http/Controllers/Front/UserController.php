<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class UserController extends Controller
{
    public function getData() {

        $obj = new \stdClass();
        $obj -> name = 'Ahdddmed';
        $obj -> age = 26;
        $obj -> gender = 'Male';

        $data = [
            'A' => 'Ahmed',
            'B' => 'Taha',
            'C' => 'Elsharkawy'
        ];
        
    }
}
