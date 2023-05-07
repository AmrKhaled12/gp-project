<?php

namespace App\Classes\System;

use App\Trait\GetData;
use App\Classes\client;

class GenerateClient
{
    private client $client;
    private int $id;

    public function __construct(client $client, int $id)
    {
        $this->client = $client;
        $this->id = $id;
    }
    public function Generate()
    {
        $data = GetData::data_of_workout_and_nutrition($this->id);
        $this->client->setData($data);
        $this->client->calc_status();
        $this->client->calc_mycal();
        session_start();
        $_SESSION['client'] = $this->client;
    }
}
