<?php

namespace App\Mailers;

use Illuminate\Contracts\Mail\Mailer;

class AppMailer
{

    /**
     * The Laravel Mailer instance.
     *
     * @var Mailer
     */
    protected $mailer;

    /**
     * Admin Email
     *
     * @var string
     */
    protected $adminEmail = 'your-admin-email@domain.com';

    /**
     * The sender of the email.
     *
     * @var string
     */
    protected $from = 'no-reply@domain.com';

    /**
     * The recipient of the email.
     *
     * @var string
     */
    protected $to;

    /**
     * The view for the email.
     *
     * @var string
     */
    protected $view;

    /**
     * The data associated with the view for the email.
     *
     * @var array
     */
    protected $data = [];

    /**
     * Create a new app mailer instance.
     *
     * @param Mailer $mailer
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Deliver the email confirmation.
     *
     * @param  User $user
     * @return void
     */
    public function sendEmailConfirmationTo()
    {
        $this->to = $user->email;
        $this->subject = 'Subject Name';
        $this->view = 'emails.confirm';
        $this->data = [];

        $this->deliver();
    }


    /**
     * Deliver the email.
     *
     * @return void
     */
    public function deliver()
    {
        $this->mailer->send($this->view, $this->data, function ($message) {
            $message->from($this->from, 'Your Company Name')
                ->subject($this->subject)
                ->to($this->to);
        });
    }
}