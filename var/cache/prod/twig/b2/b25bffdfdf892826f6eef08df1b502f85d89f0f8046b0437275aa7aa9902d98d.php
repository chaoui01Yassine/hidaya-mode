<?php

/* @PrestaShop/Admin/Improve/Payment/PaymentMethods/Blocks/payment_modules_list.html.twig */
class __TwigTemplate_b880974de5b40007fc9081cc784e28ea0660776fc1448a751c02cf17ff382ae5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'payment_methods_module_list' => array($this, 'block_payment_methods_module_list'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('payment_methods_module_list', $context, $blocks);
    }

    public function block_payment_methods_module_list($context, array $blocks = array())
    {
        // line 28
        echo "  ";
        if ((twig_length_filter($this->env, ($context["paymentModules"] ?? null)) > 0)) {
            // line 29
            echo "  <div class=\"module-item-list\">
  ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["paymentModules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 31
                echo "    <div class=\"row module-item-wrapper-list border-bottom mb-sm-3\">
      <div class=\"col-12 col-sm-2 col-md-1 col-lg-1\">
        <div class=\"module-logo-thumb-list text-center\">
          <img src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "img", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array()), "html", null, true);
                echo "\"/>
        </div>
      </div>
      <div class=\"col-12 col-sm-6 col-md-8 col-lg-9 pl-0\">
        <p class=\"mb-0\">
          ";
                // line 39
                echo $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array());
                echo "
          <span class=\"text-muted\">
            ";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("v%version% - by %author%", array("%version%" => $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "version", array()), "%author%" => $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "author", array())), "Admin.Modules.Feature"), "html", null, true);
                echo "
          </span>
        </p>
        <p class=\"text-muted\">
          ";
                // line 45
                echo $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "description", array());
                echo "
        </p>
      </div>
      ";
                // line 48
                if ($this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "is_configurable", array())) {
                    // line 49
                    echo "      <div class=\"col-12 col-sm-4 col-md-3 col-lg-2 mb-3\">
        <div class=\"text-center\">
          <a href=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_configure_action", array("module_name" => $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "name", array()))), "html", null, true);
                    echo "\"
             class=\"btn btn-primary-reverse btn-outline-primary light-button\"
          >
            ";
                    // line 54
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configure", array(), "Admin.Global"), "html", null, true);
                    echo "
          </a>
        </div>
      </div>
      ";
                }
                // line 59
                echo "    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "  </div>
  ";
        } else {
            // line 63
            echo "    <div class=\"alert alert-warning\" role=\"alert\">
      <p class=\"alert-text\">
        ";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("It seems there are no recommended payment solutions for your country.", array(), "Admin.Payment.Notification"), "html", null, true);
            echo " <br>
        <a class=\"_blank\" href=\"https://www.prestashop.com/en/contact-us\">";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Do you think there should be one? Let us know!", array(), "Admin.Shipping.Feature"), "html", null, true);
            echo "</a>
      </p>
    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Payment/PaymentMethods/Blocks/payment_modules_list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  111 => 66,  107 => 65,  103 => 63,  99 => 61,  92 => 59,  84 => 54,  78 => 51,  74 => 49,  72 => 48,  66 => 45,  59 => 41,  54 => 39,  44 => 34,  39 => 31,  35 => 30,  32 => 29,  29 => 28,  23 => 27,  20 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Improve/Payment/PaymentMethods/Blocks/payment_modules_list.html.twig", "/home/hidayamoyo/www/src/PrestaShopBundle/Resources/views/Admin/Improve/Payment/PaymentMethods/Blocks/payment_modules_list.html.twig");
    }
}
