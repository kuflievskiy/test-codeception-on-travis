<?php
$I = new AcceptanceTester( $scenario );
$I->am( 'A standard user' );
$I->wantTo( 'ensure that I can see the Index page' );
$I->amOnPage( '/' );
$I->see( 'Lorem Ipsum' );