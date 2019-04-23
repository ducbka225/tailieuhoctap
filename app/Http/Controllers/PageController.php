<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Auth;

class PageController extends Controller
{
    public function index(){
    	$posts = Post::get();
    	return view('page.index', compact('posts'));
    }

    public function getSignup(){
    	return view('page.signup');
    }

    public function postSignup(Request $req){
    	$this->validate($req,
            [
                'email'=>'required|email|unique:users,Email',
                'password'=>'required|min:6',
                'username'=>'required',
                'repassword'=>'required|same:password'
                
            ],
            [
                'email.required'=>'Vui lòng nhập email!',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email đã tồn tại',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'repassword.same'=>'Mật khẩu không giống nhau',
                'password.min'=>'Mật khẩu có ít nhất 6 ký tự',
                'username.required'=>'Vui lòng nhập Họ tên'
            ]
        );
        $user = new User();
        $user->name = $req->username;
        $user->email = $req->email;
        $user->address = "Hà Nội";
        $user->role = 0;
        $user->avatar = "avatar.jpg";
        $user->password = \Hash::make($req->password);
        $user->save();
        return redirect('signup')->with('success', 'Tạo tài khoản thành công!');
    }

    public function getLogin(){
    	return view('page.login');
    }

    public function postLogin(Request $request){	
    	   $this->validate($request,
            [
                'email'=>'required|email',
                'password'=>'required|min:6',
                
            ],
            [
                'email.required'=>'Vui lòng nhập email!',
                'email.email'=>'Không đúng định dạng email',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu có ít nhất 6 ký tự',
            ]
        );
        
        $user = array('email'=>$request->email, 'password'=>$request->password, 'role'=>$request->role);
        if(Auth::attempt($user)){
            return redirect('trangchu');
        }

        else{
            return redirect('login')->with('message','Đăng Nhập thất bại');
        }

        
    }

    public function getLogout(){
        Auth::logout();
        return redirect('trangchu');
    }

    public function getDetails($id){
    	$post = Post::find($id);
    	return view('page.detail', compact('post'));
    }

    public function getStudentInfo(){

        $id = Auth::user()->id;
        $user = User::find($id);
        return view('page.info', compact('user'));
    }

    public function postUpdateInfo(Request $req){
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->name = $req->name;
        $user->address = $req->address;
        $user->phone_number = $req->phone;

        if($req->hasFile('avatar')){
            $file = $req->File('avatar');
            $name = $file->getClientOriginalName();
            $duoi = $file->getClientOriginalExtension();
            if($duoi == 'jpg' || $duoi == 'png'){
                $savefile = str_random(4)."_".$name;
            while(file_exists("ezuca/images/".$savefile))
            {
                $savefile = str_random(4)."_".$name;
            }
            $file->move("ezuca/images/", $savefile);
            $user->avatar = $savefile;  
            }

            else{

                return redirect()->back()->with('loi', 'file không đúng định dạng');
            }
    
        }
        else{
            $user->avatar = $user->avatar;
        }  
        $user->save();     

        return redirect()->back()->with('message', 'Cập Nhật Thành Công!');
    }

    public function getUpdateInfo(){
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('page.update_info', compact('user'));
    }

    public function getChangePassword(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('page.changepassword', compact('user'));
    }

    public function postChangePassword(Request $req){
        $id = Auth::user()->id;
        $user = User::find($id);

        if(\Hash::check($req->oldpassword, $user->password)){

            if($req->password == $req->repassword){
                $user->password == \Hash::make($req->password);
            }
                
            else{
                return redirect()->back()->with('loi', 'Mật khẩu nhập lại không khớp!');
            }  
        }
        else{
            return redirect()->back()->with('loi', 'Mật khẩu cũ không chính xác');
        }
        $user->save();

        return redirect()->back()->with('message', 'Đổi mật khẩu thành công!');
    }
}
