<?php

namespace Remotelyliving\PlumbusPhp\Models;

use Remotelyliving\PlumbusPhp\Exceptions\PlumbusPhpException;

class Grumbo {

  const CHUMBLE_PER_GRUMBO_COUNT = 7;

  /**
   * @var \Remotelyliving\PlumbusPhp\Models\Chumble[]
   */
  public $chumbles;

  /**
   * @var \Remotelyliving\PlumbusPhp\Models\Ploobis
   */
  public $ploobis;

  /**
   * @var \Remotelyliving\PlumbusPhp\Models\DingleBop
   */
  public $dinglebop;

  /**
   * @throws \Remotelyliving\PlumbusPhp\Exceptions\FleebHydrationException
   */
  public function __construct() {

    $this->ploobis = new Ploobis();

    $this->_setChumbles();

  } // __construct

  /**
   * @param \Remotelyliving\PlumbusPhp\Models\DingleBop $dinglebop
   *
   * @throws \Remotelyliving\PlumbusPhp\Exceptions\PlumbusPhpException
   */
  public function push( DingleBop $dinglebop ) {

    if ( !$dinglebop->wasSmoothedWithSchleem() ) {
      throw new PlumbusPhpException( 'This dinglebop has not been smoothed with schleem yet.' );
    }

    $this->dinglebop = $dinglebop;

  } // push

  /**
   * @return \Remotelyliving\PlumbusPhp\Models\DingleBop
   *
   * @throws \Remotelyliving\PlumbusPhp\Exceptions\PlumbusPhpException
   */
  public function extractDinglebop() {

    if ( isset( $this->ploobis ) ) {
      throw new PlumbusPhpException( 'Just shave the ploobis already.' );
    }

    if ( !$this->_haveAllChumblesBeenRubbed() ) {
      throw new PlumbusPhpException( 'You should totally  have rubbed these chumbles. Just look at em!' );
    }

    return $this->dinglebop;

  } // extractDinglebop

  private function _setChumbles() {

    while ( count( $this->chumbles ) < self::CHUMBLE_PER_GRUMBO_COUNT ) {
      $this->chumbles[] = new Chumble();
    }

  } // _setChumbles

  /**
   * @return bool
   */
  private function _haveAllChumblesBeenRubbed() {

    if ( !$this->chumbles ) {
      return false;
    }

    foreach ( $this->chumbles as $chumble ) {
      if ( !$chumble->wasRubbedByBlamf() ) {
        return false;
      }
    }

    return true;

  } // _haveAllChumblesBeenRubbed

} // Grumbo
