<?php


Route::model('posts', '\App\Post');
Route::model('catagories', '\App\Catagory');

//Route::bind('posts', function($value, $route) {
//    return App\Post::wheretitle($value)->title();
//});
//Route::bind('catagories', function($value, $route) {
//    return App\Catagory::wheretitle($value)->title();
//});

Route::resource('catagories','CatagoriesController');
Route::resource('catagories.posts','PostsController');

//Route::get('Catagorie.destroy','CatagoriesController@destroy');

//Route::resource('posts','PostsController');
//Route::get('posts/create','PostsController@create');


































Route::get('/', 'WelcomeController@index');
Route::get('/dolon', 'WelcomeController@dolon');
Route::get('home', 'HomeController@index');



Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/about', 'AboutController@about');

Route::get('/blog', 'BlogController@index');

Route::get('/contact', 'ContactController@contact');

Route::get('/newuserprofile', 'NuserprofileController@index');

Route::get('/task/index', 'TaskController@index');










Route::model('projects', 'Project');
Route::model('tasks', 'Task');
// Use slugs rather than IDs in URLs
Route::bind('tasks', function($value, $route) {
    return App\Task::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route) {
    return App\Project::whereSlug($value)->first();
});

Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController');








Route::model('newtimelines', 'Newtimeline');

Route::bind('newtimelines', function($value, $route) {
    return App\Newtimeline::whereid($value)->first();
});

Route::resource('newtimeline', 'NewTimelineController');

Route::get('newtimeline/show', 'NewTimelineController@show');

Route::get('newtimeline/newtimeline', 'NewTimelineController@newtimeline');

Route::get('newtimeline/edit', 'NewTimelineController@edit');

//Route::get('list', 'NewTimelineController@newtimeline');


Route::get('file', function(){
    return View::make('file');
});

Route::post('file', function(){
    if(Input::hasFile('file')){
        $dest = 'public/uploads/';
        $name = str_random(6) .'_'. Input::file('file')->getClientOriginalName();
        Input::file('file')->move($dest,$name);
    }
});



Route::get('fileentry', 'FileEntryController@index');

Route::get('fileentry/get/{filename}', [
    'as' => 'getentry', 'uses' => 'FileEntryController@get']);

Route::post('fileentry/add',[
    'as' => 'addentry', 'uses' => 'FileEntryController@add']);












