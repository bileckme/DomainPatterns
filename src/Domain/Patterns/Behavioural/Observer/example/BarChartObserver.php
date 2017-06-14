<?php

use Domain\Patterns\Behavioural\Observer\ObserverInterface as Observer;
use Domain\Patterns\Behavioural\Observer\Subject;

class BarChartObserver implements Observer
{
    /**
     * @var array
     */
    private $obState = [];

    /**
     * @var
     */
    private $barChart;

    /**
     * @var
     */
    private $bar;

    /**
     * @var
     */
    private $color;

    public function update(Subject $subjectState)
    {
        $this->obState = $subjectState->getState();
        $this->makeChart();
    }

    /**
     * Make the chart
     */
    public function makeChart()
    {
        $this->color = array('#0D3257','#97A7B7','#B2C2B9','#BDD6E0','#65754D','#C7DBA9');
        $spacer = 0;
        $maxVal = max($this->obState);
        $mf = function ($x) {
            return 220/$x;
        };
        foreach ($this->obState as $value) {
            $adjSize = $mf($maxVal) * $value;
            $this->buildChart($spacer, $adjSize);
            $spacer += 36.6;
        }
    }

    /**
     * Build the chart
     * @param $pos
     * @param $barSize
     */
    private function buildChart($pos, $barSize)
    {
        $cc = array_pop($this->color);
        $base = 220 - $barSize;
        $SVG = "<svg width='220' height='220' viewBox='0 0 220 220'>";
        $this->bar = "<rect x=$pos y=$base width='36.6' height=$barSize fill=$cc stroke='#888' stroke-width='1' />";
        $this->barChart = $SVG . $this->bar;
        echo $this->barChart;
    }
}
