<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Str;

class FilesController extends Controller
{
   
    private $img_ext = ['jpg', 'png', 'jpeg', 'gif'];
    private $video_ext = ['mp4', 'avi', 'AVI'];
    private $document_ext = ['doc', 'docx', 'pdf', 'odt'];
    private $audio_ext = ['mp3', 'mpga', 'wma', 'ogg'];

    public function __construct()
    {
    	$this->middleware('auth');
    } 

     public function create(){
    	return view('admin.files.create');
    }


    public function images(){
            $images = File::whereUserId(auth()->id())->OrderBy('id', 'desc')->where('type', '=', 'image')->get();
            $folder = Str::slug(Auth::user()->name. '-' . Auth::id());

            return view('admin.files.type.images', compact('images','folder'));

    }

     public function videos(){
            $videos = File::whereUserId(auth()->id())->OrderBy('id', 'desc')->where('type', '=', 'video')->get();
            $folder = Str::slug(Auth::user()->name. '-' . Auth::id());

            return view('admin.files.type.videos', compact('videos','folder'));
        
    }

     public function audios(){
            $audios = File::whereUserId(auth()->id())->OrderBy('id', 'desc')->where('type', '=', 'audio')->get();
            $folder = Str::slug(Auth::user()->name. '-' . Auth::id());

            return view('admin.files.type.audios', compact('audios','folder'));

        
    }

     public function documents(){
            $documents = File::whereUserId(auth()->id())->OrderBy('id', 'desc')->where('type', '=', 'document')->get();
            $folder = Str::slug(Auth::user()->name. '-' . Auth::id());

            return view('admin.files.type.documents', compact('documents','folder'));
        
    }




    public function store(Request $request)
    {
    	$max_size = (int)ini_get('upload_max_filesize') * 1000000;
    	$all_ext = implode(',',$this->allExtensions());

    	$this->validate(request(), [
    		'file.*' => 'required|file|mimes:' . $all_ext . '|max:' . $max_size
    	]);

    	$uploadFile = new File();

		$file = $request->file('file');
	  	//$name = time().$file->getClientOriginalExtension();
        $name = time().$file->getClientOriginalName();
	  	$ext = $file->getClientOriginalExtension();
		$type = $this->getType($ext);

    	if(Storage::putFileAs('/public/' . $this->getUserFolder() . '/' . $type . '/', $file, $name . '.' . $ext)){
    		$uploadFile::create([
    			'name'		 => $name,
    			'type' 		 => $type,
    			'extension'  => $ext,
    			'user_id' 	 => Auth::id()
    		]);
    	}
    	return back()->with('info', ['succses', 'El archivo se subio correctamente']);
    }

    public function destroy($id)
    {
        $file = File::find($id);

        if(Storage::disk('local')->exists('/public/' . $this->getUserFolder() . '/' . $file->type . '/' . $file->name . '.' . $file->extension)){

            if(Storage::disk('local')->delete('/public/' . $this->getUserFolder() . '/' . $file->type . '/' . $file->name . '.' . $file->extension)){

                $file->delete();

                return back()->with('info', ['succses', 'El archivo se eliminó correctamente']);
           

        }
    }
    }



    private function getType($ext){
    	if(in_array($ext, $this->img_ext))
    	{
    		return 'image';
    	}
    	    	if(in_array($ext, $this->video_ext))
    	{
    		return 'video';
    	}
    	    	if(in_array($ext, $this->document_ext))
    	{
    		return 'document';
    	}
    	    	if(in_array($ext, $this->audio_ext))
    	{
    		return 'audio';
    	}
    }


    private function allExtensions(){
    	return array_merge($this->img_ext, $this->video_ext, $this->document_ext,$this->audio_ext);
    }

    private function getUserFolder()
    {
        $folder = Auth::user()->name. '-' . Auth::id();
    	return Str::slug($folder);
    }
}
