<?php

namespace APIToolbox\OpenAPI\Spec;

final readonly class License
{
    public function __construct(
        public string $name,
        public ?string $url = null,
    ) {}
}