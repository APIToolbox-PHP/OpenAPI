<?php

namespace APIToolbox\OpenAPI\Spec;

final readonly class Paths
{
    public function __construct(
        /** @var array<array-key,PathItem> $paths */
        public array $paths = [],
    ) {}
}