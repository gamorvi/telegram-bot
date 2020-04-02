# telegram-bot

This is a demo on how to setup a Telegram bot.
In this demo we explored how we can use ngrok to setup a public url for our webhook.

Main logic under:
`app/Http/Controller/WebhookController`

Webhook url set in `routes/web.php`


## We covered the following in this demo:

* Ngrok for building webhook consumers on your dev machine
* Telegram bots (BotFather)
* Setup Telegram commands
* Getting updates from Telegram
* Setting up a Telegram webhook
* Getting the status of your Telegram bot configuration

## Pre-requisite

* Basic knowledge of REST APIs
* Knowledge in one programming language
* Working knowledge of JSON
* A Telegram account

## Additional Resources

* Ngrok https://ngrok.com/
* Telegram Bot API documentation: https://core.telegram.org/api

What we will build during this session

A simple bot that repeats every thing you say. Lets call it ParrotBot :)

I’m excited about this =) I hope you are too!

## Set up your webhook

https://api.telegram.org/bot{token}/setWebhook?url={url to our webhook}

## Get info about your webhook

https://api.telegram.org/bot[token]/getWebhookInfo

## Alternatively to using webhooks you can updates from this endpoint

https://api.telegram.org/bot{token}/getUpdates

## Send a message to a telegram account

https://api.telegram.org/bot{token}/sendmessage?chat_id={telegram_id}&text={message_to_user}
