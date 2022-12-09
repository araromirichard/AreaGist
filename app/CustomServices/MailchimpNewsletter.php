<?php
namespace App\CustomServices;

use MailchimpMarketing\ApiClient;

class MailchimpNewsletter implements Newsletter
{
    public function __construct(protected ApiClient $client)
    
    {
        
    }
    
    public function subscribe(string $email, string $list = null)
    {
        $list ??= config('services.mailchimp.lists.subscribers');
        
       
        
        return $this->client->lists->addListMember($list, [
            'email_address' => $email,
            'status' => 'subscribed',
        ]);
    
    }
    
    // // declare a method to get the mailchimp client
    // protected function mailchimpClient()
    // {
    //     // $client = new ApiClient();
    //     // $client->setConfig([
    //     //     'apiKey' => config('services.mailchimp.key'),
    //     //     'server' => 'us5',
    //     // ]);
        
    //     // return $client;
    //   return  $this->client->setConfig([
    //         'apiKey' => config('services.mailchimp.key'),
    //         'server' => 'us10',
    //     ]);
    // }
}