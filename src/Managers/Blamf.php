<?php

namespace Remotelyliving\PlumbusPhp\Managers;

use Remotelyliving\PlumbusPhp\Exceptions\OutOfSchleemException;
use Remotelyliving\PlumbusPhp\Models\DingleBop;
use Remotelyliving\PlumbusPhp\Models\Fleeb;
use Remotelyliving\PlumbusPhp\Models\Grumbo;
use Remotelyliving\PlumbusPhp\Models\Schleem;

class Blamf {

  const FLEEB_DEFAULT_PIECES = 6;

  /**
   * @param \Remotelyliving\PlumbusPhp\Models\Fleeb $fleeb
   *
   * @return array
   */
  public function cutFleeb( Fleeb $fleeb ) {

    $pieces = [];

    while ( count( $pieces ) < self::FLEEB_DEFAULT_PIECES ) {
      $pieces[] = clone $fleeb;
    }

    return $pieces;

  } // cutFleeb

  /**
   * @param \Remotelyliving\PlumbusPhp\Models\Grumbo $grumbo
   */
  public function shavePloobis( Grumbo $grumbo ) {

    unset( $grumbo->ploobis );

  } // shavePloobis

  /**
   * @param \Remotelyliving\PlumbusPhp\Models\Grumbo $grumbo
   *
   * @return \Remotelyliving\PlumbusPhp\Models\DingleBop
   */
  public function shaveGrumboAway( Grumbo $grumbo ) {

    return $grumbo->extractDinglebop();

  } // shaveGrumboAway

  /**
   * @param \Remotelyliving\PlumbusPhp\Models\Grumbo $grumbo
   */
  public function rubAgainstTheChumbles( Grumbo $grumbo ) {
    
    foreach ( $grumbo->chumbles as $chumble ) {
      $chumble->setWasRubbedByBlamf( true );
    }
    
  } // rubAgainstTheChumbles

  /**
   * @param \Remotelyliving\PlumbusPhp\Models\DingleBop $dingleBop
   * @param \Remotelyliving\PlumbusPhp\Models\Schleem   $schleem
   *
   * @return \Remotelyliving\PlumbusPhp\Models\Schleem
   * 
   * @throws \Remotelyliving\PlumbusPhp\Exceptions\OutOfSchleemException
   */
  public function smoothDinglebopWithSchleem( DingleBop $dingleBop, Schleem $schleem ) {

    if ( $schleem->isUsedUp() ) {
      throw new OutOfSchleemException();
    }

    $dingleBop->handleSmoothing( $schleem );

    $schleem->markSchleemAsUsed();
    
    return $schleem;

  } // smoothDinglebopWithSchleem

  /**
   * @param \Remotelyliving\PlumbusPhp\Models\DingleBop $dingleBop
   * @param \Remotelyliving\PlumbusPhp\Models\Fleeb     $fleeb
   */
  public function rubDinglebopWithFleeb( DingleBop $dingleBop, Fleeb $fleeb ) {
    
    $dingleBop->handleRubbing( $fleeb );
    
  } // rubDinglebopWithFleeb

} // Blamf
