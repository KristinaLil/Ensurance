<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Owner;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $owners=Owner::all();
        $cars=Car::all();
        return view("cars.index",['cars'=>$cars, 'owners'=>$owners]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        $owners=Owner::all();
        return view('cars.create', ['owners'=>$owners]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return RedirectResponse
     * @property $reg_number
     */
    public function store(Request $request):RedirectResponse
    {
        $car=new Car();

        $car->reg_number=$request->reg_number;
        $car->brand=$request->brand;
        $car->model=$request->model;
        $car->owner_id=$request->owner_id;

        $car->save();

        return redirect()->route('cars.index');

    }

    /**
     * Display the specified resource.
     *
     * @param Car $car
     * @return void
     */
    public function show(Car $car): void
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Car $car
     * @return View
     */
    public function edit(Car $car):View
    {
        $owners=Owner::all();
        return view('cars.update', ['car'=>$car, 'owners'=>$owners]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Car $car
     * @return RedirectResponse
     */
    public function update(Request $request, Car $car):RedirectResponse
    {
        $car->reg_number=$request->reg_number;
        $car->brand=$request->brand;
        $car->model=$request->model;
        $car->owner_id=$request->owner_id;
        $car->save();
        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Car $car
     * @return RedirectResponse
     */
    public function destroy(Car $car):RedirectResponse
    {
        $car->delete();
        return redirect()->route('cars.index');
    }

}
