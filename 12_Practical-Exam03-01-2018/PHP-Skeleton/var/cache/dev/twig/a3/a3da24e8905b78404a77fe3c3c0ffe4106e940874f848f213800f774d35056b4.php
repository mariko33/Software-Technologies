<?php

/* base.html.twig */
class __TwigTemplate_93e2499d03c6402ea1e3906495568257ed0120721f7f5badb0e11600e82927c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_400ed99e29e09d0e541425678cb4210d17a1bad71f1e950232510e5b272979ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_400ed99e29e09d0e541425678cb4210d17a1bad71f1e950232510e5b272979ae->enter($__internal_400ed99e29e09d0e541425678cb4210d17a1bad71f1e950232510e5b272979ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_57b162459173be6b7be6bf02e9f244e60a92af78b01966866f6a855d2da49532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b162459173be6b7be6bf02e9f244e60a92af78b01966866f6a855d2da49532->enter($__internal_57b162459173be6b7be6bf02e9f244e60a92af78b01966866f6a855d2da49532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">
";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "</body>
</html>
";
        
        $__internal_400ed99e29e09d0e541425678cb4210d17a1bad71f1e950232510e5b272979ae->leave($__internal_400ed99e29e09d0e541425678cb4210d17a1bad71f1e950232510e5b272979ae_prof);

        
        $__internal_57b162459173be6b7be6bf02e9f244e60a92af78b01966866f6a855d2da49532->leave($__internal_57b162459173be6b7be6bf02e9f244e60a92af78b01966866f6a855d2da49532_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b83b2504811ebf368d170a80df17ff458149c024b9a9cc354310732ee127bce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b83b2504811ebf368d170a80df17ff458149c024b9a9cc354310732ee127bce->enter($__internal_3b83b2504811ebf368d170a80df17ff458149c024b9a9cc354310732ee127bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_443d7b9a426e65cfb9d922c723f9e1c5589272b4eeface650b6b468e8756fdeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443d7b9a426e65cfb9d922c723f9e1c5589272b4eeface650b6b468e8756fdeb->enter($__internal_443d7b9a426e65cfb9d922c723f9e1c5589272b4eeface650b6b468e8756fdeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Project Rider";
        
        $__internal_443d7b9a426e65cfb9d922c723f9e1c5589272b4eeface650b6b468e8756fdeb->leave($__internal_443d7b9a426e65cfb9d922c723f9e1c5589272b4eeface650b6b468e8756fdeb_prof);

        
        $__internal_3b83b2504811ebf368d170a80df17ff458149c024b9a9cc354310732ee127bce->leave($__internal_3b83b2504811ebf368d170a80df17ff458149c024b9a9cc354310732ee127bce_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_159cfd8849dd1b1d7abbe2422666f2374f91757c2fad7be3cdd643bdf43989b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_159cfd8849dd1b1d7abbe2422666f2374f91757c2fad7be3cdd643bdf43989b9->enter($__internal_159cfd8849dd1b1d7abbe2422666f2374f91757c2fad7be3cdd643bdf43989b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fc628d63ad0385917385bfeb4364883640ca6a10749833d4be15ae5e93100927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc628d63ad0385917385bfeb4364883640ca6a10749833d4be15ae5e93100927->enter($__internal_fc628d63ad0385917385bfeb4364883640ca6a10749833d4be15ae5e93100927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/create-style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_fc628d63ad0385917385bfeb4364883640ca6a10749833d4be15ae5e93100927->leave($__internal_fc628d63ad0385917385bfeb4364883640ca6a10749833d4be15ae5e93100927_prof);

        
        $__internal_159cfd8849dd1b1d7abbe2422666f2374f91757c2fad7be3cdd643bdf43989b9->leave($__internal_159cfd8849dd1b1d7abbe2422666f2374f91757c2fad7be3cdd643bdf43989b9_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_b500057f086dda42842530e7ef59b9c4aae795436d8976471d4648e3694fb9f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b500057f086dda42842530e7ef59b9c4aae795436d8976471d4648e3694fb9f4->enter($__internal_b500057f086dda42842530e7ef59b9c4aae795436d8976471d4648e3694fb9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_17ccfee208eb75e4b3699c0590948ba9d2e30d3bbf1f568bb979b1f3626734c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ccfee208eb75e4b3699c0590948ba9d2e30d3bbf1f568bb979b1f3626734c9->enter($__internal_17ccfee208eb75e4b3699c0590948ba9d2e30d3bbf1f568bb979b1f3626734c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_17ccfee208eb75e4b3699c0590948ba9d2e30d3bbf1f568bb979b1f3626734c9->leave($__internal_17ccfee208eb75e4b3699c0590948ba9d2e30d3bbf1f568bb979b1f3626734c9_prof);

        
        $__internal_b500057f086dda42842530e7ef59b9c4aae795436d8976471d4648e3694fb9f4->leave($__internal_b500057f086dda42842530e7ef59b9c4aae795436d8976471d4648e3694fb9f4_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_33b05468d7ba49dadc9a0fa24631d61c2c64afb414648b5b6f251210467723c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b05468d7ba49dadc9a0fa24631d61c2c64afb414648b5b6f251210467723c0->enter($__internal_33b05468d7ba49dadc9a0fa24631d61c2c64afb414648b5b6f251210467723c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1acdff021d720249b09d0f4937e048e553fd4330c91d96e9bed409e728844856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1acdff021d720249b09d0f4937e048e553fd4330c91d96e9bed409e728844856->enter($__internal_1acdff021d720249b09d0f4937e048e553fd4330c91d96e9bed409e728844856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_1acdff021d720249b09d0f4937e048e553fd4330c91d96e9bed409e728844856->leave($__internal_1acdff021d720249b09d0f4937e048e553fd4330c91d96e9bed409e728844856_prof);

        
        $__internal_33b05468d7ba49dadc9a0fa24631d61c2c64afb414648b5b6f251210467723c0->leave($__internal_33b05468d7ba49dadc9a0fa24631d61c2c64afb414648b5b6f251210467723c0_prof);

    }

    public function block_main($context, array $blocks = array())
    {
        $__internal_4f79674f8ae98d3b94906ecee061beb5200d18da5a365f8ea55838e5e612444f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f79674f8ae98d3b94906ecee061beb5200d18da5a365f8ea55838e5e612444f->enter($__internal_4f79674f8ae98d3b94906ecee061beb5200d18da5a365f8ea55838e5e612444f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_75d0e0fe02aff5873ec99d6ad73867e18892eb12cdeaa6e9cd22954647c4313a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d0e0fe02aff5873ec99d6ad73867e18892eb12cdeaa6e9cd22954647c4313a->enter($__internal_75d0e0fe02aff5873ec99d6ad73867e18892eb12cdeaa6e9cd22954647c4313a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_75d0e0fe02aff5873ec99d6ad73867e18892eb12cdeaa6e9cd22954647c4313a->leave($__internal_75d0e0fe02aff5873ec99d6ad73867e18892eb12cdeaa6e9cd22954647c4313a_prof);

        
        $__internal_4f79674f8ae98d3b94906ecee061beb5200d18da5a365f8ea55838e5e612444f->leave($__internal_4f79674f8ae98d3b94906ecee061beb5200d18da5a365f8ea55838e5e612444f_prof);

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
        return array (  141 => 21,  132 => 20,  115 => 19,  103 => 14,  99 => 13,  94 => 12,  85 => 11,  67 => 10,  55 => 23,  53 => 20,  49 => 19,  42 => 16,  40 => 11,  36 => 10,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Project Rider{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/reset.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/create-style.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">
{% block body %}
    {% block main %}{% endblock %}
{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\Users\\Toshiba\\Downloads\\Skeletons\\PHP-Skeleton\\app\\Resources\\views\\base.html.twig");
    }
}
