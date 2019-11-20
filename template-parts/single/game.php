<div class="single-article">
<?php while( have_posts() ) : the_post();  ?>
    <?php 
        $header = get_field('header'); 
        $body = get_field('body');
        $description = $body['description'];
        $screenshots = $body['screenshots'];
        $systems = $body['systems'];
        $videos = $body['videos']
    ?>
        <header>
            <h2><?php echo $header['game_title']; ?></h2>
            <img src="<?php echo $header['cover']; ?>" alt="">
        </header>
        <main>
            <?php echo $description; ?>

            <?php if($screenshots): ?>
            <section class="screenshots">
                <h3>Screenshots</h3>
                <?php foreach($screenshots as $screenshot) :?>
                <img src="<?php echo $screenshot['screenshot'] ?>" alt="">
                <?php endforeach ?>
            </section>
            <?php endif ?>

            <section class="systems">
                <h3>Available Systems</h3>
                <?php foreach($systems as $system) :?>
                <p><?php echo $system['system']; ?></p>
                <?php endforeach ?>
            </section>

            <section class="video">
                <?php foreach($videos as $video): ?>
                <iframe 
                    width="560" 
                    height="315" 
                    src="<?php echo $video['url']; ?>" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
                <?php endforeach ?>
            </section>
        </main>
    </div>
<?php endwhile ?>