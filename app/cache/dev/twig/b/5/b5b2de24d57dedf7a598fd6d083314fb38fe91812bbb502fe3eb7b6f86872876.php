<?php

/* HWIOAuthBundle:Connect:login.html.twig */
class __TwigTemplate_b5b2de24d57dedf7a598fd6d083314fb38fe91812bbb502fe3eb7b6f86872876 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:login.html.twig", 1);
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
        $__internal_7dab19639bfdd71c0436235600b246df26952af3e7cd108a3f8d81a3df8f27e0 = $this->env->getExtension("native_profiler");
        $__internal_7dab19639bfdd71c0436235600b246df26952af3e7cd108a3f8d81a3df8f27e0->enter($__internal_7dab19639bfdd71c0436235600b246df26952af3e7cd108a3f8d81a3df8f27e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dab19639bfdd71c0436235600b246df26952af3e7cd108a3f8d81a3df8f27e0->leave($__internal_7dab19639bfdd71c0436235600b246df26952af3e7cd108a3f8d81a3df8f27e0_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_ed313cccacf580c41faf93eb28f4554b64652e75a1596f227171fd4f53549c4a = $this->env->getExtension("native_profiler");
        $__internal_ed313cccacf580c41faf93eb28f4554b64652e75a1596f227171fd4f53549c4a->enter($__internal_ed313cccacf580c41faf93eb28f4554b64652e75a1596f227171fd4f53549c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    ";
        if ((array_key_exists("error", $context) && (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")))) {
            // line 5
            echo "        <span>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</span>
    ";
        }
        // line 7
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('hwi_oauth')->getResourceOwners());
        foreach ($context['_seq'] as $context["_key"] => $context["owner"]) {
            // line 8
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('hwi_oauth')->getLoginUrl($context["owner"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["owner"], array(), "HWIOAuthBundle"), "html", null, true);
            echo "</a> <br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['owner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ed313cccacf580c41faf93eb28f4554b64652e75a1596f227171fd4f53549c4a->leave($__internal_ed313cccacf580c41faf93eb28f4554b64652e75a1596f227171fd4f53549c4a_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
