<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\user;
use App\account_type;
use App\account;

class AccountTypeController extends Controller
{
    public function index(){
        $ids = user::find(Auth::id())->accounts()->pluck('id')->toArray();
        $types = account_type::where('active',1)
            ->withCount('accounts')
            ->paginate(10);
        return  response()->json($types);
    }
    public function create(){}
    public function store(Request $request){}
    public function show($id){}
    public function edit($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}
}
