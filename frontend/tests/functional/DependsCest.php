<?php
namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;
use Codeception\Example;

/* @var $scenario \Codeception\Scenario */

class DependsCest
{
     /**
      * @depends simple
      */
     public function dependsFollowUp(FunctionalTester $I)
     {
         expect_that(true);
     }

     public function simple(FunctionalTester $I)
     {
          expect_that(true);
     }
 
    /**
      * @example {"key": true}
      */
     public function examplePass(FunctionalTester $I, Example $e)
     {
         expect_that($e['key']);
     }

     /**
      * @depends examplePass
      */
     public function dependsSkip(FunctionalTester $I)
     {
         expect_that(true);
     }
}
