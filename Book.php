<?php

class Book
{
    protected string $id;
    protected string $judul;
    protected string $penulis;
    protected int $tahunTerbit;
    protected string $status;

    public function __construct(
        string $id,
        string $judul,
        string $penulis,
        int $tahunTerbit
    ) {
        $this->id = $id;
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
        $this->status = "Tersedia";
    }

    public function getJudul(): string
    {
        return $this->judul;
    }

    public function pinjam(): bool
    {
        if ($this->status == "Tersedia") {
            $this->status = "Dipinjam";
            return true;
        }

        return false;
    }

    public function tampilkanInfo(): void
    {
        echo "ID Buku : " . $this->id . "<br>";
        echo "Judul : " . $this->judul . "<br>";
        echo "Penulis : " . $this->penulis . "<br>";
        echo "Tahun Terbit : " . $this->tahunTerbit . "<br>";
        echo "Status : " . $this->status . "<br>";
    }
}
