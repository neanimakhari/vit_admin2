<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleIncome extends Model
{
    protected $fillable = [
        'starting_km',
        'end_km',
        'income',
        'petrol_poured',
        'petrol_litres',
        'logged_on',
        'vehicle',
        'driver_id',
        'driver_name',
        'expense_detail',
        'expense_price',
        'expense_image',
        'petrol_slip',
    ];

    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }
} 