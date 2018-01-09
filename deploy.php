<?php

/**
 * demo file
 */

require __DIR__ . '/vendor/autoload.php';

try {
    \Deployer\Core\Deploy::startWithScenarios(
        //... instances
    );
} catch (\Exception $exception) {
}