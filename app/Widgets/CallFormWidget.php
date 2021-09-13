<?php
namespace App\Widgets;
use App\Widgets\Contract\ContractWidget;
use App\Setting;

class CallFormWidget implements ContractWidget
{
	public function execute(){
		$settings = Setting::all();
		$call_form = $settings[0]['call_form'];

		return view('Widgets::call_form', [
			'call_form' => $call_form
		]);
	}
}