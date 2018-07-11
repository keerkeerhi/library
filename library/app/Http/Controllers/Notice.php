<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Request;

class Notice extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $list = DB::select("select *from notice");
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
        $headimg = $request::file('noticeImg');
        if ($request::hasFile('noticeImg') && $request::file('noticeImg')->isValid()) {
            $clientName = $headimg->getClientOriginalExtension();
            $clientName = time() . md5('picture') . '.' . $clientName;
            $headimg->move($path, $clientName);
            $img = 'http://' . $_SERVER['HTTP_HOST'] . '/public/' . $path . $clientName;
        } else
            $img = '';

        if (isset($id)){
            $res = DB::update('update notice set content=?,img=?,order=?,isshow=?',
                [$remark, $img, $order, $isshow]);
        }
        else{
            $res = DB::insert('insert into notice (content,img,order,isshow) values (?,?,?,?)',
                [$remark, $img, $order, 1]);
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
        $list = DB::select('select *from notice where id=?', [$id]);
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
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $res = DB::delete('delete from notice where id=?', [$id]);
        if ($res)
            return \Response::json(['code' => 0, 'info' => "已删除"]);
        else
            return \Response::json(['code' => 1, 'info' => "操作失败"]);
	}

}
