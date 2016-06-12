<?php

namespace Remotelyliving\PlumbusPhp\Factories;

use Remotelyliving\PlumbusPhp\Managers\Blamf;
use Remotelyliving\PlumbusPhp\Managers\Schlami;
use Remotelyliving\PlumbusPhp\Models\DingleBop;
use Remotelyliving\PlumbusPhp\Models\Fleeb;
use Remotelyliving\PlumbusPhp\Models\FleebJuice;
use Remotelyliving\PlumbusPhp\Models\Grumbo;
use Remotelyliving\PlumbusPhp\Models\Schleem;
use Remotelyliving\PlumbusPhp\Plumbus;

class PlumbusFactory {

  /**
   * @var \Remotelyliving\PlumbusPhp\Models\FleebJuice
   */
  private $_fleeb_juice;

  /**
   * @var \Remotelyliving\PlumbusPhp\Models\Fleeb
   */
  private $_fleeb;

  /**
   * @var \Remotelyliving\PlumbusPhp\Models\Schleem|null
   */
  private $_schleem = null;

  public function __construct() {

    $this->_fleeb_juice = new FleebJuice();
    $this->_fleeb       = new Fleeb( $this->_fleeb_juice );

  } // __construct

  /**
   * @return \Remotelyliving\PlumbusPhp\Plumbus
   */
  public function make() {
  
    if ( !$this->_schleem ) {
      $this->_schleem = new Schleem();
    }

    $dinglebop = new DingleBop();

    // re-purpose schleem
    $this->_schleem = Blamf::smoothDinglebopWithSchleem( $dinglebop, $this->_schleem );

    $grumbo = new Grumbo();
    $grumbo->push( $dinglebop );

    Blamf::rubDinglebopWithFleeb( $grumbo->dinglebop, $this->_fleeb );

    Schlami::rubDingleBop( $grumbo->dinglebop );
    Schlami::spitOnDingleBop( $grumbo->dinglebop );

    Blamf::cutFleeb( $this->_fleeb );
    Blamf::rubAgainstTheChumbles( $grumbo );
    Blamf::shavePloobis( $grumbo );

    return new Plumbus( Blamf::shaveGrumboAway( $grumbo ) );

  } // make
  
} // PlumbusFactory
