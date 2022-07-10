<?php

namespace APP\Model;

class Provider
{
    //Propriedades
    private string $name;
    private string $phone;
    private string $cnpj;
    private bool $isActive;

    public function __construct(
        string $name,
        string $phone,
        string $cnpj,
        bool $isActive = true
    )
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->cnpj = $cnpj;
        $this->isActive = $isActive;
    }
}