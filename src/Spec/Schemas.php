<?php

namespace APIToolbox\OpenAPI\Spec;

final class Schemas
{
    /**
     * @param array<string,Schema> $schemas
     */
    public function __construct(
        public array $schemas
    ) {}
}