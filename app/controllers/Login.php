<?php

class Login extends Controller
{
    public function index()
    {
        $this->view('auth/login');
    }

    public function store()
    {
        $db = new Database;
        $user = $db->query("SELECT * FROM penumpang WHERE username = :username AND password = :password")
                    ->bind(':username', $_POST['username'])
                    ->bind(':password', $_POST['password'])
                    ->first();
                    
        if($user != null){
            login($user);
            return redirect('home');
        }

        $user = $db->query("SELECT * FROM petugas WHERE username = :username AND password = :password")
                    ->bind('username', $_POST['username'])
                    ->bind('password', $_POST['password'])
                    ->first();
        
        if($user != null){
            login($user);
            return redirect('admin');
        }

        //gagal login
        return redirect('login');
    }
}