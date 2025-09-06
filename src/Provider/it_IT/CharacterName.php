<?php

namespace FakerRpg\Provider\it_IT;

class CharacterName
{
    public static function getNames(): array
    {
        return [
            // Nomi umani
            'Alessandro', 'Beatrice', 'Carlo', 'Diana', 'Eduardo', 'Francesca',
            'Giovanni', 'Helena', 'Ignazio', 'Lucia', 'Marco', 'Natalia',
            'Orlando', 'Paola', 'Riccardo', 'Serena', 'Tommaso', 'Valentina',
            
            // Nomi elfici
            'Aelindra', 'Celeborn', 'Eladrin', 'Galadriel', 'Nimrodel', 'Thranduil',
            
            // Nomi nanici
            'Thorin', 'Gimli', 'Balin', 'Dwalin', 'Nali', 'Dain'
        ];
    }
}