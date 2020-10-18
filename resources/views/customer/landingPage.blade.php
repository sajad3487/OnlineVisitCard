<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Fri May 01 2020 14:48:48 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5ea837e8c81001b668dffd4a" data-wf-site="5ea837e8c8100167b2dffd49">
<head>
    <meta charset="utf-8">
    <title>Split</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="{{asset('css/normalize.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/webflow.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/split-opl.webflow.css')}}" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({  google: {    families: ["Inter:regular,600","Lora:regular"]  }});</script>
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
{{--    <link href="{{asset('images/favicon.png')}}" rel="shortcut icon" type="image/x-icon">--}}
{{--    <link href="{{asset('images/webclip.jpg')}}" rel="apple-touch-icon">--}}
    <link href="{{asset('plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>

    <style type="text/css">
        body {
            -webkit-font-smoothing: antialiased;
        }
    </style>
</head>
<body class="body">
<div class="columns w-row">
    <div class="leftcontent w-col w-col-6 w-col-stack">
        <div style="opacity:1left; background-image: url({{$card->landing->picture ?? $card->logo ?? ''}})" class="image"></div>
    </div>
    <div class="rightcontent w-col w-col-6 w-col-stack">
        <div data-w-id="3fd5aeb3-22da-ed60-7286-0d11f16597d3" style="opacity:0" class="content">
            <h4 class="name">{{$card->company_name}}</h4>
            <div style="color: white">{{$card->position}}</div>
            <h1 class="tagline"><strong class="bold-text">{{$card->fname." ".$card->lname}}</strong></h1>
            <p class="bio">Email : {{$card->email ?? ''}}</p>
            <p class="bio">Phone : {{$card->tel ?? ''}}</p>
            <p class="bio">Fax : {{$card->landing->fax ?? ''}}</p>
            <p class="text-white">Website (Work) :<a href="@if(isset($card->landing->personal_website)){{ strpos($card->landing->personal_website, 'http') === false ? 'http://' . $card->landing->personal_website : $card->landing->personal_website}}@endif" target="_blank"> {{$card->landing->work_website ?? ''}}</a></p>
            <p class="text-white">Website (Personal) :<a href="@if(isset($card->landing->work_website)){{ strpos($card->landing->work_website, 'http') === false ? 'http://' . $card->landing->work_website : $card->landing->work_website }}@endif" target="_blank"> {{$card->landing->personal_website ?? ''}}</a></p>
            <div class="links w-row" style="margin-top: 40px">
                <div class="column w-col w-col-4 text-left">
                    <div class="text-block-2">Home</div>
                    <ul class="list w-list-unstyled">
                        <li>
                            <p>{{$card->landing->home_address ?? ''}}</p>
                        </li>
                    </ul>
                </div>
                <div class="column w-col w-col-4 text-left">
                    <div class="text-block-2">Work</div>
                    <ul class="list w-list-unstyled">
                        <li>
                            <p>{{$card->landing->work_address ?? ''}}</p>
                        </li>
                    </ul>
                </div>
                <div class="column-2 w-col w-col-4 text-center">
                    <div class="text-block-2">social</div>
                    <div class="list w-list-unstyled">
                        <div class="mt-5">
                            <a href="{{$card->landing->facebook ?? ''}}" target="_blank" class="m-4"><i class="flaticon-facebook-letter-logo  text-success  display-3"></i></a>
                            <a href="{{$card->landing->twitter ?? ''}}" target="_blank" class="m-4"><i class="flaticon-twitter-logo text-success  display-3"></i></a>
                        </div>
                        <div class="mt-5">
                            <a href="{{$card->landing->linkdin ?? ''}}" target="_blank" class="m-4"><i class="flaticon-linkedin-logo text-success  display-3"></i></a>
                            <a href="{{$card->landing->skype ?? ''}}" target="_blank" class="m-4"><i class="flaticon-skype-logo text-success  display-3"></i></a>
                        </div>
                        <div class="mt-5">
                            <a href="{{$card->landing->whatsapp ?? ''}}" target="_blank" class="m-4"><i class="flaticon-whatsapp text-success  display-3"></i></a>
                            <a href="{{$card->landing->instagram ?? ''}}" target="_blank" class="m-4"><i class="flaticon-instagram-logo text-success  display-3"></i></a>
                        </div>

                    </div>
                </div>

            </div>
            <div class="credit"><a href="https://onepagelove.com/split" target="_blank" class="credit-links">©2020 Your Name</a></div>
        </div>
    </div>
</div>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5ea837e8c8100167b2dffd49" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{asset('js/webflow.js')}}" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>