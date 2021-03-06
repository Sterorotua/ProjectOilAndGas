<?php

/* OilIndustryBundle:OilCompany:oilCompany.html.twig */
class __TwigTemplate_acc4656d57c27bae42f69162640adfcba261f97c5cc06be5c13d7429a0bd3fb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::mainLayout.html.twig", "OilIndustryBundle:OilCompany:oilCompany.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'header_content' => array($this, 'block_header_content'),
            'page_content' => array($this, 'block_page_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle::mainLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo "Oil Company";
    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $this->displayParentBlock("css", $context, $blocks);
        echo "
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css\" rel=\"stylesheet\" />

";
    }

    // line 10
    public function block_header_content($context, array $blocks = array())
    {
        // line 11
        echo "    <h1>Oil Companies</h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_home");
        echo "\"><i class=\"fa fa-dashboard\"></i> O&G Market</a></li>
        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_oilCompany");
        echo "\"> Oil Company</a></li>
    </ol>
";
    }

    // line 18
    public function block_page_content($context, array $blocks = array())
    {
        // line 19
        echo "\t<div class=\"alert alert-warning alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <h4><i class=\"icon fa fa-warning\"></i> Attention !</h4>
                Données statiques et fictives
              </div>
\t<div class=\"row\">
\t\t<!-- barre d'outil -->
\t\t<div class=\"col-md-12\">
          <div class=\"box box-solid\">
            <div class=\"box-body\">
            \t<div class=\"row\">
            \t\t<div class=\"col-md-6\">
            \t\t\t<div class=\"btn-group bootstrap-select show-tick select2 form-control\"><button type=\"button\" class=\"btn dropdown-toggle btn-default\" data-toggle=\"dropdown\" data-id=\"contract_operator\"><span class=\"filter-option pull-left\">Oil company</span>&nbsp;<span class=\"bs-caret\"><span class=\"caret\"></span></span></button><div class=\"dropdown-menu open\"><div class=\"bs-searchbox\"><input type=\"text\" class=\"form-control\" autocomplete=\"off\"></div><div class=\"bs-actionsbox\"><div class=\"btn-group btn-group-sm btn-block\"><button type=\"button\" class=\"actions-btn bs-select-all btn btn-default\">Select All</button><button type=\"button\" class=\"actions-btn bs-deselect-all btn btn-default\">Deselect All</button></div></div><ul class=\"dropdown-menu inner\" role=\"menu\"></ul></div><select id=\"contract_operator\" name=\"contract_operator[]\" class=\"select2 form-control\" multiple=\"multiple\" tabindex=\"-98\">
                                                            
                       </select></div>
            \t\t</div>
            \t\t<div class=\"col-md-6\">
\t\t              <div class=\"btn-group bootstrap-select show-tick select2 form-control\"><button type=\"button\" class=\"btn dropdown-toggle btn-default\" data-toggle=\"dropdown\" data-id=\"contract_operator\"><span class=\"filter-option pull-left\">Country</span>&nbsp;<span class=\"bs-caret\"><span class=\"caret\"></span></span></button><div class=\"dropdown-menu open\"><div class=\"bs-searchbox\"><input type=\"text\" class=\"form-control\" autocomplete=\"off\"></div><div class=\"bs-actionsbox\"><div class=\"btn-group btn-group-sm btn-block\"><button type=\"button\" class=\"actions-btn bs-select-all btn btn-default\">Select All</button><button type=\"button\" class=\"actions-btn bs-deselect-all btn btn-default\">Deselect All</button></div></div><ul class=\"dropdown-menu inner\" role=\"menu\"></ul></div><select id=\"contract_operator\" name=\"contract_operator[]\" class=\"select2 form-control\" multiple=\"multiple\" tabindex=\"-98\">
                                                            
                       </select></div>
\t\t              
\t\t              <!-- /.form-group -->
\t\t            </div>
            \t</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- content -->
\t\t<div class=\"col-md-12\">
          <div class=\"nav-tabs-custom\">
            <ul class=\"nav nav-tabs\">
              <li class=\"active\"><a href=\"#tab_1\" data-toggle=\"tab\">Map</a></li>
              <li><a href=\"#tab_2\" data-toggle=\"tab\">Table</a></li>
            </ul>
            <div class=\"tab-content\">
              <div class=\"tab-pane active\" id=\"tab_1\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11589.59158177708!2d5.237109650000001!3d43.4314052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1467357395384\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
              </div>\t\t\t\t
              <!-- /.tab-pane -->
              <div class=\"tab-pane\" id=\"tab_2\">
                <table id=\"example1\" class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>Area</th>
                  <th>Country</th>
                  <th>Operator</th>
                  <th>Qty</th>
                  <th>Type</th>
                  <th>Platforms in service</th>
                  <th>Future platforms</th>
                </tr>
                </thead>
                <tbody>
\t           \t\t<tr>
\t\t\t\t\t\t<td>Vienna</td>
\t\t\t\t\t\t<td>Gabon</td>
\t\t\t\t\t\t<td>Leo Vivamus Nibh Corp.</td>
\t\t\t\t\t\t<td>44</td>
\t\t\t\t\t\t<td>N174</td>
\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>San José</td>
\t\t\t\t\t\t<td>Mauritania</td>
\t\t\t\t\t\t<td>Dolor Dolor Limited</td>
\t\t\t\t\t\t<td>25</td>
\t\t\t\t\t\t<td>N336</td>
\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Vienna</td>
\t\t\t\t\t\t<td>Comoros</td>
\t\t\t\t\t\t<td>Donec Nibh Enim Ltd</td>
\t\t\t\t\t\t<td>78</td>
\t\t\t\t\t\t<td>X366</td>
\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>AP</td>
\t\t\t\t\t\t<td>Saint Lucia</td>
\t\t\t\t\t\t<td>Morbi Ltd</td>
\t\t\t\t\t\t<td>67</td>
\t\t\t\t\t\t<td>D185</td>
\t\t\t\t\t\t<td>0</td>
\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Noord Brabant</td>
\t\t\t\t\t\t<td>Moldova</td>
\t\t\t\t\t\t<td>Posuere Cubilia Incorporated</td>
\t\t\t\t\t\t<td>02</td>
\t\t\t\t\t\t<td>X864</td>
\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Salzburg</td>
\t\t\t\t\t\t<td>Montserrat</td>
\t\t\t\t\t\t<td>Tincidunt Adipiscing Mauris Consulting</td>
\t\t\t\t\t\t<td>06</td>
\t\t\t\t\t\t<td>U981</td>
\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Washington</td>
\t\t\t\t\t\t<td>China</td>
\t\t\t\t\t\t<td>Interdum Ligula Inc.</td>
\t\t\t\t\t\t<td>76</td>
\t\t\t\t\t\t<td>J103</td>
\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>WA</td>
\t\t\t\t\t\t<td>Malaysia</td>
\t\t\t\t\t\t<td>Elit Curabitur Sed Foundation</td>
\t\t\t\t\t\t<td>84</td>
\t\t\t\t\t\t<td>X744</td>
\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>KD</td>
\t\t\t\t\t\t<td>Trinidad and Tobago</td>
\t\t\t\t\t\t<td>Ultrices Sit Foundation</td>
\t\t\t\t\t\t<td>79</td>
\t\t\t\t\t\t<td>J046</td>
\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>EX</td>
\t\t\t\t\t\t<td>Argentina</td>
\t\t\t\t\t\t<td>Consectetuer Adipiscing Consulting</td>
\t\t\t\t\t\t<td>99</td>
\t\t\t\t\t\t<td>K663</td>
\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Wie</td>
\t\t\t\t\t\t<td>Serbia</td>
\t\t\t\t\t\t<td>Ullamcorper Eu Limited</td>
\t\t\t\t\t\t<td>16</td>
\t\t\t\t\t\t<td>A623</td>
\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t<td>0</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>CO</td>
\t\t\t\t\t\t<td>Colombia</td>
\t\t\t\t\t\t<td>Justo Incorporated</td>
\t\t\t\t\t\t<td>32</td>
\t\t\t\t\t\t<td>V454</td>
\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Biobío</td>
\t\t\t\t\t\t<td>Lebanon</td>
\t\t\t\t\t\t<td>Maecenas Iaculis Inc.</td>
\t\t\t\t\t\t<td>95</td>
\t\t\t\t\t\t<td>V551</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Valparaíso</td>
\t\t\t\t\t\t<td>United States</td>
\t\t\t\t\t\t<td>Vulputate Lacus Cras Ltd</td>
\t\t\t\t\t\t<td>98</td>
\t\t\t\t\t\t<td>I547</td>
\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>QLD</td>
\t\t\t\t\t\t<td>Bulgaria</td>
\t\t\t\t\t\t<td>Ac Orci Ut Foundation</td>
\t\t\t\t\t\t<td>02</td>
\t\t\t\t\t\t<td>I534</td>
\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Stockholms län</td>
\t\t\t\t\t\t<td>Ukraine</td>
\t\t\t\t\t\t<td>Curabitur Consequat Lectus PC</td>
\t\t\t\t\t\t<td>45</td>
\t\t\t\t\t\t<td>B974</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t<td>0</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>IL</td>
\t\t\t\t\t\t<td>Lithuania</td>
\t\t\t\t\t\t<td>Nisl Quisque Corporation</td>
\t\t\t\t\t\t<td>92</td>
\t\t\t\t\t\t<td>G528</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>LX</td>
\t\t\t\t\t\t<td>Uzbekistan</td>
\t\t\t\t\t\t<td>Ut Erat Limited</td>
\t\t\t\t\t\t<td>40</td>
\t\t\t\t\t\t<td>H894</td>
\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>ON</td>
\t\t\t\t\t\t<td>Iraq</td>
\t\t\t\t\t\t<td>Cursus Luctus Ipsum Consulting</td>
\t\t\t\t\t\t<td>17</td>
\t\t\t\t\t\t<td>Q566</td>
\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>WY</td>
\t\t\t\t\t\t<td>Cuba</td>
\t\t\t\t\t\t<td>Feugiat Industries</td>
\t\t\t\t\t\t<td>73</td>
\t\t\t\t\t\t<td>S306</td>
\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t<td>0</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>VA</td>
\t\t\t\t\t\t<td>Guernsey</td>
\t\t\t\t\t\t<td>Congue Elit Incorporated</td>
\t\t\t\t\t\t<td>03</td>
\t\t\t\t\t\t<td>M059</td>
\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Biobío</td>
\t\t\t\t\t\t<td>Jersey</td>
\t\t\t\t\t\t<td>Erat Corp.</td>
\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t<td>Y047</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Western Australia</td>
\t\t\t\t\t\t<td>Malaysia</td>
\t\t\t\t\t\t<td>Consectetuer Adipiscing LLP</td>
\t\t\t\t\t\t<td>37</td>
\t\t\t\t\t\t<td>V724</td>
\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Hamburg</td>
\t\t\t\t\t\t<td>French Polynesia</td>
\t\t\t\t\t\t<td>Eleifend Company</td>
\t\t\t\t\t\t<td>30</td>
\t\t\t\t\t\t<td>V550</td>
\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Hamburg</td>
\t\t\t\t\t\t<td>Kenya</td>
\t\t\t\t\t\t<td>Convallis In Cursus Consulting</td>
\t\t\t\t\t\t<td>60</td>
\t\t\t\t\t\t<td>B237</td>
\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>PR</td>
\t\t\t\t\t\t<td>Liberia</td>
\t\t\t\t\t\t<td>Vitae LLP</td>
\t\t\t\t\t\t<td>46</td>
\t\t\t\t\t\t<td>A188</td>
\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>MA</td>
\t\t\t\t\t\t<td>Lesotho</td>
\t\t\t\t\t\t<td>Proin Industries</td>
\t\t\t\t\t\t<td>92</td>
\t\t\t\t\t\t<td>Y255</td>
\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>TOS</td>
\t\t\t\t\t\t<td>Chile</td>
\t\t\t\t\t\t<td>Egestas LLC</td>
\t\t\t\t\t\t<td>72</td>
\t\t\t\t\t\t<td>Y978</td>
\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Jönköpings län</td>
\t\t\t\t\t\t<td>Saint Vincent and The Grenadines</td>
\t\t\t\t\t\t<td>Accumsan Convallis Foundation</td>
\t\t\t\t\t\t<td>28</td>
\t\t\t\t\t\t<td>P396</td>
\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>California</td>
\t\t\t\t\t\t<td>Congo, the Democratic Republic of the</td>
\t\t\t\t\t\t<td>Nulla Semper Consulting</td>
\t\t\t\t\t\t<td>31</td>
\t\t\t\t\t\t<td>B920</td>
\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>SIC</td>
\t\t\t\t\t\t<td>Azerbaijan</td>
\t\t\t\t\t\t<td>Lorem Fringilla Limited</td>
\t\t\t\t\t\t<td>82</td>
\t\t\t\t\t\t<td>V723</td>
\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>São Paulo</td>
\t\t\t\t\t\t<td>Latvia</td>
\t\t\t\t\t\t<td>Nunc Quis Consulting</td>
\t\t\t\t\t\t<td>08</td>
\t\t\t\t\t\t<td>R531</td>
\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>G</td>
\t\t\t\t\t\t<td>Canada</td>
\t\t\t\t\t\t<td>Facilisis Non LLP</td>
\t\t\t\t\t\t<td>56</td>
\t\t\t\t\t\t<td>F755</td>
\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>DB</td>
\t\t\t\t\t\t<td>Pitcairn Islands</td>
\t\t\t\t\t\t<td>Felis Nulla Consulting</td>
\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t<td>L442</td>
\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Ontario</td>
\t\t\t\t\t\t<td>Switzerland</td>
\t\t\t\t\t\t<td>Sit Amet Ornare Associates</td>
\t\t\t\t\t\t<td>45</td>
\t\t\t\t\t\t<td>X984</td>
\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t<td>0</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>North Island</td>
\t\t\t\t\t\t<td>Bangladesh</td>
\t\t\t\t\t\t<td>Ultrices Duis Inc.</td>
\t\t\t\t\t\t<td>24</td>
\t\t\t\t\t\t<td>U459</td>
\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Istanbul</td>
\t\t\t\t\t\t<td>Eritrea</td>
\t\t\t\t\t\t<td>Cursus Integer Associates</td>
\t\t\t\t\t\t<td>47</td>
\t\t\t\t\t\t<td>P584</td>
\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t<td>0</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Kansas</td>
\t\t\t\t\t\t<td>Marshall Islands</td>
\t\t\t\t\t\t<td>Erat Vivamus Nisi Limited</td>
\t\t\t\t\t\t<td>28</td>
\t\t\t\t\t\t<td>S005</td>
\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>TOS</td>
\t\t\t\t\t\t<td>Libya</td>
\t\t\t\t\t\t<td>Felis Nulla Tempor Corporation</td>
\t\t\t\t\t\t<td>68</td>
\t\t\t\t\t\t<td>X359</td>
\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Karnataka</td>
\t\t\t\t\t\t<td>Palau</td>
\t\t\t\t\t\t<td>Nulla Magna Malesuada Consulting</td>
\t\t\t\t\t\t<td>92</td>
\t\t\t\t\t\t<td>L111</td>
\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t<td>0</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Western Australia</td>
\t\t\t\t\t\t<td>Jamaica</td>
\t\t\t\t\t\t<td>Integer Id LLP</td>
\t\t\t\t\t\t<td>16</td>
\t\t\t\t\t\t<td>H072</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Dorset</td>
\t\t\t\t\t\t<td>Suriname</td>
\t\t\t\t\t\t<td>Odio Auctor Corp.</td>
\t\t\t\t\t\t<td>32</td>
\t\t\t\t\t\t<td>W625</td>
\t\t\t\t\t\t<td>0</td>
\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Osun</td>
\t\t\t\t\t\t<td>Israel</td>
\t\t\t\t\t\t<td>Quisque Ac Foundation</td>
\t\t\t\t\t\t<td>42</td>
\t\t\t\t\t\t<td>E912</td>
\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>LOM</td>
\t\t\t\t\t\t<td>Antarctica</td>
\t\t\t\t\t\t<td>Dolor Corporation</td>
\t\t\t\t\t\t<td>04</td>
\t\t\t\t\t\t<td>K532</td>
\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Leinster</td>
\t\t\t\t\t\t<td>Dominica</td>
\t\t\t\t\t\t<td>Orci Luctus Et Foundation</td>
\t\t\t\t\t\t<td>46</td>
\t\t\t\t\t\t<td>F141</td>
\t\t\t\t\t\t<td>0</td>
\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Ulster</td>
\t\t\t\t\t\t<td>Paraguay</td>
\t\t\t\t\t\t<td>Tellus Nunc Lectus Company</td>
\t\t\t\t\t\t<td>88</td>
\t\t\t\t\t\t<td>G176</td>
\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>NI</td>
\t\t\t\t\t\t<td>Bahrain</td>
\t\t\t\t\t\t<td>Nunc Sed Incorporated</td>
\t\t\t\t\t\t<td>68</td>
\t\t\t\t\t\t<td>C362</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>CAM</td>
\t\t\t\t\t\t<td>Northern Mariana Islands</td>
\t\t\t\t\t\t<td>Dui Lectus Rutrum LLP</td>
\t\t\t\t\t\t<td>88</td>
\t\t\t\t\t\t<td>H858</td>
\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>G</td>
\t\t\t\t\t\t<td>Burundi</td>
\t\t\t\t\t\t<td>Quisque Purus Sapien LLP</td>
\t\t\t\t\t\t<td>74</td>
\t\t\t\t\t\t<td>K242</td>
\t\t\t\t\t\t<td>0</td>
\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Stockholms län</td>
\t\t\t\t\t\t<td>Kenya</td>
\t\t\t\t\t\t<td>Hendrerit Ltd</td>
\t\t\t\t\t\t<td>41</td>
\t\t\t\t\t\t<td>R855</td>
\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t<td>0</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>North Island</td>
\t\t\t\t\t\t<td>Guyana</td>
\t\t\t\t\t\t<td>Tempus Risus Donec Inc.</td>
\t\t\t\t\t\t<td>83</td>
\t\t\t\t\t\t<td>D606</td>
\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t<td>0</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>VIC</td>
\t\t\t\t\t\t<td>United States</td>
\t\t\t\t\t\t<td>Dolor Sit Amet Ltd</td>
\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t<td>C447</td>
\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Andalucía</td>
\t\t\t\t\t\t<td>Bahamas</td>
\t\t\t\t\t\t<td>Hendrerit Donec Porttitor Ltd</td>
\t\t\t\t\t\t<td>61</td>
\t\t\t\t\t\t<td>B956</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>O</td>
\t\t\t\t\t\t<td>Curaçao</td>
\t\t\t\t\t\t<td>Lacus Nulla LLP</td>
\t\t\t\t\t\t<td>56</td>
\t\t\t\t\t\t<td>Q050</td>
\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Wie</td>
\t\t\t\t\t\t<td>Nepal</td>
\t\t\t\t\t\t<td>Magna A Tortor Industries</td>
\t\t\t\t\t\t<td>96</td>
\t\t\t\t\t\t<td>L819</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Vienna</td>
\t\t\t\t\t\t<td>Mozambique</td>
\t\t\t\t\t\t<td>Ac Corporation</td>
\t\t\t\t\t\t<td>38</td>
\t\t\t\t\t\t<td>P006</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t<td>0</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>W</td>
\t\t\t\t\t\t<td>Guinea</td>
\t\t\t\t\t\t<td>Curae; Donec Tincidunt LLC</td>
\t\t\t\t\t\t<td>76</td>
\t\t\t\t\t\t<td>A965</td>
\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>G</td>
\t\t\t\t\t\t<td>Timor-Leste</td>
\t\t\t\t\t\t<td>Lorem Ut LLC</td>
\t\t\t\t\t\t<td>03</td>
\t\t\t\t\t\t<td>P736</td>
\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Lombardia</td>
\t\t\t\t\t\t<td>Lebanon</td>
\t\t\t\t\t\t<td>Cras PC</td>
\t\t\t\t\t\t<td>75</td>
\t\t\t\t\t\t<td>M930</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>GL</td>
\t\t\t\t\t\t<td>China</td>
\t\t\t\t\t\t<td>Sapien Molestie Orci Corp.</td>
\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t<td>D526</td>
\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t<td>0</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>São Paulo</td>
\t\t\t\t\t\t<td>Malaysia</td>
\t\t\t\t\t\t<td>Elementum At Egestas Consulting</td>
\t\t\t\t\t\t<td>66</td>
\t\t\t\t\t\t<td>M212</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Berlin</td>
\t\t\t\t\t\t<td>Taiwan</td>
\t\t\t\t\t\t<td>Aliquam Foundation</td>
\t\t\t\t\t\t<td>43</td>
\t\t\t\t\t\t<td>J880</td>
\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>San José</td>
\t\t\t\t\t\t<td>Cyprus</td>
\t\t\t\t\t\t<td>Faucibus Ut Corp.</td>
\t\t\t\t\t\t<td>54</td>
\t\t\t\t\t\t<td>O528</td>
\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>AB</td>
\t\t\t\t\t\t<td>Dominica</td>
\t\t\t\t\t\t<td>Eget Mollis Lectus Associates</td>
\t\t\t\t\t\t<td>64</td>
\t\t\t\t\t\t<td>L071</td>
\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t<td>0</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>DE</td>
\t\t\t\t\t\t<td>Finland</td>
\t\t\t\t\t\t<td>Semper Tellus Industries</td>
\t\t\t\t\t\t<td>02</td>
\t\t\t\t\t\t<td>C284</td>
\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>WV</td>
\t\t\t\t\t\t<td>Armenia</td>
\t\t\t\t\t\t<td>Ridiculus Foundation</td>
\t\t\t\t\t\t<td>84</td>
\t\t\t\t\t\t<td>U531</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Kano</td>
\t\t\t\t\t\t<td>Bolivia</td>
\t\t\t\t\t\t<td>Mi Institute</td>
\t\t\t\t\t\t<td>95</td>
\t\t\t\t\t\t<td>T237</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>CH</td>
\t\t\t\t\t\t<td>Tunisia</td>
\t\t\t\t\t\t<td>Mattis Company</td>
\t\t\t\t\t\t<td>51</td>
\t\t\t\t\t\t<td>L855</td>
\t\t\t\t\t\t<td>0</td>
\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Quebec</td>
\t\t\t\t\t\t<td>Liberia</td>
\t\t\t\t\t\t<td>Nec Ltd</td>
\t\t\t\t\t\t<td>18</td>
\t\t\t\t\t\t<td>L205</td>
\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>ME</td>
\t\t\t\t\t\t<td>Bonaire, Sint Eustatius and Saba</td>
\t\t\t\t\t\t<td>Integer Sem Elit Limited</td>
\t\t\t\t\t\t<td>55</td>
\t\t\t\t\t\t<td>A271</td>
\t\t\t\t\t\t<td>0</td>
\t\t\t\t\t\t<td>0</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Wie</td>
\t\t\t\t\t\t<td>Myanmar</td>
\t\t\t\t\t\t<td>Et PC</td>
\t\t\t\t\t\t<td>99</td>
\t\t\t\t\t\t<td>Y284</td>
\t\t\t\t\t\t<td>0</td>
\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Connecticut</td>
\t\t\t\t\t\t<td>Cuba</td>
\t\t\t\t\t\t<td>Semper Et Lacinia Inc.</td>
\t\t\t\t\t\t<td>08</td>
\t\t\t\t\t\t<td>E086</td>
\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Mer</td>
\t\t\t\t\t\t<td>Kiribati</td>
\t\t\t\t\t\t<td>Sem Consequat Institute</td>
\t\t\t\t\t\t<td>75</td>
\t\t\t\t\t\t<td>K612</td>
\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Koc</td>
\t\t\t\t\t\t<td>Palestine, State of</td>
\t\t\t\t\t\t<td>Risus Donec Nibh PC</td>
\t\t\t\t\t\t<td>87</td>
\t\t\t\t\t\t<td>U163</td>
\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Östergötlands län</td>
\t\t\t\t\t\t<td>Colombia</td>
\t\t\t\t\t\t<td>Cursus Et Magna Corporation</td>
\t\t\t\t\t\t<td>70</td>
\t\t\t\t\t\t<td>J029</td>
\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>XII</td>
\t\t\t\t\t\t<td>Saint Vincent and The Grenadines</td>
\t\t\t\t\t\t<td>Tortor Limited</td>
\t\t\t\t\t\t<td>35</td>
\t\t\t\t\t\t<td>V735</td>
\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Queensland</td>
\t\t\t\t\t\t<td>Monaco</td>
\t\t\t\t\t\t<td>Et Industries</td>
\t\t\t\t\t\t<td>59</td>
\t\t\t\t\t\t<td>Q675</td>
\t\t\t\t\t\t<td>0</td>
\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>LB</td>
\t\t\t\t\t\t<td>Isle of Man</td>
\t\t\t\t\t\t<td>Mi Lorem Vehicula LLP</td>
\t\t\t\t\t\t<td>03</td>
\t\t\t\t\t\t<td>L527</td>
\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t<td>0</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>SL</td>
\t\t\t\t\t\t<td>Spain</td>
\t\t\t\t\t\t<td>Turpis Non Enim Company</td>
\t\t\t\t\t\t<td>73</td>
\t\t\t\t\t\t<td>D394</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Catalunya</td>
\t\t\t\t\t\t<td>Spain</td>
\t\t\t\t\t\t<td>Fusce Mollis Duis Incorporated</td>
\t\t\t\t\t\t<td>66</td>
\t\t\t\t\t\t<td>U544</td>
\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>HR</td>
\t\t\t\t\t\t<td>Montenegro</td>
\t\t\t\t\t\t<td>Quisque Institute</td>
\t\t\t\t\t\t<td>90</td>
\t\t\t\t\t\t<td>J699</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>HE</td>
\t\t\t\t\t\t<td>Croatia</td>
\t\t\t\t\t\t<td>Odio Vel Est Ltd</td>
\t\t\t\t\t\t<td>51</td>
\t\t\t\t\t\t<td>V687</td>
\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Liguria</td>
\t\t\t\t\t\t<td>Vanuatu</td>
\t\t\t\t\t\t<td>Rhoncus Nullam Velit Ltd</td>
\t\t\t\t\t\t<td>54</td>
\t\t\t\t\t\t<td>G901</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>GJ</td>
\t\t\t\t\t\t<td>Uruguay</td>
\t\t\t\t\t\t<td>Scelerisque Institute</td>
\t\t\t\t\t\t<td>27</td>
\t\t\t\t\t\t<td>B347</td>
\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Stockholms län</td>
\t\t\t\t\t\t<td>Saudi Arabia</td>
\t\t\t\t\t\t<td>Tincidunt Adipiscing Mauris Incorporated</td>
\t\t\t\t\t\t<td>58</td>
\t\t\t\t\t\t<td>S677</td>
\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Lazio</td>
\t\t\t\t\t\t<td>French Guiana</td>
\t\t\t\t\t\t<td>Nullam Feugiat Placerat Ltd</td>
\t\t\t\t\t\t<td>55</td>
\t\t\t\t\t\t<td>P751</td>
\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Odisha</td>
\t\t\t\t\t\t<td>Serbia</td>
\t\t\t\t\t\t<td>Aliquet Proin Velit Associates</td>
\t\t\t\t\t\t<td>53</td>
\t\t\t\t\t\t<td>W471</td>
\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>North Island</td>
\t\t\t\t\t\t<td>Dominican Republic</td>
\t\t\t\t\t\t<td>Fusce Inc.</td>
\t\t\t\t\t\t<td>04</td>
\t\t\t\t\t\t<td>C811</td>
\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>AB</td>
\t\t\t\t\t\t<td>Venezuela</td>
\t\t\t\t\t\t<td>Ut Eros Non Foundation</td>
\t\t\t\t\t\t<td>92</td>
\t\t\t\t\t\t<td>C845</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>MA</td>
\t\t\t\t\t\t<td>Nigeria</td>
\t\t\t\t\t\t<td>Ipsum Nunc Id Foundation</td>
\t\t\t\t\t\t<td>94</td>
\t\t\t\t\t\t<td>W738</td>
\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>NI</td>
\t\t\t\t\t\t<td>Italy</td>
\t\t\t\t\t\t<td>Auctor Ullamcorper Nisl Inc.</td>
\t\t\t\t\t\t<td>75</td>
\t\t\t\t\t\t<td>H559</td>
\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>HB</td>
\t\t\t\t\t\t<td>Mauritius</td>
\t\t\t\t\t\t<td>Sed Industries</td>
\t\t\t\t\t\t<td>03</td>
\t\t\t\t\t\t<td>W856</td>
\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>SI</td>
\t\t\t\t\t\t<td>Uzbekistan</td>
\t\t\t\t\t\t<td>Ut Corporation</td>
\t\t\t\t\t\t<td>72</td>
\t\t\t\t\t\t<td>A567</td>
\t\t\t\t\t\t<td>0</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>IN</td>
\t\t\t\t\t\t<td>Hong Kong</td>
\t\t\t\t\t\t<td>Aliquam Incorporated</td>
\t\t\t\t\t\t<td>71</td>
\t\t\t\t\t\t<td>O556</td>
\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Texas</td>
\t\t\t\t\t\t<td>Portugal</td>
\t\t\t\t\t\t<td>Eu Eleifend Nec PC</td>
\t\t\t\t\t\t<td>52</td>
\t\t\t\t\t\t<td>L141</td>
\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Hatay</td>
\t\t\t\t\t\t<td>Brunei</td>
\t\t\t\t\t\t<td>Facilisis Magna Industries</td>
\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t<td>C279</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Gävleborgs län</td>
\t\t\t\t\t\t<td>Luxembourg</td>
\t\t\t\t\t\t<td>Iaculis Odio Nam Foundation</td>
\t\t\t\t\t\t<td>19</td>
\t\t\t\t\t\t<td>G113</td>
\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Anambra</td>
\t\t\t\t\t\t<td>Sri Lanka</td>
\t\t\t\t\t\t<td>Nec Inc.</td>
\t\t\t\t\t\t<td>80</td>
\t\t\t\t\t\t<td>R501</td>
\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Atacama</td>
\t\t\t\t\t\t<td>Tanzania</td>
\t\t\t\t\t\t<td>Ante LLC</td>
\t\t\t\t\t\t<td>46</td>
\t\t\t\t\t\t<td>F682</td>
\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>GA</td>
\t\t\t\t\t\t<td>Ethiopia</td>
\t\t\t\t\t\t<td>Nec Mauris Industries</td>
\t\t\t\t\t\t<td>35</td>
\t\t\t\t\t\t<td>P560</td>
\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t</tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>Area</th>
                  <th>Country</th>
                  <th>Operator</th>
                  <th>Qty</th>
                  <th>Type</th>
                  <th>Platforms in service</th>
                  <th>Future platforms</th>
                </tr>
                </tfoot>
              </table>
              </div>
              
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
        </div>
    </div>

";
    }

    // line 998
    public function block_javascripts($context, array $blocks = array())
    {
        // line 999
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js\"></script>
    <script>
    \$(\"#example1\").DataTable();
    </script>
";
    }

    public function getTemplateName()
    {
        return "OilIndustryBundle:OilCompany:oilCompany.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1054 => 999,  1051 => 998,  70 => 19,  67 => 18,  60 => 14,  56 => 13,  52 => 11,  49 => 10,  39 => 5,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OilIndustryBundle:OilCompany:oilCompany.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/src/OilIndustryBundle/Resources/views/OilCompany/oilCompany.html.twig");
    }
}
