<?php
namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $products = new \App\Models\Products();
        // var_dump($products->findAll());
        $data = [
            'prods' => $products->findAll(),
        ];
        echo view('front/header');
        echo view('front/home', $data);
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