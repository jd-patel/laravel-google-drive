<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
	/**
	 * List all the possible options for Google Drive Storage
	 *
	 * @return view dashboard landing page
	 */
	public function index()
	{
		return view('dashboard.index');
	}
}