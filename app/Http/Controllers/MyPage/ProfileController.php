<?php

namespace App\Http\Controllers\MyPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Mypage\Profile\EditRequest;

class ProfileController extends Controller
{
    //プロフィール編集画面の表示
    public function showProfileEditForm(){
        return view('mypage.profile_edit_form')->with('user',Auth::user());
    }

    //プロフィール編集
    public function editProfile(EditRequest $request){
        $user = Auth::user();

        $user->name = $request->input('name');
        $user->save();

        return redirect()->back()->with('status','プロフィールを変更しました');
    }
}
