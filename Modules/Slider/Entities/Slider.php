<?php

namespace Modules\Slider\Entities;
use Eloquent;
use Modules\Base\Entities\Image;

class Slider extends Eloquent
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'subtitle', 'link', 'status','second_title'
    ];

    /**
     * @author Nader Ahmed
     * @return mixed
     */
    public function Image()
    {
        return $this->hasOne(Image::class,'pivot_id')->where('type' , 'slider');
    }
}
