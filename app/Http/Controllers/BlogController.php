<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index ()
    {
        //insert biasa
        // $blog = new Blog;
        // $blog->title = 'halo Pasuruan';
        // $blog->description = 'isi dari halo Pasuruan';
        // $blog->save();


        //insert mass assigment
        // Blog::create([
        //     'title' => 'halo malang2',
        //     'description' => 'isi dari halo malang2',
        //     'created_at' => '2020-08-15 04:56:38',
        //     'updated_at' => '2020-08-15 04:56:38'
        // ]);

        // update
        // $blog = Blog::where('title', 'halo malang')->first();
        // $blog->title = 'halo surabaya';
        // $blog->save();
        
        //update mass assigment
        // Blog::find(9)->update([
        //     'title'         => 'halo lampung',
        //     'description'   => 'ini halo lampung'
        // ]);

        //delete
        // $blog = Blog::find(9);
        // $blog->delete();

        //delete destroy
        // Blog::Destroy([7,8]);

        //soft Delete
        // $blog = Blog::find(6);
        // $blog->delete();

        // mengembalikan data
        //Blog::withTrashed()->restore();





        $blogs = Blog::all();
        //dd('$blogs');
        return view('blog/home', ['blogs' => $blogs]);
    }
    public function create()
    {
        return view('blog/create');
    }
    public function store(Request $request)
    {
        $blog = new Blog;
        $blog->title       = $request->title;
        $blog->description = $request->description;
        $blog->REV_RWA_FY14 = $request->REV_RWA_FY14;
        $blog->save();
       
        return redirect('/blog');
   
    }
    
    public function show ($id)
    {
        $blog = Blog::find($id);
        if(!$blog)
        abort(404);
      
        return view('blog/single', ['apa' => $blog]);
    }
    public function edit ($id)
    {
        $blog = Blog::find($id);
        if(!$blog)
        abort(404);
      
        return view('blog/edit', ['apa' => $blog]);
    }
    public function update (Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->REV_RWA_FY14 = $request->REV_RWA_FY14;
        $blog->save();
        return redirect('blog/'. $id);
    }
    public function destroy ($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('blog');
    }
}


 //$user = 'Fathi Nur Azzam';
        //$users = ['Azzam', 'Bowo', 'Ican', 'Uqi'];
        // Command Where
        //$users = DB::table('users')->where('username', 'like', '%a% ')->get();
        // Command insert
        // DB::table('users')->insert([
        //     ['username' => 'nina', 'password' => '12asd4'],
        //     ['username' => 'nino', 'password' => 'sadasd']
        // ]);
        //$nilai = 'ini adalah nilai dari page '. $id;
        // DB::table('users')->where('username', 'testing')
        //                   ->update(['username' => 'satpam']);
        // DB::table('users')->where('id','>' , 5)
        //                   ->delete();

        // $users = DB::table('users')->get();