<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Auth\Events\Registered;

class Register extends Component
{

    public $name, $father_name, $mother_name, $surname, $address, $aadhaar_number, $pancard_number, $mobile_number, $email, $state, $city, $terms, $password;
    public $statesAndDistricts;
    public $cities = [];

    protected $rules = [
        'name' => 'required|regex:/^[a-zA-Z]+(?:\s[a-zA-Z]+)*$/|max:255',
        'father_name' => 'required|regex:/^[a-zA-Z]+(?:\s[a-zA-Z]+)*$/|max:255',
        'mother_name' => 'required|regex:/^[a-zA-Z]+(?:\s[a-zA-Z]+)*$/|max:255',
        'surname' => 'required|regex:/^[a-zA-Z]+(?:\s[a-zA-Z]+)*$/|max:255',
        'address' => 'required|string|max:255',
        'aadhaar_number' => 'required|digits:12|unique:users',
        'pancard_number' => 'required|regex:/^[A-Z]{5}[0-9]{4}[A-Z]$/|max:10|unique:users',
        'mobile_number' => 'required|regex:/^[1-9][0-9]{9}$/|unique:users',
        'email' => 'required|string|email|max:255|unique:users',
        'state' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'terms' => 'accepted',
        'password' => 'required|string|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
    ];


    public function mount()
    {
        $this->statesAndDistricts = $this->getStateAndDistrictData();
        $this->state = $this->statesAndDistricts[0]['state'];
        $this->city = $this->statesAndDistricts[0]['districts'][0];
    }

    private function getStateAndDistrictData()
    {
        return [
            [
                "state" => "Uttar Pradesh",
                "districts" => [
                    "Agra", "Aligarh", "Ambedkar Nagar", "Amethi", "Amroha", "Auraiya", "Ayodhya", "Azamgarh", "Baghpat", "Bahraich",
                    "Ballia", "Balrampur", "Banda", "Barabanki", "Bareilly", "Basti", "Bhadohi", "Bijnor", "Budaun", "Bulandshahr",
                    "Chandauli", "Chitrakoot", "Deoria", "Etah", "Etawah", "Farrukhabad", "Fatehpur", "Firozabad", "Gautam Buddha Nagar",
                    "Ghaziabad", "Ghazipur", "Gonda", "Gorakhpur", "Hamirpur", "Hapur", "Hardoi", "Hathras", "Jalaun", "Jaunpur", "Jhansi",
                    "Kannauj", "Kanpur Dehat", "Kanpur Nagar", "Kasganj", "Kaushambi", "Kushinagar", "Lakhimpur Kheri", "Lalitpur", "Lucknow",
                    "Maharajganj", "Mahoba", "Mainpuri", "Mathura", "Mau", "Meerut", "Mirzapur", "Moradabad", "Muzaffarnagar", "Pilibhit",
                    "Pratapgarh", "Prayagraj", "Raebareli", "Rampur", "Saharanpur", "Sambhal", "Sant Kabir Nagar", "Shahjahanpur", "Shamli",
                    "Shravasti", "Siddharthnagar", "Sitapur", "Sonbhadra", "Sultanpur", "Unnao", "Varanasi"
                ]
            ],
            [
                "state" => "Arunachal Pradesh",
                "districts" => [
                    "Anjaw", "Changlang", "Dibang Valley", "East Kameng", "East Siang", "Kamle", "Kra Daadi", "Kurung Kumey", "Lepa Rada",
                    "Lohit", "Longding", "Lower Dibang Valley", "Lower Siang", "Lower Subansiri", "Namsai", "Pakke-Kessang", "Papum Pare",
                    "Shi Yomi", "Siang", "Tawang", "Tirap", "Upper Siang", "Upper Subansiri", "West Kameng", "West Siang"
                ]
            ],
            [
                "state" => "Assam",
                "districts" => [
                    "Baksa", "Barpeta", "Biswanath", "Bongaigaon", "Cachar", "Charaideo", "Chirang", "Darrang", "Dhemaji", "Dhubri", "Dibrugarh",
                    "Dima Hasao", "Goalpara", "Golaghat", "Hailakandi", "Hojai", "Jorhat", "Kamrup", "Kamrup Metropolitan", "Karbi Anglong",
                    "Karimganj", "Kokrajhar", "Lakhimpur", "Majuli", "Morigaon", "Nagaon", "Nalbari", "Sivasagar", "Sonitpur",
                    "South Salmara-Mankachar", "Tinsukia", "Udalguri", "West Karbi Anglong", "Biswanath Chariali", "Bajali"
                ]
            ],
            [
                "state" => "Bihar",
                "districts" => [
                    "Araria", "Arwal", "Aurangabad", "Banka", "Begusarai", "Bhagalpur", "Bhojpur", "Buxar", "Darbhanga", "East Champaran (Motihari)",
                    "Gaya", "Gopalganj", "Jamui", "Jehanabad", "Kaimur (Bhabua)", "Katihar", "Khagaria", "Kishanganj", "Lakhisarai", "Madhepura",
                    "Madhubani", "Munger", "Muzaffarpur", "Nalanda", "Nawada", "Patna", "Purnia", "Rohtas", "Saharsa", "Samastipur", "Saran",
                    "Sheikhpura", "Sheohar", "Sitamarhi", "Siwan", "Supaul", "Vaishali", "West Champaran"
                ]
            ],
            [
                "state" => "Chhattisgarh",
                "districts" => [
                    "Balod", "Baloda Bazar", "Balrampur", "Bastar", "Bemetara", "Bijapur", "Bilaspur", "Dantewada (South Bastar)", "Dhamtari",
                    "Durg", "Gariyaband", "Janjgir-Champa", "Jashpur", "Kanker (North Bastar)", "Kawardha", "Kondagaon", "Korba", "Korea (Koriya)",
                    "Mahasamund", "Mungeli", "Narayanpur", "Raigarh", "Raipur", "Rajnandgaon", "Sukma", "Surajpur", "Surguja"
                ]
            ],
            [
                "state" => "Goa",
                "districts" => [
                    "North Goa", "South Goa"
                ]
            ],
            [
                "state" => "Gujarat",
                "districts" => [
                    "Ahmedabad", "Amreli", "Anand", "Aravalli", "Banaskantha (Palanpur)", "Bharuch", "Bhavnagar", "Botad", "Chhota Udepur",
                    "Dahod", "Dang (Ahwa)", "Devbhoomi Dwarka", "Gandhinagar", "Gir Somnath", "Jamnagar", "Junagadh", "Kheda (Nadiad)",
                    "Kutch", "Mahisagar", "Mehsana", "Morbi", "Narmada (Rajpipla)", "Navsari", "Panchmahal (Godhra)", "Patan", "Porbandar",
                    "Rajkot", "Sabarkantha (Himmatnagar)", "Surat", "Surendranagar", "Tapi (Vyara)", "Vadodara", "Valsad"
                ]
            ],
            [
                "state" => "Haryana",
                "districts" => [
                    "Ambala", "Bhiwani", "Charkhi Dadri", "Faridabad", "Fatehabad", "Gurugram", "Hisar", "Jhajjar", "Jind", "Kaithal",
                    "Karnal", "Kurukshetra", "Mahendragarh", "Nuh", "Palwal", "Panchkula", "Panipat", "Rewari", "Rohtak", "Sirsa",
                    "Sonipat", "Yamunanagar"
                ]
            ],
            [
                "state" => "Himachal Pradesh",
                "districts" => [
                    "Bilaspur", "Chamba", "Hamirpur", "Kangra", "Kinnaur", "Kullu", "Lahaul & Spiti", "Mandi", "Shimla", "Sirmaur",
                    "Solan", "Una"
                ]
            ],
            [
                "state" => "Jharkhand",
                "districts" => [
                    "Bokaro", "Chatra", "Deoghar", "Dhanbad", "Dumka", "East Singhbhum", "Garhwa", "Giridih", "Godda", "Gumla", "Hazaribagh",
                    "Jamtara", "Khunti", "Koderma", "Latehar", "Lohardaga", "Pakur", "Palamu", "Ramgarh", "Ranchi", "Sahibganj", "Seraikela-Kharsawan",
                    "Simdega", "West Singhbhum"
                ]
            ],
            [
                "state" => "Karnataka",
                "districts" => [
                    "Bagalkot", "Ballari (Bellary)", "Belagavi (Belgaum)", "Bengaluru Rural", "Bengaluru Urban", "Bidar", "Chamarajanagar",
                    "Chikkaballapur", "Chikkamagaluru (Chikmagalur)", "Chitradurga", "Dakshina Kannada", "Davanagere", "Dharwad", "Gadag",
                    "Hassan", "Haveri", "Kalaburagi (Gulbarga)", "Kodagu", "Kolar", "Koppal", "Mandya", "Mysuru (Mysore)", "Raichur", "Ramanagara",
                    "Shivamogga (Shimoga)", "Tumakuru (Tumkur)", "Udupi", "Uttara Kannada (Karwar)", "Vijayapura (Bijapur)", "Yadgir"
                ]
            ],
            [
                "state" => "Kerala",
                "districts" => [
                    "Alappuzha", "Ernakulam", "Idukki", "Kannur", "Kasaragod", "Kollam", "Kottayam", "Kozhikode", "Malappuram", "Palakkad",
                    "Pathanamthitta", "Thiruvananthapuram", "Thrissur", "Wayanad"
                ]
            ],
            [
                "state" => "Madhya Pradesh",
                "districts" => [
                    "Agar Malwa", "Alirajpur", "Anuppur", "Ashoknagar", "Balaghat", "Barwani", "Betul", "Bhind", "Bhopal", "Burhanpur",
                    "Chhatarpur", "Chhindwara", "Damoh", "Datia", "Dewas", "Dhar", "Dindori", "Guna", "Gwalior", "Harda", "Hoshangabad",
                    "Indore", "Jabalpur", "Jhabua", "Katni", "Khandwa (East Nimar)", "Khargone (West Nimar)", "Mandla", "Mandsaur",
                    "Morena", "Narsinghpur", "Neemuch", "Niwari", "Panna", "Raisen", "Rajgarh", "Ratlam", "Rewa", "Sagar", "Satna",
                    "Sehore", "Seoni", "Shahdol", "Shajapur", "Sheopur", "Shivpuri", "Sidhi", "Singrauli", "Tikamgarh", "Ujjain",
                    "Umaria", "Vidisha"
                ]
            ],
            [
                "state" => "Maharashtra",
                "districts" => [
                    "Ahmednagar", "Akola", "Amravati", "Aurangabad", "Beed", "Bhandara", "Buldhana", "Chandrapur", "Dhule", "Gadchiroli",
                    "Gondia", "Hingoli", "Jalgaon", "Jalna", "Kolhapur", "Latur", "Mumbai City", "Mumbai Suburban", "Nagpur", "Nanded",
                    "Nandurbar", "Nashik", "Osmanabad", "Palghar", "Parbhani", "Pune", "Raigad", "Ratnagiri", "Sangli", "Satara",
                    "Sindhudurg", "Solapur", "Thane", "Wardha", "Washim", "Yavatmal"
                ]
            ],
            [
                "state" => "Manipur",
                "districts" => [
                    "Bishnupur", "Chandel", "Churachandpur", "Imphal East", "Imphal West", "Jiribam", "Kakching", "Kamjong", "Kangpokpi",
                    "Noney", "Pherzawl", "Senapati", "Tamenglong", "Tengnoupal", "Thoubal", "Ukhrul"
                ]
            ],
            [
                "state" => "Meghalaya",
                "districts" => [
                    "East Garo Hills", "East Khasi Hills", "East Jaintia Hills", "Eastern West Khasi Hills", "North Garo Hills",
                    "Ri Bhoi", "South Garo Hills", "South West Garo Hill", "South West Khasi Hills", "West Garo Hills", "West Jaintia Hills", "West Khasi Hills"
                ]
            ],
            [
                "state" => "Mizoram",
                "districts" => [
                    "Aizawl", "Champhai", "Hnahthial", "Khawzawl", "Kolasib", "Lawngtlai", "Lunglei", "Mamit", "Saiha", "Saitual", "Serchhip"
                ]
            ],
            [
                "state" => "Nagaland",
                "districts" => [
                    "Chümoukedima", "Dimapur", "Kiphire", "Kohima", "Longleng", "Mokokchung", "Mon", "Niuland", "Noklak", "Peren", "Phek",
                    "Shamator", "Tseminyu", "Tuensang", "Wokha", "Zunheboto"
                ]
            ],
            [
                "state" => "Odisha",
                "districts" => [
                    "Angul", "Balangir", "Balasore", "Bargarh", "Bhadrak", "Boudh", "Cuttack", "Debagarh", "Dhenkanal", "Gajapati",
                    "Ganjam", "Jagatsinghpur", "Jajpur", "Jharsuguda", "Kalahandi", "Kandhamal", "Kendrapara", "Kendujhar", "Khordha",
                    "Koraput", "Malkangiri", "Mayurbhanj", "Nabarangpur", "Nayagarh", "Nuapada", "Puri", "Rayagada", "Sambalpur",
                    "Subarnapur", "Sundargarh"
                ]
            ],
            [
                "state" => "Punjab",
                "districts" => [
                    "Amritsar", "Barnala", "Bathinda", "Faridkot", "Fatehgarh Sahib", "Fazilka", "Ferozepur", "Gurdaspur",
                    "Hoshiarpur", "Jalandhar", "Kapurthala", "Ludhiana", "Mansa", "Moga", "Muktsar", "Pathankot",
                    "Patiala", "Rupnagar", "Sahibzada Ajit Singh Nagar", "Sangrur", "Shahid Bhagat Singh Nagar", "Sri Muktsar Sahib", "Tarn Taran"
                ]
            ],
            [
                "state" => "Rajasthan",
                "districts" => [
                    "Ajmer", "Alwar", "Banswara", "Baran", "Barmer", "Bharatpur", "Bhilwara", "Bikaner", "Bundi",
                    "Chittorgarh", "Churu", "Dausa", "Dholpur", "Dungarpur", "Hanumangarh", "Jaipur", "Jaisalmer",
                    "Jalore", "Jhalawar", "Jhunjhunu", "Jodhpur", "Karauli", "Kota", "Nagaur", "Pali", "Pratapgarh",
                    "Rajsamand", "Sawai Madhopur", "Sikar", "Sirohi", "Sri Ganganagar", "Tonk", "Udaipur"
                ]
            ],
            [
                "state" => "Sikkim",
                "districts" => [
                    "East Sikkim", "North Sikkim", "Pakyong", "Soreng", "South Sikkim", "West Sikkim"
                ]
            ],
            [
                "state" => "Tamil Nadu",
                "districts" => [
                    "Ariyalur", "Chengalpattu", "Chennai", "Coimbatore", "Cuddalore", "Dharmapuri", "Dindigul",
                    "Erode", "Kallakurichi", "Kanchipuram", "Kanyakumari", "Karur", "Krishnagiri", "Madurai",
                    "Mayiladuthurai", "Nagapattinam", "Namakkal", "Nilgiris", "Perambalur", "Pudukkottai", "Ramanathapuram",
                    "Ranipet", "Salem", "Sivaganga", "Tenkasi", "Thanjavur", "Theni", "Thoothukudi", "Tiruchirappalli",
                    "Tirunelveli", "Tirupattur", "Tiruppur", "Tiruvallur", "Tiruvannamalai", "Tiruvarur", "Vellore", "Viluppuram",
                    "Virudhunagar"
                ]
            ],
            [
                "state" => "Telangana",
                "districts" => [
                    "Adilabad", "Bhadradri Kothagudem", "Hyderabad", "Jagtial", "Jangaon", "Jayashankar Bhupalpally",
                    "Jogulamba Gadwal", "Kamareddy", "Karimnagar", "Khammam", "Kumuram Bheem Asifabad", "Mahabubabad",
                    "Mahbubnagar", "Mancherial", "Medak", "Medchal–Malkajgiri", "Mulugu", "Nalgonda", "Narayanpet",
                    "Nagarkurnool", "Nirmal", "Nizamabad", "Peddapalli", "Rajanna Sircilla", "Ranga Reddy", "Sangareddy",
                    "Siddipet", "Suryapet", "Vikarabad", "Wanaparthy", "Warangal", "Yadadri Bhuvanagiri"
                ]
            ],
            [
                "state" => "Tripura",
                "districts" => [
                    "Dhalai", "Gomati", "Khowai", "North Tripura", "Sepahijala", "South Tripura", "Unakoti", "West Tripura"
                ]
            ],
            [
                "state" => "Uttarakhand",
                "districts" => [
                    "Almora", "Bageshwar", "Chamoli", "Champawat", "Dehradun", "Haridwar", "Nainital", "Pauri Garhwal",
                    "Pithoragarh", "Rudraprayag", "Tehri Garhwal", "Udham Singh Nagar", "Uttarkashi"
                ]
            ],
            [
                "state" => "West Bengal",
                "districts" => [
                    "Alipurduar", "Bankura", "Birbhum", "Cooch Behar", "Dakshin Dinajpur", "Darjeeling", "Hooghly",
                    "Howrah", "Jalpaiguri", "Jhargram", "Kalimpong", "Kolkata", "Maldah", "Murshidabad", "Nadia",
                    "North 24 Parganas", "Paschim Bardhaman", "Paschim Medinipur", "Purba Bardhaman", "Purba Medinipur",
                    "Purulia", "South 24 Parganas", "Uttar Dinajpur"
                ]
            ],
            [
                "state" => "Andaman and Nicobar",
                "districts" => ["Nicobar", "North and Middle Andaman", "South Andaman"]
            ],
            [
                "state" => "Delhi",
                "districts" => [
                    "Central Delhi", "East Delhi", "New Delhi", "North Delhi", "North East Delhi", "North West Delhi",
                    "Shahdara", "South Delhi", "South East Delhi", "South West Delhi", "West Delhi"
                ]
            ],
            [
                "state" => "Puducherry",
                "districts" => ["Karaikal", "Mahe", "Puducherry", "Yanam"]
            ],
            [
                "state" => "Ladakh",
                "districts" => ["Kargil", "Leh"]
            ],
            [
                "state" => "Jammu and Kashmir",
                "districts" => [
                    "Anantnag", "Bandipore", "Baramulla", "Budgam", "Doda", "Ganderbal", "Jammu", "Kathua", "Kishtwar",
                    "Kulgam", "Kupwara", "Poonch", "Pulwama", "Rajouri", "Ramban", "Reasi", "Samba", "Shopian", "Srinagar",
                    "Udhampur"
                ]
            ],

            // Add data for other states here
        ];
    }

    public function updatedState($newState)
    {
        foreach ($this->statesAndDistricts as $stateData) {
            if ($stateData['state'] === $newState) {
                $this->cities = $stateData['districts'];
                break;
            }
        }
    }
    public function updateCities()
    {
        $selectedState = collect($this->statesAndDistricts)->firstWhere('state', $this->state);
        $this->cities = $selectedState['districts']; // Update the city options
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
    public function register()
    {

        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password), // You should collect a password or generate one
            'mother_name' => $this->mother_name,
            'father_name' => $this->father_name,
            'surname' => $this->surname,
            'address' => $this->address,
            'aadhaar_number' => $this->aadhaar_number,
            'pancard_number' => $this->pancard_number,
            'mobile_number' => $this->mobile_number,
            'state' => $this->state,
            'city' => $this->city,
        ]);
        $user->sendEmailVerificationNotification();
        $this->dispatch('showPopup');
        return redirect()->route('verification.notice');
    }
}
