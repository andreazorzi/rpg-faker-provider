<?php

namespace FakerRpg\Provider\it_IT;

class CharacterRace
{
    public static function getRaces(): array{
        return [
            'dragonborn' => 'Dragonide',
            'dwarf' => 'Nano',
            'elf' => 'Elfo',
            'gnome' => 'Gnomo',
            'half-elf' => 'Mezzelfo',
            'halfling' => 'Halfling',
            'half-orc' => 'Mezzorco',
            'human' => 'Umano',
            'tiefling' => 'Tiefling',
        ];
    }
}