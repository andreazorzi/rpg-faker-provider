<?php

namespace FakerRpg\Traits;

trait CharacterName
{
    public static function getNames(): array{
        $names = [
            'dragonborn' => [
                'child' => [
                    'Climber', 'Earbender', 'Leaper', 'Pious',
                    'Shieldbiter', 'Zealous',
                ],
                'male' => [
                    'Arjhan', 'Balasar', 'Bharash', 'Donaar', 'Ghesh',
                    'Heskan', 'Kriv', 'Medrash', 'Mehen', 'Nadarr', 'Pandjed',
                    'Patrin', 'Rhogar', 'Shamash', 'Shedinn', 'Tarhun', 'Torinn',
                ],
                'female' => [
                    'Akra', 'Biri', 'Daar', 'Farideh', 'Harann'.
                    'HaviJar', 'Jheri', 'Kava', 'Korinn', 'Mishann', 'NaJa', 'Perra',
                    'Raiann', 'Sora', 'Surina', 'Thava', 'Uadjit',
                ]
            ],
            'dwarf' => [
                'male' => [
                    'Adrik', 'Alberich', 'Baern', 'Barendd', 'Brottor',
                    'Bruenor', 'Oain', 'Oarrak', 'Oelg', 'Eberk', 'Einkil', 'Fargrim',
                    'Flint', 'Gardain', 'Harbek', 'Kildrak', 'Morgran', 'Orsik',
                    'Oskar', 'Rangrim', 'Rurik', 'Taklinn', 'Thoradin', 'Thorin',
                    'Tordek', 'Traubon', 'Travok', 'Ulfgar', 'Veit', 'Vondal',
                ],
                'female' => [
                    'Amber', 'Artin', 'Audhild', 'Bardryn',
                    'Oagnal', 'Oiesa', 'Eldeth', 'Falkrunn', 'Finellen', 'Gunnloda',
                    'Gurdis', 'Helja', 'Hlin', 'Kathra', 'Kristryd', 'Lide', 'Liftrasa',
                    'Mardred', 'Riswynn', 'Sannl', 'Torbera', 'Torgga', 'Vistra',
                ]
            ],
            'elf' => [
                'child' => [
                    'Ara', 'Bryn', 'Del', 'Eryn', 'Faen', 'Innil',
                    'Lael', 'Mella', 'Naeris', 'Naill', 'Phann', 'Rael', 'Rinn', 'Sai',
                    'Syllin', 'Thia', 'Vall',
                ],
                'male' => [
                    'Adran', 'Aelar', 'Aramil', 'Arannis',
                    'Aust', 'Beiro', 'Berrian', 'Carric', 'Enialis', 'Erdan', 'Erevan',
                    'Galinndan', 'Hadarai', 'Heian', 'Himo', 'Immeral', 'Ivellios',
                    'Laucian', 'Mindartis', 'Paelias', 'Peren', 'Quarion', 'Riardon',
                    'Rolen', 'Soveliss', 'Thamior', 'Tharivol', 'Theren', 'Varis',
                ],
                'female' => [
                    'Adrie', 'Althaea. Anastrianna',
                    'Andraste', 'Antinua', 'Bethrynna', 'Birel', 'Caelynn', 'Drusilia',
                    'Enna', 'Felosial', 'Ielenia', 'Jelenneth', 'Keyleth', 'Leshanna',
                    'Lia', 'Meriele', 'Mialee', 'Naivara', 'Quelenna', 'Quillathe',
                    'Sariel', 'Shanairra', 'Shava', 'Silaqui', 'Theirastra', 'Thia',
                    'Vadania', 'Valanthe', 'Xanaphia',
                ]
            ],
            'gnome' => [
                'male' => [
                    'Alston', 'Alvyn', 'Boddynock', 'Brocc', 'Burgell',
                    'Dimble', 'Eldon', 'Erky', 'Fonkin', 'Frug', 'Gerbo', 'Gimble',
                    'Glim', 'Jebeddo', 'Kellen', 'Namfoodle', 'Orryn', 'Roondar',
                    'Seebo', 'Sindri', 'Warryn', 'Wrenn', 'Zook',
                ],
                'female' => [
                    'Bimpnollin', 'Breena', 'Caramip', 'Carlin',
                    'Donella', 'Duvamil', 'ElIa', 'ElIyjobell', 'ElIywick', 'Lilli',
                    'Loopmottin', 'Lorilla', 'Mardnab', 'Nissa', 'Nyx', 'Oda', 'Orla',
                    'Roywyn', 'Shamil', 'Tana', 'Waywocket', 'Zanna',
                ]
            ],
            'halfling' => [
                'male' => [
                    'Alton', 'Ander', 'Cade', 'Corrin', 'Eldon', 'Errich',
                    'Finnan', 'Garret', 'Lindal', 'Lyle', 'Merric', 'Milo', 'Osborn',
                    'Perrin', 'Reed', 'Roscoe', 'Wellby',
                ],
                'female' => [
                    'Andry', 'Bree', 'Callie', 'Cora', 'Euphemia',
                    'Jillian', 'Kithri', 'Lavinia', 'Lidda', 'Merla', 'Nedda', 'Paela',
                    'Portia', 'Seraphina', 'Shaena', 'Trym', 'Vani', 'Verna',
                ]
            ],
            'half-orc' => [
                'male' => [
                    'Deneh', 'Feng', 'Gell', 'Henk', 'Holg', 'Imsh',
                    'Kelh', 'Krusk', 'Mhurren', 'Ront', 'Shump', 'Thokk',
                ],
                'female' => [
                    'Baggi', 'Emen', 'Engong', 'Kansif',
                    'Myev', 'Neega', 'Ovak', 'Ownka', 'Shaulha', 'Sulha', 'Vola',
                    'Volen', 'Yevelda',
                ]
            ],
            'human' => [
                'male' => [
                    'Aseir', 'Bardeid', 'Haseid', 'Khemed', 'Mehmen', 'Sudeiman', 'Zasheir',
                    'Darvin', 'Dorn', 'Evendur', 'Gorstag', 'Grim', 'Helm', 'Malark', 'Morn', 'Randal', 'Stedd',
                    'Bar', 'Fadei', 'Glar', 'Grigor', 'Igan', 'Ivor', 'Kosef', 'MivaI', 'Orei', 'Pavel', 'Sergor',
                    'Ander', 'Blath', 'Bran', 'Frath', 'Geth', 'Lander', 'Luth', 'Malcer', 'Stor', 'Taman', 'Urth',
                    'Aoth', 'Bareris', 'Ehput-Ki', 'Kethoth', 'Mumed', 'Ramas', 'So-Kehur', 'Thazar-De', 'Urhur',
                    'Borivik', 'Faurgar', 'Jandar', 'Kanithar', 'Madislak', 'Ralmevik', 'Shaumar', 'Vladislak',
                    'An', 'Chen', 'Chi', 'Fai', 'Jiang', 'Jun', 'Lian', 'Long', 'Meng', 'On', 'Shan', 'Shui', 'Wen',
                    'Anton', 'Diero. Marcon', 'Pieron', 'Rimardo', 'Romero', 'Salazar', 'Umbero',
                ],
                'female' => [
                    'Alala', 'Ceidil. Hama', 'Jasmal', 'Meilil', 'Seipora', 'Yasheira', 'Zasheida',
                    'Arveene', 'Esvele', 'Jhessail', 'Kerri', 'Lureene', 'Miri', 'Rowan', 'Shandri', 'Tessele',
                    'Alethra', 'Kara', 'Katernin', 'Mara', 'Natali', 'Olma', 'Tana', 'Zora',
                    'Amafrey', 'Betha', 'Cefrey', 'Kethra', 'Mara', 'Olga', 'Silifrey', 'Westra',
                    'Arizima', 'Chathi', 'Nephis', 'Nulara', 'Murithi', 'Sefris', 'Thola', 'Umara', 'Zolis',
                    'Fyevarra', 'Hulmarra', 'Immith', 'Imzel', 'Navarra', 'Shevarra', 'Tammith', 'Yuldra',
                    'Bai', 'Chao', 'Jia', 'Lei', 'Mei', 'Qiao', 'Shui', 'Tai',
                    'Balama', 'Dona', 'Faila', 'Jalana', 'Luisa', 'Marta', 'Quara', 'Selise', 'Vonda',
                ]
            ],
            'tiefling' => [
                'male' => [
                    'Akmenos', 'Amnon', 'Barakas',
                    'Damakos', 'Ekemon', 'Lados', 'Kairon', 'Leucis', 'Melech',
                    'Mordai', 'Morthos', 'Pelaios', 'Skamos', 'Therai',
                ],
                'female' => [
                    'Akta', 'Anakis', 'Bryseis', 'Criella',
                    'Damaia', 'Ea', 'Kallista', 'Lerissa', 'Makaria', 'Nemeia',
                    'Orianna', 'Phelaia', 'Rieta',
                ]
            ],
        ];
        
        return $names;
    }
    
    public static function getSurname(): array{
        $surnames = [
            'dragonborn' => [
                'Clethtinthiallor', 'Daardendrian', 'Delmirev',
                'Drachedandion', 'Fenkenkabradon', 'Kepeshkmolik',
                'Kerrhylon', 'Kimbatuul', 'Linxakasendalor', 'Myastan',
                'Nemmonis', 'Norixius', 'Ophinshtalajiir', 'Prexijandilin',
                'Shestendeliath', 'Turnuroth', 'Verthisathurgiesh', 'Yarjerit',
            ],
            'dwarf' => [
                'Balderk', 'Battlehammer', 'Brawnanvil',
                'Oankil', 'Fireforge', 'Frostbeard', 'Gorunn', 'Holderhek',
                'Ironfist', 'Loderr', 'Lutgehr', 'Rumnaheim', 'Strakeln',
                'Torunn', 'Ungart',
            ],
            'elf' => [
                'Amakiir', 'Amastacia', 'Galanodel', 'Holimion',
                'llphelkiir', 'Liadon', 'Meliamne', 'Nailo', 'Siannodel', 'Xiloscient',
            ],
            'gnome' => [
                'Beren', 'Daergel', 'Folkor', 'Garrick', 'Nackle',
                'Murnig', 'Ningel', 'Raulnor', 'Scheppen', 'Timbers', 'Turen',
                'Aleslosh', 'Ashhearlh', 'Badger', 'Cloak',
                'Doublelock', 'Filchbatler', 'Fnipper', 'Ku', 'Nim', 'Oneshoe',
                'Pock', 'Sparklegem', 'Stumbleduck',
            ],
            'halfling' => [
                'Brushgather', 'Goodbarrel', 'Greenbottle',
                'High-hill', 'Hilltopple', 'Leagallow', 'Tealeaf', 'Thorngage',
                'Tosscobble', 'Underbough',
            ],
            'human' => [
                'Basha', 'Dumein', 'Jassan', 'Khalid', 'Moslana', 'Pashar', 'Rein',
                'Amblecrown', 'Buckman', 'Dundragon', 'Evenwood', 'Greycastle', 'Tallstag',
                'Bersk', 'Chernin', 'Dotsk', 'Kulenov', 'Marsk', 'Nemetsk', 'Shemov', 'Starag',
                'Brightwood', 'Helder', 'Hornraven', 'Lackman', 'Stormwind', 'Windrivver',
                'Ankhalab', 'Anskuld', 'Fezim', 'Hahpet', 'Nathandem', 'Sepret', 'Uuthrakt',
                'Chergoba', 'Dyernina', 'Iltazyara', 'Murnyethara', 'Stayanoga', 'Ulmokina',
                'Chien', 'Huang', 'Kao', 'Kung', 'Lao', 'Ling', 'Mei', 'Pin', 'Shin', 'Sum', 'Tan', 'Wan',
                'Agosto', 'Astorio', 'Calabra', 'Domine', 'Falone', 'Marivaldi', 'Pisacar', 'Ramondo',
            ],
        ];
        
        return $surnames;
    }
}