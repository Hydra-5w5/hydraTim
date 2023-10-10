<!-- entête du thème -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>TIM Maisonneuve</title>
    <?php wp_head(); ?>
</head>

<body class="site custom-background">
    <header class="site__entete">
        <div class="entete__nav">
            <div class="menu__logo">
                <?php the_custom_logo(); ?>
            </div>
            <div class="menu__nav">
                <input id="cc__bouton__burger" type="checkbox" />
                <label class='bouton__burger__conteneur' for="cc__bouton__burger">
                    <div></div>
                    <div></div>
                    <div></div>
                </label>
                <?php wp_nav_menu(array(
                                    "menu" => "entete",
                                    "container" => "nav",
                                    "container_class" => "menu__entete", //pour changer le nom de la class
                )); ?>
            </div>
        </div>
    </header>

    
