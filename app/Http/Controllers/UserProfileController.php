<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Jabatan;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $userprofile = User::with('user', 'jabatan')->paginate();
        // return view('users.userprofile', compact('userprofile'));
        $user = User::where('id', Auth::user()->id)->first();

    	return view('users.userprofile', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $userprofile=new User();
        // $jab=Jabatan::all();
        // $userprofile->name=$request->name;
        // $userprofile->email=$request->email;
        // $userprofile->password=Hash::make($request->password);
        // $userprofile->alamat=$request->alamat;
        // $userprofile->kontak=$request->kontak;
        // $userprofile->id_jabatan=$request->id_jabatan;
        // $userprofile->save();
        // return redirect('/userprofile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $userprofile = User::with('jabatan')->find($id);
        // $jab = Jabatan::all();

        // return view ('users.edituserprofile', compact('userprofile', 'jab'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $userprofile = User::with('jabatan')->find($id);
        // $userprofile->name=$request->name;
        // $userprofile->email=$request->email;
        // $userprofile->password=Hash::make($request->password);
        // $userprofile->kontak=$request->kontak;
        // $userprofile->alamat=$request->alamat;
        // $userprofile->id_jabatan=$request->id_jabatan;
        // $userprofile->save();
        // return redirect('/userprofile');

    	// $user = User::where('id', Auth::user()->id)->first();
    	// $user->name = $request->name;
    	// $user->email = $request->email;
        // $user->password=Hash::make($request->password);
    	// $user->alamat = $request->alamat;
    	// $user->kontak=$request->kontak;
        // $user->id_jabatan=$request->id_jabatan;
    	
    	// $user->update();
    	// return redirect('userprofile');

        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
