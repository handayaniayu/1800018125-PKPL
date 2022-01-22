<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'order_id';
    protected $allowedFields = ['order_film', 'order_user', 'order_jadwal'];
   
}