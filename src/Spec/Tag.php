<?php

namespace APIToolbox\OpenAPI\Spec;

final readonly class Tag
{
    public string $name;

    public ?string $description;

    public ?ExternalDocumentation $externalDocs;
}