<?php

namespace FakerRpg\Provider;

use Faker\Provider\Base;

class RpgProvider extends Base
{
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
        $locale = $this->generator->getDefaultTimezone() ?? 'en_US';
        $className = "FakerRpg\\Provider\\{$locale}\\{$type}";
        
        if (!class_exists($className)) {
            $className = "FakerRpg\\Provider\\en_US\\{$type}";
        }
        
        return $className;
    }
}