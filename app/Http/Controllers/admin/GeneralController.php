<?php

namespace App\Http\Controllers\admin;

use App\Models\website\Post;
use Illuminate\Http\Request;
use App\Models\website\PostMeta;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class GeneralController extends Controller
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
        //return $request->Post["image"]->getClientOriginalName();
        $validated = $request->validate([
        'Post.title' => 'required',
        ]);
            try {
                DB::transaction(function () use ($request) {
                $post = Post::firstOrNew(['id'=>$request->id]);

                if(isset($request->Post['image'])){
                    //Store In Storage Folder
                    $time = time();
                    $store = $request->Post["image"]->storeAs('public/'.$request->Post["type"],$time.$request->Post["image"]->getClientOriginalName());
                    $path = '/'.$request->Post["type"].'/'.$time.$request->Post["image"]->getClientOriginalName();
                    $post->image=$path;
                }

                $post->name = $request->Post["title"];
                $post->type = $request->Post["type"];
                $post->slug = $request->Post["title"];

                $status = (isset($request->Post["status"])) ? $request->Post["status"] : 1 ;

                $post->status = $status;
                $post->save();

                foreach($request->PostMeta as $key => $value){
                    $postMeta = PostMeta::firstOrNew(['post_id'=>$post->id,'key'=>$key]);
                    $postMeta->post_id = $post->id;
                    $postMeta->key = $key;
                    if(is_array($value)){
                        $postMeta->value = json_encode($value);
                    }
                    else{
                        if($request->hasFile('PostMeta.'.$key)){

                            $time = time();
                            $store = $value->storeAs('public/'.$request->Post["type"],$time.$value->getClientOriginalName());
                            $path = $request->Post["type"].'/'.$time.$value->getClientOriginalName();
                            $postMeta->value=$path;
                        }
                        else{
                            $postMeta->value = $value;
                        }

                }
                    $postMeta->save();

            }
            });
            return redirect()->back()->with('success','Successfully Data Saved');
            } catch (\Throwable $th) {
                return $th;
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slug = "CSNHS Banner Management";
        $banners = Post::where('type','banner')->get();
        $banner_details = Post::find($id);
        return view('admin.cms.banner',compact('slug','banner_details','banners'));
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
