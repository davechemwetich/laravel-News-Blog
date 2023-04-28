<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class YoutubeController extends Controller
{
    public function getChannelData(Request $request)
    {
        // Set your API key and channel ID here
        $apiKey = "YOUR_API_KEY";
        $channelId = "CHANNEL_ID";

        // Send a GET request to the YouTube Data API
        $client = new Client();
        $response = $client->request("GET", "https://www.googleapis.com/youtube/v3/channels", [
            "query" => [
                "part" => "statistics",
                "id" => $channelId,
                "key" => $apiKey
            ]
        ]);

        // Get the response body as JSON
        $data = json_decode($response->getBody());

        // Extract the subscriber count and view count from the response data
        $subscriberCount = $data->items[0]->statistics->subscriberCount;
        $viewCount = $data->items[0]->statistics->viewCount;

        // Pass the data to the view
        return view('youtube', [
            'subscriberCount' => $subscriberCount,
            'viewCount' => $viewCount
        ]);
    }
}
