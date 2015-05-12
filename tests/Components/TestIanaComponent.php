<?php

/**
 * Created by Davis Peixoto <davis.peixoto@gmail.com>.
 * Date: 5/12/15
 * Time: 11:35 AM
 * Powered By PhpStorm
 */

use Davispeixoto\Calendar\Components\Iana;

class TestIanaComponent extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider constructIanaProvider
     * @param $param
     * @param $value
     * @param $expected
     */
    public function testConstruct($param, $value, $expected)
    {
        $this->assertEquals($expected, new Iana($param, $value));
    }

    /**
     * @dataProvider exceptionIanaProvider
     * @param $param
     * @param $value
     * @return Iana
     * @expectedException Davispeixoto\Calendar\Exceptions\CalendarException
     * @expectedExceptionMessage IANA Properties must not start their names with 'X-', as this is reserved to Xprop
     */
    public function testException($param, $value)
    {
        return new Iana($param, $value);
    }

    /**
     * @dataProvider outputIanaProvider
     * @param $param
     * @param $value
     * @param $expected
     */
    public function testOutput($param, $value, $expected)
    {
        $iana = new Iana($param, $value);
        $this->assertEquals($expected, $iana->__toString());
    }

    public function constructIanaProvider()
    {
        return array(
            array('NON-SMOKING;VALUE=BOOLEAN', null, new Iana('NON-SMOKING;VALUE=BOOLEAN', null)),
            array('NON-SMOKING;VALUE=BOOLEAN', '', new Iana('NON-SMOKING;VALUE=BOOLEAN', '')),
            array('NON-SMOKING;VALUE=BOOLEAN', 'This is a common value', new Iana('NON-SMOKING;VALUE=BOOLEAN', 'This is a common value')),
        );
    }

    public function exceptionIanaProvider()
    {
        return array(
            array('X-DAVIS-FOO', null),
            array(null, null),
            array('', null),
            array('X-DAVIS-FOO', ''),
            array(null, ''),
            array('', ''),
            array('X-DAVIS-FOO', 'This is a common value'),
            array(null, 'This is a common value'),
            array('', 'This is a common value'),
        );
    }

    public function outputIanaProvider()
    {
        return array(
            array('NON-SMOKING;VALUE=BOOLEAN', null, "NON-SMOKING;VALUE=BOOLEAN:\r\n"),
            array('NON-SMOKING;VALUE=BOOLEAN', '', "NON-SMOKING;VALUE=BOOLEAN:\r\n"),
            array('NON-SMOKING;VALUE=BOOLEAN', 'This is a common value', "NON-SMOKING;VALUE=BOOLEAN:This is a common value\r\n"),
        );
    }
}
