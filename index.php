
<?php get_header(); ?>

    <!-- メイン -->
    <main>
        <div class="top_img">
            <img src="<?php bloginfo('template_url') ?>/images/img_05.jpeg">
        </div>
        <div class="com_container">
            <section id="about">
                <div class="sec_title">about</div>
                <div class="contents">
                    <div class="about_img">
                        <img class="pc_img" src="<?php bloginfo('template_url') ?>/images/img_06.jpeg">
                        <img class="sp_img" src="<?php bloginfo('template_url') ?>/images/img_06(res).jpeg">
                    </div>
                    <div class="description">
                        <dl>
                            <dt>名前</dt>
                            <dd>：ふくじん</dd>
                            <dt>お問い合わせ</dt>
                            <dd>：fukujin.second.half.life@gmail.com</dd>
                        </dl>

                        <p><br>1970年後半生まれ<br>
                            2001年にIT会社に就職。<br>
                            実務ではWeb開発を15年以上行い、担当者からマネージャーまで経験。<br>
                            <br>
                            2021年、個人として稼ぐことが出来るように副業を開始。<br>
                            <br>
                            プログラミング言語は「言葉」。<br>
                            そのため、「誰が読んでも分かる」「読みやすい/メンテナンスしやすい」ソースコードを書くことを心がけています。<br>
                            <br>
                            Webシステム開発経験が多いため、セキュリティ対策（SQLインジェクション、クロスサイトスクリプティング、ディレクトリ・トラバーサル等）も考慮した開発が可能です。<br>
                            (2012年12月　情報セキュリティアドミニストレータ取得）<br>
                            <br>
                            また、実務でのマネジメント経験も多く、進捗/課題/品質管理を行いクライアントとの期限を遵守した対応が可能です。<br>
                            (2019年8月 Project Management Professional（PMP）取得)
                        </p>
                    </div>
                </div>
            </section>

            <section id="skills">
                <div class="sec_title">skills</div>
                <div class="contents">
                    <div class="row">
                        <div class="skill">
                            <img src="<?php bloginfo('template_url') ?>/images/icon/01‗html-5.svg">HTML/CSS
                        </div>
                        <div class="description">
                            <p>提供されたレイアウトからHTML/CSSに実装することができます。<br>
                                スマホ画面でも画面崩れが起きないように、レスポンシブデザインの対応もできます。<br>
                                また、サーバーサイドの知見もあるため、クライアントとサーバー間のIFに関するコミュニケーションもスムーズに行えます。<br>
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="skill">
                            <img src="<?php bloginfo('template_url') ?>/images/icon/02_java.svg">java
                        </div>
                        <div class="description">
                            <p>実務で300Kstep以上の設計/製造/テストの経験があります。<br>
                                高品質なソースコードを書くことが出来ます。<br>
                                （業務以外の処理をAP基板レイヤで実装し、業務ロジックは業務処理のみに集中すれば良いように設計し品質を高めるように進めてきました。）<br>
                                使用経験のあるFWはStruts、Spriingです。

                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="skill">
                            <img src="<?php bloginfo('template_url') ?>/images/icon/03_javascript.svg">
                            <img src="<?php bloginfo('template_url') ?>/images/icon/03_jquery.svg">Javascript/jQuery
                        </div>
                        <div class="description">
                            <p>実務で10kstep程度の設計/製造/テストの経験があります<br>
                                基本的なJavaScript、jQueryの実装は問題なく実装できます。<br>
                                （実務で、パラメータチェック処理や、ボタンの2度押し防止処理、ajax処理の実装経験あり。）
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="skill">
                            <img src="<?php bloginfo('template_url') ?>/images/icon/04_sql.png">SQL
                        </div>
                        <div class="description">
                            <p>実務で使用しております。Oracle、mysql、sqlServerの使用経験あり。<br>
                                基本的なCRUD（登録、検索、更新、削除）の対応はもちろん、性能を考慮したSQLを組むことが出来ます。
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="skill">
                            <img src="<?php bloginfo('template_url') ?>/images/icon/05_wordpress-icon.svg">WordPress(PHP)
                        </div>
                        <div class="description">
                            <p>WordPressを使用したWebページ作成が出来ます。
                            </p>
                        </div>
                    </div>

                </div>
            </section>

            <section id="certification">
                <div class="sec_title">certification</div>
                <div class="contents">
                    <div class="box">
                        <p class="cert_title">応用情報技術者</p>
                        <a href="<?php bloginfo('url');?>/certification-01"><img src="<?php bloginfo('template_url') ?>/images/thumb_certification_01.JPG"></a>
                    </div>

                    <div class="box">
                        <p class="cert_title">情報セキュリティ<br>アドミニストレータ</p>
                        <a href="<?php bloginfo('url');?>/certification-02"><img src="<?php bloginfo('template_url') ?>/images/thumb_certification_02.JPG"></a>
                    </div>


                    <div class="box">
                        <p class="cert_title">Project Management Professional（PMP）</p>
                        <a href="<?php bloginfo('url');?>/certification-03"><img src="<?php bloginfo('template_url') ?>/images/thumb_certification_03.JPG"></a>
                        <p class="comment">※ 有効期限：2023年8月</p>
                    </div>
                </div>
            </section>

            <section id="works">
                <div class="sec_title">works</div>
                <div class="contents">
                    <div class="work">
                        <div class="thumb_wrap">
                            <a href="<?php bloginfo('url');?>/works/04_LP_Coffee/index.html" class="thumb" target="_blank"><img src="<?php bloginfo('template_url') ?>/images/works/03_mosya_coding.png"></a>
                        </div>
                        <div class="description">
                            説明
                        </div>
                    </div>

                    <div class="work">
                        <div class="thumb_wrap">
                            <a href="<?php bloginfo('url');?>/works/03_GridLayout/index.html" class="thumb" target="_blank"><img src="<?php bloginfo('template_url') ?>/images/works/02_mosya_coding.png"></a>
                        </div>
                        <div class="description">
                            説明
                        </div>
                    </div>


                    <div class="work">
                        <div class="thumb_wrap">
                            <a href="<?php bloginfo('url');?>/works/02_BlogLike/index.html" class="thumb" target="_blank"><img src="<?php bloginfo('template_url') ?>/images/works/01_mosya_coding.png"></a>
                        </div>
                        <div class="description">
                            説明
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </main>

    <!-- フッター -->
    <?php get_footer(); ?>
