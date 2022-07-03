<?php

class LargestNumberTest extends \PHPUnit\Framework\TestCase {    
    public function testLargestNumberFromAnArray() {
        $array = [101, 68, 73, 5, 21, 12];
        $largestPossibleNumber = new App\LargestPossibleNumber;
        $result = $largestPossibleNumber->largestNumber($array);
        $this->assertEquals(736852112101, $result);
    }
}