<?php

namespace FakerRpg\Provider;

use Exception;
use Faker\Provider\Base;
use FakerRpg\Traits\CharacterInfo;
use FakerRpg\Traits\CharacterName;

class RpgProvider extends Base
{
    use CharacterName, CharacterInfo;
    
    const ABILITIES = ['cha', 'con', 'dex', 'int', 'str', 'wis'];
    const SKILLS = ['acrobatics', 'animal_handling', 'arcana', 'athletics', 'deception', 'history', 'insight', 'intimidation', 'investigation', 'medicine', 'nature', 'perception', 'performance', 'persuasion', 'religion', 'sleight_of_hand', 'stealth', 'survival',];
    const ALIGNMENTS = ['lawful_good', 'neutral_good', 'chaotic_good', 'lawful_neutral', 'neutral', 'chaotic_neutral', 'lawful_evil', 'neutral_evil', 'chaotic_evil'];
    const SIZES = ['tiny', 'small', 'medium', 'large', 'huge', 'gargantuan', 'colossal'];
    const COINS = ['cp', 'sp', 'ep', 'gp', 'pp'];
    const COINS_VALUES = [0, 50, 100, 150, 200];
    
    private $locale;
    
    public function __construct($generator, $locale = null){
        parent::__construct($generator);
        
        $this->locale = $locale;
    }
    
    public function characterFirstName($race = null, $type = null): string{
        $names = [];
        
        if($race == 'half-elf'){
            $race = $this->generator->randomElement(['elf', 'human']);
        }
        
        foreach(self::getNames() as $race_key => $race_names){
            if(!is_null($race) && $race != $race_key) continue;
            
            foreach($race_names ?? [] as $type_key => $type_names){
                if(!is_null($type) && $type != $type_key) continue;
                
                $names = array_merge($names, $type_names);
            }
        }
        
        return $this->generator->randomElement($names);
    }
    
    public function characterLastName($race = null): ?string{
        $surnames = [];
        
        if($race == 'half-elf'){
            $race = $this->generator->randomElement(['elf', 'human']);
        }
        
        foreach(self::getSurname() as $race_key => $race_surnames){
            if(!is_null($race) && $race != $race_key) continue;
            
            $surnames = array_merge($surnames, $race_surnames);
        }
        
        return $this->generator->randomElement($surnames);
    }
    
    public function characterName($race = null, $type = null): string{
        return trim($this->characterFirstName($race, $type).' '.$this->characterLastName($race) ?? '');
    }
    
    public function characterRaceKey(): string{
        $translated_class = $this->getLocaleProviderClass('CharacterRace');
        
        return $this->generator->randomElement(array_keys($translated_class::getRaces()));
    }
    
    public function characterRace($race = null): string{
        $translated_class = $this->getLocaleProviderClass('CharacterRace');
        
        if(!is_null($race)) return $translated_class::getRaces()[$race];
        
        return $this->generator->randomElement($translated_class::getRaces());
    }
    
    public function characterClassKey(): string{
        $translated_class = $this->getLocaleProviderClass('CharacterClass');
        
        return $this->generator->randomElement(array_keys($translated_class::getClasses()));
    }
    
    public function characterClass($class = null): string{
        $translated_class = $this->getLocaleProviderClass('CharacterClass');
        
        if(!is_null($class)) return $translated_class::getClasses()[$class];
        
        return $this->generator->randomElement($translated_class::getClasses());
    }
    
    public function characterLevel($min = 1, $max = 20): int{
        return $this->generator->numberBetween($min, $max);
    }
    
    public function characterAbilities($method = 'default'){
        $values = [15, 14, 13, 12, 10, 8];
        
        if($method == 'default'){
            $values = $this->generator->shuffle($values);
        }
        else if($method == 'roll'){
            $values = [];
            
            for($i = 0; $i < 6; $i++){
                $rolls = [
                    $this->generator->numberBetween(1, 6),
                    $this->generator->numberBetween(1, 6),
                    $this->generator->numberBetween(1, 6),
                    $this->generator->numberBetween(1, 6),
                ];
                
                $values[] = array_sum($rolls) - min($rolls);
            }
        }
        
        return array_combine(self::ABILITIES, $values);
    }
    
    public function characterProficiencies(): array{
        return [
            'abilities' => $this->generator->randomElements(self::ABILITIES, 2),
            'skills' => $this->generator->randomElements(self::SKILLS, 4),
        ];
    }
    
    public function characterAlignment(): string{
        return $this->generator->randomElement(self::ALIGNMENTS);
    }
    
    public function characterCoins(): array{
        return array_combine(self::COINS, [
            $this->generator->randomElement(self::COINS_VALUES),
            $this->generator->randomElement(self::COINS_VALUES),
            $this->generator->randomElement(self::COINS_VALUES),
            $this->generator->randomElement(self::COINS_VALUES),
            $this->generator->randomElement(self::COINS_VALUES),
        ]);
    }
    
    public function characterAge($race = null): int{
        [$min, $max] = self::getRaceAges($race);
        
        return $this->generator->numberBetween($min, $max);
    }
    
    public function characterSize($race = null): float{
        [$min, $max] = self::getRaceSizes($race);
        
        return $this->generator->randomFloat(1, $min, $max);
    }
    
    public function characterSpeed($race = null): float{
        return self::getRaceSpeed($race);
    }
    
    public function character($race = null, $type = null, $class = null, $abilities_method = 'default'): array{
        $race ??= $this->characterRaceKey();
        $class ??= $this->characterClassKey();
        
        return [
            'name' => $this->characterName($race, $type),
            'race_key' => $race,
            'race' => $this->characterRace($race),
            'class_key' => $class,
            'class' => $this->characterClass($class),
            'level' => $this->characterLevel(),
            'abilities' => $this->characterAbilities($abilities_method),
            'proficiencies' => $this->characterProficiencies(),
            'alignment' => $this->characterAlignment(),
            'age' => $this->characterAge($race),
            'size' => $this->characterSize($race),
            'speed' => $this->characterSpeed($race),
            'coins' => $this->characterCoins(),
        ];
    }
    
    private function getLocaleProviderClass(string $type): string{
        $className = "FakerRpg\\Provider\\{$this->locale}\\{$type}";
        
        if (!class_exists($className)) {
            throw new Exception("Locale {$this->locale} not supported", 1);
        }
        
        return $className;
    }
}