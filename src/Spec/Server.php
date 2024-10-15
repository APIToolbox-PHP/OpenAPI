<?php

namespace APIToolbox\OpenAPI\Spec;

final readonly class Server
{
    /**
     * @param string $url
     * @param string|null $description
     * @param array<string,ServerVariable>|null $variables
     */
    public function __construct(
        public string $url,
        public ?string $description = null,
        public ?array $variables = null,
    ) {}
}