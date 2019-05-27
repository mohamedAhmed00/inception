<?php

namespace Modules\Services\Repository\Elequent;

use Modules\Base\Repository\Elequent\BaseElequent;
use Modules\Services\Entities\Service;
use Modules\Services\Repository\Interfaces\ServiceInterface;

class ServiceElequent extends BaseElequent implements ServiceInterface
{
    /**
     * @var
     */
    protected $service;

    public function __construct()
    {
        $this->service = new Service();
        parent::__construct($this->service);
    }

}
