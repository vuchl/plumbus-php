<?php

namespace Remotelyliving\PlumbusPhp\Contexts;

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;

use PHPUnit_Framework_Assert as Assert;

use Remotelyliving\PlumbusPhp\Abstracts\RegularOldPlumbus;
use Remotelyliving\PlumbusPhp\Exceptions\FleebHydrationException;
use Remotelyliving\PlumbusPhp\Factories\PlumbusFactory;
use Remotelyliving\PlumbusPhp\Managers\Blamf;
use Remotelyliving\PlumbusPhp\Managers\Schlami;
use Remotelyliving\PlumbusPhp\Models\DingleBop;
use Remotelyliving\PlumbusPhp\Models\Fleeb;
use Remotelyliving\PlumbusPhp\Models\FleebJuice;
use Remotelyliving\PlumbusPhp\Models\Grumbo;
use Remotelyliving\PlumbusPhp\Models\Home;
use Remotelyliving\PlumbusPhp\Models\Schleem;
use Remotelyliving\PlumbusPhp\Plumbus;

/**
 * Defines application features from the specific context.
 */
class PlumbusContext implements Context, SnippetAcceptingContext {

  /**
   * @var \Remotelyliving\PlumbusPhp\Models\Dinglebop
   */
  private $_dingle_bop;
  
  /**
   * @var \Remotelyliving\PlumbusPhp\Models\Grumbo
   */
  private $_grumbo;

  /**
   * @var \Remotelyliving\PlumbusPhp\Managers\Schlami
   */
  private $_schlami;

  /**
   * @Given everyone has a plumbus in their home
   */
  public function everyoneHasAPlumbusInTheirHome() {

    $plumbus = ( new PlumbusFactory() )->make();
    $home    = new Home( $plumbus );

    Assert::isTrue( $home->hasPlumbus() );

  } // everyoneHasAPlumbusInTheirHome

  /**
   * @Given first they take the dinglebop
   */
  public function firstTheyTakeTheDinglebop() {

    $this->_dingle_bop = new DingleBop();
    
  } // firstTheyTakeTheDinglebop
  
  /**
   * @Then they smooth it out with a bunch of schleem
   */
  public function theySmoothItOutWithABunchOfSchleem() {
    
    Blamf::smoothDinglebopWithSchleem( $this->_dingle_bop, new Schleem() );

  } // theySmoothItOutWithABunchOfSchleem

  /**
   * @Given the schleem is then repurposed for later batches
   */
  public function theSchleemIsThenRepurposedForLaterBatches() {

    // throw new PendingException();

  } // theSchleemIsThenRepurposedForLaterBatches

  /**
   * @Then they take the dinglebop
   */
  public function theyTakeTheDinglebop() {

    Assert::assertInstanceOf( DingleBop::class, $this->_dingle_bop );

  } // theyTakeTheDinglebop

  /**
   * @Then they push it through the grumbo where the fleeb is rubbed against it
   */
  public function theyPushItThroughTheGrumboWhereTheFleebIsRubbedAgainstIt() {

    $this->_grumbo = new Grumbo();
    $this->_grumbo->push( $this->_dingle_bop );

    Blamf::rubDinglebopWithFleeb( $this->_grumbo->dinglebop, new Fleeb( new FleebJuice() ) );

    Assert::assertSame( $this->_dingle_bop, $this->_grumbo->dinglebop );

  } // theyPushItThroughTheGrumboWhereTheFleebIsRubbedAgainstIt

  /**
   * @Given It is important that the fleeb is rubbed because the fleeb has all of the fleeb juice
   */
  public function itIsImportantThatTheFleebIsRubbedBecauseTheFleebHasAllOfTheFleebJuice() {

    try {
      Blamf::rubDinglebopWithFleeb( $this->_grumbo->dinglebop, new Fleeb() );
    }
    catch( FleebHydrationException $e ) {
      return;
    }

    throw new \PHPUnit_Framework_Exception();

  } // itIsImportantThatTheFleebIsRubbedBecauseTheFleebHasAllOfTheFleebJuice

  /**
   * @Then a schlami shows up
   */
  public function aSchlamiShowsUp() {

    $this->_schlami = new Schlami();
    
    Assert::isInstanceOf( Schlami::class, $this->_schlami );

  } // aSchlamiShowsUp

  /**
   * @Then he rubs it
   */
  public function heRubsIt() {

    $this->_schlami->rubDingleBop( $this->_grumbo->dinglebop );

  } // heRubsIt

  /**
   * @Then spits on it
   */
  public function spitsOnIt() {

    $this->_schlami->spitOnDingleBop( $this->_grumbo->dinglebop );

  } // spitsOnIt

  /**
   * @Then they cut the fleeb
   */
  public function theyCutTheFleeb() {

    $pieces = Blamf::cutFleeb( new Fleeb() );

    Assert::assertEquals( Blamf::FLEEB_DEFAULT_PEICES, count( $pieces ) );

    foreach ( $pieces as $piece_of_fleeb ) {
      Assert::assertInstanceOf( Fleeb::class, $piece_of_fleeb );
    }

  } // theyCutTheFleeb

  /**
   * @Given there are several hizzards in the way
   */
  public function thereAreSeveralHizzardsInTheWay() {

    Assert::assertTrue( $this->_grumbo->dinglebop->areSeveralHizzardsInTheWay() );

  } // thereAreSeveralHizzardsInTheWay

  /**
   * @Then the blamfs rub against the chumbles
   */
  public function theBlamfsRubAgainstTheChumbles() {

    Blamf::rubAgainstTheChumbles( $this->_grumbo );

  } // theBlamfsRubAgainstTheChumbles

  /**
   * @Then the ploobis and grumbo are shaved away
   */
  public function thePloobisAndGrumboAreShavedAway() {

    Blamf::shavePloobis( $this->_grumbo );

    Assert::assertFalse( isset( $this->_grumbo->ploobis ) );

    $this->_dingle_bop = Blamf::shaveGrumboAway( $this->_grumbo );

  } // thePloobisAndGrumboAreShavedAway

  /**
   * @Then that leaves you with a regular old plumbus
   */
  public function thatLeavesYouWithARegularOldPlumbus() {

    $plumbus = new Plumbus( $this->_dingle_bop );

    Assert::assertInstanceOf( RegularOldPlumbus::class, $plumbus );

  } // thatLeavesYouWithARegularOldPlumbus

} // PlumbusContext
