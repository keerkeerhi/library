<?php namespace App\Http\Controllers;

use Request;
use DB;
use Hash;
use Auth;

class StaffController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $list = DB::select('select *from ac_user where type=0');
        return \Response::json($list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $staff = $request::input('staff');
        $id = $request::input('id');
        $phone = $request::input('phone');
        $headimg = $request::file('headImg');
        $email = $request::input('email');
        $res = null;
        $info = "保存成功！";
        if (isset($id)) {
            $path = 'photos/upload/';
            if ($request::hasFile('headImg') && $request::file('headImg')->isValid()) {
                $clientName = $headimg->getClientOriginalExtension();
                $clientName = time() . md5('picture') . '.' . $clientName;
                $headimg->move($path, $clientName);
                $imgurl = 'http://' . $_SERVER['HTTP_HOST'] . '/public/' . $path . $clientName;
            } else
                $imgurl = '';
            $res = DB::update('update ac_user set headimg=?,email=?,phone=? where id=?',
                [$imgurl, $email, $phone, $id]);
            $info = $imgurl;
        } else {
            $list = DB::select('select *from ac_user where loginname=? or name=?', [$staff['loginName'], $staff['name']]);
            if (count($list) > 0) {
                $res = false;
                $info = "用户名或姓名已存在！";
            } else {
                $res = DB::insert('insert into ac_user (loginname,name,headimg,email,password) values (?, ?,?,?,?)',
                    [$staff['loginName'], $staff['name'], "", "", Hash::make('123456')]);
                if (!$res)
                    $info = "保存失败！";
            }
        }
        return \Response::json(['info' => $info, flag => $res]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $list = DB::select('select *from ac_user where type=0 and id=?', [$id]);
        return \Response::json($list);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $info = $request::input('info');
        $list = DB::select('select *from ac_user where id=?', [$id]);
        $staff = $list[0];
        $res = 0;
        if (Auth::validate(['loginname' => $staff->loginname, 'password' => $info['oldPwd']])) {
            $res = DB::update('update ac_user set password=? where id=?', [Hash::make($info['newPwd']), $id]);
        }
        return $res;
    }

    /**
     * Remove the specified resource from storage.
     *   删除员工
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $res = DB::delete('delete from ac_user where id=?', [$id]);
        if ($res)
            return '1';
        else
            return '0';
    }

}
