<?php
namespace CopilotTags\Tests;
use CopilotTags\Heading;
use CopilotTags\Embed;
use CopilotTags\EmbedSubtype;

class HeadingTest extends CopilotTagTest
{
    public static function expectedRenders()
    {
        return array(
            "expect text with heading level" => array(
                new Heading("Hello world!", 3),
                "\n\n### Hello world!\n"
            ),
            "expect text without heading level" => array(
                new Heading("Hello world!"),
                "\n\n## Hello world!\n"
            ),
            "expect heading level below minimum to render at minimum" => array(
                new Heading("Hello world!", 1),
                "\n\n## Hello world!\n"
            ),
            "expect text with internal newlines" => array(
                new Heading("First\nSecond\n\n\nThird"),
                "\n\n## First\n\n## Second\n\n## Third\n"
            ),
            "expect only whitespace" => array(
                new Heading("  "),
                "\n\n"
            ),
            "expect empty string" => array(
                new Heading(""),
                "\n\n"
            ),
            "expect empty string with heading level" => array(
                new Heading("", 4),
                "\n\n"
            ),
            "expect newline to be preserved with spaces before" => array(
                new Heading("  \n"),
                "\n\n"
            ),
            "expect newline to be preserved with spaces after" => array(
                new Heading("\n  "),
                "\n\n"
            ),
            "expect a single newline to be preserved" => array(
                new Heading("\n"),
                "\n\n"
            ),
            "expect multiple newlines to be preserved" => array(
                new Heading("\n\n\n\n"),
                "\n\n"
            )
        );
    }

    public static function expectedConstructExceptions()
    {
        return array(
            "expect null \$text argument to throw InvalidArgumentException" => array(
                'CopilotTags\Heading',
                array(NULL),
                '\InvalidArgumentException'
            ),
            "expect boolean false \$text argument to throw InvalidArgumentException" => array(
                'CopilotTags\Heading',
                array(FALSE),
                '\InvalidArgumentException'
            ),
            "expect boolean true \$text argument to throw InvalidArgumentException" => array(
                'CopilotTags\Heading',
                array(TRUE),
                '\InvalidArgumentException'
            ),
            "expect number \$text argument to throw InvalidArgumentException" => array(
                'CopilotTags\Heading',
                array(5),
                '\InvalidArgumentException'
            ),
            "expect array \$text argument to throw InvalidArgumentException" => array(
                'CopilotTags\Heading',
                array(array()),
                '\InvalidArgumentException'
            ),
            "expect null \$level argument to throw InvalidArgumentException" => array(
                'CopilotTags\Heading',
                array("", NULL),
                '\InvalidArgumentException'
            ),
            "expect boolean false \$level argument to throw InvalidArgumentException" => array(
                'CopilotTags\Heading',
                array("", FALSE),
                '\InvalidArgumentException'
            ),
            "expect boolean true \$level argument to throw InvalidArgumentException" => array(
                'CopilotTags\Heading',
                array("", TRUE),
                '\InvalidArgumentException'
            ),
            "expect array \$level argument to throw InvalidArgumentException" => array(
                'CopilotTags\Heading',
                array("", array()),
                '\InvalidArgumentException'
            ),
            "expect string \$level argument to throw InvalidArgumentException" => array(
                'CopilotTags\Heading',
                array("", "Hello world!"),
                '\InvalidArgumentException'
            )
        );
    }
}
