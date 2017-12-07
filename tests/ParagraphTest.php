<?php

use PHPUnit\Framework\TestCase;
use CopilotTags\Paragraph;
require_once 'CopilotTagTest.php';

class ParagraphTest extends CopilotTagTest
{
    public function expectedWrites()
    {
        return [
            [
                new Paragraph("Hello world!"),
                "Hello world!"
            ]
        ];
    }
}
