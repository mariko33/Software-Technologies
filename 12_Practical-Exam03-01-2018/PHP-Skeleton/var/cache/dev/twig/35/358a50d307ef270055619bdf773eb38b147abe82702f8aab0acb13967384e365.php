<?php

/* :project:create.html.twig */
class __TwigTemplate_554ce2a565e3f40b5aec014ba1dafbebaf1d412fdc82eed325a73c6bf41a5acb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":project:create.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_229eb5e5ec45094a725a16ae71abe155adb742931315ec7225936882bb479a19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_229eb5e5ec45094a725a16ae71abe155adb742931315ec7225936882bb479a19->enter($__internal_229eb5e5ec45094a725a16ae71abe155adb742931315ec7225936882bb479a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:create.html.twig"));

        $__internal_5c3d1df14f10ae7ddc6f01f416d47714b5fbe38f08dac72bb5d4f5d89343a55d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3d1df14f10ae7ddc6f01f416d47714b5fbe38f08dac72bb5d4f5d89343a55d->enter($__internal_5c3d1df14f10ae7ddc6f01f416d47714b5fbe38f08dac72bb5d4f5d89343a55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_229eb5e5ec45094a725a16ae71abe155adb742931315ec7225936882bb479a19->leave($__internal_229eb5e5ec45094a725a16ae71abe155adb742931315ec7225936882bb479a19_prof);

        
        $__internal_5c3d1df14f10ae7ddc6f01f416d47714b5fbe38f08dac72bb5d4f5d89343a55d->leave($__internal_5c3d1df14f10ae7ddc6f01f416d47714b5fbe38f08dac72bb5d4f5d89343a55d_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_da5f0603e80cb1d51feb99403691f032a76c39e5d4988dd967c51bd5091d97dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da5f0603e80cb1d51feb99403691f032a76c39e5d4988dd967c51bd5091d97dc->enter($__internal_da5f0603e80cb1d51feb99403691f032a76c39e5d4988dd967c51bd5091d97dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_e2e435136862c384f40245163e55d91a0fcf97c858e05b4366c704978623c624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e435136862c384f40245163e55d91a0fcf97c858e05b4366c704978623c624->enter($__internal_e2e435136862c384f40245163e55d91a0fcf97c858e05b4366c704978623c624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<div class=\"wrapper\">
    <form class=\"project-create\" method=\"post\">
        <div class=\"create-header\">
            Create Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"></textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Create Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    </form>
</div>
";
        
        $__internal_e2e435136862c384f40245163e55d91a0fcf97c858e05b4366c704978623c624->leave($__internal_e2e435136862c384f40245163e55d91a0fcf97c858e05b4366c704978623c624_prof);

        
        $__internal_da5f0603e80cb1d51feb99403691f032a76c39e5d4988dd967c51bd5091d97dc->leave($__internal_da5f0603e80cb1d51feb99403691f032a76c39e5d4988dd967c51bd5091d97dc_prof);

    }

    public function getTemplateName()
    {
        return ":project:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block main %}
<div class=\"wrapper\">
    <form class=\"project-create\" method=\"post\">
        <div class=\"create-header\">
            Create Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"></textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Create Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        {{ form_row(form._token) }}
    </form>
</div>
{% endblock %}", ":project:create.html.twig", "C:\\Users\\Toshiba\\Downloads\\Skeletons\\PHP-Skeleton\\app/Resources\\views/project/create.html.twig");
    }
}
