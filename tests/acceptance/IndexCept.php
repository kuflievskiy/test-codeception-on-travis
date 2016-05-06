<?php
$I = new AcceptanceTester( $scenario );
$I->wantTo( 'ensure that I can see the Index page' );
$I->amOnPage( '/index.html' );
$I->see( 'Lorem Ipsum' );