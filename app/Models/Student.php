<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    //menentukan tabel yang digunakan oleh model ini
    protected $table = 'students';

    //menentukan kolom kolom yang boleh diisi 
    protected $fillable = [
        'name', 
        'age', 
        'address', 
        'NIS'
    ]; // Tambahkan semua atribut yang diperlukan di sini

}
