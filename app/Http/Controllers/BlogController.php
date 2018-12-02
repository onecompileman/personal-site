<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Blog;


class BlogController extends Controller
{
    public function __construct() 
    {
         $this->middleware('auth');
    }

    public function edit($id) {
        $blog = Blog::find($id);
        return view('pages.admin.edit-blog', compact(['blog']));
    }

    public function index() 
    {
        $blogs = Blog::get();
        return view('pages.admin.blogs', compact(['blogs']));
    }

    public function create() 
    {
        return view('pages.admin.create-blog');
    }

    public function store(Request $request) 
    {
        $detail=$request->content;
 
        $dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
 
        $images = $dom->getelementsbytagname('img');
 
        foreach($images as $k => $img){
            $data = $img->getattribute('src');
 
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
 
            $data = base64_decode($data);
            $image_name= time().$k.'.png';
            
            Storage::disk('public')->put('blog-images/'.$image_name, $data);

            $img->removeattribute('src');
            $img->setattribute('src', 'blog-images/' .$image_name);
        }
 
        $detail = $dom->savehtml();

        Blog::insert([
            'title' => $request->title,
            'tags' => $request->tags,
            'content' => $detail,
            'is_published' => $request->is_published == 'on',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        $request->session()->flash('alert.message', 'Blog entitled ' . $request->title . ' was created!');

        return redirect('admin');
    }

    public function update(Request $request, $id) {
         $detail=$request->content;
 
        $dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
 
        $images = $dom->getelementsbytagname('img');
 
        foreach($images as $k => $img){
            $data = $img->getattribute('src');

            if (strpos($data, ';')) {
 
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
    
                $data = base64_decode($data);
                $image_name= time().$k.'.png';
                
                Storage::disk('public')->put('blog-images/'.$image_name, $data);

                $img->removeattribute('src');
                $img->setattribute('src', 'blog-images/' .$image_name);
            }
        }
 
        $detail = $dom->savehtml();

        Blog::where('id', $id)->update([
            'title' => $request->title,
            'tags' => $request->tags,
            'content' => $detail,
            'is_published' => $request->is_published == 'on',
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        $request->session()->flash('alert.message', 'Blog entitled ' . $request->title . ' was updated!');

        return redirect()->back();
    }

    public function destroy($id) 
    {
         Blog::where('id', $id)->delete();
         $request->session()->flash('alert.message', 'Blog was deleted!');
         return redirect('/admin');
    }
}
