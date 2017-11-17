<?php

/* C:\xampp\htdocs\hadva/themes/demo/layouts/default.htm */
class __TwigTemplate_2b44baf5ca23e4701325b7ba9e25ddb73c743342c79c54109e41f6833b54f33c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>H2 | ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" href=\"";
        // line 11
        echo $this->env->getExtension('System\Twig\Extension')->appFilter("favicon.ico");
        echo "\" type=\"image/ico\" />
        <link href=\"https://fonts.googleapis.com/css?family=Hind|Open+Sans:700\" rel=\"stylesheet\">
  \t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\"
        type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/assets/lightbox/css/lightbox.min.css");
        echo "\">
  \t\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/styles.css");
        echo "\" type=\"text/css\">
        ";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 18
        echo "    </head>
    <body data-title=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 28
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 29
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
        integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\"
        integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\"
        crossorigin=\"anonymous\"></script>
\t\t\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\"
\t\t\t\t        integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\"
\t\t\t\t        crossorigin=\"anonymous\"></script>
\t\t\t\t<script src=\"";
        // line 45
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/assets/particles.js");
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 46
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/particles-main.js");
        echo "\"></script>
\t\t\t\t<script defer=\"\"
\t\t\t\t        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyA4JjA9DubzNPvXh4-okPW0TTmUAwN9ZUk&amp;\"></script>
\t\t\t\t<script src=\"";
        // line 49
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/assets/lightbox/js/lightbox.min.js");
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 50
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/main.js");
        echo "\"></script>
        ";
        // line 51
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 52
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 53
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hadva/themes/demo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 53,  128 => 52,  121 => 51,  117 => 50,  113 => 49,  107 => 46,  103 => 45,  90 => 34,  86 => 33,  80 => 29,  78 => 28,  72 => 24,  68 => 23,  61 => 19,  58 => 18,  55 => 17,  51 => 16,  47 => 15,  40 => 11,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>H2 | {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" href=\"{{ 'favicon.ico'|app }}\" type=\"image/ico\" />
        <link href=\"https://fonts.googleapis.com/css?family=Hind|Open+Sans:700\" rel=\"stylesheet\">
  \t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\"
        type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/assets/lightbox/css/lightbox.min.css'|theme }}\">
  \t\t\t<link rel=\"stylesheet\" href=\"{{ 'assets/css/styles.css'|theme }}\" type=\"text/css\">
        {% styles %}
    </head>
    <body data-title=\"{{ this.page.meta_title }}\">

        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'site/header' %}
        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial 'site/footer' %}
        </footer>

        <!-- Scripts -->
        <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
        integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\"
        integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\"
        crossorigin=\"anonymous\"></script>
\t\t\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\"
\t\t\t\t        integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\"
\t\t\t\t        crossorigin=\"anonymous\"></script>
\t\t\t\t<script src=\"{{ 'assets/assets/particles.js'|theme }}\"></script>
\t\t\t\t<script src=\"{{ 'assets/js/particles-main.js'|theme }}\"></script>
\t\t\t\t<script defer=\"\"
\t\t\t\t        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyA4JjA9DubzNPvXh4-okPW0TTmUAwN9ZUk&amp;\"></script>
\t\t\t\t<script src=\"{{ 'assets/assets/lightbox/js/lightbox.min.js'|theme }}\"></script>
\t\t\t\t<script src=\"{{ 'assets/js/main.js'|theme }}\"></script>
        {% framework extras %}
        {% scripts %}
    </body>
</html>", "C:\\xampp\\htdocs\\hadva/themes/demo/layouts/default.htm", "");
    }
}
