<?php

namespace FakerRpg\Provider\it_IT;

class CharacterClass
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
}