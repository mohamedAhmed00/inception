<?php

namespace Modules\Team\Entities;
use Eloquent;
use Modules\Base\Entities\Image;

class Team extends Eloquent
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'status','job'
    ];

    /**
     * @author Nader Ahmed
     * @return mixed
     */
    public function Image()
    {
        return $this->hasOne(Image::class,'pivot_id')->where('type' , 'team');
    }
}
