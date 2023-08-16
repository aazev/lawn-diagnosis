<?php

namespace Database\Seeders;

use App\Models\Issue;
use App\Models\Parameter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IssueParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $issue = Issue::where('name', 'Drought Stress')->first();
        if ($issue) {
            $parametersForDroughtStress = Parameter::whereIn('name', ['Soil Moisture Level', 'Days Since Last Watering', 'Presence of Dry Patches'])->get();
            $issue->parameters()->attach($parametersForDroughtStress);
        }

        $issue = Issue::where('name', 'Insect Infestation')->first();
        if ($issue) {
            $parametersForInsectInfestation = Parameter::whereIn('name', ['Types of Insects Seen', 'Severity of Damage', 'Affected Area'])->get();
            $issue->parameters()->attach($parametersForInsectInfestation);
        }

        $issue = Issue::where('name', 'Fungal Disease')->first();
        if ($issue) {
            $parametersForInsectInfestation = Parameter::whereIn('name', ['Type of Fungus', 'Severity of Damage', 'Affected Area'])->get();
            $issue->parameters()->attach($parametersForInsectInfestation);
        }

        $issue = Issue::where('name', 'Nutrient Deficiency')->first();
        if ($issue) {
            $parametersForInsectInfestation = Parameter::whereIn('name', ['Type of Discoloration', 'Growth Rate', 'Leaf Texture'])->get();
            $issue->parameters()->attach($parametersForInsectInfestation);
        }

        $issue = Issue::where('name', 'Over-Watering')->first();
        if ($issue) {
            $parametersForInsectInfestation = Parameter::whereIn('name', ['Soil Moisture Level', 'Days Since Last Watering', 'Moss Growth', 'Type of Fungus'])->get();
            $issue->parameters()->attach($parametersForInsectInfestation);
        }

        $issue = Issue::where('name', 'Weed Invasion')->first();
        if ($issue) {
            $parametersForInsectInfestation = Parameter::whereIn('name', ['Type of Weeds', 'Coverage'])->get();
            $issue->parameters()->attach($parametersForInsectInfestation);
        }

        $issue = Issue::where('name', 'Thinning Grass')->first();
        if ($issue) {
            $parametersForInsectInfestation = Parameter::whereIn('name', ['Affected Area', 'Soil Moisture Level'])->get();
            $issue->parameters()->attach($parametersForInsectInfestation);
        }

        $issue = Issue::where('name', 'Lawn Pests')->first();
        if ($issue) {
            $parametersForInsectInfestation = Parameter::whereIn('name', ['Type of Pests', 'Affected Area'])->get();
            $issue->parameters()->attach($parametersForInsectInfestation);
        }

        $issue = Issue::where('name', 'Soil Compaction')->first();
        if ($issue) {
            $parametersForInsectInfestation = Parameter::whereIn('name', ['Compaction Level', 'Soil Moisture Level'])->get();
            $issue->parameters()->attach($parametersForInsectInfestation);
        }

        $issue = Issue::where('name', 'Grass Discoloration')->first();
        if ($issue) {
            $parametersForInsectInfestation = Parameter::whereIn('name', ['Affected Area', 'Type of Discoloration', 'Soil Moisture Level'])->get();
            $issue->parameters()->attach($parametersForInsectInfestation);
        }
    }
}
