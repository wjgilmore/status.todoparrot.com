<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatusController extends Controller {

	public function index()
	{
		return response()->json(['status' => 'Polly wants a cracker!']);
	}

    public function lists()
    {

        $result = \DB::select('select count(id) as `count` from todolists');

        return response()->json(['count' => $result[0]->count]);
    }

}
