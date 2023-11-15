<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function RandomCompany()
    {
        $collection1 = [
            "Pixel",
            "Bit",
            "Arcane",
            "Ninja",
            "Quest",
            "Digital",
            "Epic",
            "Code",
            "Fusion",
            "Gaming",
            "Infinite",
            "Magic",
            "Star",
            "Cyber",
            "Pulse",
            "Mystic",
            "Sky",
            "Nova",
            "Rocket",
            "Future",
            "Neon",
            "Pixelated",
            "Tech",
            "Dragon",
            "Enigma",
            "Retro",
            "Quantum",
            "Cosmic",
            "Omega"
        ];
        $collection2 = [
            "Forge",
            "Labs",
            "Studios",
            "Interactive",
            "Entertainment",
            "Games",
            "Creations",
            "Dynamics",
            "Innovations",
            "Fusion",
            "World",
            "Dreams",
            "Solutions",
            "Legends",
            "Works",
            "Frontier",
            "Design",
            "Art",
            "Horizon",
            "Realms",
            "Spectrum",
            "Dimensions",
            "Sculpt",
            "Warp",
            "Origin",
            "Voyage",
            "Craft",
            "Machine",
            "Galaxy"
        ];
        $postfixes = [
            "Studios",
            "Interactive",
            "Entertainment",
            "Games",
            "Software",
            "Digital",
            "Media",
            "Labs",
            "Solutions",
            "World",
            "Network",
            "Gaming",
            "Inc.",
            "Corporation",
            "Labs",
            "Entertainment Group",
            "Productions",
            "Digital Arts",
            " "
        ];
        $company_name = $collection1[rand(0,28)].$collection2[rand(0,28)].' '.$postfixes[rand(0,18)];
        return $company_name;
    }
    public function RandomGameName()
    {
        $gameNameCollections = array(
            array(
                "Epic",
                "Adventure",
                "Mystic",
                "Dragon",
                "Space",
                "Galactic",
                "Quest",
                "Magic",
                "Legend",
                "Fantasy",
                "Monster",
                "Warrior",
                "Ninja",
                "Zombie",
                "Pirate",
                "Kingdom",
                "Legend",
                "Wild",
                "Hero",
                "Inferno",
                "Sword",
                "Rogue",
                "Dark",
                "Shadow",
                "Eternal",
                "Cyber",
                "Apocalypse",
                "Elder",
                "Chronicle",
                "Ring"
            ),
            array(
                "of",
                "the",
                "and",
                "Quest",
                "Chronicles",
                "Legends",
                "War",
                "World",
                "Magic",
                "Adventure",
                "Darkness",
                "Empire",
                "King",
                "Star",
                "Planet",
                "Dragon",
                "Mystery",
                "Sorcery",
                "Zombies",
                "Pirates",
                "Future",
                "Myth",
                "Dungeon",
                "Riders",
                "Heroes",
                "Epic",
                "Saga",
                "Rising",
                " ",

            ),
            array(
                "Chaos",
                "Fallen",
                "Realm",
                "Mythos",
                "Legion",
                "Crusaders",
                "Gate",
                "Armageddon",
                "Infinity",
                "Nexus",
                "Voyage",
                "Warfare",
                "Wizards",
                "Ancients",
                "Shadows",
                "Legacies",
                "Conquest",
                "Galaxy",
                "Secrets",
                "Dreams",
                "Destiny",
                "Abyss",
                "Eclipse",
                "Warlords",
                "Serpent",
                "Empire",
                "Artifacts",
                "Vortex",
                "Pandemonium",
                "Doom",
                " ",

            ),
            array(
                "Era",
                "Rebirth",
                "Quest",
                "Lore",
                "Adventures",
                "Survival",
                "Revenge",
                "Odyssey",
                "Rift",
                "Chronicle",
                "Cataclysm",
                "Journey",
                "Mysteries",
                "Fate",
                "Ascension",
                "Saga",
                "Myth",
                "Apocalypse",
                "Warriors",
                "Legacy",
                "Forgotten",
                "Horizon",
                "Destiny",
                "Awakening",
                "Tales",
                "Enigma",
                "Requiem",
                "Harmony",
                "Nemesis",
                "Genesis",
                " ",

            ),
        );
        $name_length = rand(1,4);
        $name = '';
        for($i=0;$i<$name_length;$i++)
        {
            $number = rand(0,28);
            $name .= $gameNameCollections[$i][$number];
        }  
        return $name;
    }
    public function RandomGameType()
    {
        $videoGameTypes = [
            "Action",
            "Adventure",
            "Role-Playing",
            "Platformer",
            "Shooter",
            "Sports",
            "Racing",
            "Simulation",
            "Strategy",
            "Puzzle",
            "Fighting",
            "Horror",
            "Survival",
            "Stealth",
            "Open World",
            "MMORPG",
            "RPG",
            "Tactical",
            "Turn-Based",
            "Card",
            "Educational",
            "Party",
            "Music",
            "Rhythm",
            "Sandbox",
            "Management",
            "War",
            "Science Fiction",
            "Fantasy",
            "Historical",
            "Mystery",
            "Comedy",
            "Western",
            "Science",
            "Medieval",
            "Cyberpunk",
            "Post-Apocalyptic",
            "Detective",
            "Superhero",
            "Space",
            "Zombie",
            "Survival Horror",
            "Anime",
            "Steampunk",
            "Military",
            "Exploration",
            "Film Noir",
            "Time Travel",
            "Martial Arts",
            "Sports Simulation",
            "Historical Fiction",
            "Wild West",
            "Political",
            "Dystopian",
            "Heist",
            "Lovecraftian",
            "Mythology",
            "Roguelike",
            "Metroidvania",
            "Space Exploration",
            "Artillery",
            "Escape Room",
            "Trading Card",
            "Interactive Fiction",
            "Naval",
            "Business",
            "Surreal",
            "Sailing",
            "Nature",
            "Virtual Reality",
            "Cosmic Horror",
            "Mystery Adventure",
            "Film Adaptation",
            "Fantasy Adventure",
            "Space Trading",
            "Medieval Fantasy",
            "Epic Fantasy",
            "Time Manipulation",
            "Supernatural",
            "Mythological Beasts",
            "Mythical Creatures",
            "Monster Taming",
            "Hunting",
            "Maze",
            "Twin-Stick Shooter",
            "Interactive Movie",
            "Parkour",
            "Tower Defense",
            "Character Action",
            "Rhythm Racing",
            "Nonviolent",
            "Zoo",
            "Hacking",
            "Post-Apocalyptic Survival",
            "Alternate History",
            "Visual Novel",
            "Religion",
            "Space Combat",
            "Time Loop",
            "Character Customization"
        ];
        $type_number = rand(1,10);
        $exist_number = [];
        $type = '';
        for($i=0;$i<$type_number;$i++)
        {
            $number = rand(0,98);
            if(in_array($number,$exist_number))
            {
                $i--;
                continue;
            }
            $type .=( $videoGameTypes[$number].' , '); 
            array_push($exist_number,$number);
        }
        substr($type,0,-3);
        return $type;
    }
    public function randomDate()
    {
        $year = rand(1945,3000);
        $month = rand(1,12);
        $day =  rand(1,31);
        $is_leap = false;
        if(($year%4==0&&$year%100!=0)||$year%400==0) $is_leap=true;
        if(in_array($month,[2,4,6,9,11])&&$day==31)$day = 30;
        if($month==2&&$day>=29)
        {
            if($is_leap==true)$day = 29;
            if($is_leap==false)$day = 28;
        }
        
        $date = $year .'-'.$month.'-'.$day;
        return $date;
        
    }
    public function run()
    {
        for($i =0;$i<30;$i++)
        {
            $name = $this->RandomGameName();
            $date = $this->randomDate();
            $company = $this->RandomCompany();
            $type = $this->RandomGameType();
            DB::table('games')->insert([
                'name'=>$name,
                'publisher'=>$company,
                'release_date'=>date($date),
                'd_id'=>rand(1,30),
                'price'=> rand(1,1000),
                'peak_player'=>rand(1,500000),
                'gametype'=>$type
                ]
            );
        }
    }
}
