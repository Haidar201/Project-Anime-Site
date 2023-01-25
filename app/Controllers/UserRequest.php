<?php

namespace App\Controllers;
use App\Models\animeRequest;

class UserRequest extends BaseController
{
    protected $animeRequest;
    
    // can only be use in this class and its inheritance

    // use this code below if its only be use in this controller, if not you can type the things inside function inside base controller
    // public function __construct()
    // {
    //     $this-> animeModel = new animeModel(); // so it can be use in all method
    // }

    public function index()
    {
        //Validation


        $data =[
            'title' =>'Request New Anime'
        ];
        return view('request', $data);
    }

    public function save_request()
    {

        $this->animeRequest->save([
            'Judul' => $this->request->getVar('judul'),
            'Tahun_Terbit' => $this->request->getVar('year'),
            'Alasan_Request' => $this->request->getVar('reasson')
        ]);

        return redirect()->to('/');

        // primary key cant be update using controller/model
    }


    public function admin_request(){
        $data['list'] = $this->animeRequest->findAll();

        return view('admin_request', $data);
    }

}
