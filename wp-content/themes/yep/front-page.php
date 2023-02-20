<?php  
    $menuItems = getNavigationMenu();   
    $data = getHomepageData();  
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <?php wp_head(); ?>  
        <meta content="<?php echo get_bloginfo( 'name' );?>" name="title">  
        <meta content="<?php echo get_bloginfo( 'description' );?>" name="description">  
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
        <link rel="preconnect" href="https://fonts.googleapis.com">  
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />  
        <title><?php echo get_bloginfo( 'name' );?></title>
    </head>
    <body>
        <!-- <?php 
        echo "<pre>";
        var_dump($data);
        echo "</pre>"; 
        ?> -->
        <header>
                <h1 class="sr-only">
                    Ceci est le titre de ma page.
                </h1>
                <figure>
                    <img src="https://bit.ly/3lGEcNA" alt="licorne">
                </figure>
                <nav>
                    <ul>
                        <?php foreach($menuItems as $item){?>
                        <li>
                            <a href="<?= $item->url ?>">
                                <?= $item->title ?> 
                            </a>
                        </li>
                        <?php }?>
                    </ul>
                </nav>
        </header>
        <main>
                <section>
                    <h2>
                        Yepfolio
                    </h2>
                    <h3>
                        Développement web & mobile
                    </h3>
                </section>
                <section id="about">  
                    <h3><?= $data["a-propos"]["titre"] ?></h3>  
                    <p>  
                        <?= $data["a-propos"]["contenu"] ?>  
                    </p>  
                </section>
                <section>
                    <h3>
                        Mes derniers projets
                    </h3>
                    <section>
                        <h4 class="sr-only">
                            Les articles
                        </h4>
                        <?php foreach($data["projets"] as $projet){ ?>
                        <article>
                            <p>
                            <?= $projet["category"] ?>
                            </p>
                            <footer>
                                <p>
                                <?php
                                getHomepageData()->["post_title"];
                                // var_dump($title);
                                ?>
                                </p>
                            </footer>
                        </article>
                        <?php } ?>
                    </section>
                </section>
        </main>
        <footer>
                <h2>
                    Me contacter
                </h2>
                <form action="">
                    <fieldset>
                        <label for="">Prénom + Nom *</label>
                        <input type="text">
                    </fieldset>
                    <fieldset>
                        <label for="">Email *</label>
                        <input type="email">
                    </fieldset>
                    <fieldset>
                        <label for="">Message</label>
                        <textarea name="message" id="message" cols="20" rows="10"></textarea>
                    </fieldset>
                    <button type="submit">Envoyer</button>
                </form>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>