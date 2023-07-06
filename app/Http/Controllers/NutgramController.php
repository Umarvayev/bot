<?php

namespace App\Http\Controllers;

use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Types\Message\Message;
use Illuminate\Http\Request;

class NutgramController extends Controller
{
    public function show()
    {
        // Send a message to a specific user
        /** @var Message $message */
        $message = $bot->sendMessage('Hi!');

// Send a message to a channel
        /** @var Message $message */
        $message = $bot->sendMessage('Hi channel!', ['chat_id' => '@mychannel']);

        $photo = fopen('image.png', 'r+'); // open the file

        /** @var Message $message */
        $message = $bot->sendPhoto($photo); // pass the resource

        fclose($photo); // close the file
    }
}
