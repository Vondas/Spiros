<?php

/* index.html */
class __TwigTemplate_d6088e5f5f1ed78964e3a9b8d7d61057e476eb9259ff9250b382402b6b11a297 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"css/index.css\">
    <title>Accueil</title>
</head>
<body>
    <main class=\"connexion_popular\">
        <div class=\"connexion\">
            <div class=\"connexion_create\">
                <form class=\"connexion_form\" action=\"login\">
                    <h2>Créer un compte</h2>
                    <input type=\"text\" placeholder=\"adresse mail\" class=\"mail\" id=\"login\">
                    <input type=\"text\" placeholder=\"mot de passe\" class=\"input\" id=\"mdp\">
                    <input type=\"text\" placeholder=\"confimer votre mot de passe\" class=\"input\" id=\"mdpconfirmation\">
                    <button class=\"connexion_create__créer\">Connexion</button>
                </form>
            </div>
            <div class=\"connexion_login\">
                <form class=\"connexion_login_form\" action=\"\">
                        <h2>Se connecter</h2>
                        <input type=\"text\" placeholder=\"adresse mail\" class=\"mail\" id=\"login\">
                        <input type=\"text\" placeholder=\"mot de passe\" class=\"input\" id=\"mdp\">
                        <button class=\"connexion_login_connexion\">Créer</button>
                </form>
            </div>
        </div>
        <div class=\"popular\">
            <div class=\"popular_logo\">
                <img src=\"assets/logo.svg\"
                     alt=\"logo\"
                     height=\"100px\"
                     width=\"150px\"> 
            </div>
            
            <div class=\"popular_text\">
                <h3>Popular Uses Of The Internet</h3>
                <p>Okay, you’ve decided you want to make money with Affiliate Marketing.
                    So, you join some affiliate programs and start submitting free ads to newsletters and free advertising classifieds sites.
                    You’re going to make BIG money now — right?</p>

                    <p>Nope! Sorry! Just sending out a few ads is not going to do it.
                    Not if you want to be a real success. You must first </p>
            </div>
            <div class=\"popular_fluid\">
                    <img src=\"assets/fluid.svg\"
                    alt=\"\">
            </div>
        </div>
    </main>
    
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "/Applications/MAMP/htdocs/Spiros/Views/index.html");
    }
}
