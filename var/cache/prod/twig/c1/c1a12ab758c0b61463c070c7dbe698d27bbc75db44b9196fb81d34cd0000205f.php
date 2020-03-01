<?php

/* __string_template__01dddefce36f599bc361bd9318d300d657534b0acad19b56bf5753d8f68ae385 */
class __TwigTemplate_b5a8642f415ff84392d51451af7de9a477401235d123f2956e3f8339d0ca863b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Modes de paiement • Hidaya-Mode</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPayment';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'BE';
    var _PS_VERSION_ = '1.7.5.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\\\\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '95aaddde5a8c02091b3a202ef66b3b68';
    var token_admin_orders = 'be9790e94be41e9ab4e7c40a9d4b1371';
    var token_admin_customers = 'aaafa726d14aa6cfa3769d65090c5c23';
    var token_admin_customer_threads = '518d57a682115b2d7228b5d34d8afdc3';
    var currentIndex = 'index.php?controller=AdminPayment';
    var employee_token = '46969913d4df926dae90202b81945ad0';
    var choose_language_translate = 'Choisissez la langue';
    var default_language = '1';
    var admin_modules_link = '/admin1019/index.php/improve/modules/catalog/recommended?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\\\\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/modules/emarketing/views/css/menuTabIcon.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin1019/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/boxtalconnect/views/css/notices.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin1019/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_checkout/views/css/adminAfterHeader.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin1019\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"euro\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/boxtalconnect/views/js/polyfills.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/boxtalconnect/views/js/notices.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin1019/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.5.1\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.5.1\"></script>
<script type=\"text/javascript\" src=\"/admin1019/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin1019/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"https:\\/\\/hidaya-mode.com\\/admin1019\\/index.php?controller=AdminGamification&token=12dbc16ea71c86b503bc6cee664ae995\";
            var current_id_tab = 62;
        </script>

";
        // line 84
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-fr adminpayment\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminDashboard&amp;token=29313fd0494b9c0ed851772553c97a1f\"></a>
    <span id=\"shop_version\">1.7.5.1</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminOrders&amp;token=be9790e94be41e9ab4e7c40a9d4b1371\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item\"
         href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=8c5408744296878cf3f83819cd49d493\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item\"
         href=\"https://hidaya-mode.com/admin1019/index.php/improve/modules/manage?token=da90de24494536a3ca36f819fbac8f09\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item\"
         href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=c4f0d0d4df84627913a7c69989cdebf8\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"https://hidaya-mode.com/admin1019/index.php/sell/catalog/products/new?token=da90de24494536a3ca36f819fbac8f09\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminCategories&amp;addcategory&amp;token=63cbd77371ebeae95008bc24fd68fd6b\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"32\"
        data-icon=\"icon-AdminParentPayment\"
        data-method=\"add\"
        data-url=\"index.php/improve/payment/payment_methods\"
        data-post-link=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminQuickAccesses&token=f876b3eed80659c04344980ba938aed7\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Modes de paiement - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter cette page à l'Accès Rapide
      </a>
        <a class=\"dropdown-item\" href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminQuickAccesses&token=f876b3eed80659c04344980ba938aed7\">
      <i class=\"material-icons\">settings</i>
      Gérer les accès rapides
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin1019/index.php?controller=AdminSearch&amp;token=f7290d12cbfc668dae45500f137b4f4c\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, unité de gestion des stocks (SKU), référence...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nom...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
    </div>

            <div class=\"component\" id=\"header-shop-list-container\">
        <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://hidaya-mode.com/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Voir ma boutique
    </a>
  </div>
    </div>
          <div class=\"component header-right-component\" id=\"header-notifications-container\">
        <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=27ba546292dd84c39b8738bd60d9d67b\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
      </div>
        <div class=\"component\" id=\"header-employee-container\">
      <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"https://profile.prestashop.com/c.yassine%40hotmail.com.jpg\" />
      <span>Yassine Chaoui</span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminEmployees&amp;id_employee=1&amp;updateemployee=1&amp;token=46969913d4df926dae90202b81945ad0\">
      <i class=\"material-icons\">settings_applications</i>
      Votre profil
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminLogin&amp;logout=1&amp;token=c27f350b78eee920540f298f70011272\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
    </div>

      </nav>
  </header>

<nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminDashboard&amp;token=29313fd0494b9c0ed851772553c97a1f\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vendre</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminOrders&amp;token=be9790e94be41e9ab4e7c40a9d4b1371\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Commandes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminOrders&amp;token=be9790e94be41e9ab4e7c40a9d4b1371\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/admin1019/index.php/sell/orders/invoices/?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\"> Factures
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminSlip&amp;token=9009cddd8b411d6429524ee8228259d8\" class=\"link\"> Avoirs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/admin1019/index.php/sell/orders/delivery-slips/?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\"> Bons de livraison
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminCarts&amp;token=27ba546292dd84c39b8738bd60d9d67b\" class=\"link\"> Paniers
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/admin1019/index.php/sell/catalog/products?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catalogue
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/admin1019/index.php/sell/catalog/products?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminCategories&amp;token=63cbd77371ebeae95008bc24fd68fd6b\" class=\"link\"> Catégories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminTracking&amp;token=6284ce2a053f48c8454594a2c06cf970\" class=\"link\"> Suivi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminAttributesGroups&amp;token=d97bdb7132a357050c11d1d3f45b3b28\" class=\"link\"> Attributs &amp; caractéristiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminManufacturers&amp;token=b273e94aca6991de4dc5e0188c794685\" class=\"link\"> Marques et fournisseurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminAttachments&amp;token=109fe40af5aef5eac3d93308df0052bb\" class=\"link\"> Fichiers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminCartRules&amp;token=c4f0d0d4df84627913a7c69989cdebf8\" class=\"link\"> Réductions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/admin1019/index.php/sell/stocks/?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminCustomers&amp;token=aaafa726d14aa6cfa3769d65090c5c23\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clients
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminCustomers&amp;token=aaafa726d14aa6cfa3769d65090c5c23\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminAddresses&amp;token=d5d41a02f0f3eda0323e66acb2fc90de\" class=\"link\"> Adresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminCustomerThreads&amp;token=518d57a682115b2d7228b5d34d8afdc3\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    SAV
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminCustomerThreads&amp;token=518d57a682115b2d7228b5d34d8afdc3\" class=\"link\"> SAV
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminOrderMessage&amp;token=6b42f30f79c88ec5deba73a1f6e2c560\" class=\"link\"> Messages prédéfinis
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminReturn&amp;token=49cd1537b3a913a74edb5826b649517d\" class=\"link\"> Retours produits
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminStats&amp;token=8c5408744296878cf3f83819cd49d493\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Statistiques
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                                    
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personnaliser</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminPsMboModule&amp;token=c68ed1ef50e43ac07383606d92c463d3\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Modules
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminPsMboModule&amp;token=c68ed1ef50e43ac07383606d92c463d3\" class=\"link\"> Catalogue de modules
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"47\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/admin1019/index.php/improve/modules/manage?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminThemes&amp;token=0c2b02aa73b133f76d414c1d25b3c07f\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Apparence
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"123\" id=\"subtab-AdminThemesParent\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminThemes&amp;token=0c2b02aa73b133f76d414c1d25b3c07f\" class=\"link\"> Thème et logo
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"132\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminPsMboTheme&amp;token=ac66535cc3fddae921fae64e792d647e\" class=\"link\"> Catalogue de thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminCmsContent\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminCmsContent&amp;token=e5bfcc714bbeae524b8a5510cf7632db\" class=\"link\"> Pages de contenu (CMS)
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/admin1019/index.php/improve/design/modules/positions/?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminImages\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminImages&amp;token=d57ca42f58d033da6b9a17c446eacb8b\" class=\"link\"> Images
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"122\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminLinkWidget&amp;token=6627f74892d23927d8fd9a9c81205418\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"58\" id=\"subtab-AdminParentShipping\">
                  <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminCarriers&amp;token=85ce67178f8d2e3be4c849f9790da2cc\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Livraison
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-58\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminCarriers\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminCarriers&amp;token=85ce67178f8d2e3be4c849f9790da2cc\" class=\"link\"> Transporteurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminShipping\">
                              <a href=\"/admin1019/index.php/improve/shipping/preferences?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"146\" id=\"subtab-AdminShippingMethod\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminShippingMethod&amp;token=0c52e8982e4af4d9f785d95c6ebe1106\" class=\"link\"> Boxtal Connect
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"61\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/admin1019/index.php/improve/payment/payment_methods?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Paiement
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-61\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"62\" id=\"subtab-AdminPayment\">
                              <a href=\"/admin1019/index.php/improve/payment/payment_methods?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\"> Modes de paiement
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"63\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/admin1019/index.php/improve/payment/preferences?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"64\" id=\"subtab-AdminInternational\">
                  <a href=\"/admin1019/index.php/improve/international/localization/?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    International
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-64\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/admin1019/index.php/improve/international/localization/?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\"> Localisation
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"70\" id=\"subtab-AdminParentCountries\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminZones&amp;token=4662568fc9f90c993a7a615ccb6d9bd7\" class=\"link\"> Zones géographiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminTaxes&amp;token=2d3d2fc60898536a9fca453a1f8d6eec\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\" id=\"subtab-AdminTranslations\">
                              <a href=\"/admin1019/index.php/improve/international/translations/settings?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\"> Traductions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"128\" id=\"subtab-AdminEmarketing\">
                  <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminEmarketing&amp;token=fac4142fb36ae90b4917957748e74694\" class=\"link\">
                    <i class=\"material-icons mi-track_changes\">track_changes</i>
                    <span>
                    Advertising
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"78\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurer</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"79\" id=\"subtab-ShopParameters\">
                  <a href=\"/admin1019/index.php/configure/shop/preferences/preferences?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Paramètres de la boutique
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-79\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/admin1019/index.php/configure/shop/preferences/preferences?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\"> Paramètres généraux
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"83\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/admin1019/index.php/configure/shop/order-preferences/?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/admin1019/index.php/configure/shop/product-preferences/?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"87\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/admin1019/index.php/configure/shop/customer-preferences/?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"91\" id=\"subtab-AdminParentStores\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminContacts&amp;token=4874d72ee5b5b5c5b1502cedea7a3d46\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"94\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/admin1019/index.php/configure/shop/seo-urls/?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\"> Trafic et SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminSearchConf&amp;token=8e2ffde867487976321c548348e781ef\" class=\"link\"> Rechercher
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"127\" id=\"subtab-AdminGamification\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminGamification&amp;token=12dbc16ea71c86b503bc6cee664ae995\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"101\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/admin1019/index.php/configure/advanced/system-information/?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Paramètres avancés
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-101\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminInformation\">
                              <a href=\"/admin1019/index.php/configure/advanced/system-information/?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\"> Informations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"103\" id=\"subtab-AdminPerformance\">
                              <a href=\"/admin1019/index.php/configure/advanced/performance/?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\"> Performances
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/admin1019/index.php/configure/advanced/administration/?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminEmails\">
                              <a href=\"/admin1019/index.php/configure/advanced/emails/?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminImport\">
                              <a href=\"/admin1019/index.php/configure/advanced/import/?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\"> Importer
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminEmployees&amp;token=46969913d4df926dae90202b81945ad0\" class=\"link\"> Équipe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"111\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminRequestSql&amp;token=3c31a6ae475aa65e2feb7080f3b0be39\" class=\"link\"> Base de données
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"114\" id=\"subtab-AdminLogs\">
                              <a href=\"/admin1019/index.php/configure/advanced/logs/?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"115\" id=\"subtab-AdminWebservice\">
                              <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminWebservice&amp;token=d961382abf208bdd7ca394d4288903db\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"143\" id=\"tab-AdminPayPlug\">
              <span class=\"title\">PayPlug</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"144\" id=\"subtab-AdminPayPlugInstallment\">
                  <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminPayPlugInstallment&amp;token=0ed94785b2c0afd2ba90e35e9bfc5c24\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Paiements en plusieurs fois
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Paiement</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin1019/index.php/improve/payment/payment_methods?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\" aria-current=\"page\">Modes de paiement</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Modes de paiement          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
             

<script>
    
    var isSymfonyContext = true;
    var admin_module_ajax_url_psmbo = 'https://hidaya-mode.com/admin1019/index.php?controller=AdminPsMboModule&token=c68ed1ef50e43ac07383606d92c463d3';
    var controller = 'AdminPayment';
    
    if (isSymfonyContext === false) {
        
        \$(document).ready(function() {
            
            \$('.process-icon-modules-list').parent('a').prop('href', admin_module_ajax_url_psmbo);
            
            \$('.fancybox-quick-view').fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });
        });
    }
\t
\t\$(document).on('click', '#page-header-desc-configuration-modules-list', function(event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
\t
\t\$('.process-icon-modules-list').parent('a').unbind().bind('click', function (event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
    
    function openModalOrRedirect(isSymfonyContext) {
        if (isSymfonyContext === false) {
            \$('#modules_list_container').modal('show');
            openModulesList();
        } else {
            window.location.href = admin_module_ajax_url_psmbo;
        }
    }
\t
    function openModulesList() {
        \$.ajax({
            type: 'POST',
            url: admin_module_ajax_url_psmbo,
            data: {
                ajax : true,
                action : 'GetTabModulesList',
                controllerName: controller
            },
            success : function(data) {
                \$('#modules_list_container_tab_modal').html(data).slideDown();
                \$('#modules_list_loader').hide();
            },
        });
    }
\t
\t
</script>

                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin1019/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminPayment%253Fversion%253D1.7.5.1%2526country%253Dfr/Aide?_token=FMtuVpz6ynkerNYF5nT9H_Ynropj5bhWSQL3YNMSIT0\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    
</div>
    
    <div class=\"content-div  \">

      
<script>
    var ajaxLink = \"https://hidaya-mode.com/admin1019/index.php?controller=AdminAjax&token=e63dfd6312d7cef7893d7da61555429d\";
</script>

<div class=\"bootstrap bx-notice\">
    <div class=\"module_warning alert alert-warning\">
    <p>
        Lancez l’assistant de configuration pour connecter votre boutique PrestaShop à Boxtal.    </p>
    <p>
        <a href=\"https://www.boxtal.com/onboarding?acceptLanguage=fr&email=c.yassine%40hotmail.com&shopUrl=https%3A%2F%2Fhidaya-mode.com%2F&shopType=prestashop\" target=\"_blank\">
            Je connecte ma boutique        </a>
    </p>
</div>

</div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card\">
                <h3 class=\"card-header\">
                    <i class=\"material-icons\">extension</i> Un module, tous les moyens de paiement.
                </h3>
                <div class=\"card-block\">
                    <div class=\"module-item-list\">
                        <div class=\"row module-item-wrapper-list py-3\">
                            <div class=\"col-12 col-sm-2 col-md-2 col-lg-3\">
                                <div class=\"img m-auto\">
                                </div>
                            </div>
                            <div class=\"row col-12 col-sm-6 col-md-7 col-lg-7 pl-0\">
                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-8 pl-0\">
                                    <ul class=\"text-muted\">
                                        <li class=\"mb-1\">Offrez le plus grand nombre de moyens de paiement : carte, PayPal, etc.</li>
                                        <li class=\"mb-1\">Bénéficiez de l'expertise et de tous les avantages de PayPal</li>
                                        <li>Donnez accès à tous les moyens de paiement locaux préférés de vos clients à travers le monde</li>
                                    </ul>
                                </div>
                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 pl-0\">
                                    <label class=\"text-muted\">
                                        Inclus : 
                                    </label>
                                    <div>
                                        <img class=\"payment-icon\" src=\"/modules/ps_checkout/views/img/paypal.jpg\" alt=\"\">
                                        <img class=\"payment-icon\" src=\"/modules/ps_checkout/views/img/visa.jpg\" alt=\"\">
                                        <img class=\"payment-icon\" src=\"/modules/ps_checkout/views/img/mastercard.jpg\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-12 col-sm-4 col-md-3 col-lg-2 mb-3 m-auto\">
                                <div class=\"text-center\">
                                    <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminModules&amp;configure=ps_checkout&amp;token=6486051ae61a7d43e800960f3b9dc209\" class=\"btn btn-primary-reverse btn-outline-primary light-button\">
                                        Configurer
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


      
                        
      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1220
        $this->displayBlock('content_header', $context, $blocks);
        // line 1221
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1222
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1223
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1224
        echo "
           
<div class=\"modal fade\" id=\"modules_list_container\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h3 class=\"modal-title\">Modules et services recommandés</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"modules_list_container_tab_modal\" style=\"display:none;\"></div>
\t\t\t\t<div id=\"modules_list_loader\"><i class=\"icon-refresh icon-spin\"></i></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div> <div id=\"admin-end-content-footer\" class=\"container\">

 </div>

<script type=\"text/javascript\">
    \$(document).ready(function(){

        \$.ajax({
            type: 'POST',
            headers: { \"cache-control\": \"no-cache\" },
            url: 'index.php?controller=AdminPsMboModule&token=c68ed1ef50e43ac07383606d92c463d3',
            async: true,
            cache: false,
            dataType : \"html\",
            data: {
                ajax: '1',
                action:'fetchModules',
                controller_page: 'AdminPayment',
                legacy: '0'
            },
            beforeSend: function() {
                \$('#admin-end-content-footer').html('<i class=\"icon-refresh icon-spin\"></i>');
            },
            success: function(data) {
                \$('#admin-end-content-footer').html(data);
            }
        });


        \$('.controller-quick-view').each(function() {
            \$(this).fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                },
                href: \$(this).attr('href') + '&action=GetModuleQuickView&module_name=' + \$(this).attr('data-name') + '&ajax=1'
            });
        });
    });
</script>

        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"https://hidaya-mode.com/admin1019/index.php?controller=AdminDashboard&amp;token=29313fd0494b9c0ed851772553c97a1f\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
<div class=\"mobile-layer\"></div>

  <div id=\"footer\" class=\"bootstrap\">
    
</div>


  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=c.yassine%40hotmail.com&amp;firstname=Yassine&amp;lastname=Chaoui&amp;website=http%3A%2F%2Fhidaya-mode.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin1019/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=c.yassine%40hotmail.com&amp;firstname=Yassine&amp;lastname=Chaoui&amp;website=http%3A%2F%2Fhidaya-mode.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1393
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 84
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1220
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1221
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1222
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1223
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1393
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__01dddefce36f599bc361bd9318d300d657534b0acad19b56bf5753d8f68ae385";
    }

    public function getDebugInfo()
    {
        return array (  1472 => 1393,  1467 => 1223,  1462 => 1222,  1457 => 1221,  1452 => 1220,  1443 => 84,  1435 => 1393,  1264 => 1224,  1261 => 1223,  1258 => 1222,  1255 => 1221,  1253 => 1220,  113 => 84,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__01dddefce36f599bc361bd9318d300d657534b0acad19b56bf5753d8f68ae385", "");
    }
}
