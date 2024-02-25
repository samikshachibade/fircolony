<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Config;
class LawsController extends Controller
{
    public function index()
    {
        $currentLocale = Config::get('app.locale');
        $englishLaws = [
            'Passed' => [
                ['name' => 'The Constitution (Scheduled Tribes) Order (Amendment) Bill, 2024', 'year' => 2024],
                ['name' => 'The Water (Prevention and Control of Pollution) Amendment Bill, 2024', 'year' => 2024],
                ['name' => 'The Constitution (Scheduled Castes and Scheduled Tribes) Orders (Amendment) Bill, 2024', 'year' => 2024],
                ['name' => 'The Jammu and Kashmir Local Bodies Laws (Amendment) Bill, 2024', 'year' => 2024],
                ['name' => 'The Public Examinations (Prevention of Unfair Means) Bill, 2024', 'year' => 2024],
                ['name' => 'The Telecommunications Bill, 2023', 'year' => 2023],
                ['name' => 'The National Capital Territory of Delhi Laws (Special Provisions) Second (Amendment) Bill, 2023', 'year' => 2023],
                ['name' => 'The Central Goods and Services Tax (Second Amendment) Bill, 2023', 'year' => 2023],
                ['name' => 'The Provisional Collection of Taxes Bill, 2023', 'year' => 2023],
                ['name' => 'The Bharatiya Nyaya (Second) Sanhita, 2023', 'year' => 2023],
                ['name' => 'The Bharatiya Nagarik Suraksha (Second) Sanhita, 2023', 'year' => 2023],
                ['name' => 'The Bharatiya Sakshya (Second) Bill, 2023', 'year' => 2023],
                ['name' => 'The Jammu and Kashmir Reorganisation (Second Amendment) Bill, 2023', 'year' => 2023],
                ['name' => 'The Government of Union Territories (Amendment) Bill, 2023', 'year' => 2023],
                ['name' => 'The Central Universities (Amendment) Bill, 2023', 'year' => 2023],
                ['name' => 'Women\'s Reservation Bill 2023 [The Constitution (One Hundred Twenty-Eighth Amendment) Bill, 2023]', 'year' => 2023],
                ['name' => 'The Integrated Goods and Services Tax (Amendment) Bill, 2023', 'year' => 2023],
                ['name' => 'The Central Goods and Services Tax (Amendment) Bill, 2023', 'year' => 2023],
                ['name' => 'The Post Office Bill, 2023', 'year' => 2023],
                ['name' => 'The Chief Election Commissioner and Other Election Commissioners (Appointment, Conditions of Service and Term of Office) Bill, 2023', 'year' => 2023],
                ['name' => 'The Digital Personal Data Protection Bill, 2023', 'year' => 2023],
                ['name' => 'The Advocates (Amendment) Bill, 2023', 'year' => 2023],
                ['name' => 'The Press and Registration of Periodicals Bill, 2023', 'year' => 2023],
            ],
            'Pending' => [
                ['name' => 'Overview of Criminal Law Reforms', 'year' => 2024],
                ['name' => 'The Electricity (Amendment) Bill, 2022', 'year' => 2022],

            ],
            'Withdrawn' => [
                ['name' => 'The Bharatiya Sakshya Bill, 2023', 'year' => 2023],
                ['name' => 'The Bharatiya Nagarik Suraksha Sanhita, 2023', 'year' => 2023],

            ],
            'Introduced-Negatived' => [
                ['name' => 'The Delhi Special Police Establishment (Amendment) Ordinance, 2021', 'year' => 2021],
                ['name' => 'The Central Vigilance Commission (Amendment) Ordinance, 2021', 'year' => 2021],

            ],
        ];

        $hindiLaws = [
            'Passed' => [
                ['name' => 'संविधान (अनुसूचित जनजातियों) आदेश (संशोधन) विधेयक, 2024', 'year' => 2024],
                ['name' => 'पानी (प्रदूषण और नियंत्रण) संशोधन विधेयक, 2024', 'year' => 2024],
                ['name' => 'संविधान (अनुसूचित जातियों और अनुसूचित जनजातियों) आदेश (संशोधन) विधेयक, 2024', 'year' => 2024],
                ['name' => 'जम्मू और कश्मीर स्थानीय निकाय विधियों (संशोधन) विधेयक, 2024', 'year' => 2024],
                ['name' => 'सार्वजनिक परीक्षाओं (अनुचित उपायों की निवारण) विधेयक, 2024', 'year' => 2024],
                ['name' => 'दूरसंचार विधेयक, 2023', 'year' => 2023],
                ['name' => 'राष्ट्रीय राजधानी क्षेत्र कानून (विशेष प्रावधान) द्वितीय (संशोधन) विधेयक, 2023', 'year' => 2023],
                ['name' => 'केंद्रीय सामान और सेवा कर (द्वितीय संशोधन) विधेयक, 2023', 'year' => 2023],
                ['name' => 'करों का संयुक्त संग्रहन विधेयक, 2023', 'year' => 2023],
                ['name' => 'भारतीय न्याय विधेयक (द्वितीय) संहिता, 2023', 'year' => 2023],
                ['name' => 'भारतीय नागरिक सुरक्षा (द्वितीय) संहिता, 2023', 'year' => 2023],
                ['name' => 'भारतीय साक्ष्य (द्वितीय) विधेयक, 2023', 'year' => 2023],
                ['name' => 'जम्मू और कश्मीर पुनर्गठन (द्वितीय संशोधन) विधेयक, 2023', 'year' => 2023],
                ['name' => 'संघ राज्य के कानून (संशोधन) विधेयक, 2023', 'year' => 2023],
                ['name' => 'केंद्रीय विश्वविद्यालयों (संशोधन) विधेयक, 2023', 'year' => 2023],
                ['name' => 'महिला आरक्षण विधेयक 2023 [संविधान (एक सौ अठासीवाँ संशोधन) विधेयक, 2023]', 'year' => 2023],
                ['name' => 'संयुक्त वस्त्र और सेवा कर (संशोधन) विधेयक, 2023', 'year' => 2023],
                ['name' => 'केंद्रीय सामान और सेवा कर (संशोधन) विधेयक, 2023', 'year' => 2023],
                ['name' => 'डाक विधेयक, 2023', 'year' => 2023],
                ['name' => 'मुख्य निर्वाचन आयुक्त और अन्य निर्वाचन आयुक्तों (नियुक्ति, सेवा की शर्तें और कार्यकाल) विधेयक, 2023', 'year' => 2023],
                ['name' => 'डिजिटल व्यक्तिगत डेटा संरक्षण विधेयक, 2023', 'year' => 2023],
                ['name' => 'वकीलों (संशोधन) विधेयक, 2023', 'year' => 2023],
                ['name' => 'पत्रिकाओं और पंजीकरण विधेयक, 2023', 'year' => 2023],
            ],
            'Pending' => [
                ['name' => 'अपूर्णीकृत आपराधिक कानून सुधारों का अवलोकन', 'year' => 2024],
                ['name' => 'विद्युत (संशोधन) विधेयक, 2022', 'year' => 2022],
            ],
            'Withdrawn' => [
                ['name' => 'भारतीय साक्ष्य विधेयक, 2023', 'year' => 2023],
                ['name' => 'भारतीय नागरिक सुरक्षा संहिता, 2023', 'year' => 2023],
            ],
            'Introduced-Negatived' => [
                ['name' => 'दिल्ली विशेष पुलिस स्थापना (संशोधन) अध्यादेश, 2021', 'year' => 2021],
                ['name' => 'केंद्रीय सतर्कता आयोग (संशोधन) अध्यादेश, 2021', 'year' => 2021],
            ],
        ];
        
        $marathiLaws = [
            'Passed' => [
                ['name' => 'संविधान (नियोजित जनजाती) आदेश (संशोधन) विधेयक, २०२४', 'year' => 2024],
                ['name' => 'पाणी (प्रतिबंध आणि नियंत्रण) संशोधन विधेयक, २०२४', 'year' => 2024],
                ['name' => 'संविधान (नियोजित जातींचे आदेश) (संशोधन) विधेयक, २०२४', 'year' => 2024],
                ['name' => 'जम्मू आणि काश्मीर स्थानिक निकाय कायदा (संशोधन) विधेयक, २०२४', 'year' => 2024],
                ['name' => 'सार्वजनिक परीक्षा (न्यायाचा अन्याय थांबवण्याच्या) विधेयक, २०२४', 'year' => 2024],
                ['name' => 'दूरसंचार विधेयक, २०२३', 'year' => 2023],
                ['name' => 'राष्ट्रीय राजधानी क्षेत्र कायदा (विशेष प्रावधान) दुसरा (संशोधन) विधेयक, २०२३', 'year' => 2023],
                ['name' => 'केंद्रीय सामान आणि सेवा कर (दुसरा संशोधन) विधेयक, २०२३', 'year' => 2023],
                ['name' => 'करचा संयुक्त संग्रहण विधेयक, २०२३', 'year' => 2023],
                ['name' => 'भारतीय न्याय विधेयक (दुसरा) संहिता, २०२३', 'year' => 2023],
                ['name' => 'भारतीय नागरिक सुरक्षा (दुसरा) संहिता, २०२३', 'year' => 2023],
                ['name' => 'भारतीय साक्ष्य (दुसरा) विधेयक, २०२३', 'year' => 2023],
                ['name' => 'जम्मू आणि काश्मीर पुनर्गठन (दुसरा संशोधन) विधेयक, २०२३', 'year' => 2023],
                ['name' => 'संघ राज्यांचे कायदे (संशोधन) विधेयक, २०२३', 'year' => 2023],
                ['name' => 'केंद्रीय विद्यापीठे (संशोधन) विधेयक, २०२३', 'year' => 2023],
                ['name' => 'स्त्री आरक्षण विधेयक २०२३ [संविधान (एकशे पाच्याव्या संशोधन) विधेयक, २०२३]', 'year' => 2023],
                ['name' => 'संयुक्त कर आणि सेवा कर (संशोधन) विधेयक, २०२३', 'year' => 2023],
                ['name' => 'केंद्रीय सामान आणि सेवा कर (संशोधन) विधेयक, २०२३', 'year' => 2023],
                ['name' => 'पोस्ट ऑफिस विधेयक, २०२३', 'year' => 2023],
                ['name' => 'मुख्य निवडणूक आयुक्त आणि इतर निवडणूक आयुक्तांची (नियुक्ती, सेवा शर्ते आणि कार्यकाल) विधेयक, २०२३', 'year' => 2023],
                ['name' => 'डिजिटल व्यक्तिगत डेटा संरक्षण विधेयक, २०२३', 'year' => 2023],
                ['name' => 'वकील (संशोधन) विधेयक, २०२३', 'year' => 2023],
                ['name' => 'पत्रिका आणि पंजीकरण विधेयक, २०२३', 'year' => 2023],
            ],
            'Pending' => [
                ['name' => 'अपूर्णीकृत आपराधिक कानून सुधारोंचा एक विहंग', 'year' => 2024],
                ['name' => 'विद्युत (संशोधन) विधेयक, २०२२', 'year' => 2022],
            ],
            'Withdrawn' => [
                ['name' => 'भारतीय साक्ष्य विधेयक, २०२३', 'year' => 2023],
                ['name' => 'भारतीय नागरिक सुरक्षा संहिता, २०२३', 'year' => 2023],
            ],
            'Introduced-Negatived' => [
                ['name' => 'दिल्ली विशेष पोलिस वस्थापन (संशोधन) अध्यादेश, २०२१', 'year' => 2021],
                ['name' => 'केंद्रीय सतर्कता आयोग (संशोधन) अध्यादेश, २०२१', 'year' => 2021],
            ],
        ];
        
        switch ($currentLocale) {
            case 'en':
                $laws = $englishLaws;
                break;
            case 'hi':
                $laws = $hindiLaws;
                break;
            case 'ma':
                $laws = $marathiLaws;
                break;
            default:
            $laws = $englishLaws; // Default to English if the locale is not supported
        }

        return view('frontend.find-new-law', compact('laws'));
    }

}
