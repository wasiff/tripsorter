<?php
/**
 * Class BoardingcardAirportbus
 */

namespace Wasif\tripSorter\BoardingCards;
use Wasif\tripSorter\BoardingCards\BoardingcardAbstract;

/**
 * Class BoardingcardAirportbus
 * Airport Bus Boarding Pass that inherits BoardingcardAbstract
 *
 * Purpose of this class is that it is possible to add a new transportation method by extending it with BoardingcardAbstract,
 * we can add any new method, this is just for the sake of completing the requirement
 *
 * @package Wasif\tripSorter
 * @author Wasif Khalil <wk@wasiff.com>
 */
class BoardingcardAirportbus extends BoardingcardAbstract{
    /**
     * Constructor for BoardingcardAirportbus
 
    * @param string $departureLoc Saves departure location of boarding pass
    * @param string $arrivalLoc Saves Arrival location of boarding pass
    * @param string $seatNo Seat number of boarding pass
     */
    function __construct($departureLoc, $arrivalLoc, $seatNo = null){
        parent::__construct($departureLoc, $arrivalLoc, $seatNo);

    }

    /**
     * String representation of the Airportbus Boarding card object
     */
    public function toString(){
        return 'Take the airport bus from ' . $this->get('departureLoc') . ' to ' . $this->get('arrivalLoc') . '. ' . ($this->get('seatNo') ? 'Sit in seat ' . $this->get('seatNo') . '.' : 'No seat assignment.');
    }

}



