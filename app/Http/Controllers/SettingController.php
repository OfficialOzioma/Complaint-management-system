<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * @var
     */
    protected $setting;

    public function settings()
    {
        $settings = Setting::where('user_id', auth()->user()->id)->first();

        return view('user.setting',compact('settings'));
    }

    public function store(Request $request)
    {
        $getSetting = Setting::where('user_id', auth()->user()->id)->first();

        if($getSetting){
            $this->setting =  $getSetting->update(
                [
                'email' => $request->email,
                'dept' => $request->dept,
                'level' => $request->level
                ]
            );
        }else{

            $request->validate([
                'email' => 'required|email|unique:settings',
                'dept' => 'required|string',
                'level' => 'required',
            ]);

            $this->setting = Setting::create([
                'user_id' => auth()->user()->id,
                'email' => $request->email,
                'dept' => $request->dept,
                'level' => $request->level
            ]);
        }



        if($this->setting){
            return redirect()->route('user.setting')->with(['success' => 'Successfully, Your Settings has been saved.']);
        }

        return redirect()->back()->with(['error' => 'Something went wrong, Please try again.']);
    }
}
