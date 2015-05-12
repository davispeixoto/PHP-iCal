<?php namespace Davispeixoto\Calendar\Components;

/**
 * Class Calendar
 * @package Davispeixoto\Calendar\Components
 */

/**
 * Created by Davis Peixoto <davis.peixoto@gmail.com>.
 * Date: 5/11/15
 * Time: 7:06 PM
 * Powered By PhpStorm
 */

class Calendar
{
    const EOL = "\r\n";
    const DELIMITER = 'VCALENDAR';
    const PRODID = '-//DAVISPEIXOTO/PHPiCal';
    const VERSION = '2.0';

    public $calscale;
    public $method;

    /**
     * @var array An array of Calendar Components (see ComponentInterface implementations)
     */
    public $components;

    /**
     * @var Xprop
     */
    public $xProp;

    /**
     * @var Iana
     */
    public $ianaProp;

    public function __construct()
    {

    }

    public function __toString()
    {
        $output = array();
        $output[] = "BEGIN:{$this->delimiter}";
        $output[] = "VERSION:{$this->version}";

        if (!empty($this->calscale)) {
            $output[] = "CALSCALE:{$this->version}";
        }

        if (!empty($this->method)) {
            $output[] = "METHOD:{$this->version}";
        }

        if (!empty($this->xProp)) {
            $output[] = "VERSION:{$this->xProp}";
        }

        if (!empty($this->ianaProp)) {
            $output[] = "IANA:{$this->ianaProp}";
        }

        foreach ($this->components as $component) {
            $output[] = $component->__toString();
        }

        $output[] = "PRODID:{$this->prodId}";
        return implode(self::EOL, $output);
    }


}
