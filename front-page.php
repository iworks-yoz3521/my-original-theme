<?php get_header(); ?>

<section class="hero">

    <p class="hero-label">WELCOME TO MY PORTFOLIO</p>

    <h2>My Portfolio</h2>

    <p class="hero-subtitle">
        Web制作を学び、形にする。
    </p>

    <p class="hero-description">
        HTML・CSS・PHP・WordPressを使った<br>
        Web制作の学習記録と制作実績をご紹介します。
    </p>

    <a class="hero-button"
       href="<?php echo esc_url(home_url('/自己紹介/')); ?>">
        自己紹介を見る →
    </a>

</section>

<!-- 制作実績セクション -->
<section class="works">

    <h2 class="section-title">Works</h2>

    <p class="works-subtitle">制作実績</p>

    <div class="works-grid">

        <!-- 制作実績1 -->
        <article class="work-card">

        <div class="work-image">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/portfolio.png"
                alt="ポートフォリオサイトのトップページ">
        </div>

            <h3>ポートフォリオサイト</h3>

            <p>
                WordPressのオリジナルテーマを使って制作した
                ポートフォリオサイトです。
            </p>

            <p class="work-skills">
                HTML / CSS / PHP / WordPress
            </p>

        </article>

        <!-- 制作実績2 -->
        <article class="work-card">

            <div class="work-image">
                Coming Soon
            </div>

            <h3>次の制作実績</h3>

            <p>
                今後、新しい制作実績を追加していきます。
            </p>

        </article>

    </div>

</section>

<!-- スキル紹介セクション -->
<section class="skills">

    <h2 class="section-title">Skills</h2>

    <p class="skills-subtitle">
        使用技術・学習中の技術
    </p>

    <div class="skills-grid">

        <!-- HTML -->
        <article class="skill-card">

          <img class="skill-icon"
              src="<?php echo esc_url(get_template_directory_uri()); ?>/images/html.svg"
              alt="">

          <h3>HTML</h3>

              <p>
                  Webページの構造を作成するための
                  マークアップ言語です。
              </p>

        </article>

        <!-- CSS -->
        <article class="skill-card">

          <img class="skill-icon"
              src="<?php echo esc_url(get_template_directory_uri()); ?>/images/css.svg"
              alt="">

          <h3>CSS</h3>

              <p>
                  Webサイトのデザインや
                  レスポンシブ対応に使用します。
              </p>

        </article>

        <!-- PHP -->
        <article class="skill-card">

          <img class="skill-icon"
              src="<?php echo esc_url(get_template_directory_uri()); ?>/images/php.svg"
              alt="">

          <h3>PHP</h3>

              <p>
                  動的なWebページの作成や
                  WordPressのテーマ制作に使用します。
              </p>

        </article>

        <!-- WordPress -->
        <article class="skill-card">

          <img class="skill-icon"
              src="<?php echo esc_url(get_template_directory_uri()); ?>/images/wordpress.svg"
              alt="">

          <h3>WordPress</h3>

          <p>
              オリジナルテーマを使った
              Webサイト制作を学習しています。
          </p>

        </article>

    </div>

</section>

<!-- 自己紹介セクション -->
<section class="about">

    <h2 class="section-title">About</h2>

    <p class="about-subtitle">自己紹介</p>

    <div class="about-content">

        <!-- プロフィール画像 -->
        <div class="about-image">
            <img
                src="<?php echo esc_url(get_template_directory_uri() . '/images/profile.png'); ?>"
                alt="プロフィール画像">
        </div>

        <!-- 自己紹介文 -->
        <div class="about-text">

            <h3>はじめまして。</h3>

            <p>
                現在、Web制作を学習しています。
            </p>

            <p>
                HTML・CSS・PHP・WordPressを使い、
                オリジナルのWebサイトを制作しています。
            </p>

            <p>
                学んだ技術を活かし、
                見やすく使いやすいWebサイトを
                制作できるように取り組んでいます。
            </p>

            <a class="about-button"
               href="<?php echo esc_url(home_url('/自己紹介/')); ?>">
                詳しい自己紹介を見る →
            </a>

        </div>

    </div>

</section>

<!-- お問い合わせセクション -->
<section class="contact">

    <h2 class="section-title">Contact</h2>

    <p class="contact-subtitle">
        お問い合わせ
    </p>

    <div class="contact-content">

        <h3>Web制作に関するお問い合わせ</h3>

        <p>
            ご質問やご相談などがございましたら、
            お気軽にお問い合わせください。
        </p>

        <a href="<?php echo esc_url(home_url('/contact/')); ?>"
           class="contact-button">
            お問い合わせはこちら →
        </a>

    </div>

</section>

<main class="post-list">

    <h2 class="section-title">投稿一覧</h2>

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <article class="post-card">

                <?php if (has_post_thumbnail()) : ?>

                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>

                <?php endif; ?>

                <h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>

                <p class="post-date">
                    <?php echo get_the_date('Y年m月d日'); ?>
                </p>

                <?php the_excerpt(); ?>

                <a class="read-more" href="<?php the_permalink(); ?>">
                    続きを読む →
                </a>

            </article>

        <?php endwhile; ?>

    <?php endif; ?>

</main>

<!-- お問い合わせセクション -->
<section class="contact-section">
    <div class="contact-inner">

        <p class="contact-subtitle">CONTACT</p>

        <h2>お問い合わせ</h2>

        <p class="contact-description">
            Web制作に関するご質問・ご相談など、<br>
            お気軽にお問い合わせください。
        </p>

        <a class="contact-button" href="<?php echo esc_url(home_url('/contact/')); ?>">
            お問い合わせはこちら →
        </a>

    </div>
</section>

<?php get_footer(); ?>