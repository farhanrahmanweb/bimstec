<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Event;
use App\Document;
use App\Gallery;
use App\Video;

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
            'videos' => $videoCount
        ];

        return view('backend.admin.dashboard')->with($data);
    }
}
