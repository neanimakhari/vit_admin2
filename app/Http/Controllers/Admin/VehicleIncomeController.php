<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VehicleIncome;
use Illuminate\Http\Request;

class VehicleIncomeController extends Controller
{
    public function index()
    {
        $incomes = VehicleIncome::with('driver')
            ->latest()
            ->paginate(10);
        return view('admin.vehicle-incomes.index', compact('incomes'));
    }

    public function show(VehicleIncome $vehicleIncome)
    {
        return view('admin.vehicle-incomes.show', compact('vehicleIncome'));
    }
} 