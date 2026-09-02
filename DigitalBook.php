<?php

class DigitalBook extends Book
{
    private string $format;

    public function __construct(
        string $id,
        string $judul,
        string $penulis,
        int $tahunTerbit,
        string $format
    ) {
        parent::__construct(
            $id,
            $judul,
            $penulis,
            $tahunTerbit
        );

        $this->format = $format;
    }

    public function tampilkanInfo(): void
    {
        parent::tampilkanInfo();

        echo "Format : " . $this->format . "<br>";
    }

    public function download(): void
    {
        echo "Buku digital \"" .
            $this->judul .
            "\" berhasil didownload.<br>";
    }
}
