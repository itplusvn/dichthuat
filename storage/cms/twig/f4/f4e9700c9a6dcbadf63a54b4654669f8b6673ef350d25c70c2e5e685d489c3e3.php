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

/* E:\xampp7\htdocs\ocotober2019/themes/jtherczeg-corlate/pages/samples/portfolio.htm */
class __TwigTemplate_8b3d4e5a2fcb8036b0887be6bd8484c6ad75e142608ee149db54843fa32de2bc extends \Twig\Template
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
        echo "<section id=\"portfolio\">
        <div class=\"container\">
            <div class=\"center\">
               <h2>Portfolio</h2>
               <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
        

            <ul class=\"portfolio-filter text-center\">
                <li><a class=\"btn btn-default active\" href=\"#\" data-filter=\"*\">All Works</a></li>
                <li><a class=\"btn btn-default\" href=\"#\" data-filter=\".bootstrap\">Creative</a></li>
                <li><a class=\"btn btn-default\" href=\"#\" data-filter=\".html\">Photography</a></li>
                <li><a class=\"btn btn-default\" href=\"#\" data-filter=\".wordpress\">Web Development</a></li>
            </ul><!--/#portfolio-filter-->

            <div class=\"row\">
                <div class=\"portfolio-items\">
                    <div class=\"portfolio-item apps col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/recent/item1.png");
        echo "\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full/item1.png");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class=\"portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/recent/item2.png");
        echo "\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full/item2.png");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class=\"portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/recent/item3.png");
        echo "\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full/item3.png");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>        
                    </div><!--/.portfolio-item-->

                    <div class=\"portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/recent/item4.png");
        echo "\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full/item4.png");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>           
                    </div><!--/.portfolio-item-->
          
                    <div class=\"portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/recent/item5.png");
        echo "\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full/item5.png");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>      
                    </div><!--/.portfolio-item-->

                    <div class=\"portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/recent/item6.png");
        echo "\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"";
        // line 90
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full/item6.png");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    <div class=\"portfolio-item wordpress html col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"";
        // line 98
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/recent/item7.png");
        echo "\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"";
        // line 103
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full/item7.png");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class=\"portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"";
        // line 111
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/recent/item8.png");
        echo "\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"";
        // line 116
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full/item8.png");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->";
    }

    public function getTemplateName()
    {
        return "E:\\xampp7\\htdocs\\ocotober2019/themes/jtherczeg-corlate/pages/samples/portfolio.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 116,  189 => 111,  178 => 103,  170 => 98,  159 => 90,  151 => 85,  140 => 77,  132 => 72,  121 => 64,  113 => 59,  102 => 51,  94 => 46,  83 => 38,  75 => 33,  64 => 25,  56 => 20,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"portfolio\">
        <div class=\"container\">
            <div class=\"center\">
               <h2>Portfolio</h2>
               <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
        

            <ul class=\"portfolio-filter text-center\">
                <li><a class=\"btn btn-default active\" href=\"#\" data-filter=\"*\">All Works</a></li>
                <li><a class=\"btn btn-default\" href=\"#\" data-filter=\".bootstrap\">Creative</a></li>
                <li><a class=\"btn btn-default\" href=\"#\" data-filter=\".html\">Photography</a></li>
                <li><a class=\"btn btn-default\" href=\"#\" data-filter=\".wordpress\">Web Development</a></li>
            </ul><!--/#portfolio-filter-->

            <div class=\"row\">
                <div class=\"portfolio-items\">
                    <div class=\"portfolio-item apps col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/recent/item1.png'|theme }}\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"{{ 'assets/images/portfolio/full/item1.png'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class=\"portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/recent/item2.png'|theme }}\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"{{ 'assets/images/portfolio/full/item2.png'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class=\"portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/recent/item3.png'|theme }}\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"{{ 'assets/images/portfolio/full/item3.png'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>        
                    </div><!--/.portfolio-item-->

                    <div class=\"portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/recent/item4.png'|theme }}\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"{{ 'assets/images/portfolio/full/item4.png'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>           
                    </div><!--/.portfolio-item-->
          
                    <div class=\"portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/recent/item5.png'|theme }}\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"{{ 'assets/images/portfolio/full/item5.png'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>      
                    </div><!--/.portfolio-item-->

                    <div class=\"portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/recent/item6.png'|theme }}\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"{{ 'assets/images/portfolio/full/item6.png'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    <div class=\"portfolio-item wordpress html col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/recent/item7.png'|theme }}\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"{{ 'assets/images/portfolio/full/item7.png'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class=\"portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/recent/item8.png'|theme }}\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"{{ 'assets/images/portfolio/full/item8.png'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->", "E:\\xampp7\\htdocs\\ocotober2019/themes/jtherczeg-corlate/pages/samples/portfolio.htm", "");
    }
}
