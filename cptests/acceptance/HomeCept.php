<?php
/**
 * @var \Codeception\Scenario $scenario
 */
$I = new AcceptanceTester($scenario);

$I->am('user');
$I->amOnPage('/web1.php/demo/index');
$I->see('Hello UPhalcon');