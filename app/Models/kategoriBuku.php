<?php

namespace App\Models;

use App\Models\buku;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kategoriBuku extends Model
{
    use HasFactory;

    protected $fillable = ['namaKategori'];

    public function buku()
    {
        return $this->hasMany(buku::class);
    }
}