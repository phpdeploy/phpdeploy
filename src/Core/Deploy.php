<?php

namespace Deploy\Core;

use Deploy\Scenario\BaseScenario;
use Symfony\Component\Console\Application;

class Deploy extends Application
{
    /**
     * @param BaseScenario[] ...$args
     * @return Deploy
     * @throws \Exception
     */
    public static function startWithScenarios(...$args): self
    {
        $application = new static();

        foreach ($args as $arg) {
            if ($arg && \is_object($arg) && $arg instanceof BaseScenario) {
                $application->add($arg);
            }
        }

        $application->run();

        return $application;
    }
}