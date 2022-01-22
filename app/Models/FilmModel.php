<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class FilmModel extends Model
{
    protected $table = 'film';
    protected $primaryKey = 'film_id';
    protected $allowedFields = ['film_nama', 'film_tahun', 'film_sinopsis', 'film_trailer', 'film_poster', 'film_sampul', 'film_genre'];
   
}