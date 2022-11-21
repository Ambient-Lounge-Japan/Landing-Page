<?php
/*
	Template Name: Pet Lounge
*/
?>

<?php
	get_header();	
?>

<style>
    .container-dark{
        max-width: 1560px;
        margin-left: auto;
        margin-right: auto;
    }
    .page-header {
        display: none;
    }
    .group-btn-float {
        position: sticky !important;
        text-align: right;
        margin-right: 20px;
        padding-top: 40px;
        margin-bottom: -100px;
    }
    #bb-container, .offcanvas_container, .page-header {
        overflow: initial !important;
    }

    @media(max-width:768px) {
        .group-btn-float {
            padding-top: 20px;
        }
    }
</style>

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/css/main-dark.all.min.css?27"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto Sans JP:100,200,300,400,500,600,700|Noto Sans JP:600|Open Sans:600|Open Sans|Open Sans:700&amp;subset=latin-ext&amp;display=swap" media="all" onload="this.media='all'">

<div class="group-btn-float" id="group-btn-float" role="group" aria-label="Vertical button group">
    <button type="button" class="btn btn-primary btn-top" id="btn_buy" onclick="window.open('https://ambientlounge.co.jp/products/dog-bed/pet-lounge/','_self')">購入</button>
</div>

<div class="container-fluid main-container">
    <div class="container-dark">
        <div class="row justify-content-center pt-5 text-center">
            <h1 class="top-banner-title">PET LOUNGE</h1>
            <p class="top-banner-text top-banner-heading-sm">耐久性に優れ、いつも清潔、そして極上の寝心地。</p>
            <p class="top-banner-text top-banner-heading-lg">創ったのは､最高の家族の<br>最高の居場所</p>
            <img class="pt-3 top-img" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/dog_img.webp" alt="lp-dog">
        </div>
    </div>
</div>
<!--container bg-black start-->
<div class="container-fluid container-2">
    <div class="container-dark">
        <div class="row product-row-black video-panel" id="video-panel">
            <div class="col-12 col-md-6 m-auto order-2 order-md-1">
                <img class="w-100 rounded-5" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/change-cover.gif" alt=""/>
            </div>
            <div class="col-12 col-md-6 text-end order-1 order-md-2">
                <h1 class="text-gradient-1 text-gradient">オールシーズン<br>清潔な設計</h1>
                <p class="text-desc-sm">裏地が完全防水の高機能なカバーは<br/>
                    ファスナーでぐるりと取り外して洗濯機で洗えます｡<br/>
                    季節や機能でカバーを交換できるから<br/>
                    春夏秋冬ずっと快適、ずっと清潔。</p>
            </div>
        </div>
        <div class="row product-row-black">
            <div class="col-md-12 text-start">
                <h1 class="text-gradient-2 text-gradient">豊富な種類のカバー<br>を揃えました</h1>
                <p class="text-desc-sm">カバーを交換するだけでインテリアや季節に応じて簡単にアップデート。<br/>
                    １台で何通りものデザインや用途が楽しめます。</p>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-12 p-0">
                            <div class="row product-list-small">
                                <div class="col-sm-3 col-5 m-auto"><img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/product_small_1.webp" alt=""/></div>
                                <div class="col-sm-9 col-7 text-start px-0">
                                    <p class="panel-text-bold">シープオーガニック</p>
                                    <p class="panel-text">環境と皮膚にやさしいオーガニックコットンブレンド
                                        <br>Japan Limited 商品</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 p-0">
                            <div class="row product-list-small">
                                <div class="col-sm-3 col-5 m-auto"><img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/product_small_2.webp" alt=""/></div>
                                <div class="col-sm-9 col-7 text-start px-0">
                                    <p class="panel-text-bold">キルト（グレー・ベージュ）</p>
                                    <p class="panel-text">汚れに強く、撥水性のある高機能ファブリック
                                        <br>夏は冷感カバーとして活躍</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 p-0">
                            <div class="row product-list-small">
                                <div class="col-sm-3 col-5 m-auto"><img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/product_small_3.webp" alt=""/></div>
                                <div class="col-sm-9 col-7 text-start px-0">
                                    <p class="panel-text-bold">ウルフグレー</p>
                                    <p class="panel-text">本物の動物の毛の風合いをリアルに再現
                                        <br>定番ファーカバー</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 p-0">
                            <div class="row product-list-small">
                                <div class="col-sm-3 col-5 m-auto"><img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/product_small_4.webp" alt=""/></div>
                                <div class="col-sm-9 col-7 text-start px-0">
                                    <p class="panel-text-bold">バンビグレー</p>
                                    <p class="panel-text">ランクを超えた、極上ラグジュアリー感
                                        <br>毛足が長くインテリアに美しいパターン</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 p-0">
                            <div class="row product-list-small">
                                <div class="col-sm-3 col-5 m-auto"><img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/product_small_5.webp" alt=""/></div>
                                <div class="col-sm-9 col-7 text-start px-0">
                                    <p class="panel-text-bold">ラビットベージュ</p>
                                    <p class="panel-text">うっとりととろける様な柔らかさが魅力
                                        <br>女性人気NO.1</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 p-0">
                            <div class="row product-list-small">
                                <div class="col-sm-3 col-5 m-auto"><img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/product_small_6.webp" alt=""/></div>
                                <div class="col-sm-9 col-7 text-start px-0">
                                    <p class="panel-text-bold">フーディーカバー</p>
                                    <p class="panel-text">超小型犬やシャイな性格の犬たちの為に登場した、とっておきの隠れ家を作ってあげられるフーディーカバー。もちろんファスナーで取り外し可能です。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row product-row-black">
            <div class="col-md-4 col-sm-8 m-auto order-2 order-md-1">
                <img class="w-100 p-4 p-md-0 dog-img-float" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/dog_circle.webp" alt=""/>
            </div>
            <div class="col-md-8 text-md-end text-sm-center order-1 order-md-2">
                <h1 class="text-gradient-2 text-gradient text-gradient-margin-n text-end">ひっかき・️噛み癖にも圧倒的な耐久性</h1>
                <p class="text-desc-sm desc-float-right text-end">本体ベース表面にはアウトドア用品にも用いられる1200デニールの高密度ソフトナイロンを使用し、簡単には壊されない強度な設計を実現。さらに裏地にはラバーシートを張り合わせダブルのコーティングで汚れや接水性にも強いベッドが誕生しました。</p>
            </div>
            <div class="col-12 order-3">
                <div class="row product-list-small panel-float-right">
                    <div class="col-sm-3 col-5 m-auto"><img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/zip_img.webp" alt=""/></div>
                    <div class="col-sm-9 col-7 text-start m-auto">
                        <p class="panel-text-bold">安全のために</p>
                        <p class="panel-text">本体底にあるファスナーには、誤って噛んだりしないように、スライダートップをあえて取り付けない設計になっています。お手元のゼムクリップなどをご利用になって簡単に開けることができます。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row product-row-black">
        <div class="col-md-10">
            <h1 class="text-gradient-1 text-gradient text-wrap">清潔・睡眠・体温調整で健康を徹底的にサポート</h1>
        </div>
        <div class="col-md-12">
            <div class="row product-list-lg">
                <div class="col-md-4 col-12 p-2 p-md-4 p-xl-5 m-auto text-center text-md-start">
                    <p class="panel-text-title">清潔</p>
                    <p class="text-desc-lg">本体は撥水加工、カバーは洗って清潔に保てるので、ノミ、ダニやバイ菌の温床にならず、おしっこやよだれにも安心です。</p>
                </div>
                <div class="col-md-8 col-12 g-0 m-auto">
                    <img class="w-100" style="border-radius: 15px;" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/product_img_lg_1.webp" alt=""/>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row product-list-lg">
                <div class="col-md-7 col-12 g-0 m-auto order-2 order-md-1">
                    <img class="w-100" style="border-radius: 15px;" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/product_img_lg_2.webp" alt=""/>
                </div>
                <div class="col-md-5 col-12 p-2 p-md-4 p-xl-5 m-auto text-center text-md-start order-1 order-md-2">
                    <p class="panel-text-title text-center text-md-end">睡眠</p>
                    <p class="text-desc-lg">眠りが浅い犬達がぐっすり熟睡できるように、独自開発の充填は人用マットレスと同グレード。健康を左右する良質な睡眠をパピーからシニアまで末長くサポートします。</p>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row product-list-lg">
                <div class="col-md-4 col-12 p-2 p-md-4 p-xl-5 m-auto text-center text-md-start">
                    <p class="panel-text-title">体温調整</p>
                    <p class="text-desc-lg">スマートベントシステム（通気/ムレ防止（特許取得済））が睡眠環境を最適な温度に保ちます。</p>
                </div>
                <div class="col-md-8 col-12 g-0 m-auto">
                    <img class="w-100" style="border-radius: 15px;" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/product_img_lg_3.webp" alt=""/>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<!--container bg-black end-->

<!--container colors start-->
<div class="container-fluid bg-white p-3 p-xl-5">
    <div class="container-dark">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="light-text-title">インテリアや季節に合わせて<br>あなたらしさが進む<br>豊富なバリエーション</h1>
            </div>
            <div class="col-12 text-center">
                <p class="light-text-subtitle">季節、デザイン、機能で選べるバリエーションが豊富だから、インテリアのアップデートや衣替えも楽しめます。</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3 col-6 my-2"><img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/product_colors_1.webp" alt=""></div>
            <div class="col-md-3 col-6 my-2"><img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/product_colors_2.webp" alt=""></div>
            <div class="col-md-3 col-6 my-2"><img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/product_colors_3.webp" alt=""></div>
            <div class="col-md-3 col-6 my-2"><img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/product_colors_4.webp" alt=""></div>
        </div>
        <div class="row justify-content-center my-xl-5">
            <div class="col-md-3 col-6 my-2"><img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/product_colors_5.webp" alt=""/></div>
            <div class="col-md-3 col-6 my-2"><img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/product_colors_6.webp" alt=""/></div>
            <div class="col-md-3 col-6 my-2"><img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/product_colors_7.webp" alt=""/></div>
            <div class="col-md-3 col-6 my-2"><img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/product_colors_8.webp" alt=""/></div>
        </div>
        <div class="row justify-content-center p-3 p-xl-5">
            <div class="col-12 text-center lh-lg">
                <h1 class="light-text-title">洗練されたデザインで<br>ワンランク上のライフスタイルを</h1>
            </div>
            <div class="col-12 text-center">
                <p class="light-text-subtitle">世界中の愛犬家やセレブリティに愛される高級ペットベッドは家族みんなの幸せの中心にあります</p>
            </div>
        </div>
        <div class="row justify-content-center">
        <div class="col-md-4 col-6 my-2"><img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/product_show_1.webp" alt=""/></div>
        <div class="col-md-4 col-6 my-2"><img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/product_show_2.webp" alt=""/></div>
        <div class="col-md-4 col-6 my-2"><img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/product_show_3.webp" alt=""/></div>
        <div class="col-md-4 col-6 my-2"><img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/product_show_4.webp" alt=""/></div>
        <div class="col-md-4 col-6 my-2"><img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/product_show_5.webp" alt=""/></div>
        <div class="col-md-4 col-6 my-2"><img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/product_show_6.webp" alt=""/></div>
    </div>
    </div>
</div>
<!--container colors end-->

<!--container filling material start -->
<div class="container bg-light p-3 p-xl-5">
    <div class="container-dark">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <h1 class="light-text-title">フィリングについて</h1>
                <p class="light-text-subtitle">ペットの好みや性格、年齢に合わせて3種類のフィリングをご用意</p>
            </div>
        </div>
        <div class="row justify-content-center">
        <div class="col-12 col-md-4 text-center">
            <p class="text-common-bold">ベーシック</p>
            <img class="p-2 w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/filling_img_1.webp" alt=""/>
            <p class="panel-text-bold text-black">柔らかさ</p>
            <img class="p-2 w-25" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/icons/star_1.webp" alt=""/>
            <p class="text-grey">硬め、軽量<br>&emsp;</p>
            <img class="p-2 w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/recommend_1.webp" alt=""/>
            <p class="text-common-regular">プレミアムビーズ充填で仕上げました。エントリープライスのペットラウンジ 。硬めがお好みのペット達にもおすすめです。</p>
        </div>
        <div class="col-12 col-md-4 text-center">
            <p class="text-common-bold">スタンダード</p>
            <img class="p-2 w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/filling_img_2.webp" alt=""/>
            <p class="panel-text-bold text-black">柔らかさ</p>
            <img class="p-2 w-25" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/icons/star_2.webp" alt=""/>
            <p class="text-grey">柔らかめ、包み込む、体圧分散、関節サポート、<br>弾力性、軽量</p>
            <img class="p-2 w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/recommend_2.webp" alt=""/>
            <p class="text-common-regular text-start">独自開発のハイブリッド充填で仕上げました。反発力と弾力性に優れ、足腰が弱りがちなシニア達の起き上がりを助けます。体が心地よく沈み、柔らか過ぎず、硬過ぎない、最適なフィット感で人気No.1のフィリングです。</p>
        </div>
        <div class="col-12 col-md-4 text-center">
            <p class="text-common-bold">プレミアム</p>
            <img class="p-2 w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/filling_img_3.webp" alt=""/>
            <p class="panel-text-bold text-black">柔らかさ</p>
            <img class="p-2 w-25" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/icons/star_3.webp" alt=""/>
            <p class="text-grey">フカフカ、包み込む、体圧分散、関節サポート、<br>弾力性、形状記憶、衝撃吸収</p>
            <img class="p-2 w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/recommend_3.webp" alt=""/>
            <p class="text-common-regular text-start">独自開発の低反発ハイブリッド充填で仕上げました。まるでエアーベッドのような極上感でペット達はたちまち虜に。自分の体に合わせてじんわりと沈み込み、最高の睡眠をサポート。体圧分散性に加え、反発力と弾力性により、特定部位への負担を避け体の痛みを軽減する働きが期待できます。また、高い衝撃吸収力で元気よく飛び乗るパピー達の関節にも安心です。</p>
        </div>
    </div>
    </div>
</div>
<!--container filling material end-->

<!--container al-intro start-->
<div class="container-fluid bg-white p-3 p-xl-5">
    <div class="container-dark">
        <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h1 class="light-text-title">日本品質へのこだわり</h1>
        </div>
        <div class="col-md-4 col-sm-5 col-7 py-5"><img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/icons/al_logo_lg.webp" alt=""/></div>
        <div class="w-100"></div>
        <div class="col-12 col-md-10 text-center">
            <p class="al-intro-text">ゆったりとした時間が流れ、QOLを大切にするオーストラリア発のアンビエントラウンジが日本に上陸したのは2015年。
                <br>機能的でユニークなデザインはそのままに、ジャパン社では日本発信の商品開発や日本品質にこだわっています。
                <br>試行錯誤を繰り返したどり着いた、圧倒的な座り心地のソファやペットベッドはジャパン社だけの独自品質。
                <br>ローカル産業との取り組みを始め、過疎化が進む "みなかみ町" に新しいビジネスモデルを生み出したいと考えています。
                <br>ご注文いただいたソファやベッドは全て、地元みなかみ町のスタッフが１点１点心を込めて仕上げています。</p>
        </div>
    </div>
    </div>
</div>
<!--container al-intro end-->

<!--container ranking start-->
<div class="container container-3 p-3 p-xl-5">
    <div class="container-dark">
        <div class="row justify-content-center text-center">
        <div class="col-md-12">
            <h1 class="light-text-title">カスタマーレビュー</h1>
        </div>
        <div class="col-12 col-md-10">
            <div class="row ranking-panel">
                <div class="col-md-3 m-auto"><div class="review-img review-img-bg-1"></div></div>
                <div class="col-md-9 text-start m-auto">
                    <p class="ranking-panel-text"><span class="ranking-panel-text-bold">最高！！</span>  ホワイトシェパード2頭用にLサイズ1個を注文。下の子が破壊女王なので大丈夫かなと思いましたが、寝心地がよすぎるのか破壊せず爆睡してくれてます！飼い主も一緒に寝られちゃうくらい大きくてこれは凄くいいです！頼んでよかった！</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-10">
            <div class="row ranking-panel">
                <div class="col-md-3 m-auto"><div class="review-img review-img-bg-2"></div></div>
                <div class="col-md-9 text-start m-auto">
                    <p class="ranking-panel-text"><span class="ranking-panel-text-bold"> 毎晩愛用中 </span> 我が家の愛犬ももは、届いた瞬間から自分のベッドだとわかり喜んで寝てました。 ももが乗ると重さでゆっくりと沈み身体を包み込んでくれる寝心地の良さに安心してぐっすり寝てくれます。 ファーカバーは洗濯も出来るのが嬉しいです。</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-10">
            <div class="row ranking-panel">
                <div class="col-md-3 m-auto"><div class="review-img review-img-bg-3"></div></div>
                <div class="col-md-9 text-start m-auto">
                    <p class="ranking-panel-text"><span class="ranking-panel-text-bold"> 悩んだけど買ってよかった </span>  老犬のために購入を決めました。気に入らなかった困ると思いなかなか購入までに時間がかかりましたがすぐに寝てくれて他のわんちゃんとも取り合いです。 早く買えばよかったです。</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<!--container ranking end-->

<!--container details start-->
<div class="container-fluid container-4 p-3 p-xl-5">
    <div class="container-dark">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <h1 class="light-text-title">ベッドのサイズにお悩みですか？</h1>
                <p class="light-text-subtitle">一覧からあなたのペットにあったベッドを探すことができます</p>
            </div>
            <div class="col-lg-2 col-md-4 col-5 m-1 text-center p-details">
                <img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/pet_size_s.webp" alt=""/>
                <h2 class="my-3">S</h2>
                <h6>小型犬10kg</h6>
                <img src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/icons/color_list.webp" style="max-width: 3rem;" alt=""/>
                <p class="text-grey-sm mt-2"><strong>カバー</strong></p>
                <p class="text-grey-sm">ファーカバー / キルト /
                    <br>オーガニックコットンカバー
                    <br>（デニム）/ フーディー</p>
                <p class="text-grey-sm mt-2"><strong>フィリング</strong></p>
                <p class="text-grey-sm">ベーシック / スタンダード /
                    <br>プレミアム</p>
                <p class="text-price">¥25,900(税込)から</p>
                <!--            <p><button class="btn btn-primary btn-details">詳細を見る</button></p>-->
                <a href="https://ambientlounge.co.jp/products/dog-bed/pet-lounge/?attribute_pa_product-type=standard&attribute_pa_size=s&attribute_pa_bed-selection=grey-base&attribute_pa_cover-selection=wolfgrey-cover&attribute_pa_filling=be-lux-prime" class="link-primary text-decoration-none"><p class="buy-link">購入<i class="bi bi-chevron-right"></i></p></a>
            </div>
            <div class="col-lg-2 col-md-4 col-5 m-1 text-center p-details">
                <img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/pet_size_m.webp" alt=""/>
                <h2 class="my-3">M</h2>
                <h6>中型犬25kg</h6>
                <img src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/icons/color_list.webp" style="max-width: 3rem;" alt=""/>
                <p class="text-grey-sm mt-2"><strong>カバー</strong></p>
                <p class="text-grey-sm">ファーカバー / キルト /
                    <br>オーガニックコットンカバー
                    <br>（デニム）</p>
                <p class="text-grey-sm mt-2"><strong>フィリング</strong></p>
                <p class="text-grey-sm">ベーシック / スタンダード /
                    <br>プレミアム</p>
                <p class="text-price">¥34,900(税込)から</p>
                <!--            <p><button class="btn btn-primary btn-details">詳細を見る</button></p>-->
                <a href="https://ambientlounge.co.jp/products/dog-bed/pet-lounge/?attribute_pa_product-type=standard&attribute_pa_size=m&attribute_pa_bed-selection=grey-base&attribute_pa_cover-selection=wolfgrey-cover&attribute_pa_filling=be-lux-prime" class="link-primary text-decoration-none"><p class="buy-link">購入<i class="bi bi-chevron-right"></i></p></a>
            </div>
            <div class="col-lg-2 col-md-4 col-5 m-1 text-center p-details">
                <img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/pet_size_l.webp" alt=""/>
                <h2 class="my-3">L</h2>
                <h6>大型犬40kg</h6>
                <img src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/icons/color_list.webp" style="max-width: 3rem;" alt=""/>
                <p class="text-grey-sm mt-2"><strong>カバー</strong></p>
                <p class="text-grey-sm">ファーカバー / キルト /
                    <br>オーガニックコットンカバー
                    <br>（デニム）</p>
                <p class="text-grey-sm mt-2"><strong>フィリング</strong></p>
                <p class="text-grey-sm">ベーシック / スタンダード /
                    <br>プレミアム</p>
                <p class="text-price">¥46,900(税込)から</p>
                <!--            <p><button class="btn btn-primary btn-details">詳細を見る</button></p>-->
                <a href="https://ambientlounge.co.jp/products/dog-bed/pet-lounge/?attribute_pa_product-type=standard&attribute_pa_size=l&attribute_pa_bed-selection=grey-base&attribute_pa_cover-selection=wolfgrey-cover&attribute_pa_filling=be-lux-prime" class="link-primary text-decoration-none"><p class="buy-link">購入<i class="bi bi-chevron-right"></i></p></a>
            </div>
            <div class="col-lg-2 col-md-4 col-5 m-1 text-center p-details">
                <img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/pet_size_xxl.webp" alt=""/>
                <h2 class="my-3">XXL</h2>
                <h6>超大型犬40kg以上</h6>
                <img src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/icons/color_list.webp" style="max-width: 3rem;" alt=""/>
                <p class="text-grey-sm mt-2"><strong>カバー</strong></p>
                <p class="text-grey-sm">ファーカバー / キルト /
                    <br>オーガニックコットンカバー
                    <br>（デニム）</p>
                <p class="text-grey-sm mt-2"><strong>フィリング</strong></p>
                <p class="text-grey-sm">ベーシック / スタンダード /
                    <br>プレミアム</p>
                <p class="text-price">¥77,900(税込)から</p>
                <!--            <p><button class="btn btn-primary btn-details">詳細を見る</button></p>-->
                <a href="https://ambientlounge.co.jp/products/dog-bed/pet-lounge/?attribute_pa_product-type=standard&attribute_pa_size=xxl&attribute_pa_bed-selection=grey-base&attribute_pa_cover-selection=wolfgrey-cover&attribute_pa_filling=be-lux-prime" class="link-primary text-decoration-none"><p class="buy-link">購入<i class="bi bi-chevron-right"></i></p></a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="light-text-title">ベッドを使ってくれるか<br>心配ですか？</h1>
            </div>
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="panel-blue p-2 post-details-text">気にいらなければ、どんな状態でも！
                    <br><b>最大60日以内</b>※の返品OK</div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3 col-sm-8 text-center">
                <img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/step_img_1.webp" alt=""/>
                <p class="post-desc-text">カラーやフィリングをカスタマイズしてご注文</p>
                <p class="post-details-text">最短翌日出荷</p>
            </div>
            <div class="col-md-3 col-sm-8 text-center">
                <img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/step_img_2.webp" alt=""/>
                <p class="post-desc-text">ご注文を受けてから日本ラボで作成しお届け</p>
                <p class="post-details-text">日本人スタッフによる<br>最高品質の製造</p>
            </div>
            <div class="col-md-3 col-sm-8 text-center">
                <img class="w-100" src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/step_img_3.webp" alt=""/>
                <p class="post-desc-text">最大60日※のお試しトライアル期間
                    <br><span class="text-grey" style="font-size:12px;line-height: 18px;">※ ペットラウンジ 60日間・ソファ 30日間</span></p>
                <p class="post-details-text">ソファは30日間、ペットラウンジは60日間。気に入らない場合は、どんな状態でも全額返金。</p>
            </div>
        </div>
        <div class="row justify-content-center py-5">
        <div class="col-md-3 text-center"><button class="btn btn-primary btn-details-lg" onclick="window.open('https://ambientlounge.co.jp/30days-trial/','_self')">詳しく見る</button></div>
        </div>
    </div>
</div>
<!--container details end-->

<!--container lookbook start-->
<div class="container-fluid container-5 p-3 p-xl-5">
    <div class="container-dark">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <h1 class="light-text-title">LOOKBOOK</h1>
            </div>
            <div class="col-md-8 col-12 text-center my-3">
                <p class="light-text-subtitle">気になるお部屋のレイアウトや、どんなワンちゃんが利用しているか...などなど。ルックブックでチェックしてみましょう。</p>
            </div>
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-4 col-6 p-2"><img src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/lookbook_img_1.webp" style="width:100%" alt=""/></div>
                    <div class="col-md-4 mt-md-5 col-6 p-2"><img src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/lookbook_img_2.webp" style="width:100%" alt=""/></div>
                    <div class="col-md-4 col-6 p-2"><img src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/lookbook_img_3.webp" style="width:100%" alt=""/></div>
                    <div class="col-md-4 col-6 p-2"><img src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/lookbook_img_4.webp" style="width:100%" alt=""/></div>
                    <div class="col-md-4 mt-md-5 col-6 p-2"><img src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/lookbook_img_5.webp" style="width:100%" alt=""/></div>
                    <div class="col-md-4 col-6 p-2"><img src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/images/lp_dog/lookbook_img_6.webp" style="width:100%" alt=""/></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center py-5">
        <div class="col-md-3 text-center"><button class="btn btn-primary btn-details-lg" onclick="window.open('https://ambientlounge.co.jp/lookbook-dog/','_self')">LOOKBOOKを見る</button></div>
    </div>
    </div>
</div>
<!--container lookbook end-->

<script src="<?php echo get_stylesheet_directory_uri() . "/"; ?>/lp-assets/js/bootstrap.bundle.min.js"></script>

<?php
	get_footer();
?>