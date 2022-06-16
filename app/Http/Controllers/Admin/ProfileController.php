<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.profile.index', ['user' => auth()->user()]);
    }

    public function update(ProfileRequest $request)
    {
        dd($request);
    }

}
