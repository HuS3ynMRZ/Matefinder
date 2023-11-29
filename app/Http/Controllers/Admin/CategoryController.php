<?php

namespace App\Http\Controllers\Admin;

use App\Game;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $categories = Game::all();

        return view( "admin.category.index", compact( "categories" ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
           return view( "admin.category.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate( $request, [
//            "name_english" => "required|string|unique:categories|max:255",
            "name" => "required|string|max:255",
            "image" => "required",
            "description" => "required|string|max:255",
        ] );

        $category = new Game();
        $category->name = isset( $request->name ) ? $request->name : null;

        $category->description = isset( $request->description ) ? $request->description : "";

        if ( isset( $request->image ) && $request->image != "" ) {
            $image = $request->image;
            $image_name = time() . $image->getClientOriginalName();

            $image->move(public_path('/game'),$image_name);

            $image_path = 'game/'.$image_name;
            $category->image = $image_path;
        }

        $category->save();

        return redirect()->route( "admin.categories.index" )->with( "success", "Game has been added successfully." );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id ) {
        $category = Game::where('id',$id)
            ->first();

        return view( "admin.category.edit", compact( "category" ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $category ){
        $this->validate( $request, [
            "name" => "required|string|max:255",
            "description" => "required|string|max:255",
        ] );

        $category = Game::whereId($category)->first();

        $category->name = isset( $request->name ) ? $request->name : null;

        $category->description = isset( $request->description ) ? $request->description : "";

        if ( isset( $request->image ) && $request->image != "" ) {
            $image = $request->image;
            $image_name = time() . $image->getClientOriginalName();

            $image->move(public_path('/game'),$image_name);

            $image_path = 'game/'.$image_name;
            $category->image = $image_path;
        }

        $category->save();

        return redirect()->route( "admin.categories.index" )->with( "success",  "Game has been updated successfully." );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Game $category ) {
        $category->delete();

        return redirect()->route( "admin.categories.index" )->with( "success", "Game has been deleted." );
    }
}
