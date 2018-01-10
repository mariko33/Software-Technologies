<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f32ad73c9bc804e7d7685ce925e27ce9c7daa98efc0b9a8c89227d7076a75563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c9bf8cdeaedb6ff89947ea757cf97dab5e41f619dee3a40f5caaeed610fadd21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9bf8cdeaedb6ff89947ea757cf97dab5e41f619dee3a40f5caaeed610fadd21->enter($__internal_c9bf8cdeaedb6ff89947ea757cf97dab5e41f619dee3a40f5caaeed610fadd21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_31b2ad02ee671cf7ed634cbd21b4dcf270b47166c85f5e0777f8a566d3649668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b2ad02ee671cf7ed634cbd21b4dcf270b47166c85f5e0777f8a566d3649668->enter($__internal_31b2ad02ee671cf7ed634cbd21b4dcf270b47166c85f5e0777f8a566d3649668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9bf8cdeaedb6ff89947ea757cf97dab5e41f619dee3a40f5caaeed610fadd21->leave($__internal_c9bf8cdeaedb6ff89947ea757cf97dab5e41f619dee3a40f5caaeed610fadd21_prof);

        
        $__internal_31b2ad02ee671cf7ed634cbd21b4dcf270b47166c85f5e0777f8a566d3649668->leave($__internal_31b2ad02ee671cf7ed634cbd21b4dcf270b47166c85f5e0777f8a566d3649668_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1609d31f6ed131e256e9d86bf97722e21450cb0bc42766d78188570da230a0b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1609d31f6ed131e256e9d86bf97722e21450cb0bc42766d78188570da230a0b7->enter($__internal_1609d31f6ed131e256e9d86bf97722e21450cb0bc42766d78188570da230a0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9e7f7c33e753021008530f54c65f344200e493789033bde34f9122d742234e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7f7c33e753021008530f54c65f344200e493789033bde34f9122d742234e4c->enter($__internal_9e7f7c33e753021008530f54c65f344200e493789033bde34f9122d742234e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9e7f7c33e753021008530f54c65f344200e493789033bde34f9122d742234e4c->leave($__internal_9e7f7c33e753021008530f54c65f344200e493789033bde34f9122d742234e4c_prof);

        
        $__internal_1609d31f6ed131e256e9d86bf97722e21450cb0bc42766d78188570da230a0b7->leave($__internal_1609d31f6ed131e256e9d86bf97722e21450cb0bc42766d78188570da230a0b7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_924ead37102822c1b73108dca08b17c05fe4a976ecfd345b9076827b6fb47100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_924ead37102822c1b73108dca08b17c05fe4a976ecfd345b9076827b6fb47100->enter($__internal_924ead37102822c1b73108dca08b17c05fe4a976ecfd345b9076827b6fb47100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b3441a1b5b383bb19fbcd15f73d90dbeabe236693c290ced52c551e50d154cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3441a1b5b383bb19fbcd15f73d90dbeabe236693c290ced52c551e50d154cbc->enter($__internal_b3441a1b5b383bb19fbcd15f73d90dbeabe236693c290ced52c551e50d154cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b3441a1b5b383bb19fbcd15f73d90dbeabe236693c290ced52c551e50d154cbc->leave($__internal_b3441a1b5b383bb19fbcd15f73d90dbeabe236693c290ced52c551e50d154cbc_prof);

        
        $__internal_924ead37102822c1b73108dca08b17c05fe4a976ecfd345b9076827b6fb47100->leave($__internal_924ead37102822c1b73108dca08b17c05fe4a976ecfd345b9076827b6fb47100_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ad68cbebe17d6465251c1db903c707abae8540028bbff7c05640ec2637b480d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad68cbebe17d6465251c1db903c707abae8540028bbff7c05640ec2637b480d9->enter($__internal_ad68cbebe17d6465251c1db903c707abae8540028bbff7c05640ec2637b480d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_81c92000c6e62bd25425c4be3f47994104745ac7b03536223a0efbed6d267781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c92000c6e62bd25425c4be3f47994104745ac7b03536223a0efbed6d267781->enter($__internal_81c92000c6e62bd25425c4be3f47994104745ac7b03536223a0efbed6d267781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_81c92000c6e62bd25425c4be3f47994104745ac7b03536223a0efbed6d267781->leave($__internal_81c92000c6e62bd25425c4be3f47994104745ac7b03536223a0efbed6d267781_prof);

        
        $__internal_ad68cbebe17d6465251c1db903c707abae8540028bbff7c05640ec2637b480d9->leave($__internal_ad68cbebe17d6465251c1db903c707abae8540028bbff7c05640ec2637b480d9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\Toshiba\\Downloads\\Skeletons\\PHP-Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
