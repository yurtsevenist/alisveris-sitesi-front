<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mesaj;

class MesajController extends Controller
{
    public function mesajKaydet(Request $request)
    {
        try{
            // $mesaj=new Mesaj;
            // $mesaj->name=$request->name;
            // $mesaj->email=$request->email;
            // $mesaj->subject=$request->subject;
            // $mesaj->message=$request->message;
            // $mesaj->save();
            Mesaj::create($request->except('_token'));
            return redirect()->back()->withSuccess("Mesajınız alınmıştır, Teşekkür ederiz");
        }
        catch(\Exception $e)
        {
            return redirect()->back()->withFail("Mesaj Gönderilirken bir hata oluştu!!");
        }
       
    }
}
