#!/usr/bin/php
<?php

require_once 'lib.php';

$person = new Person();
$person->setName('Leonid Mamchenkov');
$person->setCountry('Cyprus');
$person->setGender('m');
$person->setAwesome(true);

print $person->getName() . ' is from ' . $person->getCountry() . ' and ';
print ($person->getGender() == 'm') ? 'he' : 'she';
print ($person->getAwesome()) ? ' is ' : ' is NOT ';
print "awesome\n";

?>
