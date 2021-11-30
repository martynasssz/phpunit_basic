<?php

use PHPUnit\Framework\TestCase;


class BMICalculatorTest extends TestCase {

    public function testUnderweightBMITestResult()
    {
        $BMIClaculator = new BMICalculator;

        $BMIClaculator->BMI = 10; //set property to 10

        $result = $BMIClaculator->getTextResultFromBMI();

        $expected = 'Underweight';

        $this->assertSame($expected, $result);
    }

    public function testNormalweightBMITestResult()
    {
        $BMIClaculator = new BMICalculator;

        $BMIClaculator->BMI = 24; //set property to 10

        $result = $BMIClaculator->getTextResultFromBMI();

        $expected = 'Normal';

        $this->assertSame($expected, $result);
    }

    public function testOverweightBMITestResult()
    {
        $BMIClaculator = new BMICalculator;

        $BMIClaculator->BMI = 26; //set property to 10

        $result = $BMIClaculator->getTextResultFromBMI();

        $expected = 'Overweight';

        $this->assertSame($expected, $result);
    }

    //test is it correctly rounded result

    public function testCorrectBMIValue() 
    {
        $expected = 39.1;

        $BMIClaculator = new BMICalculator;
        $BMIClaculator->mass = 100; //kg
        $BMIClaculator->height = 1.6; // m

        $result = $BMIClaculator->calculate();

        $this->assertEquals($expected, $result);



    }

}