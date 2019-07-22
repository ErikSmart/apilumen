<?php

namespace App\Http\Controllers;
use Illuminate\http\Request;
use App\Autor;
use App\Traits\ApiResponser;
use Illuminate\Http\Response as HttpResponse;
//use Illuminate\Support\Facades\Response;
class AutorController extends Controller
{
  use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
   {
     $autores = Autor::all();
     return $this->successResponse($autores);

   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       //
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
     $rules = [
       'nombre' => 'required|max:30',
       'genero' => 'required|max:10:|in:masculino,femenino',
       'pais' => 'required|max:30'
   ];

   $this->validate($request, $rules);

   $autores= Autor::create($request->all());

   return $this->successResponse($autores, HttpResponse::HTTP_CREATED);

   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      $id = Autor::findOrFail($id);
      return $this->successResponse($id);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       //
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
     $rules = [
       'nombre' => 'max:30',
       'genero' => 'max:10:|in:masculino,femenino',
       'pais' => 'max:30'
   ];

   $this->validate($request, $rules);
    $id = Autor::findOrFail($id);

    $id->fill($request->all());

    if ($id->isClean()) {
      return $this->errorResponse('Algo debe cambiar', HttpResponse::HTTP_UNPROCESSABLE_ENTITY);
    }
    $id->save();
    return $this->successResponse($id);
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       //
   }

    //
}
