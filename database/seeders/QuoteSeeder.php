<?php

namespace Database\Seeders;

use App\Models\Quote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quotes = [
            ['quote' => 'To plant a garden is to believe in tomorrow.', 'author' => 'Audrey Hepburn'],
            ['quote' => 'The garden suggests there might be a place where we can meet nature halfway.', 'author' => 'Michael Pollan'],
            ['quote' => 'Flowers always make people better, happier, and more helpful; they are sunshine, food and medicine for the soul.', 'author' => 'Luther Burbank'],
            ['quote' => 'A garden is a grand teacher. It teaches patience and careful watchfulness; it teaches industry and thrift; above all it teaches entire trust.', 'author' => 'Gertrude Jekyll'],
            ['quote' => 'Gardening is the art that uses flowers and plants as paint, and the soil and sky as canvas.', 'author' => 'Elizabeth Murray'],
            ['quote' => 'The love of gardening is a seed once sown that never dies.', 'author' => 'Gertrude Jekyll'],
            ['quote' => 'We might think we are nurturing our garden, but of course it\'s our garden that is really nurturing us.', 'author' => 'Jenny Uglow'],
            ['quote' => 'In the spring, at the end of the day, you should smell like dirt.', 'author' => 'Margaret Atwood'],
            ['quote' => 'A garden isn\'t meant to be useful. It\'s for joy.', 'author' => 'Rumer Godden'],
            ['quote' => 'The glory of gardening: hands in the dirt, head in the sun, heart with nature.', 'author' => 'Alfred Austin'],
            ['quote' => 'Where flowers bloom, so does hope.', 'author' => 'Lady Bird Johnson'],
            ['quote' => 'My green thumb came only as a result of the mistakes I made while learning to see things from the plant\'s point of view.', 'author' => 'H. Fred Dale'],
            ['quote' => 'The best fertilizer is the gardener\'s shadow.', 'author' => 'Unknown'],
            ['quote' => 'If you wish to make anything grow, you must understand it, and understand it in a very real sense. Green fingers are a fact, and a mystery only to the unpracticed.', 'author' => 'Russell Page'],
            ['quote' => 'Plants give us oxygen for the lungs and for the soul.', 'author' => 'Linda Solegato'],
            ['quote' => 'Life begins the day you start a garden.', 'author' => 'Chinese Proverb'],
            ['quote' => 'Nature does not hurry, yet everything is accomplished.', 'author' => 'Lao Tzu'],
            ['quote' => 'Gardening simply does not allow one to be mentally old, because too many hopes and dreams are yet to be realized.', 'author' => 'Allan Armitage'],
            ['quote' => 'Flowers are the music of the ground. From earth\'s lips spoken without sound.', 'author' => 'Edwin Curran'],
            ['quote' => 'Gardens are not made by singing "Oh, how beautiful!" and sitting in the shade.', 'author' => 'Rudyard Kipling'],
            ['quote' => 'The garden is a mirror of the heart.', 'author' => 'Unknown'],
            ['quote' => 'Gardening is cheaper than therapy and you get tomatoes.', 'author' => 'Unknown'],
            ['quote' => 'There are always flowers for those who want to see them.', 'author' => 'Henri Matisse'],
            ['quote' => 'A weed is a plant that has mastered every survival skill except for learning how to grow in rows.', 'author' => 'Doug Larson'],
            ['quote' => 'Gardening is an exercise in optimism.', 'author' => 'Sheila Brenner'],
            ['quote' => 'To see a world in a grain of sand and heaven in a wild flower, hold infinity in the palm of your hand and eternity in an hour.', 'author' => 'William Blake'],
            ['quote' => 'Gardens are a form of autobiography.', 'author' => 'Sydney Eddison'],
            ['quote' => 'The world is a rose; smell it and pass it to your friends.', 'author' => 'Persian Proverb'],
            ['quote' => 'Show me your garden and I shall tell you what you are.', 'author' => 'Alfred Austin'],
            ['quote' => 'A garden requires patient labor and attention. Plants do not grow merely to satisfy ambitions or to fulfill good intentions. They thrive because someone expended effort on them.', 'author' => 'Liberty Hyde Bailey'],
        ];

        foreach ($quotes as $quote) {
            Quote::create($quote);
        }
    }
}
