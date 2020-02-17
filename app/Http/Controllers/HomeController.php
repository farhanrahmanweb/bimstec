<?php

namespace App\Http\Controllers;

use App\Category;
use App\Director;
use App\Division;
use App\Document;
use App\Event;
use App\Gallery;
use App\Photo;
use App\Secretary;
use App\Slider;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['sliders'] = Slider::where('is_publish', 1)->latest()->get();
        $data['upcomingEvents'] = Event::whereDate('event_start_date', '>=', date('Y-m-d'))->where('is_publish', 1)->get();
        return view('frontend.home', $data);
    }

    public function photos()
    {
        $gallerys = Gallery::latest()->paginate(12);
        return view('frontend.photos', compact('gallerys'));
    }





    public function photosMore($id)
    {
        $photos = Photo::where('gallery_id', $id)->where("type", "=", "gallery")->get();
        return view('frontend.photodetails', compact('photos'));
    }

    public function secretaryGeneral()
    {
        $statements = Secretary::where('type', '=', 'statement')->where('is_publish', 1)->latest()->get();
        $secretaryPages = Secretary::where('type', '=', 'page')->where('is_publish', 1)->latest()->get();
        return view('frontend.secretary-general', compact('statements', 'secretaryPages'));
    }

    public function secretaryPage($id)
    {
        $singlepage = Secretary::where('type', '=', 'page')
            ->where('is_publish', 1)
            ->where('id', $id)->first();
        return view('frontend.single-secretary-page', compact('singlepage'));
    }

    public function documents()
    {
        $data['documents'] = Document::where('is_publish', 1)->latest()->paginate(20);
        $data['years'] = Document::select('year')->groupBy('year')->get();
        $data['categorys'] = Category::all();
        return view('frontend.documents', $data);
    }

    public function searchDocuments(Request $request)
    {
        $year = $request->year;
        $category = $request->category; // 'id' or 'name'
        $data['years'] = Document::select('year')->groupBy('year')->get();
        $data['categorys'] = Category::all();
        $data['documents'] = Document::where('year', $year)
            ->orWhere('category_id', $category)->paginate(10);
        return view('frontend.documents', $data);
    }

    public function about()
    {
        return view('frontend.about-bimstec');
    }

    public function bimstecGuidingPrinciples()
    {
        return view('frontend.bimstec-guiding-principles');
    }

    public function bimstecChairmanship()
    {
        return view('frontend.bimstec-chairmanship');
    }

    public function bimstecSecretariat()
    {
        return view('frontend.bimstec-secretariat');
    }

    public function directorsDivisions()
    {
        $directors = Director::with('division')->get();
        return view('frontend.directors-divisions', compact('directors'));
    }

    public function bimstecOrganogram()
    {
        return view('frontend.bimstec-organogram');
    }

    public function pastSecretaryGeneral()
    {
        return view('frontend.past-secretary-general');
    }

    public function bimstecMechanism()
    {
        return view('frontend.bimstec-mechanism');
    }

    public function bimstecCentres()
    {
        return view('frontend.bimstec-centres');
    }

    public function tradeInvestment()
    {
        return view('frontend.trade-investment');
    }

    public function transportCommunication()
    {
        return view('frontend.transport-communication');
    }

    public function energy()
    {
        return view('frontend.energy');
    }

    public function tourism()
    {
        return view('frontend.tourism');
    }

    public function technology()
    {
        return view('frontend.technology');
    }

    public function fisheries()
    {
        return view('frontend.fisheries');
    }

    public function agriculture()
    {
        return view('frontend.agriculture');
    }

    public function publicHealth()
    {
        return view('frontend.public-health');
    }

    public function povertyAlleviation()
    {
        return view('frontend.poverty-alleviation');
    }

    public function counterTerrorismTransnationalCrime()
    {
        return view('frontend.counter-terrorism-transnational-crime');
    }

    public function environmentDisasterManagement()
    {
        return view('frontend.environment-disaster-management');
    }

    public function peopleToPeopleContact()
    {
        return view('frontend.people-to-people-contact');
    }

    public function culturalCooperation()
    {
        return view('frontend.cultural-cooperation');
    }

    public function climateChange()
    {
        return view('frontend.climate-change');
    }

    public function videos()
    {
        $videos = Video::where('is_publish', 1)->latest()->get();
        return view('frontend.videos', compact('videos'));
    }
}
