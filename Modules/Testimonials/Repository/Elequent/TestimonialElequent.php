<?php

namespace Modules\Testimonials\Repository\Elequent;

use Modules\Base\Repository\Elequent\BaseElequent;
use Modules\Testimonials\Entities\Testimonial;
use Modules\Testimonials\Repository\Interfaces\TestimonialInterface;

class TestimonialElequent extends BaseElequent implements TestimonialInterface
{
    /**
     * @var
     */
    protected $testimonial;

    public function __construct()
    {
        $this->testimonial = new Testimonial();
        parent::__construct($this->testimonial);
    }

}
