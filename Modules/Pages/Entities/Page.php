<?php

namespace Modules\Pages\Entities;
use Eloquent;
use Modules\Base\Entities\Image;

class Page extends Eloquent
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'key', 'title', 'subtitle', 'description', 'content'
    ];

    /**
     * @author Nader Ahmed
     * @return mixed
     */
    public function Image()
    {
        return $this->hasOne(Image::class,'pivot_id')->where('type' , 'page');
    }
}
