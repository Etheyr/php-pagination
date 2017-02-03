<?php

namespace Etheyr\Controllers;

use Etheyr\Models\Armoire;

class Controller {
	
	public static function view($name, $vars =[]){


		foreach ($vars as $key => $value) {

			$$key = $value;

		}

		require __DIR__."/View/".$name.".php";

	}




}
?>