<?php

namespace App\Jobs;

use App\Services\Telegram\TelegramService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendTelegramMessageJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public string $text;
    public ?int $chatId;

    public function __construct(string $text, ?int $chatId = null)
    {
        $this->text = $text;
        $this->chatId = $chatId;
    }

    public function handle(TelegramService $telegram): void
    {
        $telegram->send($this->text, $this->chatId);
    }
}
