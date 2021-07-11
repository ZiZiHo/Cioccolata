@extends('layouts.nav_footer')

@section('title', '巧遇農情 - 關於我們 About')


@section('css')
    <link rel="stylesheet" href="{{ asset('/css/about.css') }}">
@endsection

@section('main')
    <main>
        <div class="banner"></div>
        <div class="title">
            <h1>關於我們</h1>
            <h5>About</h5>
        </div>

        <div class="brand">
            <div class="photo"></div>
            <div class="story">
                <div class="txt">
                    <h2>品牌故事</h2>
                    <hr>
                    <h4>
                        巧遇農情 是由天奕和佳慧在 2014 年共同創辦，他們在屏東科技大學就讀時，輔導農民進行【可可豆到巧克力】的製作過程，也就是歐美很流行的 Bean to
                        Bar，過程中發現了其中的奧妙，於是畢業後繼續跟農民合作，持續收購農民的可可豆來製作巧克力。<br><br>
                        巧遇農情希望用最簡單的方式呈現巧克力的原味，讓客人吃到最純正的風味。我們賣的不只是巧克力，而是一種對在地的熱情。
                    </h4>
                </div>
            </div>
        </div>

        <div class="bg-chocolate"></div>

        <div class="tree-group">
            <div class="txt">
                <div class="title-group">
                    <h1>Tree to Bar</h1>
                    <hr>
                </div>
                <h4>巧遇農情有全台灣獨一無二的巧克力，主打以真正的巧克力出發，吃入口中會帶微酸、焦香與果香氣，不帶油膩感。</h4>
                <h4>一片巧克力的生產，從種植開始，開花、結果、採收、發酵、曝曬、烘烤、脫殼、破碎、精磨、調溫、注模到成型，多道工續，是我們堅持追求每一片美味且真的巧克力。</h4>
            </div>
            <div class="tree"></div>
            <div class="cocoa"></div>
            <div class="tree-bg"></div>
        </div>

        <div class="bean"></div>

        <div class="cer-group">
            <h1>國際認證</h1>
            <hr>
            <div class="certificate">
                <div class="left">
                    <div class="cer-1"></div>
                    <div class="cer-2"></div>
                </div>
                <div class="right">
                    <div class="cer-3"></div>
                    <div class="cer-4"></div>
                </div>
            </div>

            <div class="cer-txt">
                <h4>巧遇農情嚴選栽種於優質可可產地 厄瓜多爾雨林
                    之可可豆，100%無添加物，精心研磨製作。所有原料均通過SGS國際檢測，並獲得多張世界聯盟認證，不含麩質、無人工色素、非鹼性的天然原料，而且是【零】反式脂肪酸，每一口都值得品嚐，讓您吃得健康、吃得安心！
                </h4>
            </div>
        </div>

    </main>
@endsection


