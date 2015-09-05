<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ec2c456074803bb6e329ade1de7317edd1838fa39c490d04eacd1ef8436095a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1970fa5f62d151effdef4bf8790d419272280a5dbaa9a825f5af1b1b7f425132 = $this->env->getExtension("native_profiler");
        $__internal_1970fa5f62d151effdef4bf8790d419272280a5dbaa9a825f5af1b1b7f425132->enter($__internal_1970fa5f62d151effdef4bf8790d419272280a5dbaa9a825f5af1b1b7f425132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1970fa5f62d151effdef4bf8790d419272280a5dbaa9a825f5af1b1b7f425132->leave($__internal_1970fa5f62d151effdef4bf8790d419272280a5dbaa9a825f5af1b1b7f425132_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4837467d8a187f97788f00c89550e79fdbdcfc338a673a48843b6a431538ae24 = $this->env->getExtension("native_profiler");
        $__internal_4837467d8a187f97788f00c89550e79fdbdcfc338a673a48843b6a431538ae24->enter($__internal_4837467d8a187f97788f00c89550e79fdbdcfc338a673a48843b6a431538ae24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4837467d8a187f97788f00c89550e79fdbdcfc338a673a48843b6a431538ae24->leave($__internal_4837467d8a187f97788f00c89550e79fdbdcfc338a673a48843b6a431538ae24_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_87d28bc33ba8fca181f097ec704839d5a573446890a5c1c94a37c4710a68b693 = $this->env->getExtension("native_profiler");
        $__internal_87d28bc33ba8fca181f097ec704839d5a573446890a5c1c94a37c4710a68b693->enter($__internal_87d28bc33ba8fca181f097ec704839d5a573446890a5c1c94a37c4710a68b693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_87d28bc33ba8fca181f097ec704839d5a573446890a5c1c94a37c4710a68b693->leave($__internal_87d28bc33ba8fca181f097ec704839d5a573446890a5c1c94a37c4710a68b693_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b8d7e95b7e45a032294ea42ca465a0b7333f43f534ecc1779d44de766b4f85c = $this->env->getExtension("native_profiler");
        $__internal_9b8d7e95b7e45a032294ea42ca465a0b7333f43f534ecc1779d44de766b4f85c->enter($__internal_9b8d7e95b7e45a032294ea42ca465a0b7333f43f534ecc1779d44de766b4f85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9b8d7e95b7e45a032294ea42ca465a0b7333f43f534ecc1779d44de766b4f85c->leave($__internal_9b8d7e95b7e45a032294ea42ca465a0b7333f43f534ecc1779d44de766b4f85c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
