<?php

namespace App\Http\Controllers;

use App\Services\Telegram\TelegramService;

class TelegramTestController extends Controller
{
    public function send(TelegramService $telegram)
    {
        $telegram->send("✅ Тест: Laravel 12 отправил сообщение в Telegram!");

        return response()->json(['ok' => true]);
    }
}
