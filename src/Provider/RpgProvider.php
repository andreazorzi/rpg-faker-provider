<?php

namespace FakerRpg\Provider;

use Exception;
use Faker\Provider\Base;

class RpgProvider extends Base
{
    private $locale;
    
    public function __construct($generator, $locale = null){
        parent::__construct($generator);
        
        $this->locale = $locale;
    }
    
    public function characterFirstName($race = null, $type = null): string{
        $providerClass = $this->getLocaleProviderClass('CharacterName');
        
        $names = [];
        
        foreach($providerClass::getNames() as $race_key => $race_names){
            if(!is_null($race) && $race != $race_key) continue;
            
            foreach($race_names ?? [] as $type_key => $type_names){
                if(!is_null($type) && $type != $type_key) continue;
                
                $names = array_merge($names, $type_names);
            }
        }
        
        return $this->generator->randomElement($names);
    }
    
    public function characterLastName($race = null): string{
        $providerClass = $this->getLocaleProviderClass('CharacterName');
        
        $surnames = [];
        
        foreach($providerClass::getSurname() as $race_key => $race_surnames){
            if(!is_null($race) && $race != $race_key) continue;
            
            $surnames = array_merge($surnames, $race_surnames);
        }
        
        return $this->generator->randomElement($surnames);
    }
    
    public function characterName($race = null, $type = null): string{
        return $this->characterFirstName($race, $type).' '.$this->characterLastName($race);
    }
    
    private function getLocaleProviderClass(string $type): string{
        $className = "FakerRpg\\Provider\\{$this->locale}\\{$type}";
        
        if (!class_exists($className)) {
            throw new Exception("Locale {$this->locale} not supported", 1);
        }
        
        return $className;
    }
}