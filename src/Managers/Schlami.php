<?php

namespace Remotelyliving\PlumbusPhp\Managers;

use Remotelyliving\PlumbusPhp\Models\DingleBop;

class Schlami {

  /**
   * @param \Remotelyliving\PlumbusPhp\Models\DingleBop $dingleBop
   */
  public function spitOnDingleBop( DingleBop $dingleBop ) {

    $dingleBop->setWasSpatOnBySchlami( true );

  } // spitOnDingleBop

  /**
   * @param \Remotelyliving\PlumbusPhp\Models\DingleBop $dingleBop
   */
  public function rubDingleBop( DingleBop $dingleBop ) {

    $dingleBop->setWasRubbedBySchlami( true );

  } // rubDingleBop
  
} // Schlami
