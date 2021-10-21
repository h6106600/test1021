<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use App\Services\TestService;

class HomeController extends Controller
{
    private $testService;

    public function __construct(TestService $testService)
    {
        $this->testService = $testService;
    }

    public function index($id)
    {
        $data = [
            'id' => $id,
            'test' => 'test123'
        ];
        return view('test', ['aaa' => 'aaa123', 'data' => $data]);
    }

    public function show($id)
    {
        //全部資料撈出
        //$show_all = Test::get(); 

        //一筆資料撈出
        $show = Test::findOrFail($id);
        return $show;
    }

    public function insert()
    {
        $test = new Test();
        $test->username = 'luke';
        $test->password = '123456';
        $test->description = 'sdifhnosidfosndfoisdfosdfosdf';
        $test->save();
        return 'insert';
    }

    public function update()
    {
        $test = Test::findOrFail(1);
        $test->password = '00000000000000000';
        $test->save();
        $test->update();
        return 'update';
    }

    public function delete()
    {
        $test = Test::findOrFail(1);
        $test->delete();
        return 'delete';
    }

    public function test001(Request $request)
    {
        //set session
        session(['key' => 'value']);
        $request->session()->put('key', 'xxxx123123123');

        //set cookie
        setcookie("name", "runoob", time()+3600);

        return view('test001');
    }

    public function test002(Request $request)
    {
        //get session
        $value = session('key');

        //get cookie
        $value2 = $_COOKIE['name'];

        //dd(array('a'=>'123123','b'=>'456456'));
        return view('test002',['data' => $value, 'data2' => $value2]);
    }

    public function three()
    {
        return response()->json([
            'status' => 'success',
            'data' => $this->testService->get()
        ]);
    }
}
