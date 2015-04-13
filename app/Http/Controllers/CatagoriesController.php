<?php namespace App\Http\Controllers;

use Input;
use Redirect;
use App\Catagory;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


class CatagoriesController extends Controller {

    protected $rules = [
        'name' => ['required', 'min:3'],
        'title' => ['required'],	];

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $catagories = Catagory::all();
		return view('catagories.index',compact('catagories'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('catagories.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Catagory $catagory)
	{
        {
            $this->validate($catagory, $this->rules);
            $input = Input::all();
            Catagory::create( $input );

            return Redirect::route('catagories.index')->with('message', 'Project created');
        }

    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Catagory $catagory)
	{
		return view('catagories.show',compact('catagory'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Catagory $catagory)
	{
        return view('catagories.edit',compact('catagory'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Catagory $catagory, Catagory $catagory)
	{
        $input = array_except(Input::all(), '_method');
        $catagory->update($input);

        return Redirect::route('catagories.show', $catagory->title)->with('message', 'Catagory updated.');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
//	public function destroy(Catagory $catagory)
//	{
//        $catagory->delete();
//
//        return Redirect::route('catagories.index')->with('message', 'catagory deleted.');
//    }


}
