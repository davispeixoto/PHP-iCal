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
    public $dtstamp;
    public $uid;
    public $dtstart;
    public $dtend;
    public $durantion;
    public $class;
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
    public $x_prop;
    public $iana_prop;


    /*
}
*(
;
; The following are REQUIRED,
; but MUST NOT occur more than once.
;
dtstamp / uid /
;
; The following is REQUIRED if the component
; appears in an iCalendar object that doesn't
                  ; specify the "METHOD" property; otherwise, it
                  ; is OPTIONAL; in any case, it MUST NOT occur
                  ; more than once.
                  ;
                  dtstart /
                  ;
                  ; The following are OPTIONAL,
                  ; but MUST NOT occur more than once.
                  ;
                  class / created / description / geo /
                  last-mod / location / organizer / priority /
                  seq / status / summary / transp /
                  url / recurid /
                  ;
                  ; The following is OPTIONAL,
                  ; but SHOULD NOT occur more than once.
                  ;
                  rrule /
                  ;
                  ; Either 'dtend' or 'duration' MAY appear in
                  ; a 'eventprop', but 'dtend' and 'duration'
                  ; MUST NOT occur in the same 'eventprop'.
                  ;
                  dtend / duration /
                  ;
                  ; The following are OPTIONAL,
                  ; and MAY occur more than once.
                  ;
                  attach / attendee / categories / comment /
                  contact / exdate / rstatus / related /
                  resources / rdate / x-prop / iana-prop
                  ;
                  )
    */
}
