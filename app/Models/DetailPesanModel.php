<?php 
namespace App\Models;

use CodeIgniter\Model;

class DetailPesanModel extends Model{
    protected $table      = 'detail_pesan';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_pesan','id_menu','jumlah','harga'];

}