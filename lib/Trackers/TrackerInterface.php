<?php

namespace Hejiang\Express\Trackers;

use Hejiang\Express\Waybill;
interface TrackerInterface
{
    /**
     * Track a willbay and return traces
     *
     * @param Waybill $waybill
     * @return void
     * @throws \Hejiang\Express\Exceptions\TrackingException
     */
    public function track(Waybill $waybill);
    public static function getSupportedExpresses();
    public static function isSupported($express);
    public static function getExpressCode($expressName);
}