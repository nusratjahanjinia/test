<?php namespace App\Http\Controllers;

use Input;
use Redirect;
use App\Catagory;
use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PostsController extends Controller {

    protected $rules = [
        'name' => ['required', 'min:3'],
        'title' => ['required'],
        'description' => ['required'],	];
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Catagory $catagory)
	{
        return view('posts.index', compact('catagory'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Catagory $catagory)
	{
        {
            $input = Input::all();
            $input['project_id'] = $catagory->id;
            Task::create( $input );

            return Redirect::route('catagories.show', $catagory->title)->with('post created.');
        }

    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update(Catagory $catagory, Post $post)
    {
        $input = array_except(Input::all(), '_method');
        $post->update($input);

        return Redirect::route('catagories.posts.show', [$catagory->title, $post->title])->with('message', 'Post updated.');
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function destroy(Catagory $catagory, Post $post)
    {
        $post->delete();

        return Redirect::route('catagories.show', $catagory->title)->with('message', 'Task deleted.');
    }

}
