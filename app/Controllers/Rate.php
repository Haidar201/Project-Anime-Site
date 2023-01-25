<?php

namespace App\Controllers;
use App\Models\animeModel;
use App\Models\Rating;

class Rate extends BaseController
{
    protected $animeModel;
    protected $rating;
    
    // can only be use in this class and its inheritance

    // use this code below if its only be use in this controller, if not you can type the things inside function inside base controller
    // public function __construct()
    // {
    //     $this-> animeModel = new animeModel(); // so it can be use in all method
    // }

    public function index()
    {
        $list = $this->animeModel->query("SELECT Judul FROM anime")-> getResultArray();
        $data = [
            'index' => 0,
            'Anime' => $list,
        ];
        return view('rating', $data);
    }

    public function submit_rating()
    {

        $this->rating->save([
            'Judul' => $this->request->getVar('Judul_Anime'),
            'Nama' => $this->request->getVar('nama'),
            'Email' => $this->request->getVar('email'),
            'Rating' => $this->request->getVar('rating')
        ]);
        $title = $this->request->getVar('Judul_Anime');
        $number = $this->rating->query("SELECT No FROM anime WHERE Judul='$title'")->getResultArray();
        $rate = $this->rating->query("SELECT AVG(Rating) FROM rating WHERE Judul='$title'")->getResultArray();
        $this->animeModel->SAVE([
            'No' => $number[0],
            'Rating' => $rate[0]
        ]);

        return redirect()->to('/');

        // primary key cant be update using controller/model
    }

}
