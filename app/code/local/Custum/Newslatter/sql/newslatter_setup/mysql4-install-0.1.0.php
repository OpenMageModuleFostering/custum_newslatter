<?php

$installer = $this;

$installer->startSetup();

$installer->run("ALTER TABLE `newsletter_subscriber` ADD `lastname` VARCHAR( 255 ) NOT NULL AFTER `customer_id`");

$installer->endSetup(); 