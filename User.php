<?php
// User.php

class User {
    // Properti private, hanya bisa diakses dari dalam class ini
    private $firstName;
    private $lastName;
    private $phoneNumber;
    private $address;

    // Constructor untuk menginisialisasi object saat dibuat
    public function __construct($firstName, $lastName, $phoneNumber, $address) {
        // Menggunakan htmlspecialchars untuk mencegah serangan XSS
        $this->firstName = htmlspecialchars($firstName);
        $this->lastName = htmlspecialchars($lastName);
        $this->phoneNumber = htmlspecialchars($phoneNumber);
        $this->address = htmlspecialchars($address);
    }

    // Method untuk mendapatkan nama lengkap
    public function getFullName() {
        return trim($this->firstName . ' ' . $this->lastName);
    }

    // Method untuk mendapatkan nomor telepon
    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    // Method untuk mendapatkan alamat
    public function getAddress() {
        return $this->address;
    }
}
?>