<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

use Socialite;
use Auth;
use Session;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('users')
            ->join('levels', 'levels.id', '=', 'users.id_level')
            ->where('users.id_level', 1 || 2)
            ->select('users.*', 'levels.role')->get();
        return view('admin.karyawan')->with('data', $data);
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
        $input = new User;
        $input->name = $req->input('name');
        $input->email = $req->input('email');
        $input->photo = $req->input('photo');
        $input->password = Hash::make($req->input('password'));
        $input->id_level = $req->input('level');

        $input->save();
        
        return back();
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function socialLogin($social){
      return Socialite::driver($social)->redirect();
    }

    public function handleProviderCallback($social){
      $userSocial = Socialite::driver($social)->user();
      $user = User::where(['email' => $userSocial->getEmail()])->first();

      if($user){
        return redirect('karyawan');
        Session::flash('failed', 'Data Berhasil Dimasukkan');
      }else{
        return view('admin.karyawan', ['name' => $userSocial->getName(), 'email' => $userSocial->getEmail(), 'ava' => $userSocial->getAvatar()]);
        Session::flash('success', 'Email Ditemukan, Silahkan klik "Tambah"');
      }
    }
}
