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
    const XCOMPSTART = 'X';
    private $param;
    private $value;

    public function __construct($param, $value)
    {
        if (!$this->validateParam($param)) {
            throw new CalendarException("X-Properties must start their names with 'X-', followed by vendor id with a minimum of 3 characters, then the property name");
        }

        $this->param = $param;
        $this->value = $value;
    }

    private function validateParam($param)
    {
        $arr = explode('-', $param);

        if (sizeof($arr) < 3) {
            return false;
        }

        if ($arr[0] != self::XCOMPSTART) {
            return false;
        }

        if (strlen($arr[1]) < 3) {
            return false;
        }

        if (strlen($arr[2]) < 1) {
            return false;
        }

        return true;
    }

    public function __toString()
    {
        return $this->param . ':' . $this->value . Calendar::EOL;
    }
}
