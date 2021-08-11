<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Mailing extends Mailable
{
    use Queueable, SerializesModels;

    protected $text;
    protected $type;
    protected $sub;
    protected $attach;
    protected $status;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($text, $type, $sub, $status = false, $attach = false)
    {
        $this->text = $text;
        $this->type = $type;
        $this->sub = $sub;
        $this->attach = $attach;
        $this->status = $status;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $res['text'] = $this->text;
        $res['status'] = $this->status;

        if($this->attach != false){
            return $this->from('veisproject3@gmail.com', 'Veis')->subject($this->sub)->view('mail.' . $this->type)->with(['res' => $res])->attach($this->attach);
        }else{
            return $this->from('veisproject3@gmail.com', 'Veis')->subject($this->sub)->view('mail.' . $this->type)->with(['res' => $res]);
        }

    }
}
