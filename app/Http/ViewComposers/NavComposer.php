<?php 

namespace App\Http\ViewComposers;


use Auth;
use Illuminate\View\View;

/**
* 
*/
class NavComposer
{
	
	public function compose(View $view)
	{
		if (!Auth::check()) {
			return;
		}

		$view->with('store', Auth::user()->store);
	}
}







