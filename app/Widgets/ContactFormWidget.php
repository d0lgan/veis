<?php
namespace App\Widgets;
use App\Widgets\Contract\ContractWidget;
use App\Setting;

class ContactFormWidget implements ContractWidget
{
	public function execute(){
		$settings = Setting::all();
		$contact_form = $settings[0]['contact_form'];

		return view('Widgets::contact_form', [
			'contact_form' => $contact_form
		]);
	}
}