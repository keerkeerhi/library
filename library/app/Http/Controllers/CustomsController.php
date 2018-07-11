<?php namespace App\Http\Controllers;

use Request;
use DB;

class CustomsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * @return Response
     */
    public function store(Request $request)
    {
        $custom = $request::input('custom');
        $res = null;
        $info = "保存成功！";
        $list = DB::select('select *from ac_customers where name=? and managerid=?', [$custom['name'], $custom['managerid']]);
        if (count($list) > 0) {
            $res = DB::update('update ac_customers set name=?,phone=?, address=?,numb=? where id=?',
                [$custom['name'], $custom['phone'], $custom['address'], $custom['numb'], $list[0]->id]);
        } else {
            $res = DB::insert('insert into ac_customers (name,phone,address,numb,managerid) values (?, ?,?,?,?)',
                [$custom['name'], $custom['phone'], $custom['address'], $custom['numb'], $custom['managerid']]);
        }
        if (!$res)
            $info = "保存失败！";
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
        $list = DB::select('select *from ac_customers where managerid=? and isdel=0', [$id]);
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
    public function update($id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *  删除客户信息
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $res = DB::update('update ac_customers set isdel=1 where id=?', [$id]);
        if ($res)
            return '1';
        else
            return '0';
    }

}
