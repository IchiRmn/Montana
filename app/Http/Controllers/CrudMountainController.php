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
        return view('admin/detailsMountain')->with('mount', $mount);
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
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:6048',
            'height' => 'required|numeric',
            'maximum_member' => 'required|numeric',
            'quota' => 'required|numeric',
            'maximum_stay' => 'required|numeric',
            'description' => 'required|min:30'
        ]);

        $mount = Mountain::find($id);

        if ($request->image != '') {        
          $path = public_path().'/img/Mountain/';

            //code for remove old file
            if ($mount->img != ''  && $mount->img != null) {
                $file_old = $path . $mount->img;
               unlink($file_old);
          }

            //upload new file
            $file = $request->image;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);

            //for update in table
            $mount->update(['img' => $filename]);
        }
        
        $data = [
            'mountain_name' => $request->name,
            'height' => $request->height,
            'max' => $request->maximum_member,
            'quota' => $request->quota,
            'days' => $request->maximum_stay,
            'description' => $request->description,

        ];

        $mount->update($data);

        return redirect('/admin')->with(['success' => 'Data updated successfully!']);
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
