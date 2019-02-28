<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Validator;
use Auth;
use App\Detail;

class accountController extends Controller
{
    private $photoName;
    public function index()
    {
        $user = User::find(Auth::id())->first();
        $details = Detail::where('user_id',Auth::id())->first();
        return view('user.account',['user' => $user , 'details' => $details]);
    }


    public function setData(Request $request)
    {
        //return var_dump($request->file('photoPath'));
        $request->validate([
            'identity_national_number' => 'required|integer',
            'phone_number' => 'numeric|min:10|nullable',
            'address' => 'string|nullable',
            'photoPath' => 'image|mimes:jpeg,png,jpg,gif,svg|nullable',
            'resume' => 'string|nullable'
        ]);
        // request photo url
        $photo = $request->file('photoPath');

        // check if photo field have file
        if(!empty($photo))
        {
            $this->photoName = 'profile'.Auth::id().time().'.'.$photo->extension();
            $photo->move('uploads',$this->photoName);
        }
        // check if you already have photo
        if(Detail::find(Auth::id())->value('photo') != 'profile.svg')
        {
            $this->photoName = Detail::find(Auth::id())->value('photo');
        }

        // update data or insert if is not inserted
        Detail::updateOrCreate([
            'user_id' => Auth::id()
        ],[
            'user_id' => Auth::id(),
            'identity_national_number' => $request->input('identity_national_number'),
            'phone_number' => $request->input('phone_number'),
            'address' => $request->input('address'),
            'resume' => $request->input('resume'),
            'photo' => $this->photoName
        ])->save();
        return view('message.success',['message' => 'your data was saved']);
    }
}
