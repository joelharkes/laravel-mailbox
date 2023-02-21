<?php

namespace BeyondCode\Mailbox\Facades;

use BeyondCode\Mailbox\Drivers\DriverInterface;
use BeyondCode\Mailbox\Drivers\Log;
use BeyondCode\Mailbox\Drivers\MailCare;
use BeyondCode\Mailbox\Drivers\Mailgun;
use BeyondCode\Mailbox\Drivers\Postmark;
use BeyondCode\Mailbox\Drivers\SendGrid;
use BeyondCode\Mailbox\InboundEmail;
use BeyondCode\Mailbox\Routing\Route;
use Illuminate\Support\Facades\Facade;

/**
 * @see \BeyondCode\Mailbox\Routing\Router
 * @method static Route from(string $pattern, callable $action):
 * @method static Route to(string $pattern, callable $action)
 * @method static Route cc(string $pattern, callable $action)
 * @method static Route bcc(string $pattern, callable $action)
 * @method static void callMailboxes(InboundEmail $email)
 * @method static void catchAll(callable $action)
 * @method static void fallback(callable $action)
 *
 * @see MailboxManager
 * @method static DriverInterface mailbox()
 * @method static Log createLogDriver()
 * @method static Mailgun createMailgunDriver()
 * @method static SendGrid createSendGridDriver()
 * @method static MailCare createMailCareDriver()
 * @method static Postmark createPostmarkDriver()
 */
class Mailbox extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mailbox';
    }
}
