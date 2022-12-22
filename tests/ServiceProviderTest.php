<?php

declare(strict_types=1);

namespace SevenSpan\Tests\Segment;

use SevenSpan\Segment\SegmentServiceProvider;
use GrahamCampbell\TestBench\AbstractPackageTestCase;
use GrahamCampbell\TestBenchCore\ServiceProviderTrait;

class ServiceProviderTest extends AbstractPackageTestCase
{
    use ServiceProviderTrait;

    protected function getServiceProviderClass($app)
    {
        return SegmentServiceProvider::class;
    }
}
