<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header>
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        <p style="color: white;"><?php bloginfo('description'); ?></p>
    </header>

    <div class="content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <h2><a href="<?php the_permalink(); ?>" style="color: #E0218A;"><?php the_title(); ?></a></h2>
                <div><?php the_content(); ?></div>
                <hr style="border: 1px solid #FFC0CB; margin: 20px 0;">
            </article>
        <?php endwhile; else : ?>
            <p>Куклы или статьи пока не добавлены.</p>
        <?php endif; ?>
    </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Мир Барби. Все права защищены.</p>
        <?php wp_footer(); ?>
    </footer>

</body>
</html>