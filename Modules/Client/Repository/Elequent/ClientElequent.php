<?php

namespace Modules\Client\Repository\Elequent;

use Modules\Base\Repository\Elequent\BaseElequent;
use Modules\Client\Entities\Client;
use Modules\Client\Repository\Interfaces\ClientInterface;

class ClientElequent extends BaseElequent implements ClientInterface
{
    /**
     * @var
     */
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
        parent::__construct($this->client);
    }

}
