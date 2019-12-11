<?php

namespace Mediadevs\StrictPHP\Issues\Options;

use Mediadevs\StrictPHP\Issues\AbstractIssue;
use Mediadevs\StrictPHP\Issues\IssueInterface;
use Mediadevs\StrictPHP\Traits\ReportMessageTrait;

/**
 * Class UntypedArgumentIssue
 * @package Mediadevs\StrictPHP\Issues\Options
 */
class UntypedArgumentIssue extends AbstractIssue implements IssueInterface
{
    use ReportMessageTrait;

    private const TYPE = 'untyped-argument';

    /*
     * - %s1 file
     * - %s2 line
     * - %s3 column
     */
    private const MESSAGE = 'Missing argument type declaration! Location: %s at %s:%s';

    /**
     * Creating a new issue based on the collected values.
     *
     * @param string $file
     * @param int $line
     * @param int $column
     * @param string $assumedType
     *
     * @return static
     */
    public static function create(string $file, int $line, int $column, string $assumedType): parent
    {
        $issue = new self;

        $issue->file = $file;
        $issue->line = $line;
        $issue->column = $column;
        $issue->assumedType = $assumedType;

        return $issue;
    }
}
