<?php namespace Davispeixoto\Calendar\Components;

/**
 * Class Iana
 * @package Davispeixoto\Calendar\Components
 */

/**
 * Created by Davis Peixoto <davis.peixoto@gmail.com>.
 * Date: 5/12/15
 * Time: 11:11 AM
 * Powered By PhpStorm
 */

use Davispeixoto\Calendar\Exceptions\CalendarException;

class Iana
{
    private $param;
    private $value;

    /**
     * @param string $param An IANA iCalendar registered name
     * @param string $value Any value
     * @throws CalendarException
     */
    public function __construct($param, $value)
    {
        if (!$this->isValidParamName($param)) {
            throw new CalendarException("IANA Properties must not start their names with 'X-', as this is reserved to Xprop");
        }

        $this->param = $param;
        $this->value = $value;
    }

    /**
     * Basically a opposite rule to X-prop
     *
     * @param string $param
     * @return bool
     */
    private function isValidParamName($param)
    {
        if (strpos($param, Xprop::XCOMPSTART) === 0) {
            return false;
        }

        if (empty($param)) {
            return false;
        }

        return true;
    }

    /**
     * The string representation
     *
     * @return string
     */
    public function __toString()
    {
        return $this->param . ':' . $this->value . Calendar::EOL;
    }
}
