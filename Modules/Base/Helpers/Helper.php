<?php

if (!function_exists('getServiceCount')) {
    /**
     * @author Nader Ahmed
     * @return mixed
     */
    function getServiceCount()
    {
        return app(\Modules\Services\Repository\Interfaces\ServiceInterface::class)->getWhere([]);
    }
}

if (!function_exists('getPageCount')) {
    /**
     * @author Nader Ahmed
     * @return mixed
     */
    function getPageCount()
    {
        return app(\Modules\Pages\Repository\Interfaces\PageInterface::class)->getWhere([]);
    }
}
