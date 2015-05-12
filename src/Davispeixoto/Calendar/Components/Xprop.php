<?php namespace Davispeixoto\Calendar\Components;

/**
 * Class Xprop
 * @package Davispeixoto\Calendar\Components
 */

/**
 * Created by Davis Peixoto <davis.peixoto@gmail.com>.
 * Date: 5/12/15
 * Time: 11:11 AM
 * Powered By PhpStorm
 */

use Davispeixoto\Calendar\Exceptions\CalendarException;

class Xprop
{
    const XCOMPSTART = 'X-';
    private $param;
    private $value;

    public function __construct($param, $value)
    {
        if (!$this->validateParam($param)) {
            throw new CalendarException("X-Properties must start their names with 'X-'");
        }

        $this->param = $param;
        $this->value = $value;
    }

    private function validateParam($param)
    {
        if (strpos($param, self::XCOMPSTART) !== 0) {
            return false;
        }

        return true;
    }

    public function __toString()
    {
        //
        return 'a';
    }
}
