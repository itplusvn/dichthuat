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

/* E:\xampp7\htdocs\ocotober2019/themes/jtherczeg-corlate/pages/samples/contact.htm */
class __TwigTemplate_1a0cf7ffb3c3ed180ccb391912e1aa612f4f35ae85b47bc8a1f77abe4383e347 extends \Twig\Template
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
        echo "<section id=\"contact-info\">
        <div class=\"center\">                
            <h2>How to Reach Us?</h2>
            <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </div>
        <div class=\"gmap-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-5 text-center\">
                        <div class=\"gmap\">
                            <iframe frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed\"></iframe>
                        </div>
                    </div>

                    <div class=\"col-sm-7 map-content\">
                        <ul class=\"row\">
                            <li class=\"col-sm-6\">
                                <address>
                                    <h5>Head Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>

                                <address>
                                    <h5>Zonal Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>                                
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>
                            </li>


                            <li class=\"col-sm-6\">
                                <address>
                                    <h5>Zone#2 Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>

                                <address>
                                    <h5>Zone#3 Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id=\"contact-page\">
        <div class=\"container\">
            <div class=\"center\">        
                <h2>Drop Your Message</h2>
                <p class=\"lead\">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div> 
            <div class=\"row contact-wrap\"> 
                <div class=\"status alert alert-success\" style=\"display: none\"></div>
                <form role=\"form\" id=\"main-contact-form\" class=\"contact-form\" name=\"contact-form\">
                    <div class=\"col-sm-5 col-sm-offset-1\">
                        <div class=\"form-group\">
                            <label>Name *</label>
                            <input type=\"text\" name=\"name\" class=\"form-control\" required=\"required\">
                        </div>
                        <div class=\"form-group\">
                            <label>Email *</label>
                            <input type=\"email\" name=\"email\" class=\"form-control\" required=\"required\">
                        </div>
                        <div class=\"form-group\">
                            <label>Phone</label>
                            <input type=\"number\" class=\"form-control\">
                        </div>
                        <div class=\"form-group\">
                            <label>Company Name</label>
                            <input type=\"text\" class=\"form-control\">
                        </div>                        
                    </div>
                    <div class=\"col-sm-5\">
                        <div class=\"form-group\">
                            <label>Subject *</label>
                            <input type=\"text\" name=\"subject\" class=\"form-control\" required=\"required\">
                        </div>
                        <div class=\"form-group\">
                            <label>Message *</label>
                            <textarea name=\"message\" id=\"message\" required=\"required\" class=\"form-control\" rows=\"8\"></textarea>
                        </div>                        
                        <div class=\"form-group\">
                            <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn-lg\" required=\"required\">Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->";
    }

    public function getTemplateName()
    {
        return "E:\\xampp7\\htdocs\\ocotober2019/themes/jtherczeg-corlate/pages/samples/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"contact-info\">
        <div class=\"center\">                
            <h2>How to Reach Us?</h2>
            <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </div>
        <div class=\"gmap-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-5 text-center\">
                        <div class=\"gmap\">
                            <iframe frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed\"></iframe>
                        </div>
                    </div>

                    <div class=\"col-sm-7 map-content\">
                        <ul class=\"row\">
                            <li class=\"col-sm-6\">
                                <address>
                                    <h5>Head Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>

                                <address>
                                    <h5>Zonal Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>                                
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>
                            </li>


                            <li class=\"col-sm-6\">
                                <address>
                                    <h5>Zone#2 Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>

                                <address>
                                    <h5>Zone#3 Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id=\"contact-page\">
        <div class=\"container\">
            <div class=\"center\">        
                <h2>Drop Your Message</h2>
                <p class=\"lead\">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div> 
            <div class=\"row contact-wrap\"> 
                <div class=\"status alert alert-success\" style=\"display: none\"></div>
                <form role=\"form\" id=\"main-contact-form\" class=\"contact-form\" name=\"contact-form\">
                    <div class=\"col-sm-5 col-sm-offset-1\">
                        <div class=\"form-group\">
                            <label>Name *</label>
                            <input type=\"text\" name=\"name\" class=\"form-control\" required=\"required\">
                        </div>
                        <div class=\"form-group\">
                            <label>Email *</label>
                            <input type=\"email\" name=\"email\" class=\"form-control\" required=\"required\">
                        </div>
                        <div class=\"form-group\">
                            <label>Phone</label>
                            <input type=\"number\" class=\"form-control\">
                        </div>
                        <div class=\"form-group\">
                            <label>Company Name</label>
                            <input type=\"text\" class=\"form-control\">
                        </div>                        
                    </div>
                    <div class=\"col-sm-5\">
                        <div class=\"form-group\">
                            <label>Subject *</label>
                            <input type=\"text\" name=\"subject\" class=\"form-control\" required=\"required\">
                        </div>
                        <div class=\"form-group\">
                            <label>Message *</label>
                            <textarea name=\"message\" id=\"message\" required=\"required\" class=\"form-control\" rows=\"8\"></textarea>
                        </div>                        
                        <div class=\"form-group\">
                            <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn-lg\" required=\"required\">Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->", "E:\\xampp7\\htdocs\\ocotober2019/themes/jtherczeg-corlate/pages/samples/contact.htm", "");
    }
}
