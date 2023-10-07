<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;
      // Set Tabel
      protected $table = "tanggapan";
    
      // Set Primary Key
      protected $primaryKey = "id_tanggapan";
      
      // Set Auto Increment
      public $incrementing = "false";
  
      // Set DataType primary key
      protected $keyType = 'string';
  
      // Setting kolom yang dapat diisi dengan massal
  
      protected $guarded=[];
}
