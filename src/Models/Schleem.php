<?php

namespace Remotelyliving\PlumbusPhp\Models;

class Schleem {

  const DEFAULT_UNITS_OF_SCHLEEM = 10;

  private $_remaining_units_of_schleem;

  public function __construct() {

    $this->_remaining_units_of_schleem = self::DEFAULT_UNITS_OF_SCHLEEM;

  } // __construct

  public function markSchleemAsUsed() {

    -- $this->_remaining_units_of_schleem;

  } // markSchleemAsUsed

  /**
   * @return int
   */
  public function isUsedUp() {

    return ( $this->_remaining_units_of_schleem <= 0 );

  } // isUsedUp

} // Schleem
