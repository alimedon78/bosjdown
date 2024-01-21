<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Models\Message;
use App\Notifications\PetitionReceived;
use App\Notifications\SendPetition;
use App\Notifications\Contactmessage;
use App\Mail\notifypetition;

 
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;

class SubscribeController extends Controller
{
    public function subscribe() {
 
        $attributes = request()->validate([
            'email'=> 'required|max:255|unique:subscribers',
             
        ]);

        Subscriber::Create($attributes);
 
        return view('contact-us')->with('title', 'Successful')
                                ->with('details', 'You have sucessfully subscribed to our newsletter.');
    }

    public function unsubscribe(Request $request) {
 
        $subscriber = Subscriber::where('email', '=', $request->email)->firstOrFail();
        $subscriber->status = false;
        $subscriber->save();
        
        return view('contact-us')->with('title', 'Successful')
                                ->with('details', 'You have sucessfully subscribed to our newsletter.');
    }

    public function messages()
{
    return [
        'email.required' => 'A valid email is required',
        'email.unique:subscribers' => 'A subscription with this email already exist',
    ];
}

            public function store(Request $request) {
 
            $attributes = request()->validate([
                'name'=> 'required|max:255',
                'email'=> 'required|max:255',
                'phone'=> 'nullable',
                'type'=> 'required|max:255',
                'message'=> 'required|min:3',
                
            ]);

            if(isset($request->attachment)){
                 
                
                // $request->validate([
                //     'draft'=> ['required','max:200'] 
                // ]);

                Validator::validate($request->all(), 
                                            [
                             'attachment' => [
                        File::types(['pdf', 'doc', 'docx', 'jpg', 'png'])
                            
                            ->max(12 * 1024),
                             ],
                ]);

                // Get filename with the extension
                $filenameWithExt = $request->file('attachment')->getClientOriginalName();
                //Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('attachment')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('attachment')->storeAs('public/Messages',$fileNameToStore);
    
            }
            else{
                $fileNameToStore = 'no-upload';
            }
           // $fileNameToStore = 'no-upload';
            //$merged = $attributes->put('file', $fileNameToStore);

           $message = Message::UpdateOrCreate($attributes, ['file' => $fileNameToStore]);
           $service = ['mohammed.ali@courts.gov.ng',  'mohammedaling@gmail.com'];
            
             if($request->type == 'Petition') {
            
           // Mail::to($service)->send(new notifypetition($message));
           //petition.hcourt@courts.gov.ng 'kashim.zannah@courts.gov.ng',
            Notification::route('mail', $service)->notify(New PetitionReceived($message));
            Notification::route('mail', ['mohammed.ali@courts.gov.ng',])->notify(New SendPetition($message));

          }
          else 
          {
           Notification::route('mail', ['mohammed.ali@courts.gov.ng',])->notify(New Contactmessage($message));
          }
            return view('contact-us')->with('title', 'Thank you')
                        ->with('details', 'Your message have been sent successfully, we will reply you if necessary.');
            }


}
