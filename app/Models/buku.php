<?php

namespace App\Models;

use App\Models\kategoriBuku;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buku extends Model
{
    use HasFactory;

    protected $fillable=['nama','harga','tglMasuk','kategori_buku_id','thnTerbit','image'];

    public function kategoriBuku()
    {
        return $this->belongsTo(kategoriBuku::class);
    }
}