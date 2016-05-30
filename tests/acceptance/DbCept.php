<?php
$I = new AcceptanceTester( $scenario );
$I->wantTo( 'ensure that I can check DB' );
$I->dontSeeInDatabase('test_table_1', array('field_varchar_2' => '123', 'field_varchar_1' => '321'));
$I->seeInDatabase('test_table_1', array('field_varchar_2' => '2012-06-28 06:58:43', 'field_enum' => 'Y'));