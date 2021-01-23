<?php

namespace App\Models;

use CodeIgniter\Model;

class DairyModel extends Model
{
     // nama table database
     protected $table = 'dairy';
     // mengunakan catatan waktu
     protected $useTimestamps = true;
     // kolom yang akan di isi secara manual melalui input
     protected $allowedFields = ['penulis', 'judul', 'keterangan'];
}
