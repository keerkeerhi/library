<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Request;
use Log;

class Banner extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $list = DB::select("select *from banner order by sort");
        return \Response::json(['code' => 0, 'info' => $list]);
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
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        extract($request::all());
        $path = 'photos/upload/';
        $headimg = $request::file('image');
        if ($request::hasFile('image') && $request::file('image')->isValid()) {
            $clientName = $headimg->getClientOriginalExtension();
            $clientName = time() . md5('picture') . '.' . $clientName;
            $headimg->move($path, $clientName);
            $url = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $path . $clientName;
        } else
            $url = '';

        Log::info(json_encode("=======>>" . $url));
        if (isset($id)){
            $res = DB::update('update banner set remark=?,url=?,sort=?,isshow=?',
                [$remark, $url, $sort, $isshow]);
        }
        else{
            $res = DB::insert('insert into banner (remark,url,sort,isshow) values (?,?,?,?)',
                [$remark, $url, $sort, 1]);
        }
        return \Response::json(array('code' => 0, 'info' => 'ok'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $list = DB::select('select *from banner where id=?', [$id]);
        return \Response::json(['code' => 0, 'info' => $list]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function hide(Request $request)
    {
        extract($request::all());
        $res = DB::update('update banner set isshow=? where id=?', [$isshow,$id]);
        Log::info(json_encode("===hide====>>" . $res));
        if ($res)
            return \Response::json(['code' => 0, 'info' => "已删除"]);
        else
            return \Response::json(['code' => 1, 'info' => "操作失败"]);
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $res = DB::delete('delete from banner where id=?', [$id]);
        if ($res)
            return \Response::json(['code' => 0, 'info' => "已删除"]);
        else
            return \Response::json(['code' => 1, 'info' => "操作失败"]);
	}

}
