<?php

namespace App\Controllers;
use App\Models\Anime_Detail;
use App\Models\animeModel; // -> TO INSERT the path so can use directly without using its real path 

class Home extends BaseController
{
    protected $animeDetail;
    protected $animeModel; // can only be use in this class and its inheritance

    // use this code below if its only be use in this controller, if not you can type the things inside function inside base controller
    // public function __construct()
    // {
    //     $this-> animeModel = new animeModel(); // so it can be use in all method
    // }

    public function index()
    {
        $anime = $this -> animeModel -> findAll();
        
        $data = [
            'index' => 0,
            'musim' =>["Spring","Summer","Winter","Fall"],
            'Anime' => $anime,
        ];

        // $animeModel = new \App\Models\animeModel(); -> if not using use
        // $animeModel = new animeModel();

        

    


        return view('home.php',$data);
        
    }

    public function data($nama){
        $info['detail'] = $this -> animeDetail -> query("SELECT * FROM anime_detail WHERE Nama = '$nama'")-> getResultArray();

        return view('detail.php', $info);
    }

    public function login(){
        return view('login.php');
    }

    public function login_confirm(){
        $anime = $this -> animeModel -> findAll();
        $data = [
            'index' => 0,
            'musim' =>["Spring","Summer","Winter","Fall"],
            'Anime' => $anime,
        ];

        $nama = $this->request->getVar('username');
        $pass = $this->request->getVar('password');

        if($nama == "admin" && $pass == "admin"){
            return view('admin_home.php',$data);
        }
        else{
            return view('login');
        }


        
    }
}
