<?php

namespace SanderVanHooft\Tests\BladeNl2Br;

class ConvertsNewlinesToBreaksTest extends BaseTestCase
{
    /** @test */
    public function can_convert_newlines_to_breaks()
    {
        $blade = '@nl2br("Hello\nworld!")';
        $this->assertBladeRenders("Hello<br />\nworld!", $blade);
    }
}
