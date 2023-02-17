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
        <header>
                <h1 class="sr-only">
                    Ceci est le titre de ma page.
                </h1>
                <figure>
                        <img src="https://bit.ly/3lGEcNA" alt="licorne">
                    </figure>
                <nav>
                    <ul>
                        <li><a>Accueil</a></li>
                        <li><a>A propos</a></li>
                        <li><a>Mes projets</a></li>
                        <li><a>Me contacter</a></li>
                    </ul>
                </nav>
        </header>
        <main>
            <section>
                <h2>
                    Yepfolio
                </h2>
                <section>
                    <h3>
                        Développement web & mobile
                    </h3>
                </section>
                <section>
                    <h3>
                        Yepfolio en quelques mots
                    </h3>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
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
                        <article>
                            <p>
                                Application Santé
                            </p>
                            <footer>
                                <p>
                                    Pharmacie de Maurepas
                                </p>
                            </footer>
                        </article>
                        <article>
                            <p>
                                Site E-Commerce 
                            </p>
                            <footer>
                                <p>
                                    Libraire l'écume des jours
                                </p>
                            </footer>
                        </article>
                        <article>
                            <p>
                                Site vitrine
                            </p>
                            <footer>
                                <p>
                                    Boulanger Galtier
                                </p>
                            </footer>
                        </article>
                        <article>
                            <p>
                                Site Institutionnel
                            </p>
                            <footer>
                                <p>
                                    Mairie de Ploutruc
                                </p>
                            </footer>
                        </article>
                        <article>
                            <p>
                                Site promotionnel
                            </p>
                            <footer>
                                <p>
                                    Festival des choses
                                </p>
                            </footer>
                        </article>
                    </section>
                </section>
            </section>
        </main>
        <footer>
            <section>
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
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    </fieldset>
                    <button type="submit">Envoyer</button>
                </form>
            </section>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>