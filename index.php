<?php

require_once "Book.php";
require_once "Member.php";
require_once "DigitalBook.php";


// ============================
// OBJECT BOOK
// ============================

$buku1 = new Book(
    "B001",
    "Pemrograman PHP",
    "Budi Santoso",
    2024
);

$buku2 = new Book(
    "B002",
    "Belajar MySQL",
    "Andi Wijaya",
    2023
);

$buku3 = new Book(
    "B003",
    "Dasar-Dasar OOP",
    "Siti Aminah",
    2025
);


// ============================
// OBJECT DIGITAL BOOK
// ============================

$bukuDigital = new DigitalBook(
    "D001",
    "Belajar Laravel",
    "Billy Ibrahim",
    2025,
    "PDF"
);


// ============================
// OBJECT MEMBER
// ============================

$member1 = new Member(
    "M001",
    "Muhammad",
    "Karawang"
);

$member2 = new Member(
    "M002",
    "Rina",
    "Bekasi"
);


// ============================
// DAFTAR BUKU
// ============================

echo "<h2>DAFTAR BUKU</h2>";

$buku1->tampilkanInfo();

echo "<hr>";

$buku2->tampilkanInfo();

echo "<hr>";

$buku3->tampilkanInfo();


// ============================
// DIGITAL BOOK
// ============================

echo "<h2>DIGITAL BOOK</h2>";

$bukuDigital->tampilkanInfo();

echo "<br>";

$bukuDigital->download();


// ============================
// DATA MEMBER
// ============================

echo "<h2>DATA MEMBER</h2>";

$member1->tampilkanInfo();

echo "<hr>";

$member2->tampilkanInfo();


// ============================
// PEMINJAMAN
// ============================

echo "<h2>SIMULASI PEMINJAMAN</h2>";

$member1->pinjamBuku($buku1);


// ============================
// DATA SETELAH PEMINJAMAN
// ============================

echo "<h2>SETELAH PEMINJAMAN</h2>";

echo "<h3>Buku</h3>";

$buku1->tampilkanInfo();

echo "<h3>Member</h3>";

$member1->tampilkanInfo();
