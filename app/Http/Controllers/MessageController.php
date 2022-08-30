<?php

namespace App\Http\Controllers;
use App\Models\Message;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MessageController extends Controller
{
    public function download($id) { 
         $path = 'Messages/'.Message::where("id", $id)->value("file"); 
          return Storage::download($path);
          
    }

    public function downloadfile($file)
    {
      return response()->download(storage_path("app/Messages/{$file}"));
         
    }
}
