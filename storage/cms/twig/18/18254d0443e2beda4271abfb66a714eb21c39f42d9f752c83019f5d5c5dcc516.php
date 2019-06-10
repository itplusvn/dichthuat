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

/* E:\xampp7\htdocs\ocotober2019/themes/jtherczeg-corlate/pages/home.htm */
class __TwigTemplate_f964878ebba1d4ccad2eb41db4e66c89ad605cd6fdc51aa4c7f37928a76fb259 extends \Twig\Template
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
        echo "<section id=\"main-slider\" class=\"no-margin\">
\t";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("carousel"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "    <a class=\"prev hidden-xs\" href=\"#main-slider\" data-slide=\"prev\">
        <i class=\"fa fa-chevron-left\"></i>
    </a>
    <a class=\"next hidden-xs\" href=\"#main-slider\" data-slide=\"next\">
        <i class=\"fa fa-chevron-right\"></i>
    </a>
</section>

<section id=\"feature\">
\t";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("features"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "</section>

<section id=\"recent-works\">
\t";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("works"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "</section>

<section id=\"services\" class=\"service-item\">
\t";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "</section>

<section id=\"middle\">
    <div class=\"container\">
        <div class=\"row\">
\t\t\t";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("skills"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "\t\t\t";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("accordion"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#middle-->

<section id=\"content\">
    <div class=\"container\">
        <div class=\"row\">
\t\t\t";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("tabs"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "\t\t\t";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("testimonials"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "        </div><!--/.row-->
    <div><!--/.container-->
</section><!--/#content-->

<section id=\"partner\">
\t";
        // line 42
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("partners"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 43
        echo "</section><!--/#partner-->

<section id=\"conatcat-info\">
\t";
        // line 46
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("contact-info.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 47
        echo "</section><!--/#conatcat-info-->";
    }

    public function getTemplateName()
    {
        return "E:\\xampp7\\htdocs\\ocotober2019/themes/jtherczeg-corlate/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 47,  125 => 46,  120 => 43,  116 => 42,  109 => 37,  104 => 36,  100 => 35,  91 => 28,  86 => 27,  82 => 26,  75 => 21,  71 => 20,  66 => 17,  62 => 16,  57 => 13,  53 => 12,  42 => 3,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"main-slider\" class=\"no-margin\">
\t{% partial \"carousel\" %}
    <a class=\"prev hidden-xs\" href=\"#main-slider\" data-slide=\"prev\">
        <i class=\"fa fa-chevron-left\"></i>
    </a>
    <a class=\"next hidden-xs\" href=\"#main-slider\" data-slide=\"next\">
        <i class=\"fa fa-chevron-right\"></i>
    </a>
</section>

<section id=\"feature\">
\t{% partial \"features\" %}
</section>

<section id=\"recent-works\">
\t{% partial \"works\" %}
</section>

<section id=\"services\" class=\"service-item\">
\t{% partial \"services\" %}
</section>

<section id=\"middle\">
    <div class=\"container\">
        <div class=\"row\">
\t\t\t{% partial \"skills\" %}
\t\t\t{% partial \"accordion\" %}
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#middle-->

<section id=\"content\">
    <div class=\"container\">
        <div class=\"row\">
\t\t\t{% partial \"tabs\" %}
\t\t\t{% partial \"testimonials\" %}
        </div><!--/.row-->
    <div><!--/.container-->
</section><!--/#content-->

<section id=\"partner\">
\t{% partial \"partners\" %}
</section><!--/#partner-->

<section id=\"conatcat-info\">
\t{% content \"contact-info.htm\" %}
</section><!--/#conatcat-info-->", "E:\\xampp7\\htdocs\\ocotober2019/themes/jtherczeg-corlate/pages/home.htm", "");
    }
}
