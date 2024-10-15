<?php

namespace APIToolbox\OpenAPI\Spec;

final readonly class Components
{
    /**
     * @param array<string,Schema> $schemas
     */
    public function __construct(
        public array $schemas
    ) {}
}