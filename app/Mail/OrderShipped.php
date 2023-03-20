<?php

namespace App\Mail;


use App\Mail;

use App\orderone;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Facade\Ignition\IgnitionServiceProvider;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     *  @var orderone
     * 
     * 
     * @return void
     */

    public $order;


    public function __construct(orderone $order)
    {
        $this->order = $order;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('GameHuntersPortal@nepa.gov.jm')
                    ->view('emails.shipped');
    }
}
