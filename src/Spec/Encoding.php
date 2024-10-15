<?php

namespace APIToolbox\OpenAPI\Spec;

final readonly class Encoding
{
    public function __construct(
        public string $contentType = 'application/octet-stream',
        public array $headers = [],
        public ?string $style = null,
        public bool $explode = false,
        public bool $allowReserved = false,
    ) {}
}