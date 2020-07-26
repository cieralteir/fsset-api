<?php

if (!function_exists('settimezone')) {
    /**
     * @param mixed $date
     * @param string $tz
     * 
     * @return \Illuminate\Support\Carbon
     */
    function settimezone($date, $tz = 'UTC')
    {
        return now()->parse($date)->setTimezone($tz);
    }
}
