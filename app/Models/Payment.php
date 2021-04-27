<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['admin_id', 'user_id', 'spp_id', 'total', 'status', 'bukti', 'keterangan', 'jumlah_bayar'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function admin()
    {
        return $this->belongsTo(User::class);
    }

    public function spp()
    {
        return $this->belongsTo(Spp::class);
    }

    public function months()
    {
        return $this->belongsToMany(Month::class);
    }
}
