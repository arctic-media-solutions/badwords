<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [    
        ['id' => 1, 'name' => 'profanity', 'description' => 'Profanity'],
        ['id' => 2, 'name' => 'hatespeech', 'description' => 'Hate Speech'],
        ['id' => 3, 'name' => 'threatsofviolence', 'description' => 'Threats of Violence'],
        ['id' => 4, 'name' => 'sexualcontent', 'description' => 'Sexual Content'],
        ['id' => 5, 'name' => 'discriminationorbigotry', 'description' => 'Discrimination or Bigotry'],
        ['id' => 6, 'name' => 'harassmentorbullying', 'description' => 'Harassment or Bullying'],
        ['id' => 7, 'name' => 'drugsordruguse', 'description' => 'Drugs or Drug Use'],
        ['id' => 8, 'name' => 'alcoholoralcoholuse', 'description' => 'Alcohol or Alcohol Use'],
        ['id' => 9, 'name' => 'gambling', 'description' => 'Gambling'],
        ['id' => 10, 'name' => 'scamsorfraud', 'description' => 'Scams or Fraud'],
        ['id' => 11, 'name' => 'spamonunwantedadvertising', 'description' => 'Spam or Unwanted Advertising'],
        ['id' => 12, 'name' => 'piracyorcopyrightinfringement', 'description' => 'Piracy or Copyright Infringement'],
        ['id' => 13, 'name' => 'malwareorviruses', 'description' => 'Malware or Viruses'],
        ['id' => 14, 'name' => 'terrorismorextremistcontent', 'description' => 'Terrorism or Extremist Content'],
        ['id' => 15, 'name' => 'selfharmor-suiciderelatedcontent', 'description' => 'Self-Harm or Suicide-Related Content'],
        ['id' => 16, 'name' => 'graphicviolenceorgore', 'description' => 'Graphic Violence or Gore'],
        ['id' => 17, 'name' => 'nudityorsexuallyexplicitcontent', 'description' => 'Nudity or Sexually Explicit Content'],
        ['id' => 18, 'name' => 'animalabuseorcruelty', 'description' => 'Animal Abuse or Cruelty'],
        ['id' => 19, 'name' => 'childabuseorexploitation', 'description' => 'Child Abuse or Exploitation'],
        ['id' => 20, 'name' => 'sensitivepoliticalorreligioustopics', 'description' => 'Sensitive Political or Religious Topics'],
        ['id' => 21, 'name' => 'ccbill', 'description' => 'CCBill Specific Bans'],
        ['id' => 22, 'name' => 'segpay', 'description' => 'SegPay Specific Bans'],
        ['id' => 23, 'name' => 'communication', 'description' => 'Social Network Names and Phrases'],
        ['id' => 24, 'name' => 'spamcomments', 'description' => 'Spam Comments'],
        ['id' => 25, 'name' => 'fakeaccounts', 'description' => 'Fake Accounts'],
        ['id' => 26, 'name' => 'phishing', 'description' => 'Phishing Attempts'],
        ['id' => 27, 'name' => 'spoofing', 'description' => 'Spoofing Attempts'],
        ['id' => 28, 'name' => 'hatesymbols', 'description' => 'Hate Symbols or Gestures'],
        ['id' => 29, 'name' => 'medical', 'description' => 'Medical Misinformation or False Claims'],
        ['id' => 30, 'name' => 'other', 'description' => 'Uncategorized Content'],
    ];
        

        foreach ($categories as $category) {
            Category::create([
                'id' => $category['id'],
                'name' => $category['name'],
                'description' => $category['description'],
                'slug' => $category['name'],
            ]);
        }
    }
}
