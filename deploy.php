<?php

/**
 * demo file
 */

require __DIR__ . '/vendor/autoload.php';

try {
    \Deploy\Core\Deploy::startWithScenarios(
        //... instances
    );
} catch (\Exception $exception) {
}