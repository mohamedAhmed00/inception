<?php

namespace Modules\Pages\Repository\Interfaces;

use Modules\Base\Repository\Interfaces\BaseInterface;

interface PageInterface extends BaseInterface
{
    /**
     * @param string $str
     * @param array $arr
     * @author Nader Ahmed
     * @return mixed
     */
    public function UpdatePage(string $str,array  $arr);
}
