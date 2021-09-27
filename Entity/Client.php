<?php


class Client
{
    private int $id;
    private string $nom;
    private int $siret;

    public function __construct(int $id, string $nom, int $siret)
    {
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return int
     */
    public function getSiret(): int
    {
        return $this->siret;
    }

    /**
     * @param int $siret
     */
    public function setSiret(int $siret): void
    {
        $this->siret = $siret;
    }


}