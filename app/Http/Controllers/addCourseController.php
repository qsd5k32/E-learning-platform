<?php

namespace App\Http\Controllers;
use App\Course;
use App\playlist;
use Auth;
use Illuminate\Http\Request;
use Youtube;

class addCourseController extends Controller
{

   private $name;
   private $privacy; 
   private $title;
   private $path;
   private $course;


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


   private function validateCourseData($request){
		$request->validate([
			'courseTitle' => 'required',
			'coursePath'=>'required|mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi',
		]);
		// video information
		$this->name = request()->route('id');
		$this->title = $request->input('courseTitle');
		$this->path = $request->file('coursePath')->getRealPath();
		
		
	}


   public function addCourse(Request $request , $id)
   {
       $this->checkId($id);
   		$this->privacy = 'unlisted';
		$this->validateCourseData($request);
		$video = Youtube::upload($this->path, [
    		'title'       => $this->title,
    		'category_id' => 10
			], $this->privacy);
		$videoId = $video->getVideoId();

		if($video)
		{
			Playlist::insert([
				'course_id' => $this->name,
				'course_name' => $this->title,
				'course_url' => $videoId,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
			]);
			return view('message.uploadSuccess',['videoId' => $videoId]);
		}
		return view('message.errorUpload');
	}
}
