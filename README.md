```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use TNotify\Message;

$cl=new Message(***BOT_TOKEN***,***CHAT_ID***);
echo $cl->send(***MESSAGE***);
```
