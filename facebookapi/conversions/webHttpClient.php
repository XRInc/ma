<?php

use FacebookAds\Object\ServerSide\HttpServiceInterface;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;

class WebHttpClient implements HttpServiceInterface {


    public function executeRequest($url, $method, array $curl_options, array $headers, array $params) {
        $multipart_contents = [];

        foreach ($params as $key => $value) {
            if ($key === 'data') {
                $multipart_contents[] = [
                    'name' => $key,
                    'contents' => \GuzzleHttp\json_encode($value),
                    'headers' => array('Content-Type' => 'multipart/form-data'),
                ];
            } else {
                $multipart_contents[] = [
                    'name' => $key,
                    'contents' => $value,
                    'headers' => array('Content-Type' => 'multipart/form-data'),
                ];
            }
        }

        $body = new MultipartStream($multipart_contents);
        $request = new Request($method, $url, $headers, $body);

        $handler_stack = HandlerStack::create(
            new CurlHandler(['options' => $curl_options])
        );

        $client = new Client(['handler' => $handler_stack]);
        return $client->send($request);
    }
}