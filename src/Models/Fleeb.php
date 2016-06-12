<?php

namespace Remotelyliving\PlumbusPhp\Models;

class Fleeb {

  /**
   * @var \Remotelyliving\PlumbusPhp\Models\FleebJuice
   */
  private $_fleeb_juice;

  /**
   * @param \Remotelyliving\PlumbusPhp\Models\FleebJuice|null $fleeb_juice
   */
  public function __construct( FleebJuice $fleeb_juice = null ) {

    $this->_fleeb_juice = $fleeb_juice;

  } // __construct

  /**
   * @return bool
   */
  public function hasAllTheFleebJuice() {

    return (bool) $this->_fleeb_juice;

  } // hasAllTheFleebJuice

} // Fleeb
