<?php

namespace APIToolbox\OpenAPI;

use APIToolbox\OpenAPI\Spec\OpenAPI;
use Symfony\Component\PropertyInfo\Extractor\ConstructorExtractor;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\YamlEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

final class Parser
{
    private Serializer $serializer;

    public function __construct()
    {
        $phpDocExtractor = new PhpDocExtractor();
        $reflectionExtractor = new ReflectionExtractor();
        $typeExtractor   = new PropertyInfoExtractor(
            typeExtractors: [
                new ConstructorExtractor([
                    $phpDocExtractor,
                    $reflectionExtractor
                ]),
                $phpDocExtractor,
                $reflectionExtractor,
            ]
        );

        $this->serializer = new Serializer(
            normalizers: [
                new ArrayDenormalizer(),
                new ObjectNormalizer(
                    null,
                    null,
                    null,
                    $typeExtractor,
                ),
            ],
            encoders: [new JsonEncoder(), new YamlEncoder()]
        );
    }

    public function parse(string $content): OpenAPI
    {
        return json_validate($content)
            ? $this->parseJson($content)
            : $this->parseYaml($content);
    }

    public function parseFile(string $filename): OpenAPI
    {
        return $this->parse(file_get_contents($filename));
    }

    public function parseJson(string $content): OpenAPI
    {
        return $this->serializer->deserialize($content, OpenAPI::class, 'json');
    }

    public function parseYaml(string $content): OpenAPI
    {
        return $this->serializer->deserialize($content, OpenAPI::class, 'yaml');
    }
}