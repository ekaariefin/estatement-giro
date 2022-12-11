<?php

namespace App\Models;

use CodeIgniter\Model;

class Atm extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'transaction';
    protected $primaryKey       = 'ID';
}
