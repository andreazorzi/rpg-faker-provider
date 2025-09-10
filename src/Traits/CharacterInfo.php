<?php

namespace FakerRpg\Traits;

trait CharacterInfo
{
    public static function getRaceAges($race = null): array{
        $ages = [
            'dragonborn' => [15, 80],
            'dwarf' => [50, 350],
            'elf' => [100, 750],
            'gnome' => [40, 500],
            'halfling' => [20, 150],
            'half-elf' => [20, 180],
            'half-orc' => [15, 75],
            'human' => [20, 100],
            'tiefling' => [20, 10],
        ];
        
        return $ages[$race] ?? $ages['human'];
    }
    
    public static function getRaceSizes($race = null): array{
        $sizes = [
            'dragonborn' => [1.8, 2.2],
            'dwarf' => [1.2, 1.5],
            'elf' => [1.5, 1.8],
            'gnome' => [0.9, 1.2],
            'halfling' => [0.7, 1],
            'half-elf' => [1.5, 1.9],
            'half-orc' => [1.8, 2],
            'human' => [1.5, 1.9],
            'tiefling' => [1.5, 1.9],
        ];
        
        return $sizes[$race] ?? [0.7, 2.2];
    }
    
    public static function getRaceSpeed($race = null): float{
        $speed = [
            'dragonborn' => 9,
            'dwarf' => 7.5,
            'elf' => 9,
            'gnome' => 7.5,
            'halfling' => 7.5,
            'half-elf' => 9,
            'half-orc' => 9,
            'human' => 9,
            'tiefling' => 9,
        ];
        
        return $speed[$race] ?? $speed['human'];
    }
}