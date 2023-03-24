<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterPostRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Stevebauman\Location\Facades\Location;
use App\Models\Product;

class UserController extends Controller
{
    public function anasayfa()
    {
        $urunler=Product::orderBy('created_at','desc')->get()->take(6);//son oluşturulma tarihinden 6 ürün
      
        return view('front.anasayfa',compact('urunler'));
    }
    public function loginPost(Request $request)
    {
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
                return redirect()->route("anasayfa");
        }
        else
        {
            return redirect()->back()->withFail('Kullanıcı Adı veya Şifreniz hatalı');
        }

    }
    public function registerPost(RegisterPostRequest $request)
    {
        //dd($request);
        try
        {
            $user=User::create(
                [
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'password'=>Hash::make($request->password),
                ]);
                if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
                {
                    return redirect()->route("anasayfa");
                }
                else
                {
                    return redirect()->back()->withFail('Kullanıcı Adı veya Şifreniz hatalı');
                }
                
        }  
        catch(\Exception $e)
        {
            return redirect()->back()->withFail('Beklenmedik bir hata oluştu');
        } 
    }
    public function profil()
    {        
        return view('front.profil');
    }
    public function denied(Request $request)
    {   
        $ip=$request->getClientIp(); 
        $data=Location::get("176.54.225.189"); 
        //$data=Location::get($ip);  //Site Canlıya alındığında bu satır açılacak
        //dd($data);          
        return view('front.denied',compact('data'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route("anasayfa");
    }
    public function userUpdate(UpdateUserRequest $request)
    {
      //  dd($request);
      if($request->email!=Auth::user()->email)
      {
          return redirect()->back()->withFail('E-Posta Adresini Değiştiremezsiniz');
      }
      if(Hash::check($request->password,Auth::user()->password))
      {
        return redirect()->back()->withFail('Şifreniz Eski Şifreniz ile Aynı Olamaz'); 
      }
       $user=User::whereId(Auth::user()->id)->first();
       $user->name=$request->name;
       $user->password=Hash::make($request->password);
       $user->save();
       return redirect()->back()->withSuccess('Bilgileriniz Güncellendi');
    }
  
}
