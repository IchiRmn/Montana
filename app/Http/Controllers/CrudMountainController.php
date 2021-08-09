<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mountain;

class CrudMountainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mount = Mountain::find($id);
        return view('admin/details-mountain')->with('mount', $mount);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mount = Mountain::find($id);
        return view('admin/editDestination')->with('mount', $mount);
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
        $request->validate([
            'name' => 'required|min:2',
        ]);

    $mount = Mountain::find($id);

     if($request->img != ''){        
          $path = public_path().'/img/Mountain/';

          //code for remove old file
          if($mount->img != ''  && $employee->file != null){
               $file_old = $path.$employee->file;
               unlink($file_old);
          }

          //upload new file
          $file = $request->file;
          $filename = $file->getClientOriginalName();
          $file->move($path, $filename);

          //for update in table
          $employee->update(['file' => $filename]);

        $data = [
            'mountain_name' => $request->name
        ];

        $mount->update($data);

        return "Done";
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
}
