<?php

class Pages extends Controller{
    public function __construct(){
        //A classe Controller retorna um objeto Post, o model instanciado pra dentro desse postModel
        $this->postModel = $this->model('Post'); 
    }

    public function index(){

        $data = ['title' => 'Welcome'];

       $this->view('pages/index', $data);
    }

    public function about(){
        $data = ['title' => 'About Us'];
        $this->view('pages/about', $data);
    }
}