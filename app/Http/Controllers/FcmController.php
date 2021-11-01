<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Kutia\Larafirebase\Facades\Larafirebase;
use App\Notifications\SendPushNotification;

class FcmController extends Controller
{

    public function index(){
        return view('send');
        $title =1;
        $message =1;
        $fcmTokens ='eJVocSIKid7I8ZmedvggMN:APA91bHeHYVHoRIPHJbgzVbUWRoz9QWj-iVcM3QG5ExFbH-31738mvQdZympT_ZSn_JBSHQIs4SBQ5MOsgcwdUmeqq58XLi8FGs79MZ2UEssWVch-QvN5DTDyoRnI57tEJdRxM2fWCIz';
        Notification::send(null,new SendPushNotification($title,$message,$fcmTokens));
    }

    public function updateToken(Request $request){
        try{
            $user = User::first();
            $user->update(['fcm_token'=>$request->token]);
            return response()->json([
                'success'=>true
            ]);
        }catch(\Exception $e){
            report($e);
            return response()->json([
                'success'=>false
            ],500);
        }
    }

    public function notification(Request $request){
        $request->validate([
            'title'=>'required',
            'message'=>'required'
        ]);

        try{
            $fcmTokens = User::whereNotNull('fcm_token')->pluck('fcm_token')->toArray();
            //Notification::send(null,new SendPushNotification($request->title,$request->message,$fcmTokens));

            ///* or */
            $user = User::first();

            $user->notify(new SendPushNotification($request->title,$request->message,$fcmTokens));

            /* or */

            Larafirebase::withTitle($request->title)
                ->withBody($request->message)
                ->sendMessage($fcmTokens);

            return redirect()->back()->with('success','Notification Sent Successfully!!');

        }catch(\Exception $e){
            report($e);
            return redirect()->back()->with('error','Something goes wrong while sending notification.');
        }
    }

}
