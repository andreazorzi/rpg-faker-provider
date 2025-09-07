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
        
        foreach(self::getSurname() as $race_key => $race_surnames){
            if(!is_null($race) && $race != $race_key) continue;
            
            $surnames = array_merge($surnames, $race_surnames);
        }
        
        return $this->generator->randomElement($surnames);
    }
    
    public function characterName($race = null, $type = null): string{
        return trim($this->characterFirstName($race, $type).' '.$this->characterLastName($race) ?? '');
    }
    
    public function characterRace(): string{
        $class = $this->getLocaleProviderClass("CharacterRace");
        
        return $this->generator->randomElement($class::getRaces());
    }
    
    public function characterRaceKey(): string{
        $class = $this->getLocaleProviderClass("CharacterRace");
        
        return $this->generator->randomElement(array_keys($class::getRaces()));
    }
    
    private function getLocaleProviderClass(string $type): string{
        $className = "FakerRpg\\Provider\\{$this->locale}\\{$type}";
        
        if (!class_exists($className)) {
            throw new Exception("Locale {$this->locale} not supported", 1);
        }
        
        return $className;
    }
}