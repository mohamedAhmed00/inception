<?php

namespace Modules\Testimonials\Entities;
use Eloquent;
use Modules\Base\Entities\Image;

class Testimonial extends Eloquent
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'content', 'status','person','person_title','company'
    ];

    /**
     * @author Nader Ahmed
     * @return mixed
     */
    public function Image()
    {
        return $this->hasOne(Image::class,'pivot_id')->where('type' , 'testimonial');
    }
}
