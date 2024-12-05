<?php

class Button
{
    public $selectedClass = "bg-white text-[#4A68FF]"; // Kelas untuk tombol aktif
    public $defaultClass = "text-white"; // Kelas default untuk tombol yang tidak aktif

    public function getClass($pageNames = [])
    {
        foreach ($pageNames as $pageName) {
            if ($_SERVER['REQUEST_URI'] === $pageName) {
                return $this->selectedClass;
            }
        }
        return $this->defaultClass;
    }
}