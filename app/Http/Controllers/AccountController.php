<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Validator;
use Auth;
use App\Detail;

class AccountController extends Controller
{
    private $photoName;
    public function index()
    {
        $user = User::where('id',Auth::id())->first();
        $details = Detail::where('user_id',Auth::id())->first();
        return view('user.account',['user' => $user , 'details' => $details]);
    }


    public function setData(Request $request)
    {
        //return var_dump($request->file('photoPath'));
        $request->validate([
            'identity_national_number' => 'required|numeric',
            'phone_number' => 'numeric|min:10|nullable',
            'address' => 'string|nullable',
            'photoPath' => 'image|mimes:jpeg,png,jpg,gif,svg|nullable',
            'resume' => 'string|nullable',
            'birthday' => 'required|string',
            'birthday_place' => 'required|string',
        ]);
        // request photo url
        $photo = $request->file('photoPath');

        // check if you already have photo
        if(Detail::where('user_id',Auth::id())->count() > 0 ){
            if(Detail::where('user_id',Auth::id())->value('photo') != 'profile.svg')
            {
                $this->photoName = Detail::where('user_id',Auth::id())->value('photo');
            }
        }
        // check if photo field have file
        if(!empty($photo))
        {
            $this->photoName = 'profile'.Auth::id().time().'.'.$photo->extension();
            $photo->move('uploads',$this->photoName);
        }

        // update data or insert if is not inserted
        Detail::updateOrCreate(
            [
                'user_id' => Auth::id()
            ],[
            'user_id' => Auth::id(),
            'identity_national_number' => $request->input('identity_national_number'),
            'birthday' => $request->input('birthday'),
            'birthday_place' => $request->input('birthday_place'),
            'phone_number' => $request->input('phone_number'),
            'address' => $request->input('address'),
            'resume' => $request->input('resume'),
            'photo' => $this->photoName,
        ])->save();
        return back()->with(['success' => 'your account details was saved with success']);
    }
}
