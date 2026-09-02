<?php

class Member
{
    private string $idMember;
    private string $nama;
    private string $alamat;
    private ?Book $bukuDipinjam;

    public function __construct(
        string $idMember,
        string $nama,
        string $alamat
    ) {
        $this->idMember = $idMember;
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->bukuDipinjam = null;
    }

    public function tampilkanInfo(): void
    {
        echo "ID Member : " . $this->idMember . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Alamat : " . $this->alamat . "<br>";

        if ($this->bukuDipinjam != null) {
            echo "Buku Dipinjam : " .
                $this->bukuDipinjam->getJudul() . "<br>";
        } else {
            echo "Buku Dipinjam : Belum meminjam buku<br>";
        }
    }

    public function pinjamBuku(Book $buku): void
    {
        if ($buku->pinjam()) {
            $this->bukuDipinjam = $buku;

            echo $this->nama .
                " berhasil meminjam buku \"" .
                $buku->getJudul() . "\".<br>";
        } else {
            echo "Buku \"" .
                $buku->getJudul() .
                "\" sedang dipinjam.<br>";
        }
    }
}
