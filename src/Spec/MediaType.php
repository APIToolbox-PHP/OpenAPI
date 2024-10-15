<?php

namespace APIToolbox\OpenAPI\Spec;

final class MediaType
{
    /**
     * @param array<string,Example> $examples
     * @param array<string,Encoding> $encoding
     */
    public function __construct(
        public ?Schema $schema = null,
        public mixed $example = null,
        public array $examples = [],
        public array $encoding = [],
    ) {}
}