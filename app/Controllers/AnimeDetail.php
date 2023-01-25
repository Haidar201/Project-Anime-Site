<?php

namespace App\Controllers;
use App\Models\Anime_Detail;// -> TO INSERT the path so can use directly without using its real path 

class AnimeDetail extends BaseController
{
    protected $animeDetail; // can only be use in this class and its inheritance

    // use this code below if its only be use in this controller, if not you can type the things inside function inside base controller
    // public function __construct()
    // {
    //     $this-> animeModel = new animeModel(); // so it can be use in all method
    // }

    public function index($nama)
    {
        $info['detail'] = $this -> animeDetail -> query("SELECT * FROM anime_detail WHERE Nama = '$nama'")-> getResultArray();


        if(empty($info['detail'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Anime yang dipilih tidak ditemukan');
        }


        return view('detail.php', $info);
        
    }

}
