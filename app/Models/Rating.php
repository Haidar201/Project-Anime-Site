<?php

namespace App\Models;

use CodeIgniter\Model;

class Rating extends Model
{
    protected $table = 'rating';
    protected $primaryKey = 'No';
    protected $allowedFields=['Judul','Nama','Email','Rating'];
}