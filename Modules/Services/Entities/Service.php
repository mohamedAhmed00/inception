<?php

namespace Modules\Services\Entities;
use Eloquent;
use Modules\Base\Entities\Image;

class Service extends Eloquent
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'content', 'status','logo'
    ];

    /**
     * @author Nader Ahmed
     * @return mixed
     */
    public function Image()
    {
        return $this->hasOne(Image::class,'pivot_id')->where('type' , 'service');
    }
}
