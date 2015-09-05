<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_e705dd60cb9d599eec105ae7328e677f92ec4830d8b7616f5cdd99f1a317ceb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf24fa35824b29f7fe4033518c71f9afed5238ad092d8d3b096625415e54fe15 = $this->env->getExtension("native_profiler");
        $__internal_cf24fa35824b29f7fe4033518c71f9afed5238ad092d8d3b096625415e54fe15->enter($__internal_cf24fa35824b29f7fe4033518c71f9afed5238ad092d8d3b096625415e54fe15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf24fa35824b29f7fe4033518c71f9afed5238ad092d8d3b096625415e54fe15->leave($__internal_cf24fa35824b29f7fe4033518c71f9afed5238ad092d8d3b096625415e54fe15_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72128728bd7cfc2a362a6de67d42a3555afd7a15d57f9a961bd7b17f83250ada = $this->env->getExtension("native_profiler");
        $__internal_72128728bd7cfc2a362a6de67d42a3555afd7a15d57f9a961bd7b17f83250ada->enter($__internal_72128728bd7cfc2a362a6de67d42a3555afd7a15d57f9a961bd7b17f83250ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div><p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</p></div>
    ";
        }
        // line 9
        echo "
    <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

        <p>
        <label for=\"username\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <br />
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
        </p>

        <p>
        <label for=\"password\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <br />
        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
        </p>

        <p>
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        </p>

        <br />
        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </form>
";
        
        $__internal_72128728bd7cfc2a362a6de67d42a3555afd7a15d57f9a961bd7b17f83250ada->leave($__internal_72128728bd7cfc2a362a6de67d42a3555afd7a15d57f9a961bd7b17f83250ada_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 31,  84 => 27,  74 => 20,  67 => 16,  62 => 14,  56 => 11,  52 => 10,  49 => 9,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
