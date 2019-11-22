<div class="single-game">
<?php while( have_posts() ) : the_post();  ?>
    <?php 
        $header = get_field('header'); 
        $body = get_field('body');
        $description = $body['description'];
        $screenshots = $body['screenshots'];
        $release = $body['release_date'];
        $systems = $body['systems'];
        $videos = $body['videos'];

        date_default_timezone_set('America/Edmonton');
        if($release > time() ){
            $class = 'upcoming';
            $upcoming = true;
        } elseif($release < time() ){
            $class = 'played';
            $upcoming = false;
        }

    ?>
        <header class="<?php echo $class ?>">
            <img src="<?php echo $header['cover']; ?>" alt="">
            <h2><?php echo $header['game_title']; ?></h2>
            <?php if($upcoming): ?>
            <div>
                <h3>Upcoming Release</h3>
                <p><?php echo date("F j, Y", $release); ?></p>
            </div>
            <?php endif ?>
            
            <!-- SYSTEMS -->
            <section class="systems">
                <h3>Available Systems</h3>
                <?php if($systems): ?>
                <ul>
                    <?php foreach($systems as $system) :?>
                    <li><?php echo $system['system']; if(count($systems) == 1) { echo " (Console Exclusive)";} ?></li>
                    <?php endforeach ?>
                </ul>
                <?php endif ?>
            </section>
        </header>
        <main>
            <!-- DESCRIPTION -->
            <?php echo $description; ?>

            <!-- SCREENSHOTS -->
            <?php if($screenshots): ?>
            <section class="screenshots">
                <h3>Screenshots</h3>
                <?php foreach($screenshots as $screenshot) :?>
                <img src="<?php echo $screenshot['screenshot'] ?>" alt="">
                <?php endforeach ?>
            </section>
            <?php endif ?>

            <!-- VIDEOS -->
            <?php if($videos): ?>
            <section class="video">
                <h3>Videos</h3>
                <?php foreach($videos as $video): ?>
                <div style="--aspect-ratio: 16/9;">
                    <iframe 
                        width="1600"
                        height="900"
                        src="<?php echo $video['url']; ?>" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
                <?php endforeach ?>
            </section>
            <?php endif ?>

        </main>
    </div>
<?php endwhile ?>