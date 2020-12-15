<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Fri May 01 2020 14:48:48 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5ea837e8c81001b668dffd4a" data-wf-site="5ea837e8c8100167b2dffd49">
<head>
    <meta charset="utf-8">
    <title>Fabrizio</title>
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


<body class="body" style="background-color: {{$card->color ?? ''}}">
<div class="columns w-row">
    <div class="leftcontent w-col w-col-6 w-col-stack">
        <div style="opacity:1left; background-image: url({{$card->landing->picture ?? $card->logo ?? ''}})" class="image"></div>
    </div>
    <div class="rightcontent w-col w-col-6 w-col-stack py-2">
        <div data-w-id="3fd5aeb3-22da-ed60-7286-0d11f16597d3" style="opacity:0" class="content">
            <h3 class="name {{$theme ?? ''}}">{{$card->company_name ?? ''}}</h3>
            <div class=" {{$theme ?? ''}}"><h4>{{$card->position ?? ''}}</h4></div>
            <h3 class="tagline"><strong class=" {{$theme ?? ''}}">{{$card->fname." ".$card->lname ?? ''}}</strong></h3>
            <p class="bio {{$theme ?? ''}}">Email : <a href="mailto:{{$card->email ?? ''}}">{{$card->email ?? ''}}</a></p>
            <p class="bio {{$theme ?? ''}}">Phone : <a href="tel:{{$card->tel ?? ''}}">{{$card->tel ?? ''}}</a></p>
            <p class="bio {{$theme ?? ''}}">Fax : {{$card->landing->fax ?? ''}}</p>
            <p class="{{$theme ?? ''}}">Website (Work) :<a class="{{$theme ?? ''}}" href="{{url("card/landing/work_website/".$card->landing->id ?? '')}}"  target="_blank"> {{$card->landing->work_website ?? ''}}</a></p>
            <p class="{{$theme ?? ''}}">Website (Personal) :<a class="{{$theme ?? ''}}" href="{{url("card/landing/personal_website/".$card->landing->id ?? '')}}" target="_blank"> {{$card->landing->personal_website ?? ''}}</a></p>
            <div class="links w-row" style="margin-top: 40px">
                <div class="column w-col w-col-4 text-left">
                    <div class="text-block-2 {{$theme ?? ''}}">Home Address</div>
                    <ul class="list w-list-unstyled">
                        <li>
                            <p class="{{$theme ?? ''}}">{{$card->landing->home_address ?? ''}}</p>
                        </li>
                    </ul>
                </div>
                <div class="column w-col w-col-4 text-left">
                    <div class="text-block-2 {{$theme ?? ''}}">Work Address</div>
                    <ul class="list w-list-unstyled">
                        <li>
                            <p class="{{$theme ?? ''}}">{{$card->landing->work_address ?? ''}}</p>
                        </li>
                    </ul>
                </div>
                <div class="column-2 w-col w-col-4 text-center">
                    <div class="text-block-2 {{$theme ?? ''}}">social Media</div>
                    <div class="list w-list-unstyled">
                        <div class="mt-5">
                            <a href="{{url("card/landing/facebook/".$card->landing->id)}}" class="m-4 {{$theme ?? ''}}"  target="_blank"><i class="flaticon-facebook-letter-logo  text-success  display-4"></i></a>
                            <a href="{{url("card/landing/twitter/".$card->landing->id)}}" class="m-4 {{$theme ?? ''}}"  target="_blank"><i class="flaticon-twitter-logo text-success  display-4"></i></a>
                        </div>
                        <div class="mt-5">
                            <a href="{{url("card/landing/linkedin/".$card->landing->id)}}" class="m-4 {{$theme ?? ''}}"  target="_blank"><i class="flaticon-linkedin-logo text-success  display-4"></i></a>
                            <a href="{{url("card/landing/skype/".$card->landing->id)}}" class="m-4 {{$theme ?? ''}}"  target="_blank"><i class="flaticon-skype-logo text-success  display-4"></i></a>
                        </div>
                        <div class="mt-5">
                            <a href="{{url("card/landing/whatsapp/".$card->landing->id)}}" class="m-4 {{$theme ?? ''}}"  target="_blank"><i class="flaticon-whatsapp text-success  display-4"></i></a>
                            <a href="{{url("card/landing/instagram/".$card->landing->id)}}" class="m-4 {{$theme ?? ''}}"  target="_blank"><i class="flaticon-instagram-logo text-success  display-4"></i></a>
                        </div>
                        <input type="hidden" name="token" value="{{ csrf_token() }}">


                    </div>
                </div>

            </div>
            <a class="btn btn-success my-5" href="data:text/vcard;charset=UTF-8,{{$vCard}}" download="contact.vcf" onclick="count_download({{$card->landing->id}})">Add to Contact</a>

            <div class="credit"><a href="https://sinshinstudio.com/" target="_blank" class="credit-links">©2020 Your Name</a></div>
        </div>
    </div>
</div>
<script>
    function count_download(landing_id) {
        var base_url =window.location.origin;
        document.location = base_url+'/card/addCard/' + landing_id+'/addCard';
    }
</script>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5ea837e8c8100167b2dffd49" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{asset('js/webflow.js')}}" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
