<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class developersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * 
     */
    public function randomName()
    {
        $firstNames = [
            "John",
            "Mary",
            "Michael",
            "Sarah",
            "Robert",
            "Emily",
            "William",
            "Olivia",
            "James",
            "Emma",
            "David",
            "Sophia",
            "Joseph",
            "Ava",
            "Elizabeth",
            "Benjamin",
            "Jennifer",
            "Christopher",
            "Jessica",
            "Daniel",
            "Isabella",
            "Matthew",
            "Ashley",
            "Andrew",
            "Lauren",
            "Thomas",
            "Grace",
            "Katherine",
            "Alexander",
            "Charlotte"
        ];
    
        $lastNames = [
                "Smith",
                "Johnson",
                "Brown",
                "Williams",
                "Jones",
                "Davis",
                "Miller",
                "Wilson",
                "Anderson",
                "Taylor",
                "Moore",
                "Martin",
                "Lee",
                "Garcia",
                "Rodriguez",
                "Martinez",
                "Hernandez",
                "Gonzalez",
                "Lopez",
                "Perez",
            "Hall",
            "Harris",
            "Clark",
            "King",
            "Lewis",
            "White",
            "Taylor",
            "Baker",
            "Scott",
            "Green"
        ];
        $first_name = '';
        $last_name = $firstNames[rand(0,29)];
        $full_name = $lastNames[rand(0,29)];
        $full_name = $first_name . ' ' . $last_name;
        return $full_name;
    }
    public function randomCountry()
    {
        $countries = array(
            'United States',
            'China',
            'India',
            'United Kingdom',
            'Canada',
            'Australia',
            'Germany',
            'France',
            'Japan',
            'Brazil',
            'Russia',
            'South Africa',
            'Mexico',
            'Italy',
            'Spain',
            'South Korea',
            'Argentina',
            'Egypt',
            'Saudi Arabia',
            'Turkey',
            'Indonesia',
            'Thailand',
            'Nigeria',
            'Kenya',
            'New Zealand',
            'Greece',
            'Netherlands',
            'Switzerland',
            'Sweden',
            'Norway'
        );
        $country = rand(0,29);
        return $countries[$country];
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
    public function randomCompany()
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
    public function run()
    {
        for($i =0;$i<30;$i++)
        {
            $name = $this->randomName();
            $country = $this->randomCountry();
            $date = $this->randomDate();
            $company = $this->randomCompany();
            DB::table('developers')->insert([
                'name'=>$company,
                'country'=>$country,
                'found_date'=>date($date),
                'founder'=>$name
                ]
            );
        }
    }
}
