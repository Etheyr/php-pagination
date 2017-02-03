<?php 
namespace Etheyr\Controllers;

use Etheyr\Models\Armoire;

class ArmoireController extends Controller {


	public static function show($id){

		$socks = Armoire::get($id);
		self::view('details',['socks'=>$socks]);


	}


}
?>