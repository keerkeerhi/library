<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Request;

class Nav extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $list = DB::select("select *from nav where pid=-1 order by sort");
        return \Response::json(['code' => 0, 'info' => $list]);
	}

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getCNav(Request $request)
    {
        extract($request::all());
        $list = DB::select("select *from nav where pid=? order by sort",[$id]);
        return \Response::json(['code' => 0, 'info' => $list]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getAll(){
        $list = DB::select("select *from nav order by sort");
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
        if (isset($id)){
            $res = DB::update('update nav set title=?,sort=?,isshow=?,pid=?',
                [$title, $sort, $isshow, $pid]);
            $info = $imgurl;
        }
        else{
            $res = DB::insert('insert into nav (title,sort,isshow,pid) values (?,?,?,?)',
                [$title, $sort, 1, $pid]);
        }
        return \Response::json(array('code' => 0, 'info' => 'ok'));
	}

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getChild($id)
    {
        $list = DB::select("select *from nav where pid=?",[$id]);
        return \Response::json(['code' => 0, 'info' => $list]);
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $list = DB::select('select *from nav where id=?', [$id]);
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
        $res = DB::delete('delete from nav where id=?', [$id]);
        $res2 = DB::delete('delete from nav where pid=?', [$id]);
        if ($res)
            return \Response::json(['code' => 0, 'info' => "已删除"]);
        else
            return \Response::json(['code' => 1, 'info' => "操作失败"]);
	}

}
