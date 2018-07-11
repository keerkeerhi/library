<?php namespace App\Http\Controllers;

use Auth;
use Request;
use DB;

class WelcomeController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return 'aaaaa';
    }

    /**
     * @return mixed 验证登录
     */
    public function checkAuth()
    {
//        Log::info('basdflasdfasdf');
        $arr = null;
        if (Auth::check())
            $arr = ['ispassed' => true, 'info' => Auth::user()];
        else
            $arr = ['ispassed' => false];
        return \Response::json($arr);
    }

    /**
     * @return mixed 登录
     */
    public function login(Request $request)
    {
        $loginname = $request::input('username');
        $pwd = $request::input('password');
        $user = null;
        // use Hash
        // Hash::make($pwd);
        if (Auth::attempt(['loginname' => $loginname, 'password' => $pwd]))
            $user = Auth::user();

        if (!is_null($user)) {
            return \Response::json(array('flag' => true, 'info' => $user));
        } else
            return \Response::json(array('flag' => false, 'info' => "用户名密码有误！"));
    }

}
