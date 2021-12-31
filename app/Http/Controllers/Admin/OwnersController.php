<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner;  // Eloquent エロクアント
use Illuminate\Support\Facades\DB; // QueryBUilder クエリビルダ
use Carbon\Carbon;

class OwnersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        // $data_now = Carbon::now();
        // $data_parse = Carbon::parse(now());
        // echo $data_now->year;
        // echo $data_parse;
        // $e_all = Owner::all(); 
        // $q_get = DB::table('owners')-> select('name')->get();  // テーブル指定し、selectで表示するカラムを指定し、get()で値を取得する
        // $q_first = DB::table('owners')-> select('name')->first();

        // $c_test = collect([
        //     'name' => 'テスト'
        // ]);

        // dd($e_all, $q_get, $q_first, $c_test);

        $data_now = Carbon::now();
        $data_parse = Carbon::parse(now());
        echo $data_now->year;
        echo $data_parse;
        $e_all = Owner::all(); 
        $q_get = DB::table('owners')-> select('name', 'created_at')->get();  // テーブル指定し、selectで表示するカラムを指定し、get()で値を取得する

        return view('admin.owners.index', compact('e_all','q_get'));
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
        //
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
