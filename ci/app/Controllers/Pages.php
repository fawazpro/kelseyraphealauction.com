<?php
namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        echo view('front/header');
        echo view('front/home');
        echo view('front/footer');
    }

    public function login()
    {
        echo view('front/header');
        echo view('front/login');
        echo view('front/footer');
    }

    public function register()
    {
        echo view('front/header');
        echo view('front/register');
        echo view('front/footer');
    }
}