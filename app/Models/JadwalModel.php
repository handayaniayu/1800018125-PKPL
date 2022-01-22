<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class JadwalModel extends Model
{
    protected $table = 'jadwal';
    protected $primaryKey = 'jadwal_id';
    protected $allowedFields = ['jadwal_film', 'jadwal_tanggal', 'jadwal_jam', 'jadwal_harga'];
   
}