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

/* E:\xampp7\htdocs\ocotober2019/themes/jtherczeg-corlate/partials/top.htm */
class __TwigTemplate_aaf915236246b06084b16e77858dbbce22db770eedc38e5db11ea44c86aa28df extends \Twig\Template
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
        echo "<div class=\"top-bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-xs-4\">
                        <div class=\"top-number\"><p><i class=\"fa fa-phone-square\"></i>  +0123 456 70 90</p></div>
                    </div>
                    <div class=\"col-sm-6 col-xs-8\">
                       <div class=\"social\">
                            <ul class=\"social-share\">
                                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li> 
                                <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-skype\"></i></a></li>
                            </ul>
                            <div class=\"search\">
                                <form role=\"form\">
                                    <input type=\"text\" class=\"search-form\" autocomplete=\"off\" placeholder=\"Search\">
                                    <i class=\"fa fa-search\"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
\t</div><!--/.top-bar-->";
    }

    public function getTemplateName()
    {
        return "E:\\xampp7\\htdocs\\ocotober2019/themes/jtherczeg-corlate/partials/top.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"top-bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-xs-4\">
                        <div class=\"top-number\"><p><i class=\"fa fa-phone-square\"></i>  +0123 456 70 90</p></div>
                    </div>
                    <div class=\"col-sm-6 col-xs-8\">
                       <div class=\"social\">
                            <ul class=\"social-share\">
                                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li> 
                                <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-skype\"></i></a></li>
                            </ul>
                            <div class=\"search\">
                                <form role=\"form\">
                                    <input type=\"text\" class=\"search-form\" autocomplete=\"off\" placeholder=\"Search\">
                                    <i class=\"fa fa-search\"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
\t</div><!--/.top-bar-->", "E:\\xampp7\\htdocs\\ocotober2019/themes/jtherczeg-corlate/partials/top.htm", "");
    }
}
