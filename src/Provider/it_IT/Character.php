<?php

namespace FakerRpg\Provider\it_IT;

class Character
{
    public static function getClasses(): array{
        return [
            'barbarian' => 'Barbaro',
            'bard' => 'Bardo',
            'cleric' => 'Chierico',
            'druid' => 'Druido',
            'fighter' => 'Guerriero',
            'monk' => 'Monaco',
            'paladin' => 'Paladino',
            'ranger' => 'Ranger',
            'rogue' => 'Ladro',
            'sorcerer' => 'Stregone',
            'warlock' => 'Warlock',
            'wizard' => 'Mago',
        ];
    }
    
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