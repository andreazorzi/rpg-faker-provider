<?php

namespace FakerRpg\Provider;

use Exception;
use Faker\Provider\Base;
use FakerRpg\Traits\CharacterName;

class RpgProvider extends Base
{
    use CharacterName;
    
    private $locale;
    
    public function __construct($generator, $locale = null){
        parent::__construct($generator);
        
        $this->locale = $locale;
    }
    
    public function characterFirstName($race = null, $type = null): string{
        $names = [];
        
        if($race == "half-elf"){
            $race = $this->generator->randomElement(["elf", "human"]);
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
        
        if($race == "half-elf"){
            $race = $this->generator->randomElement(["elf", "human"]);
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
        $translated_class = $this->getLocaleProviderClass("CharacterRace");
        
        return $this->generator->randomElement(array_keys($translated_class::getRaces()));
    }
    
    public function characterRace($race = null): string{
        $translated_class = $this->getLocaleProviderClass("CharacterRace");
        
        if(!is_null($race)) return $translated_class::getRaces()[$race];
        
        return $this->generator->randomElement($translated_class::getRaces());
    }
    
    public function characterClassKey(): string{
        $translated_class = $this->getLocaleProviderClass("CharacterClass");
        
        return $this->generator->randomElement(array_keys($translated_class::getClasses()));
    }
    
    public function characterClass($class = null): string{
        $translated_class = $this->getLocaleProviderClass("CharacterClass");
        
        if(!is_null($class)) return $translated_class::getClasses()[$class];
        
        return $this->generator->randomElement($translated_class::getClasses());
    }
    
    public function character($race = null, $type = null, $class = null): array{
        $race ??= $this->characterRaceKey();
        $class ??= $this->characterClassKey();
        
        return [
            'name' => $this->characterName($race, $type),
            'race_key' => $race,
            'race' => $this->characterRace($race),
            'class_key' => $class,
            'class' => $this->characterClass($class)
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