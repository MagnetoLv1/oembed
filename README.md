# OEmbed for Laravel5

## About

`magnetolv1/oembed` 패키지는  [`mpratt/Embera`](https://github.com/mpratt/Embera)를 기반으로 **oEmbed**를 Laravel에서 사용할 수 있도록 도와줍니다.

oEmbed란?
> oEmbed는 다른 사이트의 URL을 내장된 표현을 가능하게 하는 Format 입니다.
> 유저가 Resource 에 해당하는 링크를 입력할 때, 웹사이트들이 Resource를 직접 파싱하지 않고, 내장된 컨텐츠(사진과 비디오같은)를 보여줄 수 있게 하는 간단한 API 입니다.

- 공식 사이트 : [https://oembed.com](https://oembed.com)
- 관련 포스트 : [‛oEmbed를 소개합니다‛](https://meetup.toast.com/posts/81)
- Based on [https://github.com/mpratt/Embera](https://github.com/mpratt/Embera)

## Features
* 등록된 Providers에 oEmbed값을 제공합니다.([Providers](https://github.com/mpratt/Embera/blob/master/doc/02-providers.md))
* 특정 Provider를 등록해서 사용할 수 있습니다.
* 캐시를 사용할 수 있습니다.


## Installation

composer를 통해 의존성 패키지를 설치합니다.
```sh
composer require magnetolv1/oembed
```


## Configuration
`MagnetoLv1/oembed`의 설정 값을 퍼블리싱 하기
```sh
php artisan vendor:publish --provider="MagnetoLv1\Oembed\OembedServiceProvider"
```

`config/oembed.php` 에서 기존 설정값 수정합니다.

```php 
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
        Embera\Provider\Youtube::class,
    ]

];
```

## Global usage
```php

use MagnetoLv1\Oembed\Facades\Oembed;

$oembed = Oembed::get('https://www.youtube.com/watch?v=QSV0LghD1D8');
echo json_encode($oembed);

```

##### Output
```json
{
  "author_name": "SBS Running Man",
  "title": "이광수, 폭탄 선언 “이선빈과 결혼하겠습니다” 《Running Man》런닝맨 EP451",
  "provider_name": "YouTube",
  "height": 270,
  "width": 480,
  "html": "<iframe width=\"480\" height=\"270\" src=\"https://www.youtube.com/embed/QSV0LghD1D8?feature=oembed\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>",
  "provider_url": "https://www.youtube.com/",
  "thumbnail_url": "https://i.ytimg.com/vi/QSV0LghD1D8/hqdefault.jpg",
  "type": "video",
  "thumbnail_height": 360,
  "author_url": "https://www.youtube.com/user/NewSundaySBS",
  "version": "1.0",
  "thumbnail_width": 480,
  "embera_using_fake_response": 0,
  "embera_provider_name": "Youtube"
}
```
