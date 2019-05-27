<?php

namespace Modules\Pages\Repository\Elequent;

use Modules\Base\Repository\Elequent\BaseElequent;
use Modules\Pages\Entities\Page;
use Modules\Pages\Repository\Interfaces\PageInterface;

class PageElequent extends BaseElequent implements PageInterface
{
    /**
     * @var
     */
    protected $page;

    public function __construct()
    {
        $this->page = new Page();
        parent::__construct($this->page);
    }

    /**
     * @param string $str
     * @param array $arr
     * @author Nader Ahmed
     * @return mixed
     */
    public function UpdatePage(string $str,array  $arr)
    {
        $page = $this->model->where('key',$str)->first();
        $id = $page->id;
        $page = $page->update($arr);
        return $id;
    }
}
