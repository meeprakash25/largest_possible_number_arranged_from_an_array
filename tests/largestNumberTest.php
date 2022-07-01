<?php

class LargestNumberTest extends \PHPUnit\Framework\TestCase {    
    public function testShouldReturnFalseWhenNIsGreaterThanArrayLength(){
        $array = [];
        $largestNumber = new App\LargestNumber;
        $result = $largestNumber->nthLargestNumber($array, 10);
        $this->assertFalse($result);
    }

    public function testNthLargestNumber() {
        $array = [1,5,2,4,6];
        $largestNumber = new App\LargestNumber;
        $result = $largestNumber->nthLargestNumber($array, 2);
        $this->assertEquals(5,$result);
    }
}