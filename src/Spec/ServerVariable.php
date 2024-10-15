<?php

namespace APIToolbox\OpenAPI\Spec;

final readonly class ServerVariable
{
    /**
     * @param array<int,string>|null $enum
     */
    public function __construct(
        public string $default,
        public ?string $description = null,
        public ?array $enum = null,
    ) {}
}