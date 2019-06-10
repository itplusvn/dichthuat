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

/* E:\xampp7\htdocs\ocotober2019/themes/jtherczeg-corlate/partials/carousel.htm */
class __TwigTemplate_0198d57cb8700b72708fd1b40a9765b83a80871e6877d7dd8e6f4b0ac1fe3d0c extends \Twig\Template
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
        echo "<div class=\"carousel slide\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#main-slider\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"1\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\">

                <div class=\"item active\" style=\"background-image: url(";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider/bg1.jpg");
        echo ")\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class=\"animation animated-item-2\">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                                </div>
                            </div>

                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <div class=\"slider-img\">
                                    <img src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider/img1.png");
        echo "\" class=\"img-responsive\">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class=\"item\" style=\"background-image: url(";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider/bg2.jpg");
        echo ")\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class=\"animation animated-item-2\">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                                </div>
                            </div>

                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <div class=\"slider-img\">
                                    <img src=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider/img2.png");
        echo "\" class=\"img-responsive\">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class=\"item\" style=\"background-image: url(";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider/bg3.jpg");
        echo ")\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class=\"animation animated-item-2\">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                                </div>
                            </div>
                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <div class=\"slider-img\">
                                    <img src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider/img3.png");
        echo "\" class=\"img-responsive\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->";
    }

    public function getTemplateName()
    {
        return "E:\\xampp7\\htdocs\\ocotober2019/themes/jtherczeg-corlate/partials/carousel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 63,  99 => 51,  88 => 43,  72 => 30,  61 => 22,  45 => 9,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"carousel slide\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#main-slider\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"1\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\">

                <div class=\"item active\" style=\"background-image: url({{ 'assets/images/slider/bg1.jpg'|theme }})\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class=\"animation animated-item-2\">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                                </div>
                            </div>

                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <div class=\"slider-img\">
                                    <img src=\"{{ 'assets/images/slider/img1.png'|theme }}\" class=\"img-responsive\">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class=\"item\" style=\"background-image: url({{ 'assets/images/slider/bg2.jpg'|theme }})\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class=\"animation animated-item-2\">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                                </div>
                            </div>

                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <div class=\"slider-img\">
                                    <img src=\"{{ 'assets/images/slider/img2.png'|theme }}\" class=\"img-responsive\">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class=\"item\" style=\"background-image: url({{ 'assets/images/slider/bg3.jpg'|theme }})\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class=\"animation animated-item-2\">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                                </div>
                            </div>
                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <div class=\"slider-img\">
                                    <img src=\"{{ 'assets/images/slider/img3.png'|theme }}\" class=\"img-responsive\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->", "E:\\xampp7\\htdocs\\ocotober2019/themes/jtherczeg-corlate/partials/carousel.htm", "");
    }
}
