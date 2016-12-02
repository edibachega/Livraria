<?php

/* base.html.twig */
class __TwigTemplate_28756b3535081277a730ab8f11ec2b248df27ac1f300bbe2c98de236e9841783 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_485a25f007c6954da4f57ef332840a175d2fd03d834f1cb82a22a4931d28a10a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_485a25f007c6954da4f57ef332840a175d2fd03d834f1cb82a22a4931d28a10a->enter($__internal_485a25f007c6954da4f57ef332840a175d2fd03d834f1cb82a22a4931d28a10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_62c774074e673855f9a9f85ba1b465509d052bc04a860b17220e7c8109251e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62c774074e673855f9a9f85ba1b465509d052bc04a860b17220e7c8109251e17->enter($__internal_62c774074e673855f9a9f85ba1b465509d052bc04a860b17220e7c8109251e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_485a25f007c6954da4f57ef332840a175d2fd03d834f1cb82a22a4931d28a10a->leave($__internal_485a25f007c6954da4f57ef332840a175d2fd03d834f1cb82a22a4931d28a10a_prof);

        
        $__internal_62c774074e673855f9a9f85ba1b465509d052bc04a860b17220e7c8109251e17->leave($__internal_62c774074e673855f9a9f85ba1b465509d052bc04a860b17220e7c8109251e17_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_11723fed791e505de81a464c9a30bffc80ed5e170e4f3d6d0928065391adf33c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11723fed791e505de81a464c9a30bffc80ed5e170e4f3d6d0928065391adf33c->enter($__internal_11723fed791e505de81a464c9a30bffc80ed5e170e4f3d6d0928065391adf33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_beb683c54d075dccb4af05df51e74da0da7962d4dee9522f444d3ad5b9301c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb683c54d075dccb4af05df51e74da0da7962d4dee9522f444d3ad5b9301c4d->enter($__internal_beb683c54d075dccb4af05df51e74da0da7962d4dee9522f444d3ad5b9301c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_beb683c54d075dccb4af05df51e74da0da7962d4dee9522f444d3ad5b9301c4d->leave($__internal_beb683c54d075dccb4af05df51e74da0da7962d4dee9522f444d3ad5b9301c4d_prof);

        
        $__internal_11723fed791e505de81a464c9a30bffc80ed5e170e4f3d6d0928065391adf33c->leave($__internal_11723fed791e505de81a464c9a30bffc80ed5e170e4f3d6d0928065391adf33c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4e83c13488ff2f1f56c065dea732e6a0ac385d1f430a5d4ed418155a6cbd84ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e83c13488ff2f1f56c065dea732e6a0ac385d1f430a5d4ed418155a6cbd84ae->enter($__internal_4e83c13488ff2f1f56c065dea732e6a0ac385d1f430a5d4ed418155a6cbd84ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0a7450e3cd03a194659374deccfe9e88274180082ff9f60e3915045b9fc140e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7450e3cd03a194659374deccfe9e88274180082ff9f60e3915045b9fc140e4->enter($__internal_0a7450e3cd03a194659374deccfe9e88274180082ff9f60e3915045b9fc140e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0a7450e3cd03a194659374deccfe9e88274180082ff9f60e3915045b9fc140e4->leave($__internal_0a7450e3cd03a194659374deccfe9e88274180082ff9f60e3915045b9fc140e4_prof);

        
        $__internal_4e83c13488ff2f1f56c065dea732e6a0ac385d1f430a5d4ed418155a6cbd84ae->leave($__internal_4e83c13488ff2f1f56c065dea732e6a0ac385d1f430a5d4ed418155a6cbd84ae_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b8d71ce431c69f2c2ce1b1778a8610607e6ca1daf4d44f35361d9250361b0fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b8d71ce431c69f2c2ce1b1778a8610607e6ca1daf4d44f35361d9250361b0fa->enter($__internal_1b8d71ce431c69f2c2ce1b1778a8610607e6ca1daf4d44f35361d9250361b0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_036d96e7037f8d26b7035efb85e9156f3b89308a0f33a90867cbcdff2f823ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036d96e7037f8d26b7035efb85e9156f3b89308a0f33a90867cbcdff2f823ed1->enter($__internal_036d96e7037f8d26b7035efb85e9156f3b89308a0f33a90867cbcdff2f823ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_036d96e7037f8d26b7035efb85e9156f3b89308a0f33a90867cbcdff2f823ed1->leave($__internal_036d96e7037f8d26b7035efb85e9156f3b89308a0f33a90867cbcdff2f823ed1_prof);

        
        $__internal_1b8d71ce431c69f2c2ce1b1778a8610607e6ca1daf4d44f35361d9250361b0fa->leave($__internal_1b8d71ce431c69f2c2ce1b1778a8610607e6ca1daf4d44f35361d9250361b0fa_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c8930762b82dca099a1ab6d9d1683f9576fedad30ae5e977b9f52ff2b4bf594c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8930762b82dca099a1ab6d9d1683f9576fedad30ae5e977b9f52ff2b4bf594c->enter($__internal_c8930762b82dca099a1ab6d9d1683f9576fedad30ae5e977b9f52ff2b4bf594c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e4504d64824a93e3a735967cbf92130040de9bd1d893c57afc51a305eb5c9735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4504d64824a93e3a735967cbf92130040de9bd1d893c57afc51a305eb5c9735->enter($__internal_e4504d64824a93e3a735967cbf92130040de9bd1d893c57afc51a305eb5c9735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e4504d64824a93e3a735967cbf92130040de9bd1d893c57afc51a305eb5c9735->leave($__internal_e4504d64824a93e3a735967cbf92130040de9bd1d893c57afc51a305eb5c9735_prof);

        
        $__internal_c8930762b82dca099a1ab6d9d1683f9576fedad30ae5e977b9f52ff2b4bf594c->leave($__internal_c8930762b82dca099a1ab6d9d1683f9576fedad30ae5e977b9f52ff2b4bf594c_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/aluno/Edinaldo/www/Livraria/app/Resources/views/base.html.twig");
    }
}
