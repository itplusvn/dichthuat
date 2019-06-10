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

/* E:\xampp7\htdocs\ocotober2019/themes/jtherczeg-corlate/partials/nav.htm */
class __TwigTemplate_e7d7292ea2667d7efed078ee5d1a072030ebdb09eed753d487ea4d860a550f78 extends \Twig\Template
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
        // line 2
        $context["links"] = ["home" => [0 => "home", 1 => "Home"], "about" => [0 => "samples/about", 1 => "About Us"], "services" => [0 => "samples/services", 1 => "Services"], "portfolio" => [0 => "samples/portfolio", 1 => "Portfolio"], "pages" => ["name" => "Pages", "sublinks" => ["pricing" => [0 => "samples/pricing", 1 => "Pricing Table"], "error" => [0 => "error", 1 => "Error Page"], "404" => [0 => "404", 1 => "404 Page"], "shortcodes" => [0 => "samples/shortcodes", 1 => "Shortcodes"]]], "blog" => ["name" => "Blog", "sublinks" => ["blog" => [0 => "blog/blog", 1 => "Blog"], "blog-item" => [0 => "blog/blog-item", 1 => "Blog Item"]]], "contact" => [0 => "samples/contact", 1 => "Contact"]];
        // line 27
        echo "
";
        // line 48
        echo "
";
        // line 49
        $context["nav"] = $this;
        // line 50
        echo "
<nav class=\"navbar navbar-inverse\" role=\"banner\">
\t<div class=\"container\">
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"logo\"></a>
\t\t</div>
\t\t<div class=\"collapse navbar-collapse navbar-right\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t";
        // line 64
        echo $context["nav"]->macro_render_menu(($context["links"] ?? null));
        echo "
\t\t\t</ul>
\t\t</div>
\t</div>
</nav><!--/nav-->";
    }

    // line 28
    public function macro_render_menu($__links__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "links" => $__links__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 29
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["link"]) {
                // line 30
                echo "        <li class=\"";
                echo ((($context["code"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 30)) ? ("dropdown") : (""));
                echo "\">
            <a
                href=\"";
                // line 32
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 32)) ? ("#") : ($this->extensions['Cms\Twig\Extension']->pageFilter(((twig_get_attribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 32)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 32)) : ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["link"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null))))));
                echo "\"
                ";
                // line 33
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 33)) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 34
                echo "                class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 34)) ? ("dropdown-toggle") : (""));
                echo "\"
            >
                ";
                // line 36
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 36)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 36)) : ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["link"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null))), "html", null, true);
                echo "
                ";
                // line 37
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 37)) {
                    echo "<span class=\"caret\"></span>";
                }
                // line 38
                echo "            </a>
            ";
                // line 39
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 39)) {
                    // line 40
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->getTemplateName(), "render_menu", [0 => twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 42)], "method", false, false, false, 42), "html", null, true);
                    echo "
                </ul>
            ";
                }
                // line 45
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "E:\\xampp7\\htdocs\\ocotober2019/themes/jtherczeg-corlate/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 45,  131 => 42,  127 => 40,  125 => 39,  122 => 38,  118 => 37,  114 => 36,  108 => 34,  104 => 33,  100 => 32,  92 => 30,  87 => 29,  75 => 28,  66 => 64,  57 => 60,  45 => 50,  43 => 49,  40 => 48,  37 => 27,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Note: Only one levels of sublinks are supported by Bootstrap 3 #}
{% set
    links = {
\t    'home':      ['home', 'Home'],
\t\t'about':     ['samples/about', 'About Us'],
\t\t'services':  ['samples/services', 'Services'],
\t\t'portfolio': ['samples/portfolio', 'Portfolio'],
        'pages': {
            name: 'Pages',
            sublinks: {
                'pricing':\t  ['samples/pricing', 'Pricing Table'],
                'error':\t  ['error', 'Error Page'],
                '404':\t\t  ['404', '404 Page'],
                'shortcodes': ['samples/shortcodes', 'Shortcodes'],
            },
        },
        'blog': {
\t\t\tname: 'Blog',
\t\t\tsublinks: {
\t\t\t\t'blog':\t\t ['blog/blog', 'Blog'],
\t\t\t\t'blog-item': ['blog/blog-item', 'Blog Item'],
            },
        },
        'contact': ['samples/contact', 'Contact'],
    }
%}

{% macro render_menu(links) %}
    {% for code, link in links %}
        <li class=\"{{ code == currentPage ? 'active' }} {{ link.sublinks ? 'dropdown' }}\">
            <a
                href=\"{{ link.sublinks ? '#' : (link.page ?: link[0])|page }}\"
                {% if link.sublinks %}data-toggle=\"dropdown\"{% endif %}
                class=\"{{ link.sublinks ? 'dropdown-toggle' }}\"
            >
                {{ link.name ?: link[1] }}
                {% if link.sublinks %}<span class=\"caret\"></span>{% endif %}
            </a>
            {% if link.sublinks %}
                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    {{ _self.render_menu(link.sublinks) }}
                </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

{% import _self as nav %}

<nav class=\"navbar navbar-inverse\" role=\"banner\">
\t<div class=\"container\">
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"{{ 'home'|page }}\"><img src=\"{{ 'assets/images/logo.png'|theme }}\" alt=\"logo\"></a>
\t\t</div>
\t\t<div class=\"collapse navbar-collapse navbar-right\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t{{ nav.render_menu(links) }}
\t\t\t</ul>
\t\t</div>
\t</div>
</nav><!--/nav-->", "E:\\xampp7\\htdocs\\ocotober2019/themes/jtherczeg-corlate/partials/nav.htm", "");
    }
}
