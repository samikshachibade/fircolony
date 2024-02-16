<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LawsController extends Controller
{
    public function index()
    {
        $laws = [
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

        return view('frontend.law', compact('laws'));
    }

}
