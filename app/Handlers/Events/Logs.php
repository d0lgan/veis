<?php

namespace App\Handlers\Events;

use App\Events\AddLogs;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Log;
use App\Logger;

class Logs
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  AddLogs  $event
     * @return void
     */
    public function handle(AddLogs $event)
    {
    	/*получаем нужные нам свойства и записывыаем его в логи*/
//	    Log::info('Сообщение которое будет выведено',
//		    [$event->user_name => $event->portfolio_name]
//	    );

	    /*получаем нужные нам свойства и записывыаем его в БД*/
	       Logger::create([
			    'user' => $event->user_name,
			    'data' => 'Изменил: '.$event->product_name,
		    ]);
    }
}
