<?php

declare(strict_types=1);

namespace Support\Logging\Telegram;

use Monolog\Handler\AbstractProcessingHandler;
use Monolog\Logger;
use Services\Telegram\TelegramBotApi;

final class TelegramLoggerHandler extends AbstractProcessingHandler
{
    protected string $chatId;

    protected string $token;

    public function __construct($config)
    {
        $level = Logger::toMonologLevel($config['level']);

        parent::__construct($level);

        $this->chatId = $config['chat_id'];
        $this->token = $config['token'];
    }

    protected function write(array $record): void
    {
        $result = TelegramBotApi::sendMessage(
            $this->token,
            $this->chatId,
            $record['formatted']
        );
    }
}
