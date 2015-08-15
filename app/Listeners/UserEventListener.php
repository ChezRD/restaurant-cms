<?php

namespace Restaurant\Listeners;

use Illuminate\Mail\Mailer;
use Restaurant\Events\UserCreateEvent;
use Restaurant\Events\UserResetEvent;

class UserEventListener
{
    /**
     * Intialize a new instance
     *
     * @param Illuminate\Mail\Mailer $mailer
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Subscribe to the events
     *
     * @param Illuminate\Events\Dispatcher $events
     * @return void
     */
    public function subscribe($events)
    {
        $events->listen(
            'Restaurant\Events\UserCreateEvent',
            'Restaurant\Listeners\UserEventListener@onUserCreate'
        );

        $events->listen(
            'Restaurant\Events\PasswordResetEvent',
            'Restaurant\Listeners\UserEventListener@onPasswordReset'
        );
    }

    /**
     * On user create event send a verification url to the provided email
     *
     * @param UserCreateEvent $event
     * @return void
     */
    public function onUserCreate(UserCreateEvent $event)
    {
        $user = $event->user;
        $url = url(route('verify-new', ['token' => $user->createToken]));

        $this->mailer->send('emails.verify-new', ['verifyUrl' => $url], function ($mailer) use ($user) {
            $mailer->subject('Verify New Account')->to($user->email);
        });
    }

    /**
     * On password reset event send a reset url to the provided email
     *
     * @param PasswordResetEvent
     * @return void
     */
    public function onPasswordReset(PasswordResetEvent $event)
    {
        $user = $event->user;
        $url = url(route('verify-reset', ['token' => $user->resetToken]));

        $this->mailer->send('emails.verify-reset', ['verifyUrl' => $url], function ($mailer) use ($user) {
            $mailer->subject('Password Reset')->to($user->email);
        });
    }
}