<?php

use PHPUnit\Framework\TestCase;
use CopilotTags\Text;
require_once 'CopilotTagTest.php';

class TextTest extends CopilotTagTest
{
    public function expectedWrites()
    {
        return [
            [
                new Text("Hello world!"),
                "Hello world!"
            ],
            [
                new Text("  "),
                "  "
            ],
            [
                new Text(""),
                ""
            ],
            [
                new Text(),
                ""
            ],
            [
                new Text("Hello\nworld!"),
                "Hello\nworld!"
            ],
            [
                new Text("Hello\n\n\n\nworld!"),
                "Hello\n\nworld!"
            ],
            [
                new Text("Hello\n       \nworld!"),
                "Hello\n\nworld!"
            ],
            [
                new Text("Hello\n\n\n       \nworld!"),
                "Hello\n\nworld!"
            ]
        ];
    }
}
