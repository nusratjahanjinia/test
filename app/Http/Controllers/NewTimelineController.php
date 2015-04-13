<?php namespace App\Http\Controllers;

use Input;
use Redirect;
use App\Http\Requests;
use App\Newtimeline;

//use App\Http\Requests\StoreTimelineRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Carbon\Carbon;
//use Request;

class NewTimelineController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

//    public function newtimeline()
//
//    {
//        $newtimeline= Newtimeline::all();
//
//        return view('newtimeline.newtimeline', compact('newtimeline'));
//
//    }



//    public function __construct()
//    {
//        $this->middleware('auth',['expect'=>['index','show']]);
//    }
//

    public function index()
	{
		$newtimeline= Newtimeline::all();

        return view('newtimeline.index', compact('newtimeline'));

        return view('newtimeline.newtimeline', compact('newtimeline'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
     *
	 * @return Response
	 */
	public function create()
	{
		return view('newtimeline.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\StoreTimelineRequest $request){
        //$this->validate($request, $this->rules);
        $input = Input::all();
//        $input['published_at']=Carbon::now();

        Newtimeline::create($input);

		return redirect::to('newtimeline')->with ('message','Title:minimum 3 characters required,Body:minimum 3 characters required');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Newtimeline $newtimeline)


	{
        $newtimeline= Newtimeline::all();

        return view('newtimeline.newtimeline', compact('newtimeline'));


//        return view('newtimeline.newtimeline', compact('newtimeline'));

//        $newtimeline = Newtimeline::find($id);
//
//
//        return view::make('newtimeline.show')
//            ->with('newtimeline', $newtimeline);

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Newtimeline $newtimeline)
	{
        $newtimeline = Newtimeline::find($id)->get($id);
        return view('newtimeline.edit', compact('newtimeline'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Newtimeline $newtimeline,Request $request)
	{
        $input=array_except(Input::all(),'_method');
        $newtimeline->update($input);
        return Redirect::to('newtimeline');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
//	public function destroy(Newtimeline $newtimeline)
//    {
//        // delete
//        //$newtimeline = Newtimeline::find($id);
//        $newtimeline->delete();
//
//        // redirect
////        Session::flash('message', 'Successfully deleted the Post!');
//        return Redirect::to('newtimeline');
//    }

    public function destroy($id)
    {
        // delete
        $newtimeline = Newtimeline::find($id);
        $newtimeline->delete();

        // redirect
//        Session::flash('message', 'Successfully deleted the Post!');
        return Redirect::to('newtimeline');
    }

}
