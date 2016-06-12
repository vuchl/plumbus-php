<?php

namespace Remotelyliving\PlumbusPhp\Models;

class Chumble {

  /**
   * @var bool
   */
  private $_was_rubbed_by_blamf;

  public function __construct() {

    $this->setWasRubbedByBlamf( false );

  } // __construct

  /**
   * @param bool $was_rubbed
   */
  public function setWasRubbedByBlamf( $was_rubbed ) {

    $this->_was_rubbed_by_blamf = (bool) $was_rubbed;

  } // setWasRubbedByBlamf

  /**
   * @return bool
   */
  public function wasRubbedByBlamf() {

    return $this->_was_rubbed_by_blamf;

  } // wasRubbedByBlamf

} // Chumble
