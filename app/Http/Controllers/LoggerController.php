<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logger;

class LoggerController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		//разрешаем админу
		$request->user()->authorizeRoles(['admin']);
		$loggers = Logger::all();

		return view('admin.logger',compact('loggers'));
	}
}
