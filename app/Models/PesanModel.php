<?php 
namespace App\Models;

use CodeIgniter\Model;

class PesanModel extends Model{
    protected $table      = 'pesan';
    protected $primaryKey = 'id';
    protected $allowedFields      = ['id_user','no_nota','nama','tgl','total_harga','no_meja','status'];
}