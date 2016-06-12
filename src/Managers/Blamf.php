<?php

namespace Remotelyliving\PlumbusPhp\Managers;

use Remotelyliving\PlumbusPhp\Models\DingleBop;
use Remotelyliving\PlumbusPhp\Models\Fleeb;
use Remotelyliving\PlumbusPhp\Models\Grumbo;
use Remotelyliving\PlumbusPhp\Models\Schleem;

class Blamf {

  const FLEEB_DEFAULT_PEICES = 6;

  /**
   * @param \Remotelyliving\PlumbusPhp\Models\Fleeb $fleeb
   *
   * @return array
   */
  public static function cutFleeb( Fleeb $fleeb ) {

    $pieces = [];

    while ( count( $pieces ) < self::FLEEB_DEFAULT_PEICES ) {
      $pieces[] = clone $fleeb;
    }

    return $pieces;

  } // cutFleeb

  /**
   * @param \Remotelyliving\PlumbusPhp\Models\Grumbo $grumbo
   */
  public static function shavePloobis( Grumbo $grumbo ) {

    unset( $grumbo->ploobis );

  } // shavePloobis

  /**
   * @param \Remotelyliving\PlumbusPhp\Models\Grumbo $grumbo
   *
   * @return \Remotelyliving\PlumbusPhp\Models\DingleBop
   */
  public static function shaveGrumboAway( Grumbo $grumbo ) {

    return $grumbo->extractDinglebop();

  } // shaveGrumboAway

  /**
   * @param \Remotelyliving\PlumbusPhp\Models\Grumbo $grumbo
   */
  public static function rubAgainstTheChumbles( Grumbo $grumbo ) {
    
    foreach ( $grumbo->chumbles as $chumble ) {
      $chumble->setWasRubbedByBlamf( true );
    }
    
  } // rubAgainstTheChumbles

  /**
   * @param \Remotelyliving\PlumbusPhp\Models\DingleBop $dingleBop
   * @param \Remotelyliving\PlumbusPhp\Models\Schleem   $schleem
   *
   * @return \Remotelyliving\PlumbusPhp\Models\Schleem
   */
  public static function smoothDinglebopWithSchleem( DingleBop $dingleBop, Schleem $schleem ) {

    $dingleBop->handleSmoothing( $schleem );

    return $schleem;

  } // smoothDinglebopWithSchleem

  /**
   * @param \Remotelyliving\PlumbusPhp\Models\DingleBop $dingleBop
   * @param \Remotelyliving\PlumbusPhp\Models\Fleeb     $fleeb
   */
  public static function rubDinglebopWithFleeb( DingleBop $dingleBop, Fleeb $fleeb ) {
    
    $dingleBop->handleRubbing( $fleeb );
    
  } // rubDinglebopWithFleeb

} // Blamf
