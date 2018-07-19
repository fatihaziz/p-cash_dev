<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    $data['brokers']=\App\brokers::orderByDesc('local')->get();
    return view('homenew', $data);
});


Route::get('form/{id}', function ($id) {
    return view('form');
});

Route::get('thanks', function() {
    return view('thanks');
});

Route::get('contact', function() {
    return view('contact');
});

Route::resource('post', 'PostController');

Route::get('privacy', function(){
    return view('privacy');
});

Route::get('term', function(){
    return view('term'); 
 });

Route::get('faq', function(){
    return view('faq'); 
});


Route::get('phpinfo', function() {
    phpinfo();
});

Route::get('manuals/{name}', function($name){
    $file= public_path(). "/assetNewDesign/manuals/".$name.".pdf";
    $headers = array(
              'Content-Type: application/pdf',
            );
    return Response::file($file, $headers);
});

Route::get('manuals/view/{name}', function($name){

    $file= public_path(). "/assetNewDesign/manuals/".$name.".pdf";
    $headers = array(
              'Content-Type: application/pdf',
            );
    return Response::file($file, $headers);
});

Route::get('manuals/download/{name}', function($name){
    $file= public_path(). "/assetNewDesign/manuals/".$name.".pdf";
    $headers = array(
              'Content-Type: application/pdf',
            );
    return Response::download($file, $name.".pdf", $headers);
});

Route::get('login', function(){
    return view('login');
});

Route::get('just-if-you-know-which-and-you-must-be-know-where/{code}', function($code)
{

    $sess = session('logon');
    if(!$sess)
         return redirect('login');
    else
         $logon = 1;

    if ($code === "UG9ydG9mb2xpby1BZG1pbg==" && $logon)
    {
        $userData = App\getUser::all();
        // dd($userData->toArray());
        return View::make('porto',['data' => $userData]);
    }
    else
    {
        return redirect(url(''));
    }

});

Route::get('/just-if-you-know-which-and-you-must-be-know-where/{code}/{id}', function($code,$id){

    $sess = session('logon');
    if(!$sess)
         return redirect('login');
    else
         $logon = 1;

    if ($code === "UG9ydG9mb2xpby1BZG1pbg==" && $logon)
    {
        $userIdentity = App\Identity::get();

        return View::make('identity',['data' => $userIdentity]);
    }
    else
    {
        return redirect(url(''));
    }

});

Route::post('/login', function(Request $req)
{
    if (!$req->input('_token'))
    {
        dd('fail');
    }
    else
    {
        $portofolio = [
            'email' => 'portofolio-admin@portofolio.co.id',
            'pass' => 'P0rt04dm1n18',
        ];
        $login = $req->all();
        
        if ($login['email'] === $portofolio['email'])
        {
            if($login['pass'] === $portofolio['pass']){
                session(['logon'=>true]);
                return redirect(url('/just-if-you-know-which-and-you-must-be-know-where/UG9ydG9mb2xpby1BZG1pbg=='));
            }
            else
            {
                dd('fail');
            }
        }
        else
        {
            dd('fail');
        }    
    }
});

// ROUTING UNTUK MANUAL

Route::get('manual/{id}', function($id){
    $file= public_path(). "/assets/manual.broker_id-".$id;
    $headers = array(
              'Content-Type: application/pdf',
            );
    $link = 'manual.broker_id-'.$id;
    return Response::download($file, 'Manual_Book_P-CASH.pdf', $headers);
    return view($link);
});

Route::get('brokers/{type}', function($type){
    $data['brokers']=\App\brokers::orderByDesc('local')->where('disabled',0)->get();
    
    return view('broker-'.$type.'-load',$data);
    
});