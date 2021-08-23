<?php 
namespace TNotify;

class Message
{
    private $bot_token;
    private $chat_id;
    
    public function __construct($bot_token,$chat_id)
    {
        $this->bot_token=$bot_token;
        $this->chat_id=$chat_id;
    }

    public function send($message)
    {
        $url="https://api.telegram.org/bot".$this->bot_token;
        $params=[
            'chat_id'=>$this->chat_id, 
            'text'=>$message,
        ];
        
        $ch = curl_init($url . '/sendMessage');
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}