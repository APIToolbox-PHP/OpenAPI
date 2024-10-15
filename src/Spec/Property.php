<?php

namespace APIToolbox\OpenAPI\Spec;

final readonly class Property
{
    public function __construct(
        public string $name,
        public ?PropertyType $type,
        public bool $nullable,
    ) {}
}