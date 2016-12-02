<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0e40c4c0fb0a2b3d1cbad7cd0064957f2464da030b609583438fe839c2c5881f extends Twig_Template
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
        $__internal_1bc1c9e0e78d6ac00164d5ca8b733fad13438c4a86a923a7fd41c8463ea14127 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bc1c9e0e78d6ac00164d5ca8b733fad13438c4a86a923a7fd41c8463ea14127->enter($__internal_1bc1c9e0e78d6ac00164d5ca8b733fad13438c4a86a923a7fd41c8463ea14127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_381fe0378488f39eb045bef2b180ccbf4e87e46db19f66d2531f9280de5aa37f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381fe0378488f39eb045bef2b180ccbf4e87e46db19f66d2531f9280de5aa37f->enter($__internal_381fe0378488f39eb045bef2b180ccbf4e87e46db19f66d2531f9280de5aa37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bc1c9e0e78d6ac00164d5ca8b733fad13438c4a86a923a7fd41c8463ea14127->leave($__internal_1bc1c9e0e78d6ac00164d5ca8b733fad13438c4a86a923a7fd41c8463ea14127_prof);

        
        $__internal_381fe0378488f39eb045bef2b180ccbf4e87e46db19f66d2531f9280de5aa37f->leave($__internal_381fe0378488f39eb045bef2b180ccbf4e87e46db19f66d2531f9280de5aa37f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a89e8d7fe674ad8556e349fd7f8e788247b6d1e3e1797c989f5adcb421551a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a89e8d7fe674ad8556e349fd7f8e788247b6d1e3e1797c989f5adcb421551a0->enter($__internal_0a89e8d7fe674ad8556e349fd7f8e788247b6d1e3e1797c989f5adcb421551a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_62e6b9679b8aa24e0e9fe3af95ee8d31b8e81a4ee1d0d73f0f5824a70e65f017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e6b9679b8aa24e0e9fe3af95ee8d31b8e81a4ee1d0d73f0f5824a70e65f017->enter($__internal_62e6b9679b8aa24e0e9fe3af95ee8d31b8e81a4ee1d0d73f0f5824a70e65f017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_62e6b9679b8aa24e0e9fe3af95ee8d31b8e81a4ee1d0d73f0f5824a70e65f017->leave($__internal_62e6b9679b8aa24e0e9fe3af95ee8d31b8e81a4ee1d0d73f0f5824a70e65f017_prof);

        
        $__internal_0a89e8d7fe674ad8556e349fd7f8e788247b6d1e3e1797c989f5adcb421551a0->leave($__internal_0a89e8d7fe674ad8556e349fd7f8e788247b6d1e3e1797c989f5adcb421551a0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_347ebe0b07c22d019a5a88629085dd5d1d88b96a0e818d17be7ea59bc0041e02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_347ebe0b07c22d019a5a88629085dd5d1d88b96a0e818d17be7ea59bc0041e02->enter($__internal_347ebe0b07c22d019a5a88629085dd5d1d88b96a0e818d17be7ea59bc0041e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_216f14ce0c052ac184066afe482f9f00811ec88ffc2747edb08a17c073687939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_216f14ce0c052ac184066afe482f9f00811ec88ffc2747edb08a17c073687939->enter($__internal_216f14ce0c052ac184066afe482f9f00811ec88ffc2747edb08a17c073687939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_216f14ce0c052ac184066afe482f9f00811ec88ffc2747edb08a17c073687939->leave($__internal_216f14ce0c052ac184066afe482f9f00811ec88ffc2747edb08a17c073687939_prof);

        
        $__internal_347ebe0b07c22d019a5a88629085dd5d1d88b96a0e818d17be7ea59bc0041e02->leave($__internal_347ebe0b07c22d019a5a88629085dd5d1d88b96a0e818d17be7ea59bc0041e02_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_53af8ee2f424aa47c603c189b48fae97cd7ebea5abf7ef29ee7497737c616aa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53af8ee2f424aa47c603c189b48fae97cd7ebea5abf7ef29ee7497737c616aa2->enter($__internal_53af8ee2f424aa47c603c189b48fae97cd7ebea5abf7ef29ee7497737c616aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_58d7bd951f8831e2a8d75799eca71bb1dc18c507261b59a1028c6d310f278ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d7bd951f8831e2a8d75799eca71bb1dc18c507261b59a1028c6d310f278ee4->enter($__internal_58d7bd951f8831e2a8d75799eca71bb1dc18c507261b59a1028c6d310f278ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_58d7bd951f8831e2a8d75799eca71bb1dc18c507261b59a1028c6d310f278ee4->leave($__internal_58d7bd951f8831e2a8d75799eca71bb1dc18c507261b59a1028c6d310f278ee4_prof);

        
        $__internal_53af8ee2f424aa47c603c189b48fae97cd7ebea5abf7ef29ee7497737c616aa2->leave($__internal_53af8ee2f424aa47c603c189b48fae97cd7ebea5abf7ef29ee7497737c616aa2_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/aluno/Edinaldo/www/Livraria/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
