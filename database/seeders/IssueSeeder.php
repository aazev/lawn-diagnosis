<?php

namespace Database\Seeders;

use App\Models\Issue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $issues = [
            [
                'name' => 'Drought Stress',
                'description' => 'Grass appears dry, thin, and brownish due to insufficient water, often accompanied by hardened soil.',
                // 'recommendation' => 'Increase the frequency of watering. Consider using a moisture sensor to monitor soil conditions.'
            ],
            [
                'name' => 'Insect Infestation',
                'description' => 'Visible signs of insects such as beetles or chinch bugs, often causing yellowing or brown patches on the lawn.',
                // 'recommendation' => 'Apply organic insect repellents. If the problem persists, consider consulting with a pest control specialist.'
            ],
            [
                'name' => 'Fungal Disease',
                'description' => 'Dark, discolored, or ring-like patches indicating the presence of fungal pathogens affecting the grass health.',
                // 'recommendation' => 'Ensure proper spacing between plants to improve air circulation. Avoid overhead watering. Consider applying a fungicide if necessary.'
            ],
            [
                'name' => 'Nutrient Deficiency',
                'description' => 'Grass color turns pale green or yellow, and may show specific patterns like streaking, indicating lack of essential nutrients.',
                // 'recommendation' => 'Conduct a soil test to determine missing nutrients. Apply a balanced fertilizer based on the soil test results.'
            ],
            [
                'name' => 'Over-Watering',
                'description' => 'Grass appears limp, blades may turn light green, and there\'s an overall sogginess with potential mold growth due to excessive water retention.',
                // 'recommendation' => 'Reduce the frequency of watering. Ensure proper drainage in your lawn to prevent water logging.'
            ],
            [
                'name' => 'Weed Invasion',
                'description' => 'Presence of unwanted plants in the lawn.',
                // 'recommendation' => 'Regularly mow your lawn and maintain it at a proper height. Consider manual removal for small patches. For severe invasions, use a selective herbicide.'
            ],
            [
                'name' => 'Thinning Grass',
                'description' => 'Reduced grass density leading to visible soil.',
                // 'recommendation' => 'Overseed your lawn during its growth season. Ensure proper watering and consider applying a starter fertilizer.'
            ],
            [
                'name' => 'Lawn Pests',
                'description' => 'Presence of harmful pests damaging the lawn.',
                // 'recommendation' => 'Identify the specific pests. Use natural predators or consider organic pesticides. Seek expert advice if infestation is severe.'
            ],
            [
                'name' => 'Soil Compaction',
                'description' => 'Hardened soil preventing roots from expanding.',
                // 'recommendation' => 'Aerate your lawn during its growth season. Avoid heavy traffic on wet soil.'
            ],
            [
                'name' => 'Grass Discoloration',
                'description' => 'Uneven color or browning patches in the lawn.',
                // 'recommendation' => 'Ensure balanced watering. Check for pests or diseases. Consider a soil pH test and adjust accordingly.'
            ],
            [
                'name' => 'Yellow Patches',
                'description' => 'Uneven yellow-colored patches in the lawn often caused by pests or uneven watering.',
                // 'recommendation' => 'Ensure regular and even watering. Inspect for pests and consider using a lawn treatment or fertilizer.'
            ],
        ];

        foreach ($issues as $issue) {
            Issue::create($issue);
        }
    }
}
