<?php

namespace App\Controller;

class PagesController
{
	public function home()
	{
		

		return view('index', compact('users'));
	}

	public function about()
	{
		$company = 'Laracasts';

		return view('about', compact('company'));		
	}

	public function contact()
	{
		return view('contact');		
	}
}