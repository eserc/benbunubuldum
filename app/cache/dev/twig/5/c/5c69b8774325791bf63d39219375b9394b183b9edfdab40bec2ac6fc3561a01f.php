<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_5c69b8774325791bf63d39219375b9394b183b9edfdab40bec2ac6fc3561a01f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_774e7066c910aea19b2f54dc86ac8d6156ba212c9a41dadb08ea5b6abba53797 = $this->env->getExtension("native_profiler");
        $__internal_774e7066c910aea19b2f54dc86ac8d6156ba212c9a41dadb08ea5b6abba53797->enter($__internal_774e7066c910aea19b2f54dc86ac8d6156ba212c9a41dadb08ea5b6abba53797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
        <a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
            ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
        </a>
    ";
        } else {
            // line 14
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
        // line 16
        echo "</div>

";
        // line 18
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 19
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 20
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 21
                    echo "            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                ";
                    // line 22
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 27
        echo "
<div>
    ";
        // line 29
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 31
        echo "</div>
</body>
</html>
";
        
        $__internal_774e7066c910aea19b2f54dc86ac8d6156ba212c9a41dadb08ea5b6abba53797->leave($__internal_774e7066c910aea19b2f54dc86ac8d6156ba212c9a41dadb08ea5b6abba53797_prof);

    }

    // line 29
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_840fa7b8e029e02ed3360c5a23563360a8a1225a6ffa1ae3ceec7839fd44f3cd = $this->env->getExtension("native_profiler");
        $__internal_840fa7b8e029e02ed3360c5a23563360a8a1225a6ffa1ae3ceec7839fd44f3cd->enter($__internal_840fa7b8e029e02ed3360c5a23563360a8a1225a6ffa1ae3ceec7839fd44f3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 30
        echo "    ";
        
        $__internal_840fa7b8e029e02ed3360c5a23563360a8a1225a6ffa1ae3ceec7839fd44f3cd->leave($__internal_840fa7b8e029e02ed3360c5a23563360a8a1225a6ffa1ae3ceec7839fd44f3cd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 30,  110 => 29,  100 => 31,  98 => 29,  94 => 27,  87 => 25,  78 => 22,  73 => 21,  68 => 20,  63 => 19,  61 => 18,  57 => 16,  49 => 14,  43 => 11,  39 => 10,  34 => 9,  32 => 8,  23 => 1,);
    }
}
