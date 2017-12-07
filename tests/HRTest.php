<?php

use PHPUnit\Framework\TestCase;
use CopilotTags\HR;
require_once 'CopilotTagTest.php';

class HRTest extends CopilotTagTest
{
    public function expectedWrites()
    {
        return [
            [
                new HR(),
                "\n----------\n"
            ]
        ];
    }
}
