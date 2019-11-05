<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashBoardController extends Controller
{
	public $view_page_url;
	public function __construct()
	{
		$this->view_page_url = 'Backend.';
	}
    public function index()
    {
    	return view($this->view_page_url.'login');
    }
}
