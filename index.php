
<?php get_header(); ?>

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

<?php get_footer(); ?>
