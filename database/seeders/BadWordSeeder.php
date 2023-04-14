<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BadWord;

class BadWordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $badwordsProfanity = [
            ['word' => 'Fuck', 'category' => '1', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];

        $badwordsHateSpeech = [
            ['word' => 'Nigger', 'category' => '2', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsThreatsOfViolence = [
            ['word' => 'Kill', 'category' => '3', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsSexualContent = [
            ['word' => 'Pussy', 'category' => '4', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsDiscriminationOrBigotry = [
            ['word' => 'Kike', 'category' => '5', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsHarassmentOrBullying = [
            ['word' => 'Retard', 'category' => '6', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsDrugsOrDrugUse = [
            ['word' => 'Tina', 'category' => '7', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsAlcoholOrAlcoholUse = [
            ['word' => 'Whiskey', 'category' => '8', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsGambling = [
            ['word' => 'Poker', 'category' => '9', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsScamsOrFraud = [
            ['word' => 'paypal', 'category' => '10', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsSpamOrUnwantedAdvertising = [
            ['word' => 'adwords', 'category' => '11', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsPiracyOrCopyrightInfringement = [
            ['word' => 'birthday', 'category' => '12', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsMalwareOrViruses = [
            ['word' => 'virus', 'category' => '13', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsTerrorismOrExtremistContent = [
            ['word' => 'Russia', 'category' => '14', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsSelfHarmOrSuicideRelatedContent = [
            ['word' => 'wrists', 'category' => '15', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsGraphicViolenceOrGore = [
            ['word' => 'beheading', 'category' => '16', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsNudityOrSexuallyExplicitContent = [
            ['word' => 'cock', 'category' => '17', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsAnimalAbuseOrCruelty = [
            ['word' => 'beastality', 'category' => '18', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsChildAbuseOrExploitation = [
            ['word' => 'pedo', 'category' => '19', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsSensitivePoliticalOrReligiousTopics = [
            ['word' => 'trump', 'category' => '20', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsCCBill = [
            ['word' => 'ccbill', 'category' => '21', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsSegPay = [
            ['word' => 'segpay', 'category' => '22', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsCommunication = [
            ['word' => 'skype', 'category' => '23', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsSpamComments = [
            ['word' => 'spammer', 'category' => '24', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsFakeAccounts = [
            ['word' => 'fake', 'category' => '25', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsPhishing = [
            ['word' => 'phish', 'category' => '26', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsSpoofing = [
            ['word' => 'spoof', 'category' => '27', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsHateSymbols = [
            ['word' => 'hate', 'category' => '28', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsMedical = [
            ['word' => 'surgery', 'category' => '29', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];
        
        $badwordsOther = [
            ['word' => 'mommy', 'category' => '30', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];

        $badwordsTest = [
            ['word' => 'Hello', 'category' => '31', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
            ['word' => 'World', 'category' => '31', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
            ['word' => 'Tummy', 'category' => '31', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
            ['word' => 'Post', 'category' => '31', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
            ['word' => '', 'category' => '31', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
            ['word' => '', 'category' => '31', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
            ['word' => '', 'category' => '31', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
            ['word' => '', 'category' => '31', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
            ['word' => '', 'category' => '31', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
            ['word' => '', 'category' => '31', 'regex' => false, 'case_sensitive' => false, 'whole_word' => false, 'enabled' => true],
        ];

        $badWords = array_merge(
            $badwordsProfanity,
            $badwordsHateSpeech,
            $badwordsThreatsOfViolence,
            $badwordsSexualContent,
            $badwordsDiscriminationOrBigotry,
            $badwordsHarassmentOrBullying,
            $badwordsDrugsOrDrugUse,
            $badwordsAlcoholOrAlcoholUse,
            $badwordsGambling,
            $badwordsScamsOrFraud,
            $badwordsSpamOrUnwantedAdvertising,
            $badwordsPiracyOrCopyrightInfringement,
            $badwordsMalwareOrViruses,
            $badwordsTerrorismOrExtremistContent,
            $badwordsSelfHarmOrSuicideRelatedContent,
            $badwordsGraphicViolenceOrGore,
            $badwordsNudityOrSexuallyExplicitContent,
            $badwordsAnimalAbuseOrCruelty,
            $badwordsChildAbuseOrExploitation,
            $badwordsSensitivePoliticalOrReligiousTopics,
            $badwordsCCBill,
            $badwordsSegPay
        );
        

        foreach ($badWords as $badword) {
            BadWord::create([
                'word' => $badword['word'],
                'category_id' => $badword['category'],
                'is_regex' => $badword['regex'],
                'is_case_sensitive' => $badword['case_sensitive'],
                'is_whole_word' => $badword['whole_word'],
                'enabled' => $badword['enabled'],
            ]);
        }
    }
}
