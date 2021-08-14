<?php

namespace App\Http\Controllers;

use App\City;
use App\Document;
use App\Language;
use App\PointDelivery;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use App\Setting;
use App\Contact;
use App\Order;
use DB;
use LisDev\Delivery\NovaPoshtaApi2;
use View;

class SettingController extends Controller {

	public function edit() {
		$setting = Setting::first();
        $langs =Language::all();
        $arr = [];
        foreach ($langs as $lang) {
            $arr[$lang->locate_code] = [
                'new' => Document::get('settings', 'new', $setting->id, $lang->locate_code),
                'sell' => Document::get('settings', 'sell', $setting->id, $lang->locate_code)
            ];
        }
        $setting->data = $arr;

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

		return view( 'admin.setting', compact( 'setting', 'langs', 'order_count', 'contacts_count' ) );
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, $id ) {
		


		$setting = Setting::first();

		// $setting->site_on_of   = $request->site_on_of;
		// $setting->new   = $request->new_ru;
		// $setting->sell   = $request->sell_ru;
		// $setting->contact_form = $request->contact_form;
		// $setting->call_form    = $request->call_form;
		// $setting->slide_home   = $request->slide_home;
		// $setting->shop_buy   = $request->shop_buy;
		// $setting->email_site   = $request->email_site;
		// $setting->address_site   = $request->address_site;
		// $setting->phone_site_1 = $request->phone_site_1;
		// $setting->phone_site_2 = $request->phone_site_2;
		// $setting->phone_site_3 = $request->phone_site_3;
		// $setting->phone_site_4 = $request->phone_site_4;
		// $setting->point_issues = $request->point_issues;
		// $setting->point_deliveries = $request->point_deliveries;
		// $setting->free_shipping = $request->free_shipping;
		// $setting->universal = $request->universal;
		// $setting->brands = $request->brands;
		// $setting->viewed = $request->viewed;
		// $setting->name_company = $request->name_company;
		// $setting->country = $request->country;
		// $setting->categories = $request->categories;

		// $setting->save();

		if ($request->module_save) {

			$setting->slide_home   	= $request->slide_home;
			$setting->universal 	= $request->universal;
			$setting->brands 		= $request->brands;
			$setting->viewed 		= $request->viewed;

		}


		if ($request->shipping) {

			$setting->point_deliveries 	= $request->point_deliveries;
			$setting->shop_buy 			= $request->shop_buy;
			$setting->free_shipping 	= $request->free_shipping;

		}


		if ($request->communication) {

			$setting->site_on_of   = $request->site_on_of;
			$setting->contact_form = $request->contact_form;
			$setting->call_form    = $request->call_form;

		}


		if ($request->contacts) {

			$setting->phone_site_1 = $request->phone_site_1;
			$setting->phone_site_2 = $request->phone_site_2;
			$setting->phone_site_3 = $request->phone_site_3;
            $setting->receive_email   	= $request->receive_email;
			$setting->phone_site_4 = $request->phone_site_4;

		}


		if ($request->address) {

			//RU
			$setting->address_site_ru 	= $request->address_site_ru;
			$setting->name_company_ru 	= $request->name_company_ru;
			$setting->country_ru 		= $request->country_ru;

			// UA
			$setting->address_site_uk 	= $request->address_site_uk;
			$setting->name_company_uk 	= $request->name_company_uk;
			$setting->country_uk 		= $request->country_uk;

		}




		$setting->save();


		// print '<pre>'.print_r($request->slide_home,1).'</pre>';

        // $langs = Language::all();

        // foreach ($langs as $lang) {

        //     $documents = ['new', 'sell'];
        //     foreach ($documents as $document) {
        //         $content = $document . '_' . $lang->locate_code;

        //         Document::updateOrCreate(
        //             [
        //             'module' => 'settings',
        //             'module_id' => $setting->id,
        //             'lang' => $lang->locate_code,
        //             'type' => $document,
        //             ],
        //             [
        //                 'content' => request($content, '')
        //             ]
        //         );
        //     }

        // }

		return back()->withErrors( 'Обновлены!' );
	}

}
