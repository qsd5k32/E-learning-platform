<?php

namespace App\Http\Controllers;
use App\Course;
use App\playlist;
use App\Article;
use Auth;
use Illuminate\Http\Request;
use Storage;

class addCourseController extends Controller
{

   private $name;
   private $title;
   private $content = 'nullable';
   private $course;
   private $mime;


   private function checkId($id)
   {
       $this->course = Course::where('course_id',$id)->where('author_id' , Auth::id())->count();
       if($this->course == 1 or !is_numeric($id)) {
           return true;
       }
       return abort(404);
   }

   public function index()
   {
      // get course data
   		$course = Course::where('author_id',Auth::id())->get();
   		$coursesCount = $course->count();
   		if($coursesCount > 0)
   		{
   			return view('teacher.courses',[
   			'courses' => $course]);
   		}
   		return  abort(403, "Unauthorized action. you can't access this web page you don't have any courses");
   }

   public function addContent($id)
   {
       $this->checkId($id);
       return view('teacher.addCourse');
   }


  // validate data
   private function validateCourseData($request){
    $type = $request->input('contentType');
    switch ($type){
        case 1:
            $this->mime = 'required|mimes:doc,pdf,docx,zip';
            break;
        case 2:
            $this->mime = 'required|mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi';
            break;
        default:
            $this->mime = 'nullable';
            $this->content = 'required|string';
    }
       $request->validate([
			'courseTitle' => 'required',
			'coursePath'=> $this->mime,
            'articleContent' => $this->content
		]);
		// video information
		$this->name = request()->route('id');
		$this->title = $request->input('courseTitle');
		
	}
    // @TODO make add content for article and pdf files


  // add file content to playlist
   public function addFileContent($id, $request )
   {
    // validate request data and url
    $this->checkId($id);
	$this->validateCourseData($request);
    
    //get file
    $file = $request->file('coursePath');

    // storre file
    $video = Storage::put('courses',$file);

    // insert data to databases
		Playlist::insert([
        'course_id' => $this->name,
        'course_name' => $this->title,
        'course_url' => $video,
        'type' => $request->input('contentType'),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ]);
      return response()->json(['success'=>'You have successfully upload file.']);
		
	}

	// add article
	public function addArticle($id,$request)
    {
        $this->checkId($id);
        $this->validateCourseData($request);
        $article = Article::create([
            'course_id' => $this->name,
            'title' => $this->title,
            'content' => $request->input('articleContent'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        Playlist::insert([
            'course_id' => $this->name,
            'course_name' => $this->title,
            'course_url' => $article->id,
            'type' => $request->input('contentType'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        return view('message.success',['message','added with success']);
    }

    public function setContent(Request $request,$id)
    {
        $type = $request->input('contentType');
        if($type == 1 or $type == 2){ $this->addFileContent($id,$request);}
        if($type == 3){ $this->addArticle($id,$request);}
        dd('hello');
    }
}
