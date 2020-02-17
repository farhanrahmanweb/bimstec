<?php

namespace App\Http\Controllers\Editor;

use App\Document;
use App\Event;
use App\Gallery;
use App\Http\Controllers\Controller;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $eventCount = Event::count();
        $documentCount = Document::count();
        $galleryCount = Gallery::count();
        $videoCount = Video::count();


        $data = [
            'events'  => $eventCount,
            'documents'   => $documentCount,
            'galleries' => $galleryCount,
            'videos' => $videoCount,
        ];

        return view('backend.editor.dashboard')->with($data);
    }
}
