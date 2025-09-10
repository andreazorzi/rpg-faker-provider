# RPG Faker Provider
[![Latest Version on Packagist](https://img.shields.io/packagist/v/andreazorzi/rpg-faker-provider.svg?style=flat-square)](https://packagist.org/packages/andreazorzi/rpg-faker-provider)
[![Total Downloads](https://img.shields.io/packagist/dt/andreazorzi/rpg-faker-provider.svg?style=flat-square)](https://packagist.org/packages/andreazorzi/rpg-faker-provider)

A PHP Faker provider that generates random RPG characters based on Dungeons & Dragons 5th Edition.

## Installation
```bash
composer require  @andreazorzi/rpg-faker-provider
```

## Usage
### Basic Setup
```php
use FakerRpg\Provider\RpgProvider;

$faker = Factory::create();
$faker->addProvider(new RpgProvider($faker));

// Generate a complete character
$character = $faker->character();
```

### Localization Support
```php
// Create provider with specific locale
$faker->addProvider(new RpgProvider($faker, 'it_IT'));
```

## Available Methods
### Character Generation
```php
character($race = null, $gender = null, $class = null, $abilities_method = 'default')
```
Generates a complete D&D 5e character with all attributes.


```php
// Random character
$character = $faker->character();

// Specific race, gender and class
$character = $faker->character('elf', 'male', 'wizard');

// With rolled abilities
$character = $faker->character(abilities_method: 'roll');
```

#### Return
```php
[
    'name' => 'Elaria Moonwhisper',
    'race_key' => 'elf',
    'race' => 'Elf',
    'class_key' => 'wizard',
    'class' => 'Wizard',
    'level' => 5,
    'abilities' => [
        'cha' => 12,
        'con' => 14,
        'dex' => 15,
        'int' => 16,
        'str' => 8,
        'wis' => 13
    ],
    'proficiencies' => [
        'abilities' => ['int', 'wis'],
        'skills' => ['arcana', 'history', 'insight', 'investigation']
    ],
    'alignment' => 'chaotic_good',
    'age' => 127,
    'size' => 5.4,
    'speed' => 30.0,
    'coins' => [
        'cp' => 50,
        'sp' => 100,
        'ep' => 0,
        'gp' => 150,
        'pp' => 0
    ]
]
```

### Names
#### Full name
Generates a full character name.
```php
characterName($race = null, $gender = null)
```

```php
$name = $faker->characterName();           // "Thorin Ironforge"
$name = $faker->characterName('dwarf');    // "Balin Stonebeard"
$name = $faker->characterName('elf', 'female'); // "Althaea Siannodel"
```

#### First name
Generates only the first name.
```php
characterFirstName($race = null, $gender = null)
```

```php
$firstName = $faker->characterFirstName('human'); // "Marcus"
```

#### Last name
Generates only the last name.
```php
characterLastName($race = null, $gender = null)
```

```php
$lastName = $faker->characterLastName('halfling'); // "Goodbarrel"
```

### Race
`characterRace($race = null)` / `characterRaceKey()`

```php
$race = $faker->characterRace();     // "Human"
$raceKey = $faker->characterRaceKey(); // "human"
```

### Class
`characterClass($class = null)` / `characterClassKey()`

```php
$class = $faker->characterClass();     // "Fighter"
$classKey = $faker->characterClassKey(); // "fighter"
```

### Attributes
#### Level
`characterLevel($min = 1, $max = 20)`

```php
$level = $faker->characterLevel();      // Random 1-20
$level = $faker->characterLevel(5, 10); // Random 5-10
```

#### Abilities
`characterAbilities($method = 'default')`

```php
// Standard array (15, 14, 13, 12, 10, 8) shuffled
$abilities = $faker->characterAbilities('default');

// Rolled stats (4d6 drop lowest)
$abilities = $faker->characterAbilities('roll');
```

#### Proficiencies
`characterProficiencies()`

```php
$proficiencies = $faker->characterProficiencies();
// Returns: ['abilities' => ['str', 'con'], 'skills' => ['athletics', 'intimidation', ...]]
```

#### Alignment
`characterAlignment()`

```php
$alignment = $faker->characterAlignment(); // "lawful_good"
```

### Physical Attributes
#### Age
`characterAge($race = null)`

```php
$age = $faker->characterAge();       // Random age appropriate for any race
$age = $faker->characterAge('elf');  // Random age appropriate for elves
```

#### Size
Returns height in meters.
`characterSize($race = null)`

```php
$size = $faker->characterSize();        // 1.7
$size = $faker->characterSize('dwarf'); // 1.1
```

#### Speed
Returns movement speed in meters.
`characterSpeed($race = null)`

```php
$speed = $faker->characterSpeed();         // 9.0
$speed = $faker->characterSpeed('dwarf');  // 7.5
```

### Equipment
#### Coins
`characterCoins()`

```php
$coins = $faker->characterCoins();
// Returns: ['cp' => 50, 'sp' => 100, 'ep' => 0, 'gp' => 150, 'pp' => 0]
```

## Character Race Support
The provider supports all core D&D 5e races including:
- Human
- Elf (with subtypes)
- Dwarf
- Halfling
- Dragonborn
- Gnome
- Half-Elf
- Half-Orc
- Tiefling
Note: Half-elf names are randomly selected from either elf or human name lists.

## Requirements
- PHP 7.4+
- FakerPHP/Faker

## License
MIT License