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
class Iana
{
    private $param;
    private $value;

    public function __construct($param, $value)
    {
        $this->param = $param;
        $this->value = $value;
    }

    public function __toString()
    {
        //
        return 'a';
    }
}
