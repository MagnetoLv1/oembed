<?php
return [
    /*
     * 캐시 설정
     */
    'cache' => [
        /*
         * 캐시 저장소 설정
         * null이면 기본(default) 사용
         */
        'store' => null,


        /*
         * 캐시 만료시간(단위 minute)
         * 0 이면 캐시 사용안함
         */
        'expire' => 0,
    ],


    /*
     * Embera\Embera 설정값
     * https://github.com/mpratt/Embera/blob/master/doc/01-usage.md
     */
    'config' => [
        /*
         * true/false - Wether the library should use providers that support https on their html response.
         */
        'https_only' => false,

        /*
         * https://github.com/mpratt/Embera/blob/master/doc/04-fake-responses.md
         * const ALLOW_FAKE_RESPONSES = 1;
         * const DISABLE_FAKE_RESPONSES = 2;
         * const ONLY_FAKE_RESPONSES = 3;
         */
        'fake_responses' => 2,

        /*
         * Array with tags that should be ignored when detecting urls from a text. So that for example Embera doesnt replace urls inside an iframe or img tag.
         */
        'ignore_tags' => ['pre', 'code', 'a', 'img', 'iframe', 'oembed'],

        /*
         *  true/false - Wether we modify the html response in order to get responsive html. - More Information in the responsive data documentation. (BETA)
         */
        'responsive' => false,

        'width' => 0,
        'height' => 0,
        /*
         * Set the maximun width of the embeded resource
         */
        'maxheight' => 0,

        /*
         * Set the maximun width of the embeded resource
         */
        'maxwidth' => 0,
    ],


    /*
     * Provider 리스트
     * providers가 없는 경우 DefaultProviderCollection를 사용하여 전체 Provider가 등록됨
     */
    'providers' => [
        Embera\Provider\TwentyThreeHq::class,
        Embera\Provider\Adways::class,
        Embera\Provider\Altru::class,
        Embera\Provider\AmCharts::class,
        Embera\Provider\Animoto::class,
        Embera\Provider\Apester::class,
        Embera\Provider\Archivos::class,
        Embera\Provider\Audioboom::class,
        Embera\Provider\AudioClip::class,
        Embera\Provider\Audiomack::class,
        Embera\Provider\Avocode::class,
        Embera\Provider\Backtracks::class,
        Embera\Provider\BeautifulAI::class,
        Embera\Provider\BlackfireIO::class,
        Embera\Provider\Blogcast::class,
        Embera\Provider\Buttondown::class,
        Embera\Provider\Byzart::class,
        Embera\Provider\Ceros::class,
        Embera\Provider\ChartBlocks::class,
        Embera\Provider\Chirbit::class,
        Embera\Provider\CircuitLab::class,
        Embera\Provider\Clyp::class,
        Embera\Provider\CodeHS::class,
        Embera\Provider\CodePen::class,
        Embera\Provider\Codepoints::class,
        Embera\Provider\CodeSandbox::class,
        Embera\Provider\Commaful::class,
        Embera\Provider\Coub::class,
        Embera\Provider\DailyMotion::class,
        Embera\Provider\Deseretnews::class,
        Embera\Provider\Deviantart::class,
        Embera\Provider\Didacte::class,
        Embera\Provider\Digiteka::class,
        Embera\Provider\DocDroid::class,
        Embera\Provider\DotSUB::class,
        Embera\Provider\DTube::class,
        Embera\Provider\EduMedia::class,
        Embera\Provider\Ethfiddle::class,
        Embera\Provider\Eyrie::class,
        Embera\Provider\Facebook::class,
        Embera\Provider\Fader::class,
        Embera\Provider\FaithLifeTV::class,
        Embera\Provider\Firework::class,
        Embera\Provider\Fitapp::class,
        Embera\Provider\FITE::class,
        Embera\Provider\Flat::class,
        Embera\Provider\Flickr::class,
        Embera\Provider\Flourish::class,
        Embera\Provider\Fontself::class,
        Embera\Provider\GeographUk::class,
        Embera\Provider\GeographCI::class,
        Embera\Provider\GeographDE::class,
        Embera\Provider\GettyImages::class,
        Embera\Provider\Gfycat::class,
        Embera\Provider\Giphy::class,
        Embera\Provider\GloriaTV::class,
        Embera\Provider\Gyazo::class,
        Embera\Provider\Hearthis::class,
        Embera\Provider\Huffduffer::class,
        Embera\Provider\Hulu::class,
        Embera\Provider\iFixit::class,
        Embera\Provider\IHeartRadio::class,
        Embera\Provider\Infogram::class,
        Embera\Provider\Infoveave::class,
        Embera\Provider\Injurymap::class,
        Embera\Provider\Inoreader::class,
        Embera\Provider\Instagram::class,
        Embera\Provider\Issuu::class,
        Embera\Provider\Jovian::class,
        Embera\Provider\KakaoTV::class,
        Embera\Provider\Kickstarter::class,
        Embera\Provider\Kidoju::class,
        Embera\Provider\KirimEmail::class,
        Embera\Provider\Kit::class,
        Embera\Provider\Kitchenbowl::class,
        Embera\Provider\Knacki::class,
        Embera\Provider\LearningApps::class,
        Embera\Provider\LillePod::class,
        Embera\Provider\Livestream::class,
        Embera\Provider\Ludus::class,
        Embera\Provider\Mathembed::class,
        Embera\Provider\Matterport::class,
        Embera\Provider\MediaLab::class,
        Embera\Provider\MedienArchivKuenste::class,
        Embera\Provider\MermaidInk::class,
        Embera\Provider\Meetup::class,
        Embera\Provider\MessesInfo::class,
        Embera\Provider\MixCloud::class,
        Embera\Provider\ModeloIO::class,
        Embera\Provider\MusicboxManiacs::class,
        Embera\Provider\Namchey::class,
        Embera\Provider\Nanoo::class,
        Embera\Provider\NaturalAtlas::class,
        Embera\Provider\Nfb::class,
        Embera\Provider\Omniscope::class,
        Embera\Provider\OnSizzle::class,
        Embera\Provider\OraTV::class,
        Embera\Provider\Orbitvu::class,
        Embera\Provider\Outplayed::class,
        Embera\Provider\OverflowIO::class,
        Embera\Provider\Oz::class,
        Embera\Provider\Padlet::class,
        Embera\Provider\Pastery::class,
        Embera\Provider\Pixdor::class,
        Embera\Provider\Playbuzz::class,
        Embera\Provider\Podbean::class,
        Embera\Provider\PolariShare::class,
        Embera\Provider\Polldaddy::class,
        Embera\Provider\Portfolium::class,
        Embera\Provider\Posixion::class,
        Embera\Provider\Reddit::class,
        Embera\Provider\ReleaseWire::class,
        Embera\Provider\Replit::class,
        Embera\Provider\ReverbNation::class,
        Embera\Provider\Roomshare::class,
        Embera\Provider\RoosterTeeth::class,
        Embera\Provider\Rumble::class,
        Embera\Provider\SapoVideos::class,
        Embera\Provider\ScreenNine::class,
        Embera\Provider\Screencast::class,
        Embera\Provider\ScribbleMaps::class,
        Embera\Provider\Scribd::class,
        Embera\Provider\SendToNews::class,
        Embera\Provider\Shortnote::class,
        Embera\Provider\Shoudio::class,
        Embera\Provider\ShowTheWay::class,
        Embera\Provider\Simplecast::class,
        Embera\Provider\Sketchfab::class,
        Embera\Provider\Slideshare::class,
        Embera\Provider\SmashNotes::class,
        Embera\Provider\Smugmug::class,
        Embera\Provider\SocialExplorer::class,
        Embera\Provider\SongLink::class,
        Embera\Provider\SoundCloud::class,
        Embera\Provider\Soundsgood::class,
        Embera\Provider\SpeakerDeck::class,
        Embera\Provider\Spotful::class,
        Embera\Provider\Spotify::class,
        Embera\Provider\Spreaker::class,
        Embera\Provider\StandfordDigitalRepository::class,
        Embera\Provider\Streamable::class,
        Embera\Provider\Sutori::class,
        Embera\Provider\Sway::class,
        Embera\Provider\Ted::class,
        Embera\Provider\TheNewYorkTimes::class,
        Embera\Provider\TheySaidSo::class,
        Embera\Provider\Tickcounter::class,
        Embera\Provider\Toornament::class,
        Embera\Provider\Tuxx::class,
        Embera\Provider\Tvcf::class,
        Embera\Provider\Twitch::class,
        Embera\Provider\Twitter::class,
        Embera\Provider\Typecast::class,
        Embera\Provider\Typlog::class,
        Embera\Provider\UniversitePantheonSorbonne::class,
        Embera\Provider\UniversityCambridgeMap::class,
        Embera\Provider\UstreamTV::class,
        Embera\Provider\Ustudio::class,
        Embera\Provider\Veer::class,
        Embera\Provider\Verse::class,
        Embera\Provider\Vimeo::class,
        Embera\Provider\Viously::class,
        Embera\Provider\Vlipsy::class,
        Embera\Provider\Vlive::class,
        Embera\Provider\VoxSnap::class,
        Embera\Provider\Wistia::class,
        Embera\Provider\Wizer::class,
        Embera\Provider\Wordpress::class,
        Embera\Provider\Youtube::class,
        Embera\Provider\Zingsoft::class,
        Embera\Provider\ZnipeTV::class,
        Embera\Provider\Zoomable::class,
    ]

];