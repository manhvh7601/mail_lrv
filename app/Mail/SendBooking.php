<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendBooking extends Mailable
{
    use Queueable, SerializesModels;

    public $resortName, $name, $address, $numberPhone, $email, $totalPrice;
    public function __construct($resortName, $name, $address, $numberPhone, $email, $totalPrice)
    {
        $this->resortName = $resortName;
        $this->name = $name;
        $this->address = $address;
        $this->numberPhone = $numberPhone;
        $this->email = $email;
        $this->totalPrice = $totalPrice;
    }

    public function build()
    {
        return $this->from('manhvh7621@gmail.com', 'HAPPYDAY')
        ->subject("Cảm ơn Anh/Chị đã đặt phòng của chúng tôi")
        ->markdown('mail.sendBooking', compact('resortName','name','address','numberPhone','email','totalPrice'));
    }
}
