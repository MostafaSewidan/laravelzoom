<?php

namespace MostafaSewidan\Zoom\Support;

use MostafaSewidan\API\Support\Authentication\JWT;
use MostafaSewidan\API\Support\Entry as ApiEntry;
use MostafaSewidan\Zoom\Facades\Client;
use GuzzleHttp\Client as GuzzleClient;

class Entry extends ApiEntry
{
    protected $modelNamespace = '\MostafaSewidan\Zoom\\';

    protected $pageField = 'page_number';

    protected $maxQueries = '5';

    protected $apiKey = null;

    protected $apiSecret = null;

    protected $tokenLife = null;

    protected $baseUrl = null;

    // Amount of pagination results per page by default, leave blank if should not paginate
    // Without pagination rate limits could be hit
    protected $defaultPaginationRecords = '30';

    // Max and Min pagination records per page, will vary by API server
    protected $maxPaginationRecords = '300';

    protected $resultsPageField = 'page_number';
    protected $resultsTotalPagesField = 'page_count';
    protected $resultsPageSizeField = 'page_size';
    protected $resultsTotalRecordsField = 'total_records';

    protected $allowedOperands = ['='];

    /**
     * Entry constructor.
     * @param $apiKey
     * @param $apiSecret
     * @param $tokenLife
     * @param $maxQueries
     * @param $baseUrl
     */
    public function __construct($apiKey = null, $apiSecret = null, $tokenLife = null, $maxQueries = null, $baseUrl = null)
    {
        $this->apiKey = $apiKey ? $apiKey : config('zoom.api_key');
        $this->account_id = config('zoom.account_id');
        $this->apiSecret = $apiSecret ? $apiSecret : config('zoom.api_secret');
        $this->tokenLife = $tokenLife ? $tokenLife : config('zoom.token_life');
        $this->maxQueries = $maxQueries ? $maxQueries : (config('zoom.max_api_calls_per_request') ? config('zoom.max_api_calls_per_request') : $this->maxQueries);
        $this->baseUrl = $baseUrl ? $baseUrl : config('zoom.base_url');
    }

    public function newRequest()
    {
        if (config('zoom.authentication_method') == 'jwt') {
            return $this->jwtRequest();
        } elseif (config('zoom.authentication_method') == 'oauth2') {
        }elseif (config('zoom.authentication_method') == 'server-to-server') {
            return $this->serverToServerRequest();
        }
    }

    public function jwtRequest()
    {
        $jwtToken = JWT::generateToken(['iss' => $this->apiKey, 'exp' => time() + $this->tokenLife], $this->apiSecret);

        return Client::baseUrl($this->baseUrl)->withToken($jwtToken);
    }

    public function oauth2Request()
    {
    }

    public function serverToServerRequest()
    {
        try {
            $key = $this->apiKey;
            $secret = $this->apiSecret;
            
            $url = "https://zoom.us/oauth/token?grant_type=account_credentials&account_id={$this->account_id}";

            $client = new GuzzleClient([
                'headers' => [
                    'Authorization' => 'Basic ' . base64_encode("{$key}:{$secret}"),
                    'content-type' => 'application/json',
                ]
            ]);
            
            return json_decode($client->request('POST' , $url)->getBody(), true)['access_token'];

        } catch (\GuzzleHttp\Exception\ClientException $e) {
        }
    }
}
