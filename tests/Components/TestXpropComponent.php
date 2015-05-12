<?php

/**
 * Created by Davis Peixoto <davis.peixoto@gmail.com>.
 * Date: 5/12/15
 * Time: 11:35 AM
 * Powered By PhpStorm
 */

use Davispeixoto\Calendar\Components\Xprop;

class TestXpropComponent extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider constructXpropProvider
     * @param $param
     * @param $value
     * @param $expected
     */
    public function testConstruct($param, $value, $expected)
    {
        $this->assertEquals($expected, new Xprop($param, $value));
    }

    /**
     * @dataProvider exceptionXpropProvider
     * @param $param
     * @param $value
     * @return Xprop
     * @expectedException Davispeixoto\Calendar\Exceptions\CalendarException
     * @expectedExceptionMessage X-Properties must start their names with 'X-', followed by vendor id with a minimum of 3 characters, then the property name
     */
    public function testException($param, $value)
    {
        return new Xprop($param, $value);
    }

    /**
     * @dataProvider outputXpropProvider
     * @param $param
     * @param $value
     * @param $expected
     */
    public function testOutput($param, $value, $expected)
    {
        $obj = new Xprop($param, $value);
        $this->assertEquals($expected, $obj->__toString());
    }

    public function constructXpropProvider()
    {
        return array(
            array('X-DAVIS-FOO', null, new Xprop('X-DAVIS-FOO', null)),
            array('X-DAVIS-FOO', '', new Xprop('X-DAVIS-FOO', '')),
            array('X-DAVIS-FOO', 'This is a common value', new Xprop('X-DAVIS-FOO', 'This is a common value')),
        );
    }

    public function exceptionXpropProvider()
    {
        return array(
            array('NON-SMOKING;VALUE=BOOLEAN', null),
            array('X-DA-FOO', null),
            array('X-DAVIS-', null),
            array('', null),
            array(null, null),
            array('NON-SMOKING;VALUE=BOOLEAN', ''),
            array('X-DA-FOO', ''),
            array('X-DAVIS-', ''),
            array('', ''),
            array(null, ''),
            array('NON-SMOKING;VALUE=BOOLEAN', 'This is a common value'),
            array('X-DA-FOO', 'This is a common value'),
            array('X-DAVIS-', 'This is a common value'),
            array('', 'This is a common value'),
            array(null, 'This is a common value'),
        );
    }

    public function outputXpropProvider()
    {
        return array(
            array('X-DAVIS-FOO', null, "X-DAVIS-FOO:\r\n"),
            array('X-DAVIS-FOO', '', "X-DAVIS-FOO:\r\n"),
            array('X-DAVIS-FOO', 'This is a common value', "X-DAVIS-FOO:This is a common value\r\n"),
        );
    }
}
