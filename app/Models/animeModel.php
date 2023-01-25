<?php

namespace App\Models;

use CodeIgniter\Model;

class animeModel extends Model
{
    protected $table = 'anime';
    protected $primaryKey = 'No';
    protected $allowedFields=['Rating'];
}