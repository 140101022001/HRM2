<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\car;

class carController extends Controller
{
    public function __construct()
    {

    }

    public function index() {
        $car = car::paginate(1);
        return view('car/index', compact('car'));
    }

    public function add(Request $request) {
        $request->validate([
            'Name' => 'required',
            'carCode' => 'required|unique:cars,carCode',
            'Price' => 'required',
            'Quantity' => 'required'
        ],[
            'Name.required' => 'Tên không được trống!',
            'carCode.required' => 'Code không được trống!',
            'carCode.unique' => 'Code không được trùng!',
            'Price.required' => 'Giá không được trống!',
            'Quantity.required' => 'Số lượng không được trống!'
        ]);
        $car = new car();
        $car->Name = $request->input('Name');
        $car->carCode = $request->input('carCode');
        $car->Price = $request->input('Price');
        $car->Quantity = $request->input('Quantity');
        $car->save();
        return redirect(route('car.index'));
    }
    public function edit(car $car) {
        return view('car.edit', compact('car'));
    }
    public function update(Request $request, car $car) {
        $car->Name = $request->input('Name');
        $car->carCode = $request->input('carCode');
        $car->Price = $request->input('Price');
        $car->Quantity = $request->input('Quantity');
        $car->save();
        return redirect(route('car.index'));

    }
    public function destroy(car $car) {
        // return $car;
        $car->delete();
        return redirect(route('car.index'));
    }
}
