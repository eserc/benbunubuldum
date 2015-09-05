<?php

/* base.html.twig */
class __TwigTemplate_0708c5a1f7134e3992b1b4eaf98200b23d07571eb9af125af79b21fbf779cb41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4eae94b996966d1be3ef4e77ad903db366a4f36a8b8daa2bd3c1ac6ea257bd4 = $this->env->getExtension("native_profiler");
        $__internal_b4eae94b996966d1be3ef4e77ad903db366a4f36a8b8daa2bd3c1ac6ea257bd4->enter($__internal_b4eae94b996966d1be3ef4e77ad903db366a4f36a8b8daa2bd3c1ac6ea257bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b4eae94b996966d1be3ef4e77ad903db366a4f36a8b8daa2bd3c1ac6ea257bd4->leave($__internal_b4eae94b996966d1be3ef4e77ad903db366a4f36a8b8daa2bd3c1ac6ea257bd4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f1e80fd96b1139ab07ab5a8558c42e2dfd922af98925b9d78e569df68a3a728 = $this->env->getExtension("native_profiler");
        $__internal_1f1e80fd96b1139ab07ab5a8558c42e2dfd922af98925b9d78e569df68a3a728->enter($__internal_1f1e80fd96b1139ab07ab5a8558c42e2dfd922af98925b9d78e569df68a3a728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1f1e80fd96b1139ab07ab5a8558c42e2dfd922af98925b9d78e569df68a3a728->leave($__internal_1f1e80fd96b1139ab07ab5a8558c42e2dfd922af98925b9d78e569df68a3a728_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c426775164068ca16c8ffec6548a3bc94426bad3f467ae412e955349d8897bbf = $this->env->getExtension("native_profiler");
        $__internal_c426775164068ca16c8ffec6548a3bc94426bad3f467ae412e955349d8897bbf->enter($__internal_c426775164068ca16c8ffec6548a3bc94426bad3f467ae412e955349d8897bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c426775164068ca16c8ffec6548a3bc94426bad3f467ae412e955349d8897bbf->leave($__internal_c426775164068ca16c8ffec6548a3bc94426bad3f467ae412e955349d8897bbf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9309b810f657d6f677e44a1b1abea4498aa00893005db3bba70d4e660ab93420 = $this->env->getExtension("native_profiler");
        $__internal_9309b810f657d6f677e44a1b1abea4498aa00893005db3bba70d4e660ab93420->enter($__internal_9309b810f657d6f677e44a1b1abea4498aa00893005db3bba70d4e660ab93420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9309b810f657d6f677e44a1b1abea4498aa00893005db3bba70d4e660ab93420->leave($__internal_9309b810f657d6f677e44a1b1abea4498aa00893005db3bba70d4e660ab93420_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9f3c82c066a6aaf4220d39ec61cf4808d278ecaaa1338efd40e0344608174e48 = $this->env->getExtension("native_profiler");
        $__internal_9f3c82c066a6aaf4220d39ec61cf4808d278ecaaa1338efd40e0344608174e48->enter($__internal_9f3c82c066a6aaf4220d39ec61cf4808d278ecaaa1338efd40e0344608174e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9f3c82c066a6aaf4220d39ec61cf4808d278ecaaa1338efd40e0344608174e48->leave($__internal_9f3c82c066a6aaf4220d39ec61cf4808d278ecaaa1338efd40e0344608174e48_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
