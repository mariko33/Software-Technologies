<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_09886c37796d81d574b2448cf2a22ea32da8dad546b69f22c376ce19a869ce97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33b7b9e4881c793f56fbd8ecac766f7d1d512e15a2e75776fd273c5b75688b7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b7b9e4881c793f56fbd8ecac766f7d1d512e15a2e75776fd273c5b75688b7a->enter($__internal_33b7b9e4881c793f56fbd8ecac766f7d1d512e15a2e75776fd273c5b75688b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_492512d3a54064225fb2d9f0ec25fa4b25852d44c98ff27529c313eaa347e91c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_492512d3a54064225fb2d9f0ec25fa4b25852d44c98ff27529c313eaa347e91c->enter($__internal_492512d3a54064225fb2d9f0ec25fa4b25852d44c98ff27529c313eaa347e91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33b7b9e4881c793f56fbd8ecac766f7d1d512e15a2e75776fd273c5b75688b7a->leave($__internal_33b7b9e4881c793f56fbd8ecac766f7d1d512e15a2e75776fd273c5b75688b7a_prof);

        
        $__internal_492512d3a54064225fb2d9f0ec25fa4b25852d44c98ff27529c313eaa347e91c->leave($__internal_492512d3a54064225fb2d9f0ec25fa4b25852d44c98ff27529c313eaa347e91c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_40e6ff9ca4b738e187d3e83cc388cbd0b1ff8f04e5322da8a8d188d54a24820d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40e6ff9ca4b738e187d3e83cc388cbd0b1ff8f04e5322da8a8d188d54a24820d->enter($__internal_40e6ff9ca4b738e187d3e83cc388cbd0b1ff8f04e5322da8a8d188d54a24820d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_846f9bb725c85e218dc77dfff92defdcaf78ad1c69bc9d80f785b420bf63dcbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_846f9bb725c85e218dc77dfff92defdcaf78ad1c69bc9d80f785b420bf63dcbe->enter($__internal_846f9bb725c85e218dc77dfff92defdcaf78ad1c69bc9d80f785b420bf63dcbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_846f9bb725c85e218dc77dfff92defdcaf78ad1c69bc9d80f785b420bf63dcbe->leave($__internal_846f9bb725c85e218dc77dfff92defdcaf78ad1c69bc9d80f785b420bf63dcbe_prof);

        
        $__internal_40e6ff9ca4b738e187d3e83cc388cbd0b1ff8f04e5322da8a8d188d54a24820d->leave($__internal_40e6ff9ca4b738e187d3e83cc388cbd0b1ff8f04e5322da8a8d188d54a24820d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_693566a83c9f4330a082e24413ad9738ed63edf07b13e2210c3f36ae103449dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_693566a83c9f4330a082e24413ad9738ed63edf07b13e2210c3f36ae103449dc->enter($__internal_693566a83c9f4330a082e24413ad9738ed63edf07b13e2210c3f36ae103449dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9e776474f7cf71311cf0278ff993cb068fbf6354d5364ea8624cb92503c57e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e776474f7cf71311cf0278ff993cb068fbf6354d5364ea8624cb92503c57e52->enter($__internal_9e776474f7cf71311cf0278ff993cb068fbf6354d5364ea8624cb92503c57e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9e776474f7cf71311cf0278ff993cb068fbf6354d5364ea8624cb92503c57e52->leave($__internal_9e776474f7cf71311cf0278ff993cb068fbf6354d5364ea8624cb92503c57e52_prof);

        
        $__internal_693566a83c9f4330a082e24413ad9738ed63edf07b13e2210c3f36ae103449dc->leave($__internal_693566a83c9f4330a082e24413ad9738ed63edf07b13e2210c3f36ae103449dc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f8a65302b9c8133dbea8b072a08d38e05b79e0d9ef3d3a332e30727c5cca631a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a65302b9c8133dbea8b072a08d38e05b79e0d9ef3d3a332e30727c5cca631a->enter($__internal_f8a65302b9c8133dbea8b072a08d38e05b79e0d9ef3d3a332e30727c5cca631a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_45a7d6b1480da21dc3e630bd7e01ac6a965502fb71cc161a25ecd6b2635f8ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a7d6b1480da21dc3e630bd7e01ac6a965502fb71cc161a25ecd6b2635f8ac7->enter($__internal_45a7d6b1480da21dc3e630bd7e01ac6a965502fb71cc161a25ecd6b2635f8ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_45a7d6b1480da21dc3e630bd7e01ac6a965502fb71cc161a25ecd6b2635f8ac7->leave($__internal_45a7d6b1480da21dc3e630bd7e01ac6a965502fb71cc161a25ecd6b2635f8ac7_prof);

        
        $__internal_f8a65302b9c8133dbea8b072a08d38e05b79e0d9ef3d3a332e30727c5cca631a->leave($__internal_f8a65302b9c8133dbea8b072a08d38e05b79e0d9ef3d3a332e30727c5cca631a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Toshiba\\Downloads\\Skeletons\\PHP-Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
