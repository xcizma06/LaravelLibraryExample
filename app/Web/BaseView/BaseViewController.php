<?php

namespace App\Web\BaseView;

use App\Http\Controller;

class BaseViewController extends Controller 
{
    public function __construct(
    ) {}

    public function index() {
        return view('index');
    }
}
