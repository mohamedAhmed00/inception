<?php

namespace Modules\Slider\Repository\Elequent;

use Modules\Base\Repository\Elequent\BaseElequent;
use Modules\Slider\Entities\Slider;
use Modules\Slider\Repository\Interfaces\SliderInterface;

class SliderElequent extends BaseElequent implements SliderInterface
{
    /**
     * @var
     */
    protected $slider;

    public function __construct()
    {
        $this->slider = new Slider();
        parent::__construct($this->slider);
    }

}
