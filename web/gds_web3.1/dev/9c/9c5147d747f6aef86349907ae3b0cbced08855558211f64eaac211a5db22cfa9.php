<?php

/* formulaires/stagiaire_periode_date.twig */
class __TwigTemplate_8bb6e82f47d5e918b32b16244acd420258ac3b4f757226be41a5fcaadc8e96fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<form action=\"stagiaire.php\" method=\"post\">
            <div class=\"form-group\">   
             <label>Date début</label>\t
             <input type=\"date\" name=\"dateDebut\">
            </div>
            <div class=\"form-group\">   
             <label>Date fin</label>\t
             <input type=\"date\" name=\"dateFin\">
            </div>
            <button name=\"date\" type=\"submit\" class=\"btn btn-default\">Envoyer</button> 
            </form>\t";
    }

    public function getTemplateName()
    {
        return "formulaires/stagiaire_periode_date.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "formulaires/stagiaire_periode_date.twig", "C:\\wamp64\\www\\gds_web3\\vues\\formulaires\\stagiaire_periode_date.twig");
    }
}