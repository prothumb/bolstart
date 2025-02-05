<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\HomePageContent;
use App\Models\InvestorsPageContent;
use App\Models\StartupsPageContent;
use App\Models\AboutPageContent;
use App\Models\ContactPageContent;
use App\Models\HeaderAndFooterContent;
use App\Models\FAQ;
use App\Models\Submission;


use Log;

use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    /** 
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     public function submissionManager()
    {
        

        $submissions = Submission::paginate(10);
        
    //      // Debug data
    // dd($submissions);

        return view('backend.submission-manager', compact('submissions'));
    }

    public function index()
    {
        return view('backend.index');
    }

    public function contentManager()
    {

        $homePageContent = HomePageContent::all()->pluck('content_value', 'content_name')->toArray();

        $investorsPageContent = InvestorsPageContent::all()->pluck('content_value', 'content_name')->toArray();
        $startupsPageContent = StartupsPageContent::all()->pluck('content_value', 'content_name')->toArray();
        $aboutPageContent = AboutPageContent::all()->pluck('content_value', 'content_name')->toArray();
        $contactPageContent = ContactPageContent::all()->pluck('content_value', 'content_name')->toArray();
        $headerAndFooterContent = HeaderAndFooterContent::all()->pluck('content_value', 'content_name')->toArray();

        return view('backend.content-manager', compact('homePageContent', 'investorsPageContent', 'startupsPageContent',
                                           'aboutPageContent', 'contactPageContent', 'headerAndFooterContent' ));
    }

    public function faqManager()
    {

        $faqs = FAQ::latest()->get();        

        return view('backend.faq-manager', compact('faqs' ));
    }


    public function submitFAQ(Request $request){  
        
        $data = $request->all();

        // Convert "on" or "off" to boolean values
        $showOnHomePage = isset($data['showOnHomePage']) && $data['showOnHomePage'] === 'on' ? true : false;
        $showOnInvestorsPage = isset($data['showOnInvestorsPage']) && $data['showOnInvestorsPage'] === 'on' ? true : false;
        $showOnStartupsPage = isset($data['showOnStartupsPage']) && $data['showOnStartupsPage'] === 'on' ? true : false;
        $showOnFAQPage = isset($data['showOnFAQPage']) && $data['showOnFAQPage'] === 'on' ? true : false;


        // Create a new FAQ record using the request data
        $faq = new FAQ();
        $faq->question = $data['question'];
        $faq->answer = $data['answer'];
        $faq->show_on_home_page = $showOnHomePage;
        $faq->show_on_investors_page = $showOnInvestorsPage;
        $faq->show_on_startups_page = $showOnStartupsPage;
        $faq->show_on_faq_page = $showOnFAQPage;
        $faq->save();

        return redirect()->back()->with('success', 'FAQ added successfully');

    }


    public function updateFAQ(Request $request){    

        $data = $request->all();

        // Convert "on" or "off" to boolean values
        $showOnHomePage = isset($data['showOnHomePage']) && $data['showOnHomePage'] === 'on' ? true : false;
        $showOnInvestorsPage = isset($data['showOnInvestorsPage']) && $data['showOnInvestorsPage'] === 'on' ? true : false;
        $showOnStartupsPage = isset($data['showOnStartupsPage']) && $data['showOnStartupsPage'] === 'on' ? true : false;
        $showOnFAQPage = isset($data['showOnFAQPage']) && $data['showOnFAQPage'] === 'on' ? true : false;
    
        // Find the FAQ record by ID
        $faq = FAQ::find($data['faq_id']);
    
        // Update the FAQ record with the new data
        $faq->question = $data['question'];
        $faq->answer = $data['answer'];
        $faq->show_on_home_page = $showOnHomePage;
        $faq->show_on_investors_page = $showOnInvestorsPage;
        $faq->show_on_startups_page = $showOnStartupsPage;
        $faq->show_on_faq_page = $showOnFAQPage;
        $faq->save();
    
        return redirect()->back()->with('success', 'FAQ updated successfully');


    }


    public function deleteFAQ(Request $request){    

        $faqId = $request->input('faq_id');
    
        // Find the FAQ record by ID and delete it
        $faq = FAQ::find($faqId);
        $faq->delete();
    
        return redirect()->back()->with('success', 'FAQ deleted successfully');

    }
    
    public function homePageContentSubmit(Request $request){    

        foreach ($request->except('_token') as $field => $value) {
            
            // Find a record with the specified content_name
            $existingRecord = HomePageContent::where('content_name', $field)->first();

            if ($existingRecord) {
                
                // Update the content_value in the existing record
                $existingRecord->update(['content_value' => $value]);
                
            } else {
                
               
            }            
        }        

        // Return a response or redirect back with a success message
        return redirect()->back()->with('success', 'Content saved successfully!');

    }


    public function investorsPageContentSubmit(Request $request)
    {       

        foreach ($request->except('_token') as $field => $value) {
            
            // Find a record with the specified content_name
            $existingRecord = InvestorsPageContent::where('content_name', $field)->first();

            if ($existingRecord) {
                
                // Update the content_value in the existing record
                $existingRecord->update(['content_value' => $value]);
                
            } else {
                
               
            }            
        }        

        // Return a response or redirect back with a success message
        return redirect()->back()->with('success', 'Content saved successfully!');
        
    }



    public function startupsPageContentSubmit(Request $request)
    {       

        foreach ($request->except('_token') as $field => $value) {
            
            // Find a record with the specified content_name
            $existingRecord = StartupsPageContent::where('content_name', $field)->first();

            if ($existingRecord) {
                
                // Update the content_value in the existing record
                $existingRecord->update(['content_value' => $value]);
                
            } else {
                
               
            }            
        }        

        // Return a response or redirect back with a success message
        return redirect()->back()->with('success', 'Content saved successfully!');
        
    }



    public function aboutPageContentSubmit(Request $request)
    {       

        foreach ($request->except('_token') as $field => $value) {
            
            // Find a record with the specified content_name
            $existingRecord = AboutPageContent::where('content_name', $field)->first();

            if ($existingRecord) {
                
                // Update the content_value in the existing record
                $existingRecord->update(['content_value' => $value]);
                
            } else {
                
               
            }            
        }        

        // Return a response or redirect back with a success message
        return redirect()->back()->with('success', 'Content saved successfully!');
        
    }


    public function contactPageContentSubmit(Request $request)
    {       

        foreach ($request->except('_token') as $field => $value) {
            
            // Find a record with the specified content_name
            $existingRecord = ContactPageContent::where('content_name', $field)->first();

            if ($existingRecord) {
                
                // Update the content_value in the existing record
                $existingRecord->update(['content_value' => $value]);
                
            } else {
                
               
            }            
        }        

        // Return a response or redirect back with a success message
        return redirect()->back()->with('success', 'Content saved successfully!');
        
    }


    public function headerAndFooterContentSubmit(Request $request)
    {       

        foreach ($request->except('_token') as $field => $value) {
            
            // Find a record with the specified content_name
            $existingRecord = HeaderAndFooterContent::where('content_name', $field)->first();

            if ($existingRecord) {
                
                // Update the content_value in the existing record
                $existingRecord->update(['content_value' => $value]);
                
            } else {
                
               
            }            
        }        

        // Return a response or redirect back with a success message
        return redirect()->back()->with('success', 'Content saved successfully!');
        
    }
   

}
