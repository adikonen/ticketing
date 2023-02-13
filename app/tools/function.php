<?php

function getLoginAccount(){
    if (isset($_SESSION['user'])) {
        return $_SESSION['user'];
    } else {
        return null;
    }
};

function dd($vars){
    var_dump($vars);
    die;
}

function redirect($location) {
    $path = BASE_URL . "/$location";
    header("Location: $path");
    die;
}


//login user
function login($data){
    if(isset($data['password'])){
        unset($data['password']);
    }

    $_SESSION['user'] = $data;
}


/**
 * membuat user logout
 */
function logout(){
    $user = getLoginAccount();

    if($user != null){
        unset($_SESSION['user']);
        return redirect('login');
    }
}

function login_required() {
    $user = getLoginAccount();
    if ($user == null) {
        return redirect('login');
    }
}

function http_post_only() {
    $method = strtoupper($_SERVER['REQUEST_METHOD']);
    if ($method != 'POST') {
        return redirect('home');
    }
}

function e($str) {
    if ($str == null) {
        return null;
    }

    return htmlspecialchars($str);
}

/**
 * merender component yang ada pada folder views/component
 * @param string $component
 * @param array $data
 */
function component($component, $data = []) {
    require_once "../app/views/components/{$component}.php";
}

function uploadFile($requestFile, $dir) {

}

function renderStorageUrl($storagePath) {

}
