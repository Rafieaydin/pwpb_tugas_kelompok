<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siswa extends Model
{
    use HasFactory;
    // soft delete
    use SoftDeletes;
    // mendefinisikan table = 'siswa';
    protected $table = 'siswa';
    protected $fillable  = ['nama','kelas','absen'];
}
