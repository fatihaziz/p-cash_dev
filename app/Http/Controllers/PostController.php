<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Storage;
use Session;
use Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // //
        // $this->validate($request,[
        //     'email' => 'required',
        //     'fname' => 'required',
        //     'lname' => 'required',
        //     'pass' => 'required',
        //     'cpass' => 'required',
        //     'phone' => 'required',
        //     'acc1' => 'required',
        //     'acc2' => 'required'
        // ]);
        // $error = "";
        // if(
        //     $request->input('cpass') != $request->input('pass')
        // )  {
        //     $error = [
        //         'msg' => 'pass salah'
        //     ];
        // }

        // $data = [
        //     'sessionId' => session('id','null'),
        //     'brokerId'=> explode('/',url()->previous())[4],
        //     'email' => $request->input('email'),
        //     'fname' => $request->input('fname'),
        //     'lname' => $request->input('lname'),
        //     'pass' => $request->input('pass'),
        //     'phone' => $request->input('phone')
        // ];

        // $img=false;
        // if($request->file('image'))
        // {
        //     $this->validate($request, [
        //         'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     ]);
        //     $image = $request->file('image');
        //     $imageName = time().'-'.$image->getClientOriginalName();
        //     $linkImage = 'assets/upload/'.$imageName;
        //     $img = true;     
        // }

        
        // if($error=="")
        // {
        //     if($img)
        //     {
        //         $imgUrl['imgUrl'] = $linkImage;
        //         $data = array_merge($data, $imgUrl);
        //         $image->move('assets/upload', $imageName);
        //     }
        //     //Users::create($data);
        //     dd($data);
        //     //return redirect('thanks');
        //     // $res=[
        //     //     $data,
        //     //     $error
        //     // ];
        //     // dd($res);
        // }
        // else
        // {
        //     return back()
        //     ->with($error);
        // }

            
            $err = false;
            //DOUBLE CHECK PASSWORD
            if(
                 $request->input('cpass') != $request->input('pass')
            )
            {
                $err = 'Your Password Doesnt Match, Check Again';
            }

            //DATA ARRAY FROM INPUT
            $data = [
                     'sessionId' => session('id','null'),
                     'brokerId'=> explode('/',url()->previous())[4],
                     'email' => $request->input('email'),
                     'fname' => $request->input('fname'),
                     'lname' => $request->input('lname'),
                     'pass' => $request->input('pass'),
                     'phone' => $request->input('phone')
                 ];
            
            //CHECK IMAGE EXISTANCE AND VALIDATION
            if($request->file('image'))
            {
                $img = $request->file('image');
                $imgName = time().'-'.$img->getClientOriginalName();
                $imgMime = $img->getClientMimeType();
                $a = explode('/',$imgMime);
                $imgExt = end($a);
                $imgSize = $img->getClientSize();
                if(
                    $imgExt=='jpeg'||
                    $imgExt=='png'||
                    $imgExt=='svg'||
                    $imgExt=='pdf'
                )
                {
                    if($imgSize>=3000000)
                    {
                        $err = 'Your File Too Big, Please Re-upload Other File';
                    }
                }
                else
                    $err = 'Your File isnt an Image or PDF, Check Your File Again';
            }
            

            //IF HAS IMAGE
            if(!$err&&$request->file('image'))
            {
                //$imgName= '1526551588-Kumpulan doa 30 hari Ramadhan.pdf';   
                $linkImage = 'identities/'.$imgName;
                //return 
                //return Response::make($contents[, 200][, headers]);
                
                
                $disk = \Storage::disk('s3');
                //dd($disk);
                // $s3->put('indentities/myfiletest.txt', "some content here", 'public');
                // $disk = Storage::disk('local');
                if($disk->put($linkImage, file_get_contents($img),'public'))
                {
                    $imgUrl['imgUrl'] = $linkImage;
                    $data = array_merge($data, $imgUrl);
                    if(!Users::create($data))
                    {
                        $err = "Failed Put Data to Server, Try Again!";
                    }
                }
                else
                {
                    $err = "Failed Put File to Server, Try Again!";
                }
                //$file = Storage::disk('local')->get($linkImage);

                // READY FOR AJAX RESPONSE
                // if(
                //     $imgExt=='jpeg'
                // )
                //     $type="image/jpeg";
                // if(
                //     $imgExt=='png'
                // )
                //     $type="image/png";
                // if(
                //     $imgExt=='svg'
                // )
                //     $type="image/svg";
                // if(
                //     $imgExt=='pdf'
                // )
                //     $type="application/pdf";

                // $response = Response::make($file, 200);
                // $response->header("Content-Type", $type);
                // return $response;
            }
            elseif(!$err)
            {
                if(!Users::create($data))
                {
                    $err = "Failed Put Data to Server, Try Again!";
                }
            }
            
            if(!$err){    
                session(['success'=>true]);
                return redirect('thanks');
            }            
            else
            {   
                Session::flash('error',$err);
                return redirect()->back()->withInput($request->all);
            }
                        
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
        return "ini halaman show id:".$id;
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
        return "ini halaman edit id:".$id;
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
        //
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
