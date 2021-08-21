<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
Use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $data = auth()->user()->profile()->get();

        return view('Profile')->with(['data'=>$data]);
    }

    public function CreateView($id)
    {
        return view("partials\Create");
    }

    public function create(Request $request, $id)
    {

        $image= $request->image;
            $imageName = time(). '.' .$image->getClientOriginalExtension();
            $request->image->move('avatar', $imageName);

            $request->avatar=$imageName;
            $request->coverImage=$imageName;


        $request->validate([
               'bio'=>'max:30',
                'avatar'=>'image',
                'coverImage'=>'image'

            ]);

        auth()->user()->profile()->create($request->all());
        return redirect()->back();








        //     $data = new Profile;

    //     $image= $request->image;
    //     $imageName = time(). '.' .$image->getClientOriginalExtension();
    //     $request->image->move('avatar', $imageName);

    //     $data->avatar=$imageName;
    //     $data->coverImage=$imageName;

    // // $data = $request->validate([
    // //     'bio' => 'max:60',
    // //     'avatar'=>'image',
    // //     'coverImage'=>'image'
    // // ]);

    // $data->bio=$request->bio;
    // $data->save();
    // return redirect()->back();

    // }
    }
}
