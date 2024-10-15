<?php

namespace APIToolbox\OpenAPI\Spec;

final readonly class OpenAPI
{
    /**
     * @param array<string,PathItem>|null $paths
     * @param array<int,Server>|null $servers
     * @param array<int,Tag>|null $tags
     */
    public function __construct(
        public string $openapi,
        public Info $info,
        public ?array $paths = null,
        public ?array $servers = null,
        public ?Components $components = null,
        public ?array $tags = null,
        public ?ExternalDocumentation $externalDocs = null,
    ) {}
}