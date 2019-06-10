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

/* E:\xampp7\htdocs\ocotober2019/themes/jtherczeg-corlate/partials/services.htm */
class __TwigTemplate_7d678f5617a4a401ecff3cd29d966dea5e65f777153fc2ea66f323f12909152e extends \Twig\Template
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
            <div class=\"center wow fadeInDown\">
                <h2>Our Service</h2>
                <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"row\">

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"media services-wrap wow fadeInDown\">
                        <div class=\"pull-left\">
                            <img class=\"img-responsive\" src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/services1.png");
        echo "\">
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"media services-wrap wow fadeInDown\">
                        <div class=\"pull-left\">
                            <img class=\"img-responsive\" src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/services2.png");
        echo "\">
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"media services-wrap wow fadeInDown\">
                        <div class=\"pull-left\">
                            <img class=\"img-responsive\" src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/services3.png");
        echo "\">
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>  

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"media services-wrap wow fadeInDown\">
                        <div class=\"pull-left\">
                            <img class=\"img-responsive\" src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/services4.png");
        echo "\">
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"media services-wrap wow fadeInDown\">
                        <div class=\"pull-left\">
                            <img class=\"img-responsive\" src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/services5.png");
        echo "\">
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"media services-wrap wow fadeInDown\">
                        <div class=\"pull-left\">
                            <img class=\"img-responsive\" src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/services6.png");
        echo "\">
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>                                                
            </div><!--/.row-->
        </div><!--/.container-->";
    }

    public function getTemplateName()
    {
        return "E:\\xampp7\\htdocs\\ocotober2019/themes/jtherczeg-corlate/partials/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 72,  108 => 60,  93 => 48,  78 => 36,  63 => 24,  48 => 12,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
            <div class=\"center wow fadeInDown\">
                <h2>Our Service</h2>
                <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"row\">

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"media services-wrap wow fadeInDown\">
                        <div class=\"pull-left\">
                            <img class=\"img-responsive\" src=\"{{ 'assets/images/services/services1.png'|theme }}\">
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"media services-wrap wow fadeInDown\">
                        <div class=\"pull-left\">
                            <img class=\"img-responsive\" src=\"{{ 'assets/images/services/services2.png'|theme }}\">
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"media services-wrap wow fadeInDown\">
                        <div class=\"pull-left\">
                            <img class=\"img-responsive\" src=\"{{ 'assets/images/services/services3.png'|theme }}\">
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>  

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"media services-wrap wow fadeInDown\">
                        <div class=\"pull-left\">
                            <img class=\"img-responsive\" src=\"{{ 'assets/images/services/services4.png'|theme }}\">
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"media services-wrap wow fadeInDown\">
                        <div class=\"pull-left\">
                            <img class=\"img-responsive\" src=\"{{ 'assets/images/services/services5.png'|theme }}\">
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"media services-wrap wow fadeInDown\">
                        <div class=\"pull-left\">
                            <img class=\"img-responsive\" src=\"{{ 'assets/images/services/services6.png'|theme }}\">
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>                                                
            </div><!--/.row-->
        </div><!--/.container-->", "E:\\xampp7\\htdocs\\ocotober2019/themes/jtherczeg-corlate/partials/services.htm", "");
    }
}
