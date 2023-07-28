<?php

namespace App\Http\Controllers;

use App\Mail\SendContactMail;
use App\Models\Banner;
use App\Models\Enquiry;
use App\Models\Faq;
use App\Models\HomepageContent;
use App\Models\Industry;
use App\Models\IndustryLogoHomepage;
use App\Models\LineCard;
use App\Models\Newsletter;
use App\Models\OtherPageBanner;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    public function home()
    {
        $data = HomepageContent::all();
        $about = $data->find(1);
        $why = $data->find(2);
        $service = $data->find(3);
        $cta = $data->find(4);
        $port = $data->find(5);
        $banners = Banner::whereStatus(1)->get();
        $services = Service::whereStatus(1)->whereType('home')->get();
        $faqs = Faq::all();
        $brands = IndustryLogoHomepage::all();
        $industries = Industry::whereStatus(1)->get();
        return view('frontend.home', compact('about', 'why', 'service', 'cta', 'port', 'banners', 'services', 'industries', 'faqs', 'brands'));
    }
    public function aboutUs()
    {
        $data = OtherPageBanner::find(2);
        $services = Service::whereStatus(1)->whereType('about')->get();
        $services_bottom = Service::whereStatus(1)->whereType('about_bottom')->get();
        $services_middle = Service::whereStatus(1)->whereType('about_middle')->get();
        $title = HomepageContent::find(1);

        return view('frontend.about', compact('data', 'services', 'services_bottom', 'services_middle', 'title'));
    }

    public function lineCard()
    {
        $data = OtherPageBanner::find(1);
        $lines = LineCard::all();
        return view('frontend.linecard', compact('data', 'lines'));
    }

    public function referenceDesign()
    {
        $data = OtherPageBanner::find(3);
        return view('frontend.referencedesign', compact('data'));
    }

    public function news()
    {
        return view('frontend.news');
    }

    public function contact()
    {
        $data = OtherPageBanner::find(4);
        return view('frontend.contact', compact('data'));
    }

    public function submitEnquiry(Request $request)
    {

        $data = $request->all();
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $location = 'uploads/boom/';
            $data['file'] = uploadFile($location, $file);
            $data['message'] = '';
        }
        Enquiry::create($data);
        Mail::send(new SendContactMail($data));
        alert()->success('Congrats', 'Enquiry has been created');
        return redirect()->back();
    }

    public function lineDetail($id)
    {
        $data = LineCard::with('feature')->findOrFail($id);
        return view('frontend/linedetail', compact('data'));
    }

    public function newsletter(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters,email',
        ]);

        Newsletter::create(['email' => $request->email]);
        alert()->success('Congrats', 'Newsletter has been subscribed successfully');
        return redirect()->back();
    }
}
