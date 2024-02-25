<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;

class FindingExistingLawController extends Controller
{
    public function index()
    {
        $currentLocale = Config::get("app.locale");
        $englishLaws = [
            "AdministrationDivisionActs" => [
                [
                    "srNo" => "1",
                    "title" =>
                        'Order dated 14.07.2011 of Hon\'ble High Court, Calcutta on state Emblem of India in case No. CPAN 1270of 1210 and CPAN 65 of 2011 filed in connection with W.P.No 32027(W) of 2008',
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-07/WP-No.32027W.pdf",
                ],
                [
                    "srNo" => "2",
                    "title" =>
                        "The Prevention of Insults to National Honour Act, 1971.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-07/Prevention_Insults_National_Honour_Act1971.pdf",
                ],
                [
                    "srNo" => "3",
                    "title" =>
                        "The State Emblem of India (Prohibition of Improper Use) Act, 2005.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-07/STATE_EMBLEM_ACT2005.pdf",
                ],
            ],
            "AdministrationDivisionRules" => [
                [
                    "srNo" => "1",
                    "title" =>
                        "Rules and regulations governing Bharat Ratna and Padma Awards.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-06/RulesBharatRatna%26PadmaAwards_0_0.pdf",
                ],
                [
                    "srNo" => "2",
                    "title" =>
                        "Rules and regulations governing Bharat Ratna and Padma Awards.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-07/RulesBharatRatna%26PadmaAwards_0_0.pdf",
                ],
                [
                    "srNo" => "3",
                    "title" =>
                        "The Authentication (Order and other instrument) Rules, 2002.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/AuthenticationOrder2002%5B1%5D.pdf",
                ],
                [
                    "srNo" => "4",
                    "title" =>
                        "The State Emblem of India (Regulation of Use) Amendment Rules, 2010.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/StateEmblemRules-2010_0%5B1%5D.pdf",
                ],
                [
                    "srNo" => "5",
                    "title" =>
                        "The State Emblem of India (Regulation of Use) Rules, 2007.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/Emblem-Rules2007%5B1%5D.pdf",
                ],
            ],
            "BorderManagementDivisionActs" => [
                [
                    "srNo" => "1",
                    "title" => "The Land Ports Authority of India Act, 2010.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/LAPI-Act-080811%5B1%5D.pdf",
                ],
            ],

            "BorderManagementDivisionRules" => [
                [
                    "srNo" => "1",
                    "title" =>
                        "Notification Land Ports Authority of India Rules, 2011.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/BM-GSR-556E_0%5B1%5D.pdf",
                ],
                [
                    "srNo" => "2",
                    "title" =>
                        "Notification Land Ports Authority of India Rules, 2013.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/Noti2186-020813%5B1%5D.pdf",
                ],
            ],
            "centreStateDivisionActs" => [
                [
                    "srNo" => "1",
                    "title" => "Andhra Pradesh Reorganisation Act, 2014.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/APRegACT2014_0%5B1%5D_0.pdf",
                ],
                [
                    "srNo" => "2",
                    "title" =>
                        "Andhra Pradesh Reorganisation Amendment Act, 2014.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/APRegACT2014_01%5B1%5D_0.pdf",
                ],
                [
                    "srNo" => "3",
                    "title" => "Bihar Reorganisation Act, 2000.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/BiharReorAct2000_130913%5B1%5D_0.PDF",
                ],
                [
                    "srNo" => "4",
                    "title" => "Corrigenda",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/CSCorr_161014%5B1%5D_0.pdf",
                ],
                [
                    "srNo" => "5",
                    "title" => "Madhya Pradesh Reorganisation Act, 2000.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/MPReorgAct2000_130913%5B1%5D_0.PDF",
                ],
                [
                    "srNo" => "6",
                    "title" => "S.O.655(E) New State of Andhra Pradesh.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/NotiAPReOrgAct_150414%5B1%5D_0.pdf",
                ],
                [
                    "srNo" => "7",
                    "title" => "The Bombay Reorganisation Act, 1960.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/The%2520Bombay%2520Reorganisation%2520Act%25201960_270614%5B1%5D_0.pdf",
                ],
                [
                    "srNo" => "8",
                    "title" =>
                        "The Constitution(Ninety-Sixth Amendment) Act, 2011.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/TheConst96AndmtAct2011%5B1%5D_0.pdf",
                ],
                [
                    "srNo" => "9",
                    "title" =>
                        "The Governors (Emoluments, Allowances and Privileges) Act, 1982.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/GOVERNORSEmoluments_Act1982%5B1%5D_0.pdf",
                ],
                [
                    "srNo" => "10",
                    "title" =>
                        "THE GOVERNORS (EMOLUMENTS, ALLOWANCES AND PRIVILEGES) ACT, 1982.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/GovrnorsActs%26Rules_09082018_0%5B1%5D_0.pdf",
                ],
                [
                    "srNo" => "11",
                    "title" =>
                        "The Governors (Emoluments, Allowances and Privileges) Amendment Act, 2014.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/GovEAPAmendmentAct2014_0%5B1%5D_0.pdf",
                ],
            ],
            "centreStateDivisionRules" => [
                [
                    "srNo" => "1",
                    "title" =>
                        "Amendment to the Prevention of Damage to Public Property Act, 1984 by the prevention of Damage to Public Property Act(Amendment) Bill, 2015.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/PublicProDamgeAct_200515_0%5B1%5D.pdf",
                ],
                [
                    "srNo" => "2",
                    "title" => "Andhra Pradesh Reorganisation Act, 2014.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/APRegACT2014_0%5B1%5D.pdf",
                ],
                [
                    "srNo" => "3",
                    "title" =>
                        "Andhra Pradesh Reorganisation Amendment Act, 2014.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/APRegACT2014_01%5B1%5D.pdf",
                ],
                [
                    "srNo" => "4",
                    "title" => "Bihar Reorganisation Act, 2000.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/BiharReorAct2000_130913%5B1%5D.PDF",
                ],
                [
                    "srNo" => "5",
                    "title" => "Corrigenda",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/CSCorr_161014%5B1%5D.pdf",
                ],
                [
                    "srNo" => "6",
                    "title" =>
                        "Governors (Allowances and Privileges) Amendment Rules, 2014.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/GovAmendActPublis_518%28E%29_2014%5B1%5D.pdf",
                ],
                [
                    "srNo" => "7",
                    "title" =>
                        "Governors (Allowances and Privileges) Amendment Rules, 2015.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/Noti80EAllowPrivAmendRule2015_090415%5B1%5D.pdf",
                ],
                [
                    "srNo" => "8",
                    "title" => "Madhya Pradesh Reorganisation Act, 2000.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/MPReorgAct2000_130913%5B1%5D.PDF",
                ],
                [
                    "srNo" => "9",
                    "title" => "S.O.655(E) New State of Andhra Pradesh.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/NotiAPReOrgAct_150414%5B1%5D.pdf",
                ],
                [
                    "srNo" => "10",
                    "title" => "The Bombay Reorganisation Act, 1960.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/The%2520Bombay%2520Reorganisation%2520Act%25201960_270614%5B1%5D.pdf",
                ],
                [
                    "srNo" => "11",
                    "title" =>
                        "The Constitution(Ninety-Sixth Amendment) Act, 2011.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/TheConst96AndmtAct2011%5B1%5D.pdf",
                ],
                [
                    "srNo" => "12",
                    "title" =>
                        "The Governors (Allowances and Privileges) Rules, 1987.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/UpdatedGovernorsRules1987_05112018%5B1%5D.pdf",
                ],
                [
                    "srNo" => "13",
                    "title" =>
                        "The Governors (Emoluments, Allowances and Privileges) Act, 1982.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/GOVERNORSEmoluments_Act1982%5B1%5D.pdf",
                ],
            ],
        ];

        $hindiLaws = [
            "प्रशासन विभाग अधिनियम" => [
                [
                    "srNo" => "1",
                    "title" =>
                        "कलकत्ता के माननीय उच्च न्यायालय द्वारा दिनांक 14.07.2011 का आदेश भारत के राज्य चिन्ह के संबंध में मामला संख्या CPAN 1270of 1210 और CPAN 65 का 2011 W.P.No 32027(W) के 2008 के साथ दायर",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-07/WP-No.32027W.pdf",
                ],
                [
                    "srNo" => "2",
                    "title" =>
                        "राष्ट्रीय सम्मान का अपमान रोकथाम अधिनियम, 1971.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-07/Prevention_Insults_National_Honour_Act1971.pdf",
                ],
                [
                    "srNo" => "3",
                    "title" =>
                        "भारत के राज्य चिन्ह (अनुचित प्रयोग की रोकथाम) अधिनियम, 2005.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-07/STATE_EMBLEM_ACT2005.pdf",
                ],
            ],
            "प्रशासन विभाग नियम" => [
                [
                    "srNo" => "1",
                    "title" =>
                        "भारत रत्न और पद्म पुरस्कारों को शासित करने वाले नियम और विनियमन।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-06/RulesBharatRatna%26PadmaAwards_0_0.pdf",
                ],
                [
                    "srNo" => "2",
                    "title" =>
                        "भारत रत्न और पद्म पुरस्कारों को शासित करने वाले नियम और विनियमन।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-07/RulesBharatRatna%26PadmaAwards_0_0.pdf",
                ],
                [
                    "srNo" => "3",
                    "title" => "आदेश और अन्य उपकरण) नियम, 2002 का प्रमाणन।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/AuthenticationOrder2002%5B1%5D.pdf",
                ],
                [
                    "srNo" => "4",
                    "title" =>
                        "भारत के राज्य चिन्ह (प्रयोग के नियमन) संशोधन नियम, 2010।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/StateEmblemRules-2010_0%5B1%5D.pdf",
                ],
                [
                    "srNo" => "5",
                    "title" =>
                        "भारत के राज्य चिन्ह (प्रयोग का नियमन) नियम, 2007।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/Emblem-Rules2007%5B1%5D.pdf",
                ],
            ],
            "सीमा प्रबंधन विभाग अधिनियम" => [
                [
                    "srNo" => "1",
                    "title" => "भारतीय भूमि पोर्ट्स प्राधिकरण अधिनियम, 2010।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/LAPI-Act-080811%5B1%5D.pdf",
                ],
            ],

            "सीमा प्रबंधन विभाग नियम" => [
                [
                    "srNo" => "1",
                    "title" =>
                        "भारतीय भूमि पोर्ट्स प्राधिकरण नियम, 2011 की अधिसूचना।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/BM-GSR-556E_0%5B1%5D.pdf",
                ],
                [
                    "srNo" => "2",
                    "title" =>
                        "भारतीय भूमि पोर्ट्स प्राधिकरण नियम, 2013 की अधिसूचना।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/Noti2186-020813%5B1%5D.pdf",
                ],
            ],
            "केंद्र-राज्य विभाजन अधिनियम" => [
                [
                    "srNo" => "1",
                    "title" => "आंध्र प्रदेश पुनर्गठन अधिनियम, 2014।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/APRegACT2014_0%5B1%5D_0.pdf",
                ],
                [
                    "srNo" => "2",
                    "title" => "आंध्र प्रदेश पुनर्गठन संशोधन अधिनियम, 2014।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/APRegACT2014_01%5B1%5D_0.pdf",
                ],
                [
                    "srNo" => "3",
                    "title" => "बिहार पुनर्गठन अधिनियम, 2000।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/BiharReorAct2000_130913%5B1%5D_0.PDF",
                ],
                [
                    "srNo" => "4",
                    "title" => "सुधार",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/CSCorr_161014%5B1%5D_0.pdf",
                ],
                [
                    "srNo" => "5",
                    "title" => "मध्य प्रदेश पुनर्गठन अधिनियम, 2000।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/MPReorgAct2000_130913%5B1%5D_0.PDF",
                ],
                [
                    "srNo" => "6",
                    "title" => "एस.ओ.655(ई) नया आंध्र प्रदेश राज्य।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/NotiAPReOrgAct_150414%5B1%5D_0.pdf",
                ],
                [
                    "srNo" => "7",
                    "title" => "बॉम्बे पुनर्गठन अधिनियम, 1960।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/The%2520Bombay%2520Reorganisation%2520Act%25201960_270614%5B1%5D_0.pdf",
                ],
                [
                    "srNo" => "8",
                    "title" => "संविधान (नब्बेवां संशोधन) अधिनियम, 2011।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/TheConst96AndmtAct2011%5B1%5D_0.pdf",
                ],
                [
                    "srNo" => "9",
                    "title" =>
                        "राज्यपालों (वेतन, भत्ते और विशेषाधिकार) अधिनियम, 1982।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/GOVERNORSEmoluments_Act1982%5B1%5D_0.pdf",
                ],
                [
                    "srNo" => "10",
                    "title" =>
                        "राज्यपालों (वेतन, भत्ते और विशेषाधिकार) अधिनियम, 1982।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/GovrnorsActs%26Rules_09082018_0%5B1%5D_0.pdf",
                ],
                [
                    "srNo" => "11",
                    "title" =>
                        "राज्यपालों (वेतन, भत्ते और विशेषाधिकार) संशोधन अधिनियम, 2014।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/GovEAPAmendmentAct2014_0%5B1%5D_0.pdf",
                ],
            ],
            "केंद्र-राज्य विभाग नियम" => [
                [
                    "srNo" => "1",
                    "title" =>
                        "1984 के सार्वजनिक संपत्ति को नुकसान पहुंचाने से रोकथाम अधिनियम में संशोधन।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/PublicProDamgeAct_200515_0%5B1%5D.pdf",
                ],
                [
                    "srNo" => "2",
                    "title" => "आंध्र प्रदेश पुनर्गठन अधिनियम, 2014।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/APRegACT2014_0%5B1%5D.pdf",
                ],
                [
                    "srNo" => "3",
                    "title" => "आंध्र प्रदेश पुनर्गठन संशोधन अधिनियम, 2014।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/APRegACT2014_01%5B1%5D.pdf",
                ],
                [
                    "srNo" => "4",
                    "title" => "बिहार पुनर्गठन अधिनियम, 2000।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/BiharReorAct2000_130913%5B1%5D.PDF",
                ],
                [
                    "srNo" => "5",
                    "title" => "शुद्धिपत्र।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/CSCorr_161014%5B1%5D.pdf",
                ],
                [
                    "srNo" => "6",
                    "title" =>
                        "राज्यपालों (भत्ते और विशेषाधिकार) संशोधन नियम, 2014।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/GovAmendActPublis_518%28E%29_2014%5B1%5D.pdf",
                ],
                [
                    "srNo" => "7",
                    "title" =>
                        "राज्यपालों (भत्ते और विशेषाधिकार) संशोधन नियम, 2015।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/Noti80EAllowPrivAmendRule2015_090415%5B1%5D.pdf",
                ],
                [
                    "srNo" => "8",
                    "title" => "मध्य प्रदेश पुनर्गठन अधिनियम, 2000।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/MPReorgAct2000_130913%5B1%5D.PDF",
                ],
                [
                    "srNo" => "9",
                    "title" => "आंध्र प्रदेश के नए राज्य के लिए S.O.655(E)।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/NotiAPReOrgAct_150414%5B1%5D.pdf",
                ],
                [
                    "srNo" => "10",
                    "title" => "बॉम्बे पुनर्गठन अधिनियम, 1960।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/The%20Bombay%20Reorganisation%20Act%201960_270614%5B1%5D.pdf",
                ],
                [
                    "srNo" => "11",
                    "title" => "संविधान (नवान्वेषण) संशोधन अधिनियम, 2011।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/TheConst96AndmtAct2011%5B1%5D.pdf",
                ],
                [
                    "srNo" => "12",
                    "title" => "राज्यपालों (भत्ते और विशेषाधिकार) नियम, 1987।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/UpdatedGovernorsRules1987_05112018%5B1%5D.pdf",
                ],
                [
                    "srNo" => "13",
                    "title" =>
                        "राज्यपालों (वेतनमान, भत्ते और विशेषाधिकार) अधिनियम, 1982।",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/GOVERNORSEmoluments_Act1982%5B1%5D.pdf",
                ],
            ],
        ];
        $marathiLaws = [
            "प्रशासन विभाग अधिनियम" => [
                [
                    "srNo" => "1",
                    "title" =>
                        "कलकत्ता उच्च न्यायालयाचा 14.07.2011 रोजीचा आदेश, भारताच्या राष्ट्रीय चिन्हासंबंधीच्या प्रकरण क्रमांक CPAN 1270of 1210 आणि CPAN 65 of 2011, W.P.No 32027(W) 2008 मध्ये दाखल",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-07/WP-No.32027W.pdf",
                ],
                [
                    "srNo" => "2",
                    "title" =>
                        "राष्ट्रीय सन्मानाचा अपमान प्रतिबंधित करणारा कायदा, 1971.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-07/Prevention_Insults_National_Honour_Act1971.pdf",
                ],
                [
                    "srNo" => "3",
                    "title" =>
                        "भारताच्या राष्ट्रीय चिन्हाचा अयोग्य वापर प्रतिबंधित करणारा कायदा, 2005.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-07/STATE_EMBLEM_ACT2005.pdf",
                ],
            ],
            "प्रशासन विभाग नियम" => [
                [
                    "srNo" => "1",
                    "title" =>
                        "भारत रत्न आणि पद्म पुरस्कारांवरील नियम आणि नियमावली.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-06/RulesBharatRatna%26PadmaAwards_0_0.pdf",
                ],
                [
                    "srNo" => "2",
                    "title" =>
                        "भारत रत्न आणि पद्म पुरस्कारांवरील नियम आणि नियमावली.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-07/RulesBharatRatna%26PadmaAwards_0_0.pdf",
                ],
                [
                    "srNo" => "3",
                    "title" => "आदेश आणि इतर साधनांचे प्रमाणीकरण (नियम), 2002.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/AuthenticationOrder2002%5B1%5D.pdf",
                ],
                [
                    "srNo" => "4",
                    "title" =>
                        "भारताच्या राष्ट्रीय चिन्हाचा वापर नियमन (सुधारणा) नियम, 2010.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/StateEmblemRules-2010_0%5B1%5D.pdf",
                ],
                [
                    "srNo" => "5",
                    "title" =>
                        "भारताच्या राष्ट्रीय चिन्हाचा वापर नियमन नियम, 2007.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/Emblem-Rules2007%5B1%5D.pdf",
                ],
            ],
            "सीमा प्रबंधन विभाग अधिनियम" => [
                [
                    "srNo" => "1",
                    "title" => "भारतीय भूमि पोर्ट प्राधिकरण कायदा, 2010.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/LAPI-Act-080811%5B1%5D.pdf",
                ],
            ],
            "सीमा प्रबंधन विभाग नियम" => [
                [
                    "srNo" => "1",
                    "title" =>
                        "भारतीय भूमि पोर्ट प्राधिकरण नियम, 2011 ची सूचना.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/BM-GSR-556E_0%5B1%5D.pdf",
                ],
                [
                    "srNo" => "2",
                    "title" =>
                        "भारतीय भूमि पोर्ट प्राधिकरण नियम, 2013 ची सूचना.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/Noti2186-020813%5B1%5D.pdf",
                ],
            ],
            "केंद्र-राज्य विभाग अधिनियम" => [
                [
                    "srNo" => "1",
                    "title" => "आंध्र प्रदेश पुनर्गठन अधिनियम, 2014.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/APRegACT2014_0%5B1%5D_0.pdf",
                ],
                [
                    "srNo" => "2",
                    "title" => "आंध्र प्रदेश पुनर्गठन संशोधन अधिनियम, 2014.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/APRegACT2014_01%5B1%5D_0.pdf",
                ],
                [
                    "srNo" => "3",
                    "title" => "बिहार पुनर्गठन अधिनियम, 2000.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/BiharReorAct2000_130913%5B1%5D_0.PDF",
                ],
                [
                    "srNo" => "4",
                    "title" => "सुधारणा.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/CSCorr_161014%5B1%5D_0.pdf",
                ],
                [
                    "srNo" => "5",
                    "title" => "मध्य प्रदेश पुनर्गठन अधिनियम, 2000.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/MPReorgAct2000_130913%5B1%5D_0.PDF",
                ],
                [
                    "srNo" => "6",
                    "title" => "एस.ओ.655(ई) नवीन आंध्र प्रदेश राज्य.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/NotiAPReOrgAct_150414%5B1%5D_0.pdf",
                ],
                [
                    "srNo" => "7",
                    "title" => "बॉम्बे पुनर्गठन अधिनियम, 1960.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/The%2520Bombay%2520Reorganisation%2520Act%25201960_270614%5B1%5D_0.pdf",
                ],
                [
                    "srNo" => "8",
                    "title" => "संविधान (नव्वदुसरा सुधारणा) अधिनियम, 2011.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/TheConst96AndmtAct2011%5B1%5D_0.pdf",
                ],
                [
                    "srNo" => "9",
                    "title" =>
                        "राज्यपाल (वेतन, भत्ते आणि विशेषाधिकार) अधिनियम, 1982.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/GOVERNORSEmoluments_Act1982%5B1%5D_0.pdf",
                ],
                [
                    "srNo" => "10",
                    "title" =>
                        "राज्यपाल (वेतन, भत्ते आणि विशेषाधिकार) अधिनियम, 1982.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/GovrnorsActs%26Rules_09082018_0%5B1%5D_0.pdf",
                ],
                [
                    "srNo" => "11",
                    "title" =>
                        "राज्यपाल (वेतन, भत्ते आणि विशेषाधिकार) सुधारणा अधिनियम, 2014.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/GovEAPAmendmentAct2014_0%5B1%5D_0.pdf",
                ],
            ],
            "केंद्र-राज्य विभाजन नियम" => [
                [
                    "srNo" => "1",
                    "title" =>
                        "अवैध कृत्ये (प्रतिबंध) अधिनियम, 1967 च्या कलम-51ए च्या कार्यान्वयनाची प्रक्रिया.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-09/CTCRdiv_UnlawfulActivitiesAct1967_09012020_0%5B1%5D.PDF",
                ],
                [
                    "srNo" => "2",
                    "title" => "राष्ट्रीय तपास एजन्सी (सुधारणा) अधिनियम, 2019",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-09/ACT_CTCR_30082019%5B1%5D.pdf",
                ],
                [
                    "srNo" => "3",
                    "title" => "राष्ट्रीय तपास एजन्सी अधिनियम, 2008 (सुधारित).",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-09/THENATIONALINVESTIGATIONAGENCYACT2008_03032020_0%5B1%5D.pdf",
                ],
                [
                    "srNo" => "4",
                    "title" => "राष्ट्रीय तपास एजन्सी अधिनियम, 2008.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-09/The%20National%20Investigation%20Agency%20Act%2C%202008%20%28English%29%5B1%5D.pdf",
                ],
                [
                    "srNo" => "5",
                    "title" => "अवैध कृत्ये (प्रतिबंध) अधिनियम, 1967.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-09/The%20Unlawful%20Activities%20%28Prevention%29%20Act%2C%201967%20%28English%29%5B1%5D.pdf",
                ],
                [
                    "srNo" => "6",
                    "title" =>
                        "राज्यपाल (भत्ते आणि विशेषाधिकार) सुधारणा नियम, 2014.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/GovAmendActPublis_518%28E%29_2014%5B1%5D.pdf",
                ],
                [
                    "srNo" => "7",
                    "title" =>
                        "राज्यपाल (भत्ते आणि विशेषाधिकार) सुधारणा नियम, 2015.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/Noti80EAllowPrivAmendRule2015_090415%5B1%5D.pdf",
                ],
                [
                    "srNo" => "8",
                    "title" => "मध्य प्रदेश पुनर्गठन अधिनियम, 2000.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/MPReorgAct2000_130913%5B1%5D.PDF",
                ],
                [
                    "srNo" => "9",
                    "title" => "एस.ओ.655(ई) नवीन आंध्र प्रदेश राज्य.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/NotiAPReOrgAct_150414%5B1%5D.pdf",
                ],
                [
                    "srNo" => "10",
                    "title" => "बॉम्बे पुनर्गठन अधिनियम, 1960.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/The%20Bombay%20Reorganisation%20Act%201960_270614%5B1%5D.pdf",
                ],
                [
                    "srNo" => "11",
                    "title" => "संविधान (नव्वदुसरा सुधारणा) अधिनियम, 2011.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/TheConst96AndmtAct2011%5B1%5D.pdf",
                ],
                [
                    "srNo" => "12",
                    "title" => "राज्यपाल (भत्ते आणि विशेषाधिकार) नियम, 1987.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/UpdatedGovernorsRules1987_05112018%5B1%5D.pdf",
                ],
                [
                    "srNo" => "13",
                    "title" =>
                        "राज्यपाल (वेतनमान, भत्ते आणि विशेषाधिकार) अधिनियम, 1982.",
                    "link" =>
                        "https://www.mha.gov.in//sites/default/files/2022-08/GOVERNORSEmoluments_Act1982%5B1%5D.pdf",
                ],
            ],
        ];

        switch ($currentLocale) {
            case "en":
                $laws = $englishLaws;
                break;
            case "hi":
                $laws = $hindiLaws;
                break;
            case "ma":
                $laws = $marathiLaws;
                break;
            default:
                $laws = $englishLaws;
        }

        return view("frontend.find-existing-law", compact("laws"));
    }
}
