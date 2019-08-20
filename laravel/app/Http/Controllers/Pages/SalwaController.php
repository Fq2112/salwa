<?php

namespace App\Http\Controllers\Pages;

use App\Models\About;
use App\Models\BusinessSectors;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class SalwaController extends Controller
{
    public function index()
    {
        $sectors = BusinessSectors::all();

        return view('pages.home', compact('sectors'));
    }

    public function presidentMessage()
    {
        $about = About::find(1);

        return view('pages.president-message', compact('about'));
    }

    public function companyHistory()
    {
        $about = About::find(1);

        return view('pages.company-history', compact('about'));
    }

    public function visionMission()
    {
        $about = About::find(1);

        return view('pages.vision-mission', compact('about'));
    }

    public function ourValues()
    {
        return view('pages.our-values');
    }

    public function organizationChart()
    {
        return view('pages.organization-chart');
    }

    public function showEPC()
    {
        $about = About::find(1);

        return view('pages.epc', compact('about'));
    }

    public function showBusinessSector($sector)
    {
        $sector = BusinessSectors::where('uri', $sector)->first();

        return view('pages.business-sectors', compact('sector'));
    }

    public function showQhseCommitment()
    {
        return view('pages.qhse-commitment');
    }

    public function showProjectExperiences()
    {
        return view('pages.project-experiences');
    }

    public function postContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'subject' => 'string|min:3',
            'message' => 'required'
        ]);
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'bodymessage' => $request->message
        );
        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to(env('MAIL_USERNAME'));
            $message->subject($data['subject']);
        });

        return back()->with('contact', 'Thank you for dropping us a line! Because every single comment or critics that you gave, will make us be a better company.');
    }
}
