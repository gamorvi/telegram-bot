<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WebhookController extends Controller
{
    public function webhook()
    {
      // dd('everything is fine');
      $token = '1167818963:AAF20emaCq1msjGNxyxsTTm7E9jaSjkunbc';
      $output = @file_get_contents('php://input');
      $update = json_decode($output, TRUE);
      $chatID = $update['message']['chat']['id'];
      $message = $update['message']['text'];
      $firstName = $update['message']['from']['first_name'];
      $offset = $update['update_id'];

      $response = 'Hi ' . $firstName;

      if ($message == '/hi') {
        $response = 'Hello ' . $firstName . ', nice to meet';
      }

      if ($message == '/help') {
        $response = "I'm just a parrot, \n I can't help you!";
      }

      $telegram = 'https://api.telegram.org/bot';
      $telegram .= $token . '/sendmessage?';
      $telegram .= 'chat_id=' . $chatID;
      $telegram .= '&text=' . urlencode($response);
      $telegram .= '&offset=' . $offset++;

      $client = new Client();

      $client->get($telegram);
    }
}
