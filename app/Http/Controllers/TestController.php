<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
	//
	public function index()
	{
		$values = Test::all();
		// dd($values);


		// $collection = collect([1, 2, 3, 4, 5, 6, 7]);

		// $chunks = $collection->chunk(4);

		// $chunks->toArray();
		// dd($chunks);


		$teststable = DB::table('tests')
		->select('id')
		->get();
		dd($teststable);

		return view('test', compact('values'));

	}
}
