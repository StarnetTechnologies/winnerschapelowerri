<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PushNotification extends Controller
{

    public function sendMessage(){
        $heading = array(
            "en" => 'A Sample Notification'
        );
        $content      = array(
            "en" => 'This is a sample notification sent to users who allow receiving notification'
        );

    
        $fields = array(
            'app_id' => "f3f6aa69-25ef-40f2-86c2-0c85f8c8a42f",
            'included_segments' => array(
                'All'
            ),
            'data' => array(
                "foo" => "bar"
            ),
            'headings' => $heading,
            'contents' => $content,
        
        );
        
        $fields = json_encode($fields);
        //print("\nJSON sent:\n");
        //print($fields);
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json; charset=utf-8',
            'Authorization: Basic MDBjMjljNWUtNTc1ZC00MGExLTllOWMtOTg0ZDhiNzU3NTIy'
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        
        $response = curl_exec($ch);
        curl_close($ch);
        
        return $response;
    }

    public function notify(){
        $response = $this->sendMessage();
        echo "You'll receive the notification now if you have allowed it";
    }

}

