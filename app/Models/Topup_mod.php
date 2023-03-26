<?php

namespace App\Models;

use CodeIgniter\Model;
use Topup_mod\Models;

class TopupModel extends Model
{

    protected $table = 'barang';
    protected $primaryKey = 'id';
    protected $allowedFields = ['jml_topup', 'via', 'nama'];
}
