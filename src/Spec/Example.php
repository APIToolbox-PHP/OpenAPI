<?php

namespace APIToolbox\OpenAPI\Spec;

final readonly class Example
{
    public function __construct(
        public ?string $summary = null,
        public ?string $description = null,
        public mixed $value = null,
        public ?string $externalValue = null,
    ) {}
}