<?php

namespace Modules\Team\Repository\Elequent;

use Modules\Base\Repository\Elequent\BaseElequent;
use Modules\Team\Entities\Team;
use Modules\Team\Repository\Interfaces\TeamInterface;

class TeamElequent extends BaseElequent implements TeamInterface
{
    /**
     * @var
     */
    protected $team;

    public function __construct()
    {
        $this->team = new Team();
        parent::__construct($this->team);
    }

}
