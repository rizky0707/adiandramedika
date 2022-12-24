<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function service()
    {
        return $this->belongsTo(Service::class, 'id_service');
    }

    public function category()
    {
        return $this->belongsTo(CategoryService::class, 'id_category');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'id_doctor');
    }

    protected $fillable = [
        'nama',
        'nohp',
        'alamat',
        'jam',
        'lokasi',
        'id_category',
        'id_service',
        'id_doctor',
        'tanggal',
        'status',
        'user_id',
        'komfirmasi',
    ];

}
