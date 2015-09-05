<?php

/* HWIOAuthBundle::layout.html.twig */
class __TwigTemplate_e145a46517efc57c866aed7feed8029af0712a4d1878a974ccb5c64845064ee3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8dda9048c01db45c1f7bcce84bf0ceff073f6050507613e134971c893397d54 = $this->env->getExtension("native_profiler");
        $__internal_a8dda9048c01db45c1f7bcce84bf0ceff073f6050507613e134971c893397d54->enter($__internal_a8dda9048c01db45c1f7bcce84bf0ceff073f6050507613e134971c893397d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        $this->displayBlock('hwi_oauth_content', $context, $blocks);
        // line 10
        echo "        </div>
    </body>
</html>
";
        
        $__internal_a8dda9048c01db45c1f7bcce84bf0ceff073f6050507613e134971c893397d54->leave($__internal_a8dda9048c01db45c1f7bcce84bf0ceff073f6050507613e134971c893397d54_prof);

    }

    // line 8
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_bf4990108fb546e750443f48c547522eb7de17e21279ebe06cc741df15beb21d = $this->env->getExtension("native_profiler");
        $__internal_bf4990108fb546e750443f48c547522eb7de17e21279ebe06cc741df15beb21d->enter($__internal_bf4990108fb546e750443f48c547522eb7de17e21279ebe06cc741df15beb21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 9
        echo "            ";
        
        $__internal_bf4990108fb546e750443f48c547522eb7de17e21279ebe06cc741df15beb21d->leave($__internal_bf4990108fb546e750443f48c547522eb7de17e21279ebe06cc741df15beb21d_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  44 => 8,  34 => 10,  32 => 8,  23 => 1,);
    }
}
