<?php

namespace FlowIntegrationTest;

use Flow\Console\Application;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArgvInput;

/**
 * Class ConsoleIntegrationTest
 *
 * PHP Version 5
 *
 * @category  PHP
 * @package   FlowIntegrationTest
 * @author    Simplicity Trade GmbH <it@simplicity.ag>
 * @copyright 2014-2016 Simplicity Trade GmbH
 * @license   Proprietary http://www.simplicity.ag
 */
class ConsoleIntegrationTest extends TestCase
{
    public function test()
    {
		/** @var Application $application */
		$application = new Application();

		$argvInput = new ArgvInput(array('cli.php', 'docker'));
        $application->run($argvInput);
    }
}
