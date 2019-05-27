<?php

namespace Modules\Contact\Repository\Elequent;

use Modules\Base\Repository\Elequent\BaseElequent;
use Modules\Contact\Entities\Contact;
use Modules\Services\Entities\Service;
use Modules\Contact\Repository\Interfaces\ContactInterface;

class ContactElequent extends BaseElequent implements ContactInterface
{
    /**
     * @var
     */
    protected $contact;

    public function __construct()
    {
        $this->contact = new Contact();
        parent::__construct($this->contact);
    }
}
