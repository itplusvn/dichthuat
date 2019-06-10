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

/* E:\xampp7\htdocs\ocotober2019/themes/jtherczeg-corlate/partials/testimonials.htm */
class __TwigTemplate_f1dfda2bfa62aace3552031f837bcadf03c7f659f220e5ea17d1cec4a5de275d extends \Twig\Template
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
        echo "<div class=\"col-xs-12 col-sm-4 wow fadeInDown\">
                    <div class=\"testimonial\">
                        <h2>Testimonials</h2>
                         <div class=\"media testimonial-inner\">
                            <div class=\"pull-left\">
                                <img class=\"img-responsive img-circle\" src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonials1.png");
        echo "\">
                            </div>
                            <div class=\"media-body\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                         <div class=\"media testimonial-inner\">
                            <div class=\"pull-left\">
                                <img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonials1.png");
        echo "\" class=\"img-responsive img-circle\">
                            </div>
                            <div class=\"media-body\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                    </div>
                </div>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp7\\htdocs\\ocotober2019/themes/jtherczeg-corlate/partials/testimonials.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-xs-12 col-sm-4 wow fadeInDown\">
                    <div class=\"testimonial\">
                        <h2>Testimonials</h2>
                         <div class=\"media testimonial-inner\">
                            <div class=\"pull-left\">
                                <img class=\"img-responsive img-circle\" src=\"{{ 'assets/images/testimonials1.png'|theme }}\">
                            </div>
                            <div class=\"media-body\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                         <div class=\"media testimonial-inner\">
                            <div class=\"pull-left\">
                                <img src=\"{{ 'assets/images/testimonials1.png'|theme }}\" class=\"img-responsive img-circle\">
                            </div>
                            <div class=\"media-body\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                    </div>
                </div>", "E:\\xampp7\\htdocs\\ocotober2019/themes/jtherczeg-corlate/partials/testimonials.htm", "");
    }
}
