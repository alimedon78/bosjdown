<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\Stream;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index()
    {
        $lates = Event::where('status', 1)->latest()->first();
        if(empty($lates)){
           $events = null;
        }
        else
        {
        $events = Event::whereNot('id', $lates->id)->where('status', 1)->limit(2)->orderBy('updated_at', 'DESC')->get();
        }
       return view('index', [
           'latest'=> $lates,
           'events'=>  $events  
       ]);
    } 


    public function shownews($slug)
    {
        $latest = Event::where('slug', $slug)->where('status', 1)->first();
        return view('news-and-events', ['latest' => $latest, 'events'=> Event::whereNot('slug', $slug)->where('status', 1)->limit(10)->orderBy('updated_at', 'DESC')->get()]);
    }

    public function searchnews()
    {
        $snf = '';
        $search = Event::where('status', 1)->latest();
       if(request('search')) {
         $search ->where('title', 'like', '%'. request('search') . '%')
                    ->orWhere('content', 'like', '%'. request('search') . '%');
       }
    //    elseif($search = null) {
    //          $search = Event::latest();
    //          $snf = 'Nothing related found!';
    //    }
       //dd($search);
        return view('news-and-events', ['search' => $search->get(), 
                                        'events'=> Event::where('status', 1)->orderBy('updated_at', 'DESC')->limit(10)->get()
                                        ])->with('snf', $snf);
    }
    
    
    public function show()
    {
        return view('backend.create-news');
    }


    public function store(Request $request) {
 
        $attributes = request()->validate([
            'title'=> 'required|max:255',
            'image'=> 'required|image',
            'content'=> 'required|min:50',
            'date'=> 'required',
            'status'=> 'required',
            
            
        ]);
        
        $slug = str_replace(' ', '-', strtolower($request->input('title'))); 
        
  
            Validator::validate($request->all(), 
                                        [
                         'image' => [
                    File::types(['jpg', 'png'])
                        
                        ->max(12 * 1024),
                         ],
            ]);

            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/news',$fileNameToStore);
            
            
            $news = new Event;
            $news->user_id = Auth::user()->id;
            $news->title = $request->input('title');
            $news->slug = $slug;
            $news->content =$request->input('content');
            $news->image = $fileNameToStore;
            $news->date =$request->input('date');
            $news->status =$request->input('status');
             
            $news->save();


        
       // $fileNameToStore = 'no-upload';
        //$merged = $attributes->put('file', $fileNameToStore);

       //Message::UpdateOrCreate($attributes, ['file' => $fileNameToStore]);

       return redirect()->route('newsevents')->with('Success', 'New Event created successfully.');
        }

        public function edit(Event $event)
        {   
            return view('backend.edit-news', ['news' => $event]);
        }
    

        public function update(Event $event, Request $request)
        {
            $attributes = request()->validate([
                'user_id'=> 'nullable',
                'title'=> 'required|max:255',
                'image'=> 'image',
                'content'=> 'required|min:50',
                'date'=> 'required',
                'status'=> 'required',
                
                
            ]);
            
            $slug = str_replace(' ', '-', strtolower($attributes['title'])); 
            
                if(isset($attributes['image'])) {

                Validator::validate($request->all(), 
                                            [
                             'image' => [
                        File::types(['jpg', 'png'])
                            
                            ->max(12 * 1024),
                             ],
                ]);
    
                // Get filename with the extension
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                //Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('image')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('image')->storeAs('public/news',$fileNameToStore);
                
                    
            }
        
            else{
                $fileNameToStore = $event->image;
                 }
                
                $attributes ['user_id'] = Auth::user()->id;
                $attributes ['slug'] = $slug;
                $attributes ['image'] = $fileNameToStore;
                 
                 
                $event->update($attributes);
            
                return redirect()->route('newsevents')->with('success', 'Updated Successfully!');
        }

        public function destroy(Event $event)
        {
            $event->delete();
            return back()->with('success', 'Deleted Successfully!');

        }


        public function load()
        {
            $news =Stream::find(1);
            return view('backend.watchevents', ['news' => $news]);
        }

        public function updateStream(Stream $stream, Request $request)
        {
            $attributes = request()->validate([
                'user_id'=> 'nullable',
                'title'=> 'required',
                'description'=> 'nullable',
                'link'=> 'required',
                'date'=> 'nullable'
                 
            ]);
             
                $attributes ['user_id'] = Auth::user()->id;
                
                $news = Stream::updateOrCreate(['id' => 1], $attributes);
            
                return redirect()->route('watchevents')->with('success', 'Updated Successfully!');
        }
    
}
