<?php

namespace App\Http\Controllers;

use App\Helpers\AmazonBucketHelper;
use App\Http\Requests\ApplicationRequest\Store as ApplicationRequest;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{
    public function store(ApplicationRequest $request)
    {
        try {
            return DB::transaction(function () use ($request) {
                if ($request->has('resume')) {
                    $path = AmazonBucketHelper::storeImageToBucketFromRequest('resumes', $request->file('resume'));
                }

                Application::create([
                    'first_name'           => $request->first_name,
                    'last_name'            => $request->last_name,
                    'email'                => $request->email,
                    'contact_number'       => $request->contact_number,
                    'file'                 => $path,
                    'available_start_date' => $request->available_start_date,
                    'referral_email'       => $request->referral,
                ]);

                return redirect()->back()->withSuccess('Submitted successfully. ✨✨✨');
            });
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->withError('Whoops, something went wrong. 🥺');
        }
    }
}
