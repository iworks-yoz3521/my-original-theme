
<?php get_header(); ?>

<main class="single-content">

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <h2><?php the_title(); ?></h2>

            <p class="post-date">
                <?php echo get_the_date('Y年m月d日'); ?>
            </p>
            
            <?php if (has_post_thumbnail()) : ?>

                <div class="single-thumbnail">
                    <?php the_post_thumbnail('large'); ?>
                </div>

            <?php endif; ?>

            <?php the_content(); ?>

        <?php endwhile; ?>

    <?php endif; ?>

    <p>
        <a href="<?php echo esc_url(home_url('/')); ?>">
            ← 投稿一覧に戻る
        </a>
    </p>

</main>

<?php get_footer(); ?>
