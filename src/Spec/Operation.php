<?php

namespace APIToolbox\OpenAPI\Spec;

final readonly class Operation
{
    public function __construct(
        /** @var array<array-key,string> $tags */
        public array $tags = [],
        public ?string $summary = null,
        public ?string $description = null,
        public ?ExternalDocumentation $externalDocs = null,
        public ?string $operationId = null,
        /** @var Parameter[] $parameters */
        public array $parameters = [],

        public bool $deprecated = false,
    ) {}
}