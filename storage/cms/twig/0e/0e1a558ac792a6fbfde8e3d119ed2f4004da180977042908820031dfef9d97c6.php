<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* E:\xampp7\htdocs\ocotober2019/themes/jtherczeg-corlate/partials/footer.htm */
class __TwigTemplate_a52040d1b2d84ed450b07841d9a159adcb69f950588defd359fabf46803b7ac7 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8\">
\t\t\t\t&copy;  ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "site_name", [], "any", false, false, false, 4), "html", null, true);
        echo ". All Rights Reserved. A <a href=\"http://shapebootstrap.net/\" title=\"Free Twitter Bootstrap WordPress Themes and HTML templates\" target=\"_blank\">ShapeBootstrap</a> Theme &#123;&#123; Powered by <a href=\"http://octobercms.com/\">OctoberCMS</a> &#125;&#125;
            </div>
            <div class=\"col-sm-4\">
                <ul class=\"pull-right\">
                    <li><a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a></li>
                    <li><a href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/about");
        echo "\">About Us</a></li>
                    <li><a href=\"#\">Faq</a></li>
                    <li><a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/contact");
        echo "\">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp7\\htdocs\\ocotober2019/themes/jtherczeg-corlate/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  53 => 9,  49 => 8,  40 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8\">
\t\t\t\t&copy;  {{ \"now\"|date(\"Y\") }} {{ this.theme.site_name }}. All Rights Reserved. A <a href=\"http://shapebootstrap.net/\" title=\"Free Twitter Bootstrap WordPress Themes and HTML templates\" target=\"_blank\">ShapeBootstrap</a> Theme &#123;&#123; Powered by <a href=\"http://octobercms.com/\">OctoberCMS</a> &#125;&#125;
            </div>
            <div class=\"col-sm-4\">
                <ul class=\"pull-right\">
                    <li><a href=\"{{ 'home'|page }}\">Home</a></li>
                    <li><a href=\"{{ 'samples/about'|page }}\">About Us</a></li>
                    <li><a href=\"#\">Faq</a></li>
                    <li><a href=\"{{ 'samples/contact'|page }}\">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>", "E:\\xampp7\\htdocs\\ocotober2019/themes/jtherczeg-corlate/partials/footer.htm", "");
    }
}
