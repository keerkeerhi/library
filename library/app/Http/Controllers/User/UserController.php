<?php

namespace App\Http\Controllers\User;

use Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Hash;

use DB;
use Log;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = DB::select("select *from users");
        return \Response::json($list);
    }

    /**
     * @return mixed 验证登录
     */
    public function checkAuth()
    {
        $arr = null;
        if (Auth::check())
            $arr = ['code' => 0, 'info' => Auth::user()];
        else
            $arr = ['code' => 1, 'info' => null];
        return \Response::json($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     *
     *   登录
     */
    public function login(Request $request){
        extract($request::all());
//        $pwd = $request::input('password');
        $user = null;
        // use Hash
        // Hash::make($pwd);
        if (Auth::attempt(['email' => $email, 'password' => $password]))
            $user = Auth::user();
        if (is_null($user))
            return \Response::json(array('code' => 1, 'info' => "用户名密码有误！"));
        else
            return \Response::json(array('code' => 0, 'info' => $user));

    }

    /**
     *  登出
     */
    public function logout(){
        Auth::logout();
        return \Response::json(['code'=>0]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        extract($request::all());
        $res = DB::insert('insert into users (name,email,password,user_tp) values (?, ?,?,?)',
            [$name, $email, Hash::make('123456'), 10]);

        return \Response::json(array('code' => 0, 'info' => 'ok'));
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
}
