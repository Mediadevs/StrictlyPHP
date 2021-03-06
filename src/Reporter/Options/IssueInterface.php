<?php

namespace Mediadevs\StrictlyPHP\Reporter\Options;

/**
 * Interface IssueInterface.
 *
 * @package Mediadevs\StrictlyPHP\Reporter\Options
 */
interface IssueInterface
{
    /**
     * @param string      $line
     * @param string      $name
     * @param string|null $type
     * @param string|null $parameter
     *
     * @return AbstractIssue
     */
    public static function register(
        string $line,
        string $name,
        ?string $type = null,
        ?string $parameter = null
    ): AbstractIssue;
}
