<?php

/* :project:delete.html.twig */
class __TwigTemplate_c075bb65d92646ff69ef39d8bd1197147c8f0224228900ab3f50dae18c5aa66e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":project:delete.html.twig", 1);
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
        $__internal_cd30095c815bf4a31d49758de8a7f97cb39146bd7d388b64af3be773b8c48266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd30095c815bf4a31d49758de8a7f97cb39146bd7d388b64af3be773b8c48266->enter($__internal_cd30095c815bf4a31d49758de8a7f97cb39146bd7d388b64af3be773b8c48266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:delete.html.twig"));

        $__internal_5c8fc7a16308e9bb052049810af703b77c1e872c3b08d2f91f769425d9991446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c8fc7a16308e9bb052049810af703b77c1e872c3b08d2f91f769425d9991446->enter($__internal_5c8fc7a16308e9bb052049810af703b77c1e872c3b08d2f91f769425d9991446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd30095c815bf4a31d49758de8a7f97cb39146bd7d388b64af3be773b8c48266->leave($__internal_cd30095c815bf4a31d49758de8a7f97cb39146bd7d388b64af3be773b8c48266_prof);

        
        $__internal_5c8fc7a16308e9bb052049810af703b77c1e872c3b08d2f91f769425d9991446->leave($__internal_5c8fc7a16308e9bb052049810af703b77c1e872c3b08d2f91f769425d9991446_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_64f5e6e864947c01d8987f5ae72ddb8bb411bbffb65b21e8248553af3dfa6957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64f5e6e864947c01d8987f5ae72ddb8bb411bbffb65b21e8248553af3dfa6957->enter($__internal_64f5e6e864947c01d8987f5ae72ddb8bb411bbffb65b21e8248553af3dfa6957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_62da0ae1005615aace258820337f90cd4c7c4ee0193813afb7b77d3cdec5fb2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62da0ae1005615aace258820337f90cd4c7c4ee0193813afb7b77d3cdec5fb2b->enter($__internal_62da0ae1005615aace258820337f90cd4c7c4ee0193813afb7b77d3cdec5fb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<div class=\"wrapper\">
    <form class=\"project-create\" method=\"post\">
        <div class=\"create-header\">
            Delete Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "title", array()), "html", null, true);
        echo "\" disabled=\"disabled\"/>
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"
                      disabled=\"disabled\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "description", array()), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "budget", array()), "html", null, true);
        echo "\"
                   disabled=\"disabled\"/>
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Delete Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    </form>
</div>
";
        
        $__internal_62da0ae1005615aace258820337f90cd4c7c4ee0193813afb7b77d3cdec5fb2b->leave($__internal_62da0ae1005615aace258820337f90cd4c7c4ee0193813afb7b77d3cdec5fb2b_prof);

        
        $__internal_64f5e6e864947c01d8987f5ae72ddb8bb411bbffb65b21e8248553af3dfa6957->leave($__internal_64f5e6e864947c01d8987f5ae72ddb8bb411bbffb65b21e8248553af3dfa6957_prof);

    }

    public function getTemplateName()
    {
        return ":project:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  73 => 20,  66 => 16,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
            Delete Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" value=\"{{ project.title }}\" disabled=\"disabled\"/>
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"
                      disabled=\"disabled\">{{ project.description }}</textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" value=\"{{ project.budget }}\"
                   disabled=\"disabled\"/>
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Delete Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        {{ form_row(form._token) }}
    </form>
</div>
{% endblock %}", ":project:delete.html.twig", "C:\\Users\\Toshiba\\Downloads\\Skeletons\\PHP-Skeleton\\app/Resources\\views/project/delete.html.twig");
    }
}
