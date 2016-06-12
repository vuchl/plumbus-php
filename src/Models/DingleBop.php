<?php

namespace Remotelyliving\PlumbusPhp\Models;

use Remotelyliving\PlumbusPhp\Exceptions\FleebHydrationException;
use Remotelyliving\PlumbusPhp\Interfaces\Plumbusable;

class DingleBop implements Plumbusable {

  const LEAST_SEVERAL_HIZZARDS_COUNT = 5;

  /**
   * @var bool
   */
  private $_was_rubbed_by_fleeb;

  /**
   * @var bool
   */
  private $_was_smoothed_with_schleem;

  /**
   * @var bool
   */
  private $_was_rubbed_by_schlami;

  /**
   * @var bool
   */
  private $_was_spat_upon_by_schlami;

  /**
   * @var \Remotelyliving\PlumbusPhp\Models\Hizzard[]
   */
  private $_hizzards;

  public function __construct() {

    $this->setWasRubbedBySchlami( false );
    $this->setWasSpatOnBySchlami( false );
    $this->_setWasRubbedByFleeb( false );
    $this->_setWasSmoothedWithSchleem( false );
    $this->_setHizzards();

  } // __construct

  /**
   * @param \Remotelyliving\PlumbusPhp\Models\Schleem|null $schleem
   */
  public function handleSmoothing( Schleem $schleem = null ) {

    $this->_setWasSmoothedWithSchleem( (bool) $schleem );

  } // handleSmoothing

  /**
   * @param \Remotelyliving\PlumbusPhp\Models\Fleeb $fleeb
   *
   * @throws \Remotelyliving\PlumbusPhp\Exceptions\FleebHydrationException
   */
  public function handleRubbing( Fleeb $fleeb ) {

    if ( !$fleeb->hasAllTheFleebJuice() ) {
      throw new FleebHydrationException( 'This fleeb is has none of the fleeb juice.' );
    }

    $this->_setWasRubbedByFleeb( true );

  } // handleRubbing
  
  /**
   * @return bool
   */
  public function wasSmoothedWithSchleem() {

    return $this->_was_smoothed_with_schleem;

  } // wasSmoothedWithSchleem

  /**
   * @param bool $was_rubbed
   */
  public function setWasRubbedBySchlami( $was_rubbed ) {

    $this->_was_rubbed_by_schlami = (bool) $was_rubbed;

  } // setWasRubbedBySchlami

  /**
   * @param bool $was_spat_upon
   */
  public function setWasSpatOnBySchlami( $was_spat_upon ) {

    $this->_was_spat_upon_by_schlami = (bool) $was_spat_upon;

  } // setWasSpatOnBySchlami

  /**
   * @return bool
   */
  public function areSeveralHizzardsInTheWay() {

    $are_several_hizzards = ( count( $this->_hizzards ) >= self::LEAST_SEVERAL_HIZZARDS_COUNT );

    if ( !$are_several_hizzards ) {
      return false;
    }

    foreach ( $this->_hizzards as $hizzard ) {
      if ( !$hizzard->isInTheWay() ) {
        return false;
      }
    }

    return true;

  } // areSeveralHizzardsInTheWay

  /**
   * @return bool
   */
  public function isPlumbusable() {

    return ( $this->_was_rubbed_by_fleeb
              && $this->_was_rubbed_by_schlami
              && $this->_was_spat_upon_by_schlami
              && $this->_was_smoothed_with_schleem );

  } // isPlumbusable

  /**
   * @param bool $was_smoothed
   */
  private function _setWasSmoothedWithSchleem( $was_smoothed ) {

    $this->_was_smoothed_with_schleem = (bool) $was_smoothed;

  } // _setWasSmoothedWithSchleem

  /**
   * @param bool $was_rubbed
   */
  public function _setWasRubbedByFleeb( $was_rubbed ) {

    $this->_was_rubbed_by_fleeb = (bool) $was_rubbed;

  } // _setWasRubbedByFleeb

  private function _setHizzards() {

    $this->_hizzards[] = new Hizzard();

    if ( count( $this->_hizzards ) < self::LEAST_SEVERAL_HIZZARDS_COUNT ) {
      $this->_setHizzards();
    }

  } // _setHizzards

} // DingleBop
