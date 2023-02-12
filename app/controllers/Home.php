<?php

class Home extends Controller
{
    public function __construct()
    {
       login_required();
    }

    public function index()
    {
        $this->view('home/index');
    }
}