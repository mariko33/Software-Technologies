<?php

/* project/index.html.twig */
class __TwigTemplate_9dd928d8e8464e06dc542ea53f6838e6a8896e0ce25a52ee4992d67c2de7888c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/index.html.twig", 1);
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
        $__internal_7acdb63ce7ddbf4d12e054f3c17ce3f3dbb8ef9aa5803fa812eb1064defec4e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7acdb63ce7ddbf4d12e054f3c17ce3f3dbb8ef9aa5803fa812eb1064defec4e1->enter($__internal_7acdb63ce7ddbf4d12e054f3c17ce3f3dbb8ef9aa5803fa812eb1064defec4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/index.html.twig"));

        $__internal_db54fffa64916ca86ac8f892dc36db4770ef35a557cf8f21914be8fbf069449a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db54fffa64916ca86ac8f892dc36db4770ef35a557cf8f21914be8fbf069449a->enter($__internal_db54fffa64916ca86ac8f892dc36db4770ef35a557cf8f21914be8fbf069449a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7acdb63ce7ddbf4d12e054f3c17ce3f3dbb8ef9aa5803fa812eb1064defec4e1->leave($__internal_7acdb63ce7ddbf4d12e054f3c17ce3f3dbb8ef9aa5803fa812eb1064defec4e1_prof);

        
        $__internal_db54fffa64916ca86ac8f892dc36db4770ef35a557cf8f21914be8fbf069449a->leave($__internal_db54fffa64916ca86ac8f892dc36db4770ef35a557cf8f21914be8fbf069449a_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_66d1f673b0b7a0a699806088a1c4c4bfbb717cc3e9e3c7386fc720a9c5697815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66d1f673b0b7a0a699806088a1c4c4bfbb717cc3e9e3c7386fc720a9c5697815->enter($__internal_66d1f673b0b7a0a699806088a1c4c4bfbb717cc3e9e3c7386fc720a9c5697815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_ef60b439e8c4dfdce7b2a33d2b205d4b8034d453cf11b78d33ff715a57a644ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef60b439e8c4dfdce7b2a33d2b205d4b8034d453cf11b78d33ff715a57a644ed->enter($__internal_ef60b439e8c4dfdce7b2a33d2b205d4b8034d453cf11b78d33ff715a57a644ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<div class=\"wrapper\">
    <div class=\"button-holder\">
        <a type=\"button\" href=\"/create\" class=\"log-button\">Create New Project</a>
    </div>
    <div class=\"content\">
        <div class=\"header\">
            <div class=\"project-label\">Project</div>
            <div class=\"budget-label\">Budget</div>
            <div class=\"actions-label\">Actions</div>
        </div>
        <div class=\"main\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 16
            echo "                <div class=\"project\">
                    <div class=\"project-title\">
                        ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "title", array()), "html", null, true);
            echo "
                    </div>
                    <div class=\"project-budget\">
                        ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "budget", array()), "html", null, true);
            echo "
                    </div>
                    <div class=\"project-actions\">
                        <a type=\"button\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\" class=\"edit-button\">Edit</a>
                        <a type=\"button\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\" class=\"delete-button\">Delete</a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>
</div>
";
        
        $__internal_ef60b439e8c4dfdce7b2a33d2b205d4b8034d453cf11b78d33ff715a57a644ed->leave($__internal_ef60b439e8c4dfdce7b2a33d2b205d4b8034d453cf11b78d33ff715a57a644ed_prof);

        
        $__internal_66d1f673b0b7a0a699806088a1c4c4bfbb717cc3e9e3c7386fc720a9c5697815->leave($__internal_66d1f673b0b7a0a699806088a1c4c4bfbb717cc3e9e3c7386fc720a9c5697815_prof);

    }

    public function getTemplateName()
    {
        return "project/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 29,  86 => 25,  82 => 24,  76 => 21,  70 => 18,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"button-holder\">
        <a type=\"button\" href=\"/create\" class=\"log-button\">Create New Project</a>
    </div>
    <div class=\"content\">
        <div class=\"header\">
            <div class=\"project-label\">Project</div>
            <div class=\"budget-label\">Budget</div>
            <div class=\"actions-label\">Actions</div>
        </div>
        <div class=\"main\">
            {% for project in projects %}
                <div class=\"project\">
                    <div class=\"project-title\">
                        {{ project.title }}
                    </div>
                    <div class=\"project-budget\">
                        {{ project.budget }}
                    </div>
                    <div class=\"project-actions\">
                        <a type=\"button\" href=\"{{ path('edit', {id: project.id}) }}\" class=\"edit-button\">Edit</a>
                        <a type=\"button\" href=\"{{ path('delete', {id: project.id}) }}\" class=\"delete-button\">Delete</a>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</div>
{% endblock %}", "project/index.html.twig", "C:\\Users\\Toshiba\\Downloads\\Skeletons\\PHP-Skeleton\\app\\Resources\\views\\project\\index.html.twig");
    }
}
