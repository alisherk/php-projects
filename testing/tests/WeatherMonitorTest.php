<?php
class WeatherMonitorTest extends Mockery\Adapter\Phpunit\MockeryTestCase {
    public function testCorrectAvgIsReturned() {
        $service = $this->createMock(TemperatureService::class);

        $map = [["12:00", 20], ["14:00", 26]];

        $service->expects($this->exactly(2))->method('getTemperature')->will($this->returnValueMap($map));

        $wth = new WeatherMonitor($service);

        $this->assertEquals(23, $wth->getAverageTemperature("12:00", "14:00"));
    }

    public function testCorrectAvgIsReturnedWithMockery() {
        $service = Mockery::mock(TemperatureService::class); 

        $service->shouldReceive('getTemperature')->once()->with("12:00")->andReturn(20);
        $service->shouldReceive('getTemperature')->once()->with("14:00")->andReturn(26);

        $wth = new WeatherMonitor($service);

        $this->assertEquals(23, $wth->getAverageTemperature("12:00", "14:00"));

    }
}