<?php

if (!function_exists('getAllUnReadContacts')) {
    /**
     * @author Nader Ahmed
     * @return mixed
     */
    function getAllUnReadContacts()
    {
        return app(\Modules\Contact\Repository\Interfaces\ContactInterface::class)->getWhere(['seen'=>'0']);
    }
}

if (!function_exists('getAllContacts')) {
    /**
     * @author Nader Ahmed
     * @return mixed
     */
    function getAllContacts()
    {
        return app(\Modules\Contact\Repository\Interfaces\ContactInterface::class)->getWhere([]);
    }
}

if (!function_exists('getAdmin')) {
    /**
     * @author Nader Ahmed
     * @return mixed
     */
    function getAdmin()
    {
        return app(\Modules\Users\Repository\Interfaces\UserInterface::class)->getById(auth()->user()->id);
    }
}
