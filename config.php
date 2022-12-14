<?php
$config=['whitetime'=>31536000, /*месяц*/ 'bantime'=>604800, /*неделя*/ 'proactivetime'=>3600, /*час*/ 'referertime'=>604800];

$config['limit']=5; // Количество заходов в минуту, после превышения появляется капча. Убедитесь, что нет никаких ajax скриптов, которые обращаются чаще (чат, например).

/* 
Количество заходов со всех IP в минуту при которых включается режим "под атакой". 
Режим "под аттакой" предназначен для противодействия "умному"/медленному ддосу, желательно не включать, если срабатывает обычная защита.
Добавьте исключения на кешируемые данные, если используете Cloudflare, для избежания ложного срабатывания счетчика. Пример есть в инструкции. 
*/
$config['limit_attack_mode']=88; // Рекомендуемое значение примерно 1/24 от среднего числа просмотров в сутки во избежании ложных срабатываний. Установите 0 для отключения срабатывания режима "под аттакой". 
$config['limit_attack_mode_ban']=3;  // Количество заходов в минуту для срабатывания бана в режиме "под атакой". Если выставить 1, то будут залетать все IP, кроме поисковых ботов.

// Настройки счетчика, если url=1 то считает заходы для каждой страницы сайта, если 0, то для всего сайта. Если user_agent=1, то учитывает браузер.
$config['counter']=['url'=>1, 'user_agent'=>0];


//$config['referer']=[$_SERVER['HTTP_HOST'], 'yandex.ru', 'google.com', 'google.ru'];
$config['referer']=false; // Рефереры для исключения, ддос боты обычно шлют пустые реферы 
$config['adminEmail']=''; // Емейл для связи (ошибочня блокировка)
    
$config['search_bots']=['Googlebot'=>'Google', 'yandex.com/bots'=>'Yandex', 'mail.ru'=>'mail.ru'];  // 'msn.com','bing.com'
$config['search_hosts']=['Google'=>['.googlebot.com', '.google.com'], 'Yandex'=>['.yandex.com', '.yandex.ru', '.yandex.net'], 'mail.ru'=>['.mail.ru'], 'msn.com'=>['.msn.com'], 'bing.com'=>['.msn.com'] ];    

//Cloudflare
$configCF=
[
    'email'=>'',  // email вашего аккаунта в Cloudflare
    'key'=>'', // Узнать можно на странице dash.cloudflare.com/profile, Global API Key
    'zone'=>'', // ID домена в Cloudflare, есть во вкладке Overview 
    
    'countries'=>['RU'=>1, 'UA'=>1, 'BY'=>1, 'KZ'=>1, 'LV'=>1], // страны целевого трафика
    'limit'=>15 // Лимит для IP, прошедших капчу Cloudflare. При превышении лимита, IP банится полностью 
];
 
$config['admin']['pass']='test'; // Пароль админки
