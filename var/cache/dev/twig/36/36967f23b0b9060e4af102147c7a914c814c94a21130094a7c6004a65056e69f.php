<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_10ea92802fef3a2943aa8782ea1c37c44949748d00a02158a461cd201b8e7bd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84b0738b3a242987f759533b053a5fc4c85f55a2151a92cfa95c0f9c72ea9bb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84b0738b3a242987f759533b053a5fc4c85f55a2151a92cfa95c0f9c72ea9bb4->enter($__internal_84b0738b3a242987f759533b053a5fc4c85f55a2151a92cfa95c0f9c72ea9bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_54a31dc996ee70d96354986dfd4a9b95a86a2e2e989bc2f9796736ff80b4c453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a31dc996ee70d96354986dfd4a9b95a86a2e2e989bc2f9796736ff80b4c453->enter($__internal_54a31dc996ee70d96354986dfd4a9b95a86a2e2e989bc2f9796736ff80b4c453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84b0738b3a242987f759533b053a5fc4c85f55a2151a92cfa95c0f9c72ea9bb4->leave($__internal_84b0738b3a242987f759533b053a5fc4c85f55a2151a92cfa95c0f9c72ea9bb4_prof);

        
        $__internal_54a31dc996ee70d96354986dfd4a9b95a86a2e2e989bc2f9796736ff80b4c453->leave($__internal_54a31dc996ee70d96354986dfd4a9b95a86a2e2e989bc2f9796736ff80b4c453_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_56e62444209d97d65252bdbae56616e87bdc0022d98f3c8bf8ec4055bbc4acd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56e62444209d97d65252bdbae56616e87bdc0022d98f3c8bf8ec4055bbc4acd7->enter($__internal_56e62444209d97d65252bdbae56616e87bdc0022d98f3c8bf8ec4055bbc4acd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2baaee2c41edb8932c71448465e06a50336c31c549c4cff5b27db539fa77ae20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2baaee2c41edb8932c71448465e06a50336c31c549c4cff5b27db539fa77ae20->enter($__internal_2baaee2c41edb8932c71448465e06a50336c31c549c4cff5b27db539fa77ae20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_2baaee2c41edb8932c71448465e06a50336c31c549c4cff5b27db539fa77ae20->leave($__internal_2baaee2c41edb8932c71448465e06a50336c31c549c4cff5b27db539fa77ae20_prof);

        
        $__internal_56e62444209d97d65252bdbae56616e87bdc0022d98f3c8bf8ec4055bbc4acd7->leave($__internal_56e62444209d97d65252bdbae56616e87bdc0022d98f3c8bf8ec4055bbc4acd7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/aluno/Edinaldo/www/Livraria/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
