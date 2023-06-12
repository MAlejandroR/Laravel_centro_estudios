<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlumnosRequest;
use App\Http\Requests\UpdateAlumnosRequest;
use App\Models\Alumnos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;



class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filas = Alumnos::all();
//       $campos = Alumnos::getAttributes();
        $campos = Schema::getColumnListing("alumnos");
        $campos = $filas[0]->getAttributes();
//        dd ($fila);
//        $campos = DB::select("describe alumnos");
//        $campos = DB::select("select column_name
//                                    from information_schema.columns
//                                    where table_name ='alumnos'
//                                    order by ordinal_position");

        unset ($campos["created_at"]);
        unset ($campos["updated_at"]);
        $campos = array_keys($campos);


        $tabla ="Alumnos";
        return view("alumnos.listado",["filas"=>$filas,
                                            "campos"=>$campos,
                                            "tabla"=>$tabla]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlumnosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumnos $alumnos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumnos $alumnos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlumnosRequest $request, Alumnos $alumnos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumnos $alumnos)
    {
        //
    }
}
