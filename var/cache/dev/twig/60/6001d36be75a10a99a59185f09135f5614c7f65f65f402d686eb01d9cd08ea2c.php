<?php

/* UtilisateursBundle:Default:projet.html.twig */
class __TwigTemplate_794c247170fc137dbd4f4c42f49f7a72df6955116a35900652f50a4755bda962 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::accueil.html.twig", "UtilisateursBundle:Default:projet.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3beefd5c65726df95844e5e811a65fdb0a30c2af82fc58995a0aacf596ae08e2 = $this->env->getExtension("native_profiler");
        $__internal_3beefd5c65726df95844e5e811a65fdb0a30c2af82fc58995a0aacf596ae08e2->enter($__internal_3beefd5c65726df95844e5e811a65fdb0a30c2af82fc58995a0aacf596ae08e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:projet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3beefd5c65726df95844e5e811a65fdb0a30c2af82fc58995a0aacf596ae08e2->leave($__internal_3beefd5c65726df95844e5e811a65fdb0a30c2af82fc58995a0aacf596ae08e2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_64717ed6138a454861fbd6a41f936712b2a6fd74e39dab5133e62e2365562dcc = $this->env->getExtension("native_profiler");
        $__internal_64717ed6138a454861fbd6a41f936712b2a6fd74e39dab5133e62e2365562dcc->enter($__internal_64717ed6138a454861fbd6a41f936712b2a6fd74e39dab5133e62e2365562dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
  
   <!-- <h2> Espace Entité Atos Porteur du Projet</h2> -->
   <nav class=\"row\">
       <div class=\"col-sm-10 col-sm-offset-1\" style=\"border: 0px solid\">
           <table style=\"\" border=\"0px\" width=\"49%\">
               <tr>
                   <td >
                        <a href=\"#\" id=\"newProject\"> 
                           <span class=\"icons\">
                               <span class=\"glyphicon glyphicon-ruble\" aria-hidden=\"true\"></span>
                           </span> 
                            <span class=\"lien lien1\"> New Project </span> 
                        </a> 
                   </td>
                    <td> 
                        <a href=\"#\" id=\"importProject\">
                            <span class=\"icons\">
                               <span class=\"glyphicon glyphicon-import\" aria-hidden=\"true\"></span>
                            </span> 
                            <span class=\"lien lien2\"> Import Projects </span> 
                        </a>  
                    </td>
                    <td> 
                        <a href=\"#\" id=\"projectStatus\">
                            <span class=\"icons\">
                               <span class=\"glyphicon glyphicon-list\" aria-hidden=\"true\"></span>
                            </span> 
                            <span class=\"lien lien3\"> Projects </span> 
                        </a>  
                    </td>
               </tr>
           </table>
       </div>
   </nav>

<!--   Corps  -->

  <div class=\"row corps\">
        <div class=\"col-sm-10 col-sm-offset-1\" >
            <h4 class=\"titre\" style=\"text-align: right\">New Project </h4> <div class=\"ligne\"> </div>
        </div>
        <div class=\"col-sm-7 col-sm-offset-1\" style=\"border: 0px solid\">
            <div id=\"divNewProject\" class=\"col-sm-12\"> 
              ";
        // line 48
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("GMProjetBundle:Ressource:newProject"));
        echo "

            </div>
              
            <div id=\"divImportProject\" class=\"col-sm-12\" style=\"padding: 0px\">
                ";
        // line 53
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("GMProjetBundle:Dsms:updateProjects"));
        echo "
            </div>
            <div id=\"divProjectStatus\" class=\"col-sm-12\" style=\"padding: 0px\">
                
            </div>
        </div>
        
         <div class=\"col-sm-3\">
            <div class=\"panel panel-default\">
               <div class=\"panel-body\"> Atos Images</div>
             </div>
         </div>

     
   </div>
 

";
        
        $__internal_64717ed6138a454861fbd6a41f936712b2a6fd74e39dab5133e62e2365562dcc->leave($__internal_64717ed6138a454861fbd6a41f936712b2a6fd74e39dab5133e62e2365562dcc_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d13d50a729d854235a78c395ea064bca986345009910051fd824e17785558d43 = $this->env->getExtension("native_profiler");
        $__internal_d13d50a729d854235a78c395ea064bca986345009910051fd824e17785558d43->enter($__internal_d13d50a729d854235a78c395ea064bca986345009910051fd824e17785558d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     
      <script >
        \$(function(){
                 \$('.lien1').css({'borderBottom':'3px solid'}); 

                     \$( \"#newProject\" ).click(function() {

                        \$('#divNewProject').css({'display':'block'}); 
                        \$('#divProjectStatus, #divImportProject').css({'display':'none'});
                        \$('.titre').text(\$(this).text());
                        \$('.lien1').css({'borderBottom':'3px solid'});
                        \$('.lien2, .lien3').css({'borderBottom':'0px solid'});
                       
                     });
                     
                      \$( \"#importProject\" ).click(function() {

                        \$('#divImportProject').css({'display':'block'}); 
                        \$('#divNewProject, #divProjectStatus').css({'display':'none'}); 
                         \$('.titre').text(\$(this).text());
                         \$('.lien2').css({'borderBottom':'3px solid'});
                         \$('.lien1, .lien3').css({'borderBottom':'0px solid'});
                     });
                     
                     \$( \"#projectStatus\" ).click(function() {

                        \$('#divProjectStatus').css({'display':'block'}); 
                        \$('#divNewProject, #divImportProject').css({'display':'none'}); 
                         \$('.titre').text(\$(this).text());
                         \$('.lien3').css({'borderBottom':'3px solid'});
                         \$('.lien1, .lien2').css({'borderBottom':'0px solid'});  
                     });
                     
           //************* New Project *****************  
                    
              \$(\".gm_projet_new_project\").submit(function (e) {
                e.preventDefault();
                \$('.recharge').css({'display':'block'});
                var values = {};
                \$('.gm_projet_new_project').serializeArray().forEach(function (field) {
                    values[field.name] = field.value;
                });
                \$.ajax({
                    url: \"";
        // line 117
        echo $this->env->getExtension('routing')->getPath("gm_projet_new_project");
        echo "\",
                    data: values,
                    type: 'post'
                }).done(function (data) {
                    \$('.recharge').css({'display':'none'});
                    \$(\".results\").html(\"<h4>\"+data+\"</h4>\");
                    /*setTimeout(function () {
                        window.location.reload(1);
                    }, 2000);*/
                }).fail(function (data) {
                    var newHTML = \$.map(data.responseJSON.message, function (value) {
                        return ('<li>' + value + '</li>');
                    });
                    \$(\".results\").html(newHTML); 
                });
            });
            
              //************** Import Projects *************
              
               \$( \"#divImportProject form\" ).submit(function(e) {
                     e.preventDefault();var \$form = \$(this);
                            var \$form = \$(this);
                            var formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                            var data = (formdata !== null) ? formdata : \$form.serialize();
                             \$('.recharge').css({'display':'block'});
          
                               \$.ajax({
                                    url: \"";
        // line 144
        echo $this->env->getExtension('routing')->getPath("gm_projet_update_projects");
        echo "\",
                                    data: data,
                                    type: 'post',
                                    processData: false,
                                    contentType: false
                                }).done(function (data) {
                                   \$('.recharge').css({'display':'none'});
                                   \$(\".results\").text(data); 
                                  
                                }).fail(function (data) {
                                   // erreur
                                });  
                });
                
                
            //************** Projects list *************
              
               \$( \"#projectStatus\" ).click(function(e) {
                     e.preventDefault();
                     \$('.recharge').css({'display':'block'});
                     \$.ajax({
                    type: \"GET\",
                    url: \"";
        // line 166
        echo $this->env->getExtension('routing')->getPath("gm_projet_list_project");
        echo "\",
                    cache: \"false\",
                    dataType: \"html\",
                    success: function(result){
                     \$('.recharge').css({'display':'none'});
                     \$(\"#divProjectStatus\").html(result); 
                    }
                 }); 
                 
                });
            
       
                 
         });
      </script>
";
        
        $__internal_d13d50a729d854235a78c395ea064bca986345009910051fd824e17785558d43->leave($__internal_d13d50a729d854235a78c395ea064bca986345009910051fd824e17785558d43_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:projet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 166,  206 => 144,  176 => 117,  128 => 73,  122 => 72,  97 => 53,  89 => 48,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::accueil.html.twig" %}*/
/* */
/* {% block   body %}*/
/*     {{ parent() }}*/
/*   */
/*    <!-- <h2> Espace Entité Atos Porteur du Projet</h2> -->*/
/*    <nav class="row">*/
/*        <div class="col-sm-10 col-sm-offset-1" style="border: 0px solid">*/
/*            <table style="" border="0px" width="49%">*/
/*                <tr>*/
/*                    <td >*/
/*                         <a href="#" id="newProject"> */
/*                            <span class="icons">*/
/*                                <span class="glyphicon glyphicon-ruble" aria-hidden="true"></span>*/
/*                            </span> */
/*                             <span class="lien lien1"> New Project </span> */
/*                         </a> */
/*                    </td>*/
/*                     <td> */
/*                         <a href="#" id="importProject">*/
/*                             <span class="icons">*/
/*                                <span class="glyphicon glyphicon-import" aria-hidden="true"></span>*/
/*                             </span> */
/*                             <span class="lien lien2"> Import Projects </span> */
/*                         </a>  */
/*                     </td>*/
/*                     <td> */
/*                         <a href="#" id="projectStatus">*/
/*                             <span class="icons">*/
/*                                <span class="glyphicon glyphicon-list" aria-hidden="true"></span>*/
/*                             </span> */
/*                             <span class="lien lien3"> Projects </span> */
/*                         </a>  */
/*                     </td>*/
/*                </tr>*/
/*            </table>*/
/*        </div>*/
/*    </nav>*/
/* */
/* <!--   Corps  -->*/
/* */
/*   <div class="row corps">*/
/*         <div class="col-sm-10 col-sm-offset-1" >*/
/*             <h4 class="titre" style="text-align: right">New Project </h4> <div class="ligne"> </div>*/
/*         </div>*/
/*         <div class="col-sm-7 col-sm-offset-1" style="border: 0px solid">*/
/*             <div id="divNewProject" class="col-sm-12"> */
/*               {{ render(controller('GMProjetBundle:Ressource:newProject'))}}*/
/* */
/*             </div>*/
/*               */
/*             <div id="divImportProject" class="col-sm-12" style="padding: 0px">*/
/*                 {{ render(controller('GMProjetBundle:Dsms:updateProjects'))}}*/
/*             </div>*/
/*             <div id="divProjectStatus" class="col-sm-12" style="padding: 0px">*/
/*                 */
/*             </div>*/
/*         </div>*/
/*         */
/*          <div class="col-sm-3">*/
/*             <div class="panel panel-default">*/
/*                <div class="panel-body"> Atos Images</div>*/
/*              </div>*/
/*          </div>*/
/* */
/*      */
/*    </div>*/
/*  */
/* */
/* {% endblock  body %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*      */
/*       <script >*/
/*         $(function(){*/
/*                  $('.lien1').css({'borderBottom':'3px solid'}); */
/* */
/*                      $( "#newProject" ).click(function() {*/
/* */
/*                         $('#divNewProject').css({'display':'block'}); */
/*                         $('#divProjectStatus, #divImportProject').css({'display':'none'});*/
/*                         $('.titre').text($(this).text());*/
/*                         $('.lien1').css({'borderBottom':'3px solid'});*/
/*                         $('.lien2, .lien3').css({'borderBottom':'0px solid'});*/
/*                        */
/*                      });*/
/*                      */
/*                       $( "#importProject" ).click(function() {*/
/* */
/*                         $('#divImportProject').css({'display':'block'}); */
/*                         $('#divNewProject, #divProjectStatus').css({'display':'none'}); */
/*                          $('.titre').text($(this).text());*/
/*                          $('.lien2').css({'borderBottom':'3px solid'});*/
/*                          $('.lien1, .lien3').css({'borderBottom':'0px solid'});*/
/*                      });*/
/*                      */
/*                      $( "#projectStatus" ).click(function() {*/
/* */
/*                         $('#divProjectStatus').css({'display':'block'}); */
/*                         $('#divNewProject, #divImportProject').css({'display':'none'}); */
/*                          $('.titre').text($(this).text());*/
/*                          $('.lien3').css({'borderBottom':'3px solid'});*/
/*                          $('.lien1, .lien2').css({'borderBottom':'0px solid'});  */
/*                      });*/
/*                      */
/*            //************* New Project *****************  */
/*                     */
/*               $(".gm_projet_new_project").submit(function (e) {*/
/*                 e.preventDefault();*/
/*                 $('.recharge').css({'display':'block'});*/
/*                 var values = {};*/
/*                 $('.gm_projet_new_project').serializeArray().forEach(function (field) {*/
/*                     values[field.name] = field.value;*/
/*                 });*/
/*                 $.ajax({*/
/*                     url: "{{ path('gm_projet_new_project') }}",*/
/*                     data: values,*/
/*                     type: 'post'*/
/*                 }).done(function (data) {*/
/*                     $('.recharge').css({'display':'none'});*/
/*                     $(".results").html("<h4>"+data+"</h4>");*/
/*                     /*setTimeout(function () {*/
/*                         window.location.reload(1);*/
/*                     }, 2000);*//* */
/*                 }).fail(function (data) {*/
/*                     var newHTML = $.map(data.responseJSON.message, function (value) {*/
/*                         return ('<li>' + value + '</li>');*/
/*                     });*/
/*                     $(".results").html(newHTML); */
/*                 });*/
/*             });*/
/*             */
/*               //************** Import Projects **************/
/*               */
/*                $( "#divImportProject form" ).submit(function(e) {*/
/*                      e.preventDefault();var $form = $(this);*/
/*                             var $form = $(this);*/
/*                             var formdata = (window.FormData) ? new FormData($form[0]) : null;*/
/*                             var data = (formdata !== null) ? formdata : $form.serialize();*/
/*                              $('.recharge').css({'display':'block'});*/
/*           */
/*                                $.ajax({*/
/*                                     url: "{{ path('gm_projet_update_projects') }}",*/
/*                                     data: data,*/
/*                                     type: 'post',*/
/*                                     processData: false,*/
/*                                     contentType: false*/
/*                                 }).done(function (data) {*/
/*                                    $('.recharge').css({'display':'none'});*/
/*                                    $(".results").text(data); */
/*                                   */
/*                                 }).fail(function (data) {*/
/*                                    // erreur*/
/*                                 });  */
/*                 });*/
/*                 */
/*                 */
/*             //************** Projects list **************/
/*               */
/*                $( "#projectStatus" ).click(function(e) {*/
/*                      e.preventDefault();*/
/*                      $('.recharge').css({'display':'block'});*/
/*                      $.ajax({*/
/*                     type: "GET",*/
/*                     url: "{{ path('gm_projet_list_project') }}",*/
/*                     cache: "false",*/
/*                     dataType: "html",*/
/*                     success: function(result){*/
/*                      $('.recharge').css({'display':'none'});*/
/*                      $("#divProjectStatus").html(result); */
/*                     }*/
/*                  }); */
/*                  */
/*                 });*/
/*             */
/*        */
/*                  */
/*          });*/
/*       </script>*/
/* {% endblock %}*/
/* */
