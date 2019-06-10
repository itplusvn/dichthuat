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

/* E:\xampp7\htdocs\ocotober2019/themes/jtherczeg-corlate/partials/bottom.htm */
class __TwigTemplate_ff814e8e007e3421803dc179469baa95d8282b21bed26c58acce70d6ec79831f extends \Twig\Template
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
        echo "<div class=\"container wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Company</h3>
                    <ul>
                        <li><a href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/about");
        echo "\">About us</a></li>
                        <li><a href=\"#\">We are hiring</a></li>
                        <li><a href=\"#\">Meet the team</a></li>
                        <li><a href=\"#\">Copyright</a></li>
                        <li><a href=\"#\">Terms of use</a></li>
                        <li><a href=\"#\">Privacy policy</a></li>
                        <li><a href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/contact");
        echo "\">Contact us</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Support</h3>
                    <ul>
                        <li><a href=\"#\">Faq</a></li>
                        <li><a href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/blog");
        echo "\">Blog</a></li>
                        <li><a href=\"#\">Forum</a></li>
                        <li><a href=\"#\">Documentation</a></li>
                        <li><a href=\"#\">Refund policy</a></li>
                        <li><a href=\"#\">Ticket system</a></li>
                        <li><a href=\"#\">Billing system</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Developers</h3>
                    <ul>
                        <li><a href=\"#\">Web Development</a></li>
                        <li><a href=\"#\">SEO Marketing</a></li>
                        <li><a href=\"#\">Theme</a></li>
                        <li><a href=\"#\">Development</a></li>
                        <li><a href=\"#\">Email Marketing</a></li>
                        <li><a href=\"#\">Plugin Development</a></li>
                        <li><a href=\"#\">Article Writing</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Our Partners</h3>
                    <ul>
\t\t\t\t\t\t<li><a href=\"#\">Adipisicing Elit</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Eiusmod</a></li>
                        <li><a href=\"#\">Tempor</a></li>
                        <li><a href=\"#\">Veniam</a></li>
                        <li><a href=\"#\">Exercitation</a></li>
                        <li><a href=\"#\">Ullamco</a></li>
                        <li><a href=\"#\">Laboris</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp7\\htdocs\\ocotober2019/themes/jtherczeg-corlate/partials/bottom.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 23,  52 => 13,  43 => 7,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Company</h3>
                    <ul>
                        <li><a href=\"{{ 'samples/about'|page }}\">About us</a></li>
                        <li><a href=\"#\">We are hiring</a></li>
                        <li><a href=\"#\">Meet the team</a></li>
                        <li><a href=\"#\">Copyright</a></li>
                        <li><a href=\"#\">Terms of use</a></li>
                        <li><a href=\"#\">Privacy policy</a></li>
                        <li><a href=\"{{ 'samples/contact'|page }}\">Contact us</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Support</h3>
                    <ul>
                        <li><a href=\"#\">Faq</a></li>
                        <li><a href=\"{{ 'blog/blog'|page }}\">Blog</a></li>
                        <li><a href=\"#\">Forum</a></li>
                        <li><a href=\"#\">Documentation</a></li>
                        <li><a href=\"#\">Refund policy</a></li>
                        <li><a href=\"#\">Ticket system</a></li>
                        <li><a href=\"#\">Billing system</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Developers</h3>
                    <ul>
                        <li><a href=\"#\">Web Development</a></li>
                        <li><a href=\"#\">SEO Marketing</a></li>
                        <li><a href=\"#\">Theme</a></li>
                        <li><a href=\"#\">Development</a></li>
                        <li><a href=\"#\">Email Marketing</a></li>
                        <li><a href=\"#\">Plugin Development</a></li>
                        <li><a href=\"#\">Article Writing</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Our Partners</h3>
                    <ul>
\t\t\t\t\t\t<li><a href=\"#\">Adipisicing Elit</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Eiusmod</a></li>
                        <li><a href=\"#\">Tempor</a></li>
                        <li><a href=\"#\">Veniam</a></li>
                        <li><a href=\"#\">Exercitation</a></li>
                        <li><a href=\"#\">Ullamco</a></li>
                        <li><a href=\"#\">Laboris</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->
        </div>
    </div>", "E:\\xampp7\\htdocs\\ocotober2019/themes/jtherczeg-corlate/partials/bottom.htm", "");
    }
}
