<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slider;
class adminController extends Controller
{
    

    public function index(){

        $slider_all=slider::all();
        return view('panel.index',compact('slider_all'));
    }


    public function slider_store(Request $request){

        $data=$request->all();

        if ($imagen=$request->file('file')) {
            
            $slider_nombre_bd=slider::select('img')->orderBy('img', 'desc')->get()->toArray();
            
            if(isset($slider_nombre_bd[0]['img'])){

                $name_img=explode('.',$slider_nombre_bd[0]['img']);
                $name_img=$name_img[0];
                
               

                    $number_img= (int) substr($name_img,6,7);
                    ++$number_img;
                    $extension=$imagen->guessExtension();
                    $nombre_imagen="slider"."$number_img".".".$extension;
                    
                   
                
            }else{

                $extension=$imagen->guessExtension();
                $nombre_imagen="slider1.".$extension;
               
            }

        }   

             
        $imagen->move('images/slider/',$nombre_imagen);
        $data['img']=$nombre_imagen;     
        slider::create($data);
        return redirect('/Admin');
    }

    public function slider_show($id){

        $slider_img=slider::select('img')->where('id',$id)->get();

        return response()->json($slider_img->toArray());
        
    }

    public function slider_show_all($id){

        
        $slider=slider::findOrFail($id);

        return response()->json($slider->toArray());
    }

    public function slider_update(REQUEST $request){

        $data=$request->all();

        $slider=slider::find($data['id']);

        $slider->titulo=$data['titulo'];
        $slider->descripcion=$data['descripcion'];
        $slider->save();
        return response()->json($slider);

    }


    public function slider_destroy($id){


        $slider=slider::find($id);
        
        $image_path = public_path().'/images/slider/'.$slider->img;
        unlink($image_path);

        $slider->delete();
        return redirect('/Admin');
    }
}
