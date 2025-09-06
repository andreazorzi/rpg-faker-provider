<?php

namespace FakerRpg\Provider;

use Exception;
use Faker\Provider\Base;

class RpgProvider extends Base
{
    private $locale;
    
    public function __construct($generator, $locale = null)
    {
        parent::__construct($generator);
        
        $this->locale = $locale;
    }
    
    /**
     * Generate a random character name based on locale
     */
    public function characterName(): string
    {
        $providerClass = $this->getLocaleProviderClass('CharacterName');
        return $this->generator->randomElement($providerClass::getNames());
    }

    /**
     * Get the appropriate provider class based on locale
     */
    private function getLocaleProviderClass(string $type): string
    {
        $className = "FakerRpg\\Provider\\{$this->locale}\\{$type}";
        
        if (!class_exists($className)) {
            throw new Exception("Locale {$this->locale} not supported", 1);
        }
        
        return $className;
    }
}