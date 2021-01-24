<?php
# Administrator
# Date: 01.12.2018
# Time: 13:26

namespace App\Widgets;
use App\Widgets\Contract\ContractWidget;
use Session;


class ClientBlockWidget implements ContractWidget{

	public function execute(){
		if(Session::has('user_old')){
			$data = TRUE;
		}else{
			$data = FALSE;
			Session::put('user_old', 'yes');
		}
		return view('Widgets::client_block',compact('data'));
	}

}