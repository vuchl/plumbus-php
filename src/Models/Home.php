<?php

namespace Remotelyliving\PlumbusPhp\Models;

use Remotelyliving\PlumbusPhp\Plumbus;

class Home {

  /**
   * @var \Remotelyliving\PlumbusPhp\Plumbus|null
   */
  private $_plumbus;

  /**
   * @param \Remotelyliving\PlumbusPhp\Plumbus $plumbus
   */
  public function __construct( Plumbus $plumbus ) {

    $this->_plumbus = $plumbus;

  } // __construct

  /**
   * @return bool
   */
  public function hasPlumbus() {

    return (bool) $this->_plumbus;

  } // hasPlumbus

  /**
   * @return null|\Remotelyliving\PlumbusPhp\Plumbus
   */
  public function getPlumbus() {

    return $this->_plumbus;

  } // getPlumbus

} // Home
