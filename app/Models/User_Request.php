<?php

namespace App\Models;

use CodeIgniter\Model;

class User_Request extends Model
{
    protected $table = 'anime_request';
    protected $primaryKey = 'No';
    protected $allowedFields=['Judul','Tahun_Terbit','Alasan_Request'];
}