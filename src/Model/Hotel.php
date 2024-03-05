<?php
namespace DucklingDesigns\WebtAdvTwigTemplatingEngine\Model;

class Hotel
{
    public function __construct(protected string $name, protected string $description)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}