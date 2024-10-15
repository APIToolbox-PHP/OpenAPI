<?php

namespace APIToolbox\OpenAPI\Spec;

final readonly class PathItem
{
    /**
     * @param array<int,Server>|null $servers
     */
    public function __construct(
        public ?string $summary,
        public ?string $description,
        public ?Operation $get,
        public ?Operation $put,
        public ?Operation $post,
        public ?Operation $delete,
        public ?Operation $options,
        public ?Operation $head,
        public ?Operation $patch,
        public ?Operation $trace,
        public ?array $servers,
    ) {}
}