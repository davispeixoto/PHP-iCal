<?php namespace Davispeixoto\Calendar\Components;

/**
 * Class Event
 * @package Davispeixoto\Calendar\Components
 */

/**
 * Created by Davis Peixoto <davis.peixoto@gmail.com>.
 * Date: 5/11/15
 * Time: 7:03 PM
 * Powered By PhpStorm
 */

use Davispeixoto\Calendar\Contracts\ComponentInterface;

class Event implements ComponentInterface
{
    public $dtstamp;
    public $uid;
    public $dtstart;
    public $dtend;
    public $durantion;
    public $class;
    public $created;
    public $description;
    public $geo;
    public $lastMod;
    public $location;
    public $organizer;
    public $priority;
    public $seq;
    public $status;
    public $summary;
    public $transp;
    public $url;
    public $recurid;

    public $rrule;

    public $attach;
    public $attendee;
    public $categories;
    public $comment;
    public $contact;
    public $exdate;
    public $rstatus;
    public $related;
    public $resources;
    public $rdate;
    public $xProp;
    public $ianaProp;
}
