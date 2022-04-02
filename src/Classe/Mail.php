<?php

namespace App\Classe;

use Mailjet\Client;
use Mailjet\Resources;

class Mail
{
    private $api_key = '5e98ffd1419ac910202429217ebc01ce';
    private $api_key_secret = '2f765c46e59316a1018ba7471eeb5d7d';

    public function send()
    {
        $mj = new Client($this->api_key_secret, $this->$api_key_secre,true,['version' => 'v3.1']);
        $body = [
        'Messages' => [
            [
                'From' => [
                    'Email' => "ml.debeaune@gmail.com",
                    'Name' => "La Boutique Française"
                ],
                'To' => [
                    [
                    'Email' => $to_email,
                    'Name' => $to_name
                    ]
                ],
                'TemplateId' => 3839162,
                'TemplateLanguage' => true,
                'Subject' => $subject,
                'Variables' => [
                    'content' => $content,
                ]
            ]
        ]
    ];
    $response = $mj->post(Resources::$Email, ['body' => $body]);
    $response->success() && var_dump($response->getData());

    }
}