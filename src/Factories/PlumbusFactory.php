<?php

namespace Remotelyliving\PlumbusPhp\Factories;

use Remotelyliving\PlumbusPhp\Exceptions\OutOfSchleemException;
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
   * @var \Remotelyliving\PlumbusPhp\Models\Fleeb
   */
  private $_fleeb;

  /**
   * @var \Remotelyliving\PlumbusPhp\Managers\Schlami
   */
  private $_schlami;

  /**
   * @var \Remotelyliving\PlumbusPhp\Managers\Blamf
   */
  private $_blamf;

  /**
   * @var \Remotelyliving\PlumbusPhp\Models\Schleem
   */
  private $_schleem;

  public function __construct() {

    $this->_fleeb   = new Fleeb( new FleebJuice() );
    $this->_schlami = new Schlami();
    $this->_blamf   = new Blamf();
    $this->_schleem = new Schleem();

  } // __construct

  /**
   * @return \Remotelyliving\PlumbusPhp\Plumbus
   */
  public function make() {

    $dinglebop = new DingleBop();

    // re-purpose schleem
    try {
      $this->_schleem = $this->_blamf->smoothDinglebopWithSchleem( $dinglebop, $this->_schleem );
    }
    catch( OutOfSchleemException $e ) {
      $this->_schleem = $this->_blamf->smoothDinglebopWithSchleem( $dinglebop, new Schleem() );
    }

    $grumbo = new Grumbo();
    $grumbo->push( $dinglebop );

    $this->_blamf->rubDinglebopWithFleeb( $grumbo->dinglebop, $this->_fleeb );

    $this->_schlami->rubDingleBop( $grumbo->dinglebop );
    $this->_schlami->spitOnDingleBop( $grumbo->dinglebop );

    $this->_blamf->cutFleeb( $this->_fleeb );
    $this->_blamf->rubAgainstTheChumbles( $grumbo );
    $this->_blamf->shavePloobis( $grumbo );

    return new Plumbus( $this->_blamf->shaveGrumboAway( $grumbo ) );

  } // make
  
} // PlumbusFactory
