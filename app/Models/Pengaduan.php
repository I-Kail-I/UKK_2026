<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class Pengaduan extends Model
{
    protected $fillable = ['siswa_id', 'category_id', 'status', 'ruangan', 'when', 'description'];

    public function siswa(): belongsTo
    {
        return $this->belongsTo(Siswa::class);
    }

    public function category(): belongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
