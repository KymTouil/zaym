<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{

  protected $message;
    public function __construct(contactFormRequest $message)
    {
        $this->message = $message;
    }

    public function authorize()
    {
        return true;
    }

 
    public function rules()
    {
        return [
            'name' => 'required|max: 255',
            'email' => 'required|email|max: 255',
            'message' => 'required',
        ];
    }
    
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject(config('admin.name') . ", you got a new message!")
                    ->greeting(" ")
                    ->salutation(" ")
                    ->from($this->message->email, $this->message->name)
					->line($this->message->message);
    }
    
}