<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnrollMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $message;
    protected $course_id;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message , $course_id)
    {
        $this->message = $message;
        $this->course_id = $course_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('you enrolled new course in axeLearn')
            ->markdown('emails.enroll',
                ['message' => $this->message , 'course_id' => $this->course_id]);
    }
}
