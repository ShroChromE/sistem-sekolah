<?php
namespace App\Controllers;

class StudentController
{
    public function index()
    {
        echo '<h1>Daftar Siswa</h1>';
        echo '<p>Menampilkan daftar siswa</p>';
    }

    public function create()
    {
        echo '<h1>Tambah Siswa</h1>';
        echo '<p>Formulir untuk menambah siswa baru</p>';
    }

    public function show(string $id)
    {
        echo '<h1>Detail Siswa</h1>';
        echo "<p>Menampilkan detail siswa dengan ID: {$id}</p>";
    }

    public function test()
    {
        echo '<h1>Test Method</h1>';
        echo '<p>This is a test method in StudentController</p>';
    }
}