<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/commerce/modules/promotion/templates/commerce-coupon-redemption-form.html.twig */
class __TwigTemplate_221c168285421a9ab9577933249971a3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupons", [], "any", false, false, true, 14))) {
            // line 15
            echo "  ";
            if (((($__internal_compile_0 = ($context["form"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#cardinality"] ?? null) : null) == 1)) {
                // line 16
                echo "    <div class=\"coupon-redemption-form__coupons coupon-redemption-form__coupons--single\">
      <p>
        <br>";
                // line 18
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("You applied the coupon %code to the order.", ["%code" => $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupons", [], "any", false, false, true, 18), 0, [], "any", false, false, true, 18), "code", [], "any", false, false, true, 18), 18, $this->source))]));
                echo "
      </p>
      ";
                // line 20
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupons", [], "any", false, false, true, 20), 0, [], "any", false, false, true, 20), "remove_button", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "
    </div>
  ";
            } else {
                // line 23
                echo "    <div class=\"coupon-redemption-form__coupons coupon-redemption-form__coupons--multiple\">
      <h3> ";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Applied coupons"));
                echo " </h3>
      <table>
        ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupons", [], "any", false, false, true, 26));
                foreach ($context['_seq'] as $context["key"] => $context["coupon"]) {
                    if ((twig_first($this->env, $context["key"]) != "#")) {
                        // line 27
                        echo "          <tr>
            <td> ";
                        // line 28
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                        echo " </td>
            <td> ";
                        // line 29
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["coupon"], "remove_button", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                        echo " </td>
          </tr>
        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['coupon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "      </table>
    </div>
  ";
            }
        }
        // line 36
        echo "
";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 37, $this->source), "coupons"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/commerce/modules/promotion/templates/commerce-coupon-redemption-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  95 => 36,  89 => 32,  79 => 29,  75 => 28,  72 => 27,  67 => 26,  62 => 24,  59 => 23,  53 => 20,  48 => 18,  44 => 16,  41 => 15,  39 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/commerce/modules/promotion/templates/commerce-coupon-redemption-form.html.twig", "C:\\xampp\\htdocs\\e-commerce\\web\\modules\\contrib\\commerce\\modules\\promotion\\templates\\commerce-coupon-redemption-form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14, "for" => 26);
        static $filters = array("length" => 14, "t" => 18, "render" => 18, "escape" => 20, "first" => 26, "without" => 37);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['length', 't', 'render', 'escape', 'first', 'without'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
