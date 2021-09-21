<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\galleryadd;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Models\sliders;
use App\Models\gallery_list;
use App\Models\category_list;
use App\Models\category;
use App\Models\slider_list;
use DB;

class dashboard extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dashboard.homepage');
    }
    public function homepage()
    {
        return view('dashboard.homepage-edit');
    }



    // Slider
    
    public function homeSlider(){
        $sliders = sliders::orderBy('position')->get();
        return view('dashboard.homeslider.homeSlider',['sliders'=>$sliders]);
        
    }
    public function addImage(){
        return view('dashboard.homeslider.addImage');
    }
    public function editslider($id){
        $slider=sliders::Where('id', $id)->get();
        return view('dashboard.homeslider.editslider',['slider'=>$slider]);
    }
    public function imageSave(Request $request){
        // $student=new Slider;
        // if($request->hasfile('file')){
        //     $file=$request->file('file');
        //     $extension=$file->getClientOriginalExtension();
        //     $filename=time().'.'.$extension;
        //     $file->move('images/',$filename);
        //     $student->file_url=$filename;
        // }
        // $student->save();
        // return redirect()->back()->with('status','Student Image added Successfully');
        $validated = $request->validate([
            'logo1' => 'required'
        ]);
        
         $filename = addMedia($request->file('logo1'),'slider');
        //  die("Hii");
         $request->merge(['logo' => '/' .$filename]);
        
         $data = $request->all();
          sliders::create($data);
          return redirect()->back()->with('status','Student Image added Successfully');
        // echo "Hii";
    }
    public function editslidersave(Request $request,sliders $id){
        $validated = $request->validate([
            'logo1' => 'required'
        ]);
        
         $filename = addMedia($request->file('logo1'),'gallery');
        //  die("Hii");
         $request->merge(['logo' => '/' .$filename]);
        
         $data = $request->all();
        //  die(json_encode($data));
        //   galleryadd::whereId($id)->update('logo1'=>$filename,'category'=>$_POST['categ']);
        $id->update($data);
          return redirect()->back()->with('status','Student Image added Successfully');
    }
    public function deleteslider($id){
        // dd($id);
        // DB::delete("delete from slider where id = $id");
        sliders::Where('id', $id)->delete();
        return redirect()->back()->with('status','Student Image added Successfully');
    }

    // Gallery

    public function galleryitem() {
        $sliders = galleryadd::all();
        return view('dashboard.gallery.galleryitem',['sliders'=>$sliders]);
    }
    public function addgallery(){
        $category=category::all();
        return view('dashboard.gallery.addgallery',['category'=>$category]);
    }

    public function editgallery($id){
        $slider=galleryadd::Where('id', $id)->get();
        $category=category::all();
        return view('dashboard.gallery.editgallery',['slider'=>$slider,'category'=>$category]);
    }

    public function gallerysave(Request $request){
        $validated = $request->validate([
            'logo1' => 'required'
        ]);
        
         $filename = addMedia($request->file('logo1'),'gallery');
        //  die("Hii");
         $request->merge(['logo' => '/' .$filename]);
        
         $data = $request->all();
        //  die(json_encode($data));
          galleryadd::create($data);
          return redirect()->back()->with('status','Student Image added Successfully');
    }
    public function editgallerysave(Request $request,galleryadd $id){
        $validated = $request->validate([
            'logo1' => 'required'
        ]);
        
         $filename = addMedia($request->file('logo1'),'gallery');
        //  die("Hii");
         $request->merge(['logo' => '/' .$filename]);
        
         $data = $request->all();
        //  die(json_encode($data));
        //   galleryadd::whereId($id)->update('logo1'=>$filename,'category'=>$_POST['categ']);
        $id->update($data);
          return redirect()->back()->with('status','Student Image added Successfully');
    }
    public function deletegallery($id){
        // dd($id);
        // DB::delete("delete from gallery where id = $id");
        galleryadd::Where('id', $id)->delete();
        return redirect()->back()->with('status','Student Image added Successfully');
    }

    // category

    public function category(){
        $category=category::all();
        return view('dashboard.gallery.category',['category'=>$category]);
    }
    public function create_category(Request $request){
        $validated = $request->validate([
            'category_name' => 'required'
        ]);
        $data = $request->all();
        category::create($data);
        // $category=DB::select('select * from media_category');
        $category=category::all();
        return view('dashboard.gallery.category',['category'=>$category]);
    }
    public function deletecategory($id){
        // dd($id);
        // DB::delete("delete from media_category where s_no = $id");
        category::Where('id',$id)->delete();
        return redirect()->back()->with('status','Student Image added Successfully');
    }
    public function sliderposition(Request $request){
        $id = $request->ids;
         $s = 0;
        //   echo $request->type;
          switch($request->type){
            //  case 'casino':
            //   foreach ($id as $d) {
            //       $name = Casino::Where('id', $d)->update(array('order_id' => ++$s));
            //   }
            //  break;
             case 'homeSilder':
              foreach ($id as $d) {
                  $name = slider_list::Where('id', $d)->update(array('position' => ++$s));
              }
              break;
          }
    }
    

}
