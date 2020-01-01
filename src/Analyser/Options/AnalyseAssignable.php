<?php

namespace Mediadevs\StrictlyPHP\Analyser\Options;

use PhpParser\Node;
use Mediadevs\StrictlyPHP\Report;
use Mediadevs\StrictlyPHP\Analyser\Traits\AnalyseDocblock;
use Mediadevs\StrictlyPHP\Analyser\Traits\AnalyseProperties;

/**
 * Class AnalyseAssignable.
 *
 * @package Mediadevs\StrictlyPHP\Analyser\Options
 */
class AnalyseAssignable extends AbstractAnalyser
{
    use AnalyseDocblock;
    use AnalyseProperties;

    /**
     * The basic analyser, each analysis type has it's own analysers but they will all cohort to this one.
     *
     * @param \PhpParser\Node $node
     * @param array           $filters
     *
     * @return \Mediadevs\StrictlyPHP\Report|null
     */
    public function analyse(Node $node, array $filters): ?Report
    {
        return $this->report;
    }
}