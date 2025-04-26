<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPenduduk extends Model
{
     protected $table = "tblpenduduk";
     protected $fillable = [
        'namapenduduk','tanggallahir','jeniskelamin','alamat',
     ];
}