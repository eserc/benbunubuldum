<?php

/* HWIOAuthBundle:Connect:connect_success.html.twig */
class __TwigTemplate_b95c3b2ce0030a5265d5d5df051dc85cc39830ddab2bccc323cd815b983e4918 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:connect_success.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c2a54c10263880c372be57aec556f8a4e1cba92e187382116770f478646950f = $this->env->getExtension("native_profiler");
        $__internal_1c2a54c10263880c372be57aec556f8a4e1cba92e187382116770f478646950f->enter($__internal_1c2a54c10263880c372be57aec556f8a4e1cba92e187382116770f478646950f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c2a54c10263880c372be57aec556f8a4e1cba92e187382116770f478646950f->leave($__internal_1c2a54c10263880c372be57aec556f8a4e1cba92e187382116770f478646950f_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_010070a73ceff92fa3b0c1e833c5fee1aa9bbc1fcc19316f80a5ff496bca8116 = $this->env->getExtension("native_profiler");
        $__internal_010070a73ceff92fa3b0c1e833c5fee1aa9bbc1fcc19316f80a5ff496bca8116->enter($__internal_010070a73ceff92fa3b0c1e833c5fee1aa9bbc1fcc19316f80a5ff496bca8116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.success", array("%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_010070a73ceff92fa3b0c1e833c5fee1aa9bbc1fcc19316f80a5ff496bca8116->leave($__internal_010070a73ceff92fa3b0c1e833c5fee1aa9bbc1fcc19316f80a5ff496bca8116_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:connect_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
