<?php

namespace Tests;

use App\Year;
use PHPUnit\Framework\TestCase;

class YearTest extends TestCase
{
    /**
     * @dataProvider getLeapYears
     */
    public function test_should_be_leap_year(int $year)
    {
        $this->assertTrue((new Year($year))->isLeap());
    }

    /**
     * @dataProvider getNotLeapYears
     */
    public function test_should_not_be_leap_year(int $year)
    {
        $this->assertFalse((new Year($year))->isLeap());
    }

    private function getLeapYears(): array
    {
        return [
            [400],
            [800],
            [2000],
            [2008],
            [2012],
            [2016],
        ];
    }

    private function getNotLeapYears(): array
    {
        return [
            [1700],
            [1800],
            [1900],
            [2100],
            [2017],
            [2018],
            [2019],
        ];
    }
}
