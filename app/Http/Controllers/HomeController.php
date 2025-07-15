<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['myname'] = 'asad';
        $data['mycode'] = 'abc';
        return view("home", $data);
    }
    public function feature(){
        $data['myname'] = 'asad';
        $data['mycode'] = 'abc';
        return view("featureModule.feature", $data);
    }
    public function cv()
{
    return view('cv', [
        'name' => 'Hussain Majeed',
        'email' => 'hussain@example.com',
        'phone' => '+92 300 1234567',
        'summary' => 'I am a passionate full-stack developer with expertise in Laravel, PHP, MySQL, and modern front-end technologies like Bootstrap and JavaScript. I create clean and efficient web applications.',
        'skills' => ['Laravel', 'PHP', 'Bootstrap', 'MySQL', 'JavaScript', 'Git', 'REST APIs']
    ]);
}

    
   
}
