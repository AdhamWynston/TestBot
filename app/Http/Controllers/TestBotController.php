<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DialogFlow\Client;
use DialogFlow\Model\Query;
use DialogFlow\Method\QueryApi;
class TestBotController extends Controller
{
    public function test(){
        try {
            $client = new Client('1498d997592d4425b6517922eabc7a80');
            $queryApi = new QueryApi($client);

            $meaning = $queryApi->extractMeaning('ola', [
                'sessionId' => '1234567890',
                'lang' => 'pt-BR',
                ]);
            $response = new Query($meaning);
        } catch (\Exception $e) {
            throw new $e;

        }
        return response()->json($response);
    }

}
