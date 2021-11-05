<?php

declare(strict_types=1);

namespace tests\Architecture;

use tests\TestCase;

final class PropertiesTest extends TestCase
{
    public function test_layer_method_incoming_arguments_not_from()
    {
        $builders = $this->layerFromNameStart('PHPUnit\\Architecture\\Builders');

        $this->assertHasNotPublicProperties($builders);
    }
}