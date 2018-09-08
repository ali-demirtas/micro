<!-- Section -->
<section class="content">
                <article class="page">
                        <header>
                                <a href="<?php echo $page->permalink() ?>">
                                        <h2><?php echo $page->title() ?></h2>
                                </a>

                                <?php if($page->coverImage()): ?>
                                <img src="<?php echo $page->coverImage() ?>" alt="<?php echo $page->slug() ?>">
                                <?php endif ?>
                        </header>
                        <?php echo $page->content() ?>
                        <footer>
                                <div class="date"><?php echo $page->date() ?></div>
                        </footer>
                </article>
</section>