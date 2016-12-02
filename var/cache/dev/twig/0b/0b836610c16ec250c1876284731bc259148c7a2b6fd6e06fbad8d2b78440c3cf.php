<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_58dfe374e84f0d2edd36491e85e01817644d33758fc4cb928673be3b84b196d4 extends Twig_Template
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
        $__internal_0811aeb7951695cc63f93df7fd362fc65089308646a65c35bceac1db280eed2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0811aeb7951695cc63f93df7fd362fc65089308646a65c35bceac1db280eed2e->enter($__internal_0811aeb7951695cc63f93df7fd362fc65089308646a65c35bceac1db280eed2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_07b4638ce5a61b934d36fc287992af967658b21bb73cdc1f855212aed129fdfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b4638ce5a61b934d36fc287992af967658b21bb73cdc1f855212aed129fdfb->enter($__internal_07b4638ce5a61b934d36fc287992af967658b21bb73cdc1f855212aed129fdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0811aeb7951695cc63f93df7fd362fc65089308646a65c35bceac1db280eed2e->leave($__internal_0811aeb7951695cc63f93df7fd362fc65089308646a65c35bceac1db280eed2e_prof);

        
        $__internal_07b4638ce5a61b934d36fc287992af967658b21bb73cdc1f855212aed129fdfb->leave($__internal_07b4638ce5a61b934d36fc287992af967658b21bb73cdc1f855212aed129fdfb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e91a8477667edb8d4387d87ec36d9867589462a7dccda42105978e339962400b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e91a8477667edb8d4387d87ec36d9867589462a7dccda42105978e339962400b->enter($__internal_e91a8477667edb8d4387d87ec36d9867589462a7dccda42105978e339962400b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4a7422d8f77239218ac3b504a36272f05f14454c371f4d21763a87c3321d7af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a7422d8f77239218ac3b504a36272f05f14454c371f4d21763a87c3321d7af9->enter($__internal_4a7422d8f77239218ac3b504a36272f05f14454c371f4d21763a87c3321d7af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4a7422d8f77239218ac3b504a36272f05f14454c371f4d21763a87c3321d7af9->leave($__internal_4a7422d8f77239218ac3b504a36272f05f14454c371f4d21763a87c3321d7af9_prof);

        
        $__internal_e91a8477667edb8d4387d87ec36d9867589462a7dccda42105978e339962400b->leave($__internal_e91a8477667edb8d4387d87ec36d9867589462a7dccda42105978e339962400b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bca071d9e135839f1797f0a5b17dee5d7f993397e3498c96348b69087b97d04f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bca071d9e135839f1797f0a5b17dee5d7f993397e3498c96348b69087b97d04f->enter($__internal_bca071d9e135839f1797f0a5b17dee5d7f993397e3498c96348b69087b97d04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_db84c96910ba9ad4984c4cfdf5b40709fd8a84ca62bf4be3fa6aae3f8d3fed48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db84c96910ba9ad4984c4cfdf5b40709fd8a84ca62bf4be3fa6aae3f8d3fed48->enter($__internal_db84c96910ba9ad4984c4cfdf5b40709fd8a84ca62bf4be3fa6aae3f8d3fed48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_db84c96910ba9ad4984c4cfdf5b40709fd8a84ca62bf4be3fa6aae3f8d3fed48->leave($__internal_db84c96910ba9ad4984c4cfdf5b40709fd8a84ca62bf4be3fa6aae3f8d3fed48_prof);

        
        $__internal_bca071d9e135839f1797f0a5b17dee5d7f993397e3498c96348b69087b97d04f->leave($__internal_bca071d9e135839f1797f0a5b17dee5d7f993397e3498c96348b69087b97d04f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_20c1f2c4d72b1787de27d35b1446510b9188034e9e7123e8f6f3c005522c8340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20c1f2c4d72b1787de27d35b1446510b9188034e9e7123e8f6f3c005522c8340->enter($__internal_20c1f2c4d72b1787de27d35b1446510b9188034e9e7123e8f6f3c005522c8340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d5f881189e9b28d4931a60e0b050748da607bae13e52533adbc56d4605fbdc65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f881189e9b28d4931a60e0b050748da607bae13e52533adbc56d4605fbdc65->enter($__internal_d5f881189e9b28d4931a60e0b050748da607bae13e52533adbc56d4605fbdc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d5f881189e9b28d4931a60e0b050748da607bae13e52533adbc56d4605fbdc65->leave($__internal_d5f881189e9b28d4931a60e0b050748da607bae13e52533adbc56d4605fbdc65_prof);

        
        $__internal_20c1f2c4d72b1787de27d35b1446510b9188034e9e7123e8f6f3c005522c8340->leave($__internal_20c1f2c4d72b1787de27d35b1446510b9188034e9e7123e8f6f3c005522c8340_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/aluno/Edinaldo/www/Livraria/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
