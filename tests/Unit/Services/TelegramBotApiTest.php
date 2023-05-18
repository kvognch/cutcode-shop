<?php

declare(strict_types=1);

namespace Services;

use Illuminate\Support\Facades\Http;
use Services\Telegram\TelegramBotApi;
use Tests\TestCase;

final class TelegramBotApiTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    public function is_send_message_success(): void
    {
        Http::fake([
            TelegramBotApi::HOST . '*' => Http::response(['ok' => true])
        ]);

        $result = TelegramBotApi::sendMessage('', (string)1, 'Testing');

        $this->assertTrue($result);
    }
}
