<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Config;
class Faq extends Component
{
    public $faqs = [];
    public $expandedFaq = null;

    public function mount()
    {
        $currentLocale = Config::get('app.locale');


        $enlgishFaq = [
            [
                'id' => 1,
                'question' => 'What is an FIR?',
                'answer' => 'An FIR (First Information Report) is the earliest form of information about a cognizable offence recorded by a police officer. It sets criminal law into motion and serves as the basis for further investigation and legal proceedings.'
            ],
            [
                'id' => 2,
                'question' => 'Who can file an FIR?',
                'answer' => 'Anyone who has information concerning the commission of a cognizable offence can file an FIR. It is not necessary to be the victim of the crime; even a police officer who learns of such an offence can submit an FIR.'
            ],
            [
                'id' => 3,
                'question' => 'What information should be included in an FIR?',
                'answer' => 'An FIR should include specific details: Date, time, and place of the offence. Description of the incident and the accused. Names of witnesses (if any). Relevant facts related to the crime.'
            ],
            [
                'id' => 4,
                'question' => 'Can an FIR be filed online?',
                'answer' => 'Yes, in many places, you can file an FIR online through designated police portals or apps. Check with your local police department for specific procedures.'
            ],
            [
                'id' => 5,
                'question' => 'What is the difference between a complaint and an FIR?',
                'answer' => 'A complaint is a general report of an incident, while an FIR is a formal document that initiates criminal proceedings. An FIR is more detailed and specific, whereas a complaint may not always lead to legal action.'
            ],
            [
                'id' => 6,
                'question' => 'What is the importance of an FIR?',
                'answer' => 'An FIR is crucial because it records the initial information about a crime, helps police investigate and gather evidence, and serves as evidence in court proceedings.'
            ],
            [
                'id' => 7,
                'question' => 'What are the basic rights of an informant filing an FIR?',
                'answer' => 'The informant has the right to be treated respectfully by the police, receive a copy of the FIR, and be informed about the progress of the case.'
            ],
            [
                'id' => 8,
                'question' => 'What should I do if the police refuse to file my FIR?',
                'answer' => 'If the police refuse, you can approach a higher-ranking officer or submit a written complaint to the Superintendent of Police or the Magistrate.'
            ],
        ];

        $hindiFaq=[
            [
                'id' => 1,
                'question' => 'FIR क्या है?',
                'answer' => 'FIR (प्रथम सूचना रिपोर्ट) एक अपराध की संज्ञेय जानकारी का सबसे पहला रूप है जिसे पुलिस अधिकारी द्वारा दर्ज किया जाता है। यह आपराधिक कानून को सक्रिय करता है और आगे की जांच और कानूनी कार्रवाई का आधार होता है।'
            ],
            [
                'id' => 2,
                'question' => 'FIR कौन दर्ज कर सकता है?',
                'answer' => 'जो कोई भी किसी संज्ञेय अपराध के संबंध में जानकारी रखता है, वह FIR दर्ज कर सकता है। यह जरूरी नहीं कि अपराध का शिकार होना पड़े; यहां तक कि एक पुलिस अधिकारी जो ऐसे अपराध के बारे में जानता है, वह भी FIR दाखिल कर सकता है।'
            ],
            [
                'id' => 3,
                'question' => 'FIR में क्या जानकारी शामिल की जानी चाहिए?',
                'answer' => 'FIR में विशेष विवरण शामिल होने चाहिए: अपराध की तारीख, समय, और स्थान। घटना और आरोपी का वर्णन। गवाहों के नाम (यदि कोई हो)। अपराध से संबंधित प्रासंगिक तथ्य।'
            ],
            [
                'id' => 4,
                'question' => 'क्या FIR ऑनलाइन दर्ज की जा सकती है?',
                'answer' => 'हां, कई जगहों पर आप निर्धारित पुलिस पोर्टल्स या ऐप्स के माध्यम से ऑनलाइन FIR दर्ज कर सकते हैं। विशेष प्रक्रियाओं के लिए अपने स्थानीय पुलिस विभाग से जांच करें।'
            ],
            [
                'id' => 5,
                'question' => 'शिकायत और FIR में क्या अंतर है?',
                'answer' => 'शिकायत एक घटना की सामान्य रिपोर्ट है, जबकि FIR एक औपचारिक दस्तावेज है जो आपराधिक कार्यवाही शुरू करता है। FIR अधिक विस्तृत और विशिष्ट होता है, जबकि शिकायत हमेशा कानूनी कार्रवाई की ओर नहीं ले जाती।'
            ],
            [
                'id' => 6,
                'question' => 'FIR का महत्व क्या है?',
                'answer' => 'FIR महत्वपूर्ण है क्योंकि यह अपराध के बारे में प्रारंभिक जानकारी दर्ज करता है, पुलिस को जांच और साक्ष्य एकत्र करने में मदद करता है, और न्यायालय की कार्यवाही में साक्ष्य के रूप में काम करता है।'
            ],
            [
                'id' => 7,
                'question' => 'FIR दर्ज करने वाले सूचनाकर्ता के मूल अधिकार क्या हैं?',
                'answer' => 'सूचनाकर्ता का अधिकार है कि पुलिस द्वारा उसके साथ सम्मानपूर्वक व्यवहार किया जाए, FIR की एक प्रति प्राप्त हो, और मामले की प्रगति के बारे में सूचित किया जाए।'
            ],
            [
                'id' => 8,
                'question' => 'यदि पुलिस मेरी FIR दर्ज करने से इनकार कर दे तो मुझे क्या करना चाहिए?',
                'answer' => 'अगर पुलिस इनकार करती है, तो आप एक उच्च रैंकिंग अधिकारी के पास जा सकते हैं या पुलिस अधीक्षक या मजिस्ट्रेट को लिखित शिकायत प्रस्तुत कर सकते हैं।'
            ]
        ];

        $marathiFaq=[
            [
                'id' => 1,
                'question' => 'FIR म्हणजे काय?',
                'answer' => 'FIR (प्रथम माहिती अहवाल) हा एका संज्ञेय गुन्ह्याबद्दलची पोलिस अधिकाऱ्याद्वारे नोंदवलेली सर्वात प्रारंभिक माहिती आहे. हे फौजदारी कायद्याला सक्रिय करते आणि पुढील तपास आणि कायदेशीर कारवाईसाठी आधार बनते.'
            ],
            [
                'id' => 2,
                'question' => 'FIR कोण दाखल करू शकतो?',
                'answer' => 'कोणत्याही संज्ञेय गुन्ह्याबद्दल माहिती असणारा कोणीही FIR दाखल करू शकतो. गुन्ह्याचा बळी असणे आवश्यक नाही; अशा गुन्ह्याबद्दल जाणून घेणारा पोलिस अधिकारीसुद्धा FIR सादर करू शकतो.'
            ],
            [
                'id' => 3,
                'question' => 'FIR मध्ये कोणती माहिती समाविष्ट केली पाहिजे?',
                'answer' => 'FIR मध्ये विशिष्ट तपशील समाविष्ट केले पाहिजेत: गुन्ह्याची तारीख, वेळ, आणि स्थान. घटनेचे वर्णन आणि आरोपी. साक्षीदारांची नावे (असल्यास). गुन्ह्याशी संबंधित प्रासंगिक तथ्ये.'
            ],
            [
                'id' => 4,
                'question' => 'FIR ऑनलाईन दाखल केली जाऊ शकते का?',
                'answer' => 'होय, अनेक ठिकाणी आपण निर्दिष्ट पोलिस पोर्टल्स किंवा अॅप्सद्वारे ऑनलाईन FIR दाखल करू शकता. विशिष्ट प्रक्रियांसाठी आपल्या स्थानिक पोलिस विभागाशी तपासणी करा.'
            ],
            [
                'id' => 5,
                'question' => 'तक्रार आणि FIR मध्ये काय फरक आहे?',
                'answer' => 'तक्रार ही एका घटनेची सामान्य अहवाल आहे, तर FIR हा फौजदारी कारवाई सुरू करणारा एक औपचारिक दस्तऐवज आहे. FIR अधिक तपशीलवार आणि विशिष्ट असतो, तर तक्रार नेहमीच कायदेशीर कारवाईकडे नेत नाही.'
            ],
            [
                'id' => 6,
                'question' => 'FIR चे महत्व काय आहे?',
                'answer' => 'FIR महत्वाची आहे कारण ती गुन्ह्याबद्दलची प्रारंभिक माहिती नोंदवते, पोलिसांना तपास आणि पुरावे गोळा करण्यास मदत करते, आणि न्यायालयीन कारवाईत साक्ष योग्य ठरवते.'
            ],
            [
                'id' => 7,
                'question' => 'FIR दाखल करणाऱ्या माहितीदाराचे मूलभूत अधिकार काय आहेत?',
                'answer' => 'माहितीदाराला पोलिसांकडून सन्मानपूर्वक वागणूक मिळण्याचा अधिकार आहे, FIR ची प्रत मिळवणे, आणि प्रकरणाच्या प्रगतीबद्दल माहिती मिळवणे.'
            ],
            [
                'id' => 8,
                'question' => 'जर पोलिस माझी FIR दाखल करण्यास नकार देत असेल तर मी काय करू शकतो?',
                'answer' => 'जर पोलिस नकार देत असेल तर आपण उच्च पदस्थ अधिकाऱ्याकडे जाऊ शकता किंवा पोलिस अधीक्षक किंवा मजिस्ट्रेटकडे लिखित तक्रार सादर करू शकता.'
            ],
        ];

        switch ($currentLocale) {
            case 'en':
                $this->faqs =$enlgishFaq;
                break;
            case 'hi':
                $this->faqs = $hindiFaq;
                break;
            case 'ma':
                $this->faqs = $marathiFaq;
                break;
            default:
            $this->faqs = $englishFaq;
        }
    }

    public function toggleFaq($faqId)
    {
        $this->expandedFaq = $this->expandedFaq === $faqId ? null : $faqId;
    }

    public function render()
    {
        return view('livewire.faq');
    }
}
