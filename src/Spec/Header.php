<?php

namespace APIToolbox\OpenAPI\Spec;

final readonly class Header
{
    /**
     * @param array<string,Example> $examples
     */
    public function __construct(
        public string $description,
        public bool $required = false,
        public bool $deprecated = false,
        public bool $explode = false,
        public bool $allowReserved = false,
        public ?Schema $schema = null,
        public mixed $example = null,
        public array $examples = []
    ) {}
}