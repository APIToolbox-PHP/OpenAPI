<?php

namespace APIToolbox\OpenAPI\Spec;

final readonly class OpenAPI
{
    /**
     * @param array<string,PathItem> $paths
     * @param array<int,Server> $servers
     * @param array<int,Tag> $tags
     */
    public function __construct(
        public string $openapi,
        public Info $info,

        // TODO: Revist this.
        public array $paths,

        public array $servers = [],

        public ?Components $components = null,

        public array $tags = [],

        public ?ExternalDocumentation $externalDocs = null,
    ) {}
}