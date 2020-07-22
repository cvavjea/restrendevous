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

/* user/register.html.twig */
class __TwigTemplate_de07b87ddf64c790b74f3a49aed4f59d785c1ed5348bd458df55cb7713ea9e2b extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title> Collabus | Inscription </title>

  ";
        // line 28
        echo "
  <style>
    .intl-tel-input {
      position: relative;
      display: inline-block;
      width: 100%;
    }

  </style>
</head>

<body class=\"login\">
<div>
  <a class=\"hiddenanchor\" id=\"signin\"></a>

  <div class=\"login_wrapper\">
    <div  class=\"animate form login_form\">
      <section class=\"login_content\">
        <form id=\"register_form\" action=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\" method=\"post\">
          <h2>Inscrivez vous</h2>
          <div class=\"row\">
            <div class=\"col col-lg-12 col-xs-12 col-md-12 col-xs-12 col-md-12 col-xs-12 col-md-12\">
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "lastName", [], "any", false, false, false, 50), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nom de famille"]]);
        echo "
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col col-lg-12 col-xs-12 col-md-12 col-xs-12 col-md-12\">
                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "firstName", [], "any", false, false, false, 55), 'row');
        echo "
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col col-lg-12 col-xs-12 col-md-12 col-xs-12 col-md-12\">
                <span id=\"error-msg\"></span>
                <span id=\"valid-msg\"></span>
                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "tel", [], "any", false, false, false, 62), 'row');
        echo "
            </div>
          </div>
            <br/>

          <div class=\"row\">
            <div class=\"col col-lg-12 col-xs-12 col-md-12 col-xs-12 col-md-12\">
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "sexe", [], "any", false, false, false, 69), 'row');
        echo "
            </div>
          </div>

          <br/>
          <div class=\"row\">
            <div class=\"col col-lg-12 col-xs-12 col-md-12 col-xs-12 col-md-12\">
                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "email", [], "any", false, false, false, 76), 'row');
        echo "
            </div>

          </div>

          <div class=\"row\">
            <div class=\"col col-lg-12 col-xs-12 col-md-12 col-xs-12 col-md-12\">
                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "username", [], "any", false, false, false, 83), 'row');
        echo "
            </div>
          </div>

          <div class=\"row\">
            <div class=\"col col-lg-12 col-xs-12 col-md-12 col-xs-12 col-md-12\">
                ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "plainPassword", [], "any", false, false, false, 89), 'row');
        echo "

              <div class=\"item form-group\">

                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "dialcode", [], "any", false, false, false, 94), 'row', ["attr" => ["class" => "form-control hide  col-md-12 col-xs-12 "]]);
        echo "
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12 hidden\">
                    ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "adresse", [], "any", false, false, false, 97), 'row', ["attr" => ["class" => "form-control hide  col-md-12 col-xs-12 "]]);
        echo "
                </div>
              </div>
              <div style=\"margin-left:25%\">
                <input type=\"submit\"  class=\"btn btn-primary \" value=\"Soumettre\" id=\"Soumettre\">
              </div>
            </div>
          </div>
            ";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), 'form_end');
        echo "
            ";
        // line 118
        echo "

          <div class=\"clearfix\"></div>
          <div class=\"separator\">
            <p class=\"change_link\">Déjà membre ?
              <a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"to_register\" id=\"title_login\"> S'identifier </a>
            </p>

            <div class=\"clearfix\"></div>
            <br />

            ";
        // line 133
        echo "          </div>
        </form>

      </section>
    </div>
  </div>
</div>
";
        // line 144
        echo "
<script>


    var input = document.querySelector(\"#user_tel\");

    var iti =   intlTelInput(input, {
        // allowDropdown: false,
        // autoHideDialCode: false,
        // autoPlaceholder: \"off\",
        // dropdownContainer: document.body,
        // excludeCountries: [\"us\"],
        // formatOnDisplay: false,
        geoIpLookup: function(callback) {
            \$.get(\"http://ipinfo.io\", function() {}, \"jsonp\").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : \"\";
                callback(countryCode);
            });
        },
        // hiddenInput: \"full_number\",
        // initialCountry: \"auto\",
        // localizedCountries: { 'de': 'Deutschland' },
        // nationalMode: false,
        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        placeholderNumberType: \"MOBILE\",
        preferredCountries: ['bj','bf','ci','gw','ml','ne','sn','tg'],
         separateDialCode: true,
        utilsScript: \"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/intl-tel-input/build/js/utils.js"), "html", null, true);
        echo "\",
    });



    window.iti;

    var countryData = iti.getSelectedCountryData();


    errorMsg = document.querySelector(\"#error-msg\"),
        validMsg = document.querySelector(\"#valid-msg\");

    // here, the index maps to the error code returned from getValidationError - see readme
    var errorMap = [ \"Numéro invalide\", \"Code de pays invalide\", \"Trop court\", \"Trop long\", \"Numéro invalide\"];
    var reset = function() {
        input.classList.remove(\"error\");
        errorMsg.innerHTML = \"\";
        errorMsg.classList.add(\"hide\");
        validMsg.classList.add(\"hide\");

    };


    // on blur: validate
    input.addEventListener('blur', function() {
        reset();
        if (input.value.trim()) {
            if (iti.isValidNumber()) {
                validMsg.classList.remove(\"hide\");
                validMsg.innerHTML = \"Numéro valide\";
                //control_espace_message.innerHTML = \" \";
                \$(\"#Soumettre\").removeAttr('disabled');
            } else {
                input.classList.add(\"error\");
                var errorCode = iti.getValidationError();
                errorMsg.innerHTML = errorMap[errorCode];
                errorMsg.classList.remove(\"hide\");
               // control_espace_message.innerHTML = \" \";
                \$(\"#Soumettre\").attr('disabled','disabled');
            }
        }

    });


    ";
        // line 217
        if (0 !== twig_compare((isset($context["defaultdialcode"]) || array_key_exists("defaultdialcode", $context) ? $context["defaultdialcode"] : (function () { throw new RuntimeError('Variable "defaultdialcode" does not exist.', 217, $this->source); })()), "")) {
            // line 218
            echo "    iti.setNumber(\"\");
    ";
        }
        // line 220
        echo "
    // on keyup / change flag: reset
    input.addEventListener('change', reset);
    input.addEventListener('keyup', reset);
    \$(function(){
        \$(\"#Soumettre\").on('click',function(e){

            var countryData = iti.getSelectedCountryData();
            \$('#user_dialcode').val(countryData['dialCode'])
            e.preventDefault();
            \$(\"#register_form\").submit();
        })
    });


    \$(\"#user_username\").change(function() {
        var input = \$(this).val();
        var regex = new RegExp(\"[A-Za-z0-9](([_\\.\\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\\.\\-]?[a-zA-Z0-9]+)*)\\.([A-Za-z]{2,})\") ;
        if (regex.test(input)) {
            \$(\"#Soumettre\").attr('disabled','disabled');
        } else {
           // \$(this).val(input.substr(0, input.length-1));
            \$(\"#Soumettre\").removeAttr('disabled');
        }
    });


</script>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 220,  275 => 218,  273 => 217,  224 => 171,  195 => 144,  186 => 133,  177 => 123,  170 => 118,  166 => 105,  155 => 97,  149 => 94,  141 => 89,  132 => 83,  122 => 76,  112 => 69,  102 => 62,  92 => 55,  84 => 50,  77 => 46,  57 => 28,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#{% form_theme form 'user/register_custom_theme.html.twig' %}#}

<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title> Collabus | Inscription </title>

  {#<!-- Bootstrap -->
  <link href=\"{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
  <!-- Font Awesome -->
  <link href=\"{{  asset('css/font-awesome.min.css') }}\" rel=\"stylesheet\">
  <!-- NProgress -->
  <link href=\"{{  asset('css/nprogress.css') }}\" rel=\"stylesheet\">
  <!-- Animate.css -->
  <link href=\"{{  asset('css/animate.min.css') }}\" rel=\"stylesheet\">

  <!-- Custom Theme Style -->
  <link href=\"{{  asset('css/custom.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('vendors/intl-tel-input/build/css/intlTelInput.css') }}\" rel=\"stylesheet\">
  <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
#}

  <style>
    .intl-tel-input {
      position: relative;
      display: inline-block;
      width: 100%;
    }

  </style>
</head>

<body class=\"login\">
<div>
  <a class=\"hiddenanchor\" id=\"signin\"></a>

  <div class=\"login_wrapper\">
    <div  class=\"animate form login_form\">
      <section class=\"login_content\">
        <form id=\"register_form\" action=\"{{ path('register') }}\" method=\"post\">
          <h2>Inscrivez vous</h2>
          <div class=\"row\">
            <div class=\"col col-lg-12 col-xs-12 col-md-12 col-xs-12 col-md-12 col-xs-12 col-md-12\">
                {{ form_row(form.lastName,{'attr':{'class':'form-control','placeholder':'Nom de famille'}}) }}
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col col-lg-12 col-xs-12 col-md-12 col-xs-12 col-md-12\">
                {{ form_row(form.firstName) }}
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col col-lg-12 col-xs-12 col-md-12 col-xs-12 col-md-12\">
                <span id=\"error-msg\"></span>
                <span id=\"valid-msg\"></span>
                {{ form_row(form.tel) }}
            </div>
          </div>
            <br/>

          <div class=\"row\">
            <div class=\"col col-lg-12 col-xs-12 col-md-12 col-xs-12 col-md-12\">
                {{ form_row(form.sexe) }}
            </div>
          </div>

          <br/>
          <div class=\"row\">
            <div class=\"col col-lg-12 col-xs-12 col-md-12 col-xs-12 col-md-12\">
                {{ form_row(form.email) }}
            </div>

          </div>

          <div class=\"row\">
            <div class=\"col col-lg-12 col-xs-12 col-md-12 col-xs-12 col-md-12\">
                {{ form_row(form.username) }}
            </div>
          </div>

          <div class=\"row\">
            <div class=\"col col-lg-12 col-xs-12 col-md-12 col-xs-12 col-md-12\">
                {{ form_row(form.plainPassword) }}

              <div class=\"item form-group\">

                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    {{ form_row(form.dialcode,{'attr':{'class':'form-control hide  col-md-12 col-xs-12 '}}) }}
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12 hidden\">
                    {{ form_row(form.adresse,{'attr':{'class':'form-control hide  col-md-12 col-xs-12 '}}) }}
                </div>
              </div>
              <div style=\"margin-left:25%\">
                <input type=\"submit\"  class=\"btn btn-primary \" value=\"Soumettre\" id=\"Soumettre\">
              </div>
            </div>
          </div>
            {{ form_end(form) }}
            {#   <input type=\"text\" class=\"form-control\" placeholder=\"Identifiant\" required />
             </div>
             <div>
               <input type=\"email\" class=\"form-control\" placeholder=\"Email\" required />
             </div>
             <div>
               <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" required />
             </div>
             <div>
               <input type=\"password\" class=\"form-control\" placeholder=\"Confirmer le mot de passe\" required=\"\" />
             </div>
              #}


          <div class=\"clearfix\"></div>
          <div class=\"separator\">
            <p class=\"change_link\">Déjà membre ?
              <a href=\"{{ path('app_login') }}\" class=\"to_register\" id=\"title_login\"> S'identifier </a>
            </p>

            <div class=\"clearfix\"></div>
            <br />

            {#<div>
              <h1><img src=\"{{ asset('images/antarus.jpg') }}\" width=\"40\" height=\"40\"/> Collabus!</h1>
              <p>©2018 All Rights Reserved. Inetschools</p>
            </div>#}
          </div>
        </form>

      </section>
    </div>
  </div>
</div>
{#
<script src=\"{{ asset('vendors/jquery/dist/jquery.min.js') }}\"></script>
<script src=\"{{ asset('vendors/intl-tel-input/build/js/intlTelInput.js') }}\"></script>
#}

<script>


    var input = document.querySelector(\"#user_tel\");

    var iti =   intlTelInput(input, {
        // allowDropdown: false,
        // autoHideDialCode: false,
        // autoPlaceholder: \"off\",
        // dropdownContainer: document.body,
        // excludeCountries: [\"us\"],
        // formatOnDisplay: false,
        geoIpLookup: function(callback) {
            \$.get(\"http://ipinfo.io\", function() {}, \"jsonp\").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : \"\";
                callback(countryCode);
            });
        },
        // hiddenInput: \"full_number\",
        // initialCountry: \"auto\",
        // localizedCountries: { 'de': 'Deutschland' },
        // nationalMode: false,
        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        placeholderNumberType: \"MOBILE\",
        preferredCountries: ['bj','bf','ci','gw','ml','ne','sn','tg'],
         separateDialCode: true,
        utilsScript: \"{{ asset('vendors/intl-tel-input/build/js/utils.js') }}\",
    });



    window.iti;

    var countryData = iti.getSelectedCountryData();


    errorMsg = document.querySelector(\"#error-msg\"),
        validMsg = document.querySelector(\"#valid-msg\");

    // here, the index maps to the error code returned from getValidationError - see readme
    var errorMap = [ \"Numéro invalide\", \"Code de pays invalide\", \"Trop court\", \"Trop long\", \"Numéro invalide\"];
    var reset = function() {
        input.classList.remove(\"error\");
        errorMsg.innerHTML = \"\";
        errorMsg.classList.add(\"hide\");
        validMsg.classList.add(\"hide\");

    };


    // on blur: validate
    input.addEventListener('blur', function() {
        reset();
        if (input.value.trim()) {
            if (iti.isValidNumber()) {
                validMsg.classList.remove(\"hide\");
                validMsg.innerHTML = \"Numéro valide\";
                //control_espace_message.innerHTML = \" \";
                \$(\"#Soumettre\").removeAttr('disabled');
            } else {
                input.classList.add(\"error\");
                var errorCode = iti.getValidationError();
                errorMsg.innerHTML = errorMap[errorCode];
                errorMsg.classList.remove(\"hide\");
               // control_espace_message.innerHTML = \" \";
                \$(\"#Soumettre\").attr('disabled','disabled');
            }
        }

    });


    {% if defaultdialcode != \"\" %}
    iti.setNumber(\"\");
    {% endif %}

    // on keyup / change flag: reset
    input.addEventListener('change', reset);
    input.addEventListener('keyup', reset);
    \$(function(){
        \$(\"#Soumettre\").on('click',function(e){

            var countryData = iti.getSelectedCountryData();
            \$('#user_dialcode').val(countryData['dialCode'])
            e.preventDefault();
            \$(\"#register_form\").submit();
        })
    });


    \$(\"#user_username\").change(function() {
        var input = \$(this).val();
        var regex = new RegExp(\"[A-Za-z0-9](([_\\.\\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\\.\\-]?[a-zA-Z0-9]+)*)\\.([A-Za-z]{2,})\") ;
        if (regex.test(input)) {
            \$(\"#Soumettre\").attr('disabled','disabled');
        } else {
           // \$(this).val(input.substr(0, input.length-1));
            \$(\"#Soumettre\").removeAttr('disabled');
        }
    });


</script>

</body>
</html>
", "user/register.html.twig", "C:\\laragon\\www\\restrendevous\\templates\\user\\register.html.twig");
    }
}
