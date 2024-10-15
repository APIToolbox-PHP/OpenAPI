<?php

namespace APIToolbox\OpenAPI\Spec;

final readonly class Response
{
    /**
     * @param string $description
     * @param array<string,Header> $headers
     * @param array<string,MediaType> $content
     * @param array<string,Link> $links
     */
    public function __construct(
        public string $description,
        public array $headers = [],
        public array $content = [],
        public array $links = [],
    )
    {}
}