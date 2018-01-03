<?php
use CopilotTags\Tests\CopilotTagTest;
use CopilotTags\Heading;

class HeadingTest extends CopilotTagTest
{
    public function expectedWrites()
    {
        return [
            "expect text with heading level" => [
                new Heading("Hello world!", 3),
                "### Hello world!\n"
            ],
            "expect only whitespace to be removed" => [
                new Heading("  "),
                "\n"
            ],
            "expect empty string" => [
                new Heading(""),
                ""
            ],
            "expect empty string with heading level" => [
                new Heading("", 4),
                ""
            ],
            "expect text without heading level" => [
                new Heading("Hello world!"),
                "## Hello world!\n"
            ],
            "expect heading level below minimum to render at minimum" => [
                new Heading("Hello world!", 1),
                "## Hello world!\n"
            ]
        ];
    }

    public function expectedConstructExceptions()
    {
        return [
            "expect null argument to throw InvalidArgumentException" => [
                Heading::class,
                [NULL],
                InvalidArgumentException::class
            ],
            "expect boolean false argument to throw InvalidArgumentException" => [
                Heading::class,
                [FALSE],
                InvalidArgumentException::class
            ],
            "expect boolean true argument to throw InvalidArgumentException" => [
                Heading::class,
                [TRUE],
                InvalidArgumentException::class
            ],
            "expect number argument to throw InvalidArgumentException" => [
                Heading::class,
                [5],
                InvalidArgumentException::class
            ],
            "expect array argument to throw InvalidArgumentException" => [
                Heading::class,
                [[]],
                InvalidArgumentException::class
            ]
        ];
    }
}
