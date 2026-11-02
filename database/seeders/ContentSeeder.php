<?php

namespace Database\Seeders;

use App\Models\PressMention;
use App\Models\TeamMember;
use App\Models\Video;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Content carried over from the current WordPress site, editable later in the admin.
 */
class ContentSeeder extends Seeder
{
    public function run(): void
    {
        $team = [
            [
                'name' => 'Priyanka Budhathoki',
                'role' => 'Co-creator & Host',
                'bio' => 'Priyanka Budhathoki, with over a decade of experience in communications, is a co-creator of Podcast Period Kaa Kura. She is a passionate storyteller and a champion of dignified menstruation. Years of friendship and sisterhood with Shristi resulted in bringing out the silenced voice about menstruation, creating space for all menstruators to speak up against all taboos, stigma and raising voices for dignified menstruation.',
            ],
            [
                'name' => 'Shristi Kafle',
                'role' => 'Co-founder & Host',
                'bio' => 'Shristi Kafle is a journalist by profession, having worked for the international media for the last few years. She writes on various issues covering from politics to environment to social. In 2020, she co-founded Period Kaa Kura in an effort to end the period stigma and taboos in Nepal and raise awareness for dignified menstruation. Through the podcast, she is on a journey of normalizing menstruation.',
            ],
        ];

        foreach ($team as $sort => $member) {
            $photo = $this->publish('team/'.Str::slug($member['name']).'.png');

            TeamMember::updateOrCreate(['name' => $member['name']], $member + ['sort' => $sort, 'photo' => $photo]);
        }

        $press = [
            ['Missing Perspectives', 'Women leading menstrual dialogue in Nepal, and in the process, challenging the status quo', 'https://missingperspectives.com/posts/menstrual-dialogue-in-nepal/', 'missing-perspectives.jpg'],
            ['Aawaaj News', 'Period Kaa Kura: shattering menstruation taboos and stigmas, one podcast at a time', 'https://aawaajnews.com/social-development-news/period-kaa-kura-shattering-menstruation-taboos-stigmas-one-podcast-at-a-time/', 'aawaaj-news.png'],
            ['Onlinekhabar', 'Best Nepali podcasts', 'https://english.onlinekhabar.com/best-nepali-podcasts.html', 'onlinekhabar.png'],
            ['Menstrual Hygiene Day', 'Period Kaa Kura podcast', 'https://menstrualhygieneday.org/events-3/event/podcast/', 'menstrual-hygiene-day.png'],
            ['The Kathmandu Post', 'Menstrual cups are gaining currency, albeit slowly', 'https://kathmandupost.com/national/2022/08/20/menstrual-cups-are-gaining-currency-albeit-slowly', 'kathmandu-post.png'],
            ['The Record', 'Women speak truth to power', 'https://www.recordnepal.com/women-speak-truth-to-power', 'the-record.png'],
            ['SBS Nepali', 'Men in particular need to hear about menstruation', 'https://www.sbs.com.au/language/nepali/en/podcast-episode/men-in-particular-need-to-hear-about-menstruation/8l5ag7jj9', 'sbs-nepali.png'],
            ['The Annapurna Express', 'Period Kaa Kura: promoting period positivity', 'https://theannapurnaexpress.com/news/period-kaa-kura-promoting-period-positivity-38666/', 'annapurna-express-positivity.png'],
            ['The Annapurna Express', 'Far-reaching impact of menstrual rights activism', 'https://theannapurnaexpress.com/news/far-reaching-impact-of-menstrual-rights-activism-42988/', 'annapurna-express-activism.png'],
        ];

        foreach ($press as $sort => [$outlet, $title, $url, $image]) {
            PressMention::updateOrCreate(['url' => $url], [
                'outlet' => $outlet,
                'title' => $title,
                'image' => $this->publish("press/{$image}"),
                'sort' => $sort,
            ]);
        }

        $videos = [
            ['RcJq64-Pm9w', 'Mahinawari Paap Haina'],
            ['Udw3gA1OgGo', 'Epi 41 - कर्णाली पारी महिनावारी कति भारी?'],
            ['45AXSICGUcM', 'Episode 40 - हुम्लामा बाटो पुग्यो छाउगोठ हट्ने कहिले?'],
            ['1eoWQFodYZc', 'How to use a menstrual cup?'],
            ['i6wV1YlyXjo', 'Stop believing these period myths'],
        ];

        foreach ($videos as $sort => [$youtubeId, $title]) {
            Video::updateOrCreate(['youtube_id' => $youtubeId], ['title' => $title, 'sort' => $sort]);
        }
    }

    /**
     * Copy an image bundled with the seeder onto the public disk, returning its stored path.
     */
    private function publish(string $path): string
    {
        Storage::disk('public')->put($path, file_get_contents(__DIR__."/assets/{$path}"));

        return $path;
    }
}
