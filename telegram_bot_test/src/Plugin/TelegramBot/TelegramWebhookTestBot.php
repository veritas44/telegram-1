<?php

namespace Drupal\telegram_bot_test\Plugin\TelegramBot;

use Drupal\telegram\Plugin\TelegramBot\TelegramWebhookBot;

/**
 * Telegram Bot object implementing the Bot API.
 *
 * @TelegramBot(
 *   id = "test_webhook",
 *   label = "Test Webhook",
 *   description = "Test bot providing webhook",
 * )
 */
class TelegramWebhookTestBot extends TelegramWebhookBot {

}