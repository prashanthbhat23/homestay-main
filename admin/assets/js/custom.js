
/*=============================================================
    Authour URI: www.binarytheme.com
    License: Commons Attribution 3.0

    http://creativecommons.org/licenses/by/3.0/

    100% To use For Personal And Commercial Use.
    IN EXCHANGE JUST GIVE US CREDITS AND TELL YOUR FRIENDS ABOUT US
   
    ========================================================  */


(function ($) {
    "use strict";
    var mainApp = {

        metisMenu: function () {

            /*====================================
            METIS MENU 
            ======================================*/

            $('#main-menu').metisMenu();

        },


        loadMenu: function () {

            /*====================================
            LOAD APPROPRIATE MENU BAR
         ======================================*/

            $(window).bind("load resize", function () {
                if ($(this).width() < 768) {
                    $('div.sidebar-collapse').addClass('collapse')
                } else {
                    $('div.sidebar-collapse').removeClass('collapse')
                }
            });
        },
        slide_show: function () {

            /*====================================
           SLIDESHOW SCRIPTS
        ======================================*/

            $('#carousel-example').carousel({
                interval: 3000 // THIS TIME IS IN MILLI SECONDS
            })
        },
        reviews_fun: function () {
            /*====================================
         REWIEW SLIDE SCRIPTS
      ======================================*/
            $('#reviews').carousel({
                interval: 2000 //TIME IN MILLI SECONDS
            })
        },
        wizard_fun: function () {
            /*====================================
            //horizontal wizrd code section
             ======================================*/
            $(function () {
                $("#wizard").steps({
                    headerTag: "h2",
                    bodyTag: "section",
                    transitionEffect: "slideLeft"
                });
            });
            /*====================================
            //vertical wizrd  code section
            ======================================*/
            $(function () {
                $("#wizardV").steps({
                    headerTag: "h2",
                    bodyTag: "section",
                    transitionEffect: "slideLeft",
                    stepsOrientation: "vertical"
                });
            });
        },
       
        
    };
    $(document).ready(function () {
        mainApp.metisMenu();
        mainApp.loadMenu();
        mainApp.slide_show();
        mainApp.reviews_fun();
        mainApp.wizard_fun();
       
    });
}(jQuery));


// custom

function readFile(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
  
      reader.onload = function(e) {
        var htmlPreview =
          '<img width="200" src="' + e.target.result + '" />' +
          '<p>' + input.files[0].name + '</p>';
        var wrapperZone = $(input).parent();
        var previewZone = $(input).parent().parent().find('.preview-zone');
        var boxZone = $(input).parent().parent().find('.preview-zone').find('.box').find('.box-body');
  
        wrapperZone.removeClass('dragover');
        previewZone.removeClass('hidden');
        boxZone.empty();
        boxZone.append(htmlPreview);
      };
  
      reader.readAsDataURL(input.files[0]);
    }
  }
  
  function reset(e) {
    e.wrap('<form>').closest('form').get(0).reset();
    e.unwrap();
  }
  
  $(".dropzone").change(function() {
    readFile(this);
  });
  
  $('.dropzone-wrapper').on('dragover', function(e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).addClass('dragover');
  });
  
  $('.dropzone-wrapper').on('dragleave', function(e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).removeClass('dragover');
  });
  
  $('.remove-preview').on('click', function() {
    var boxZone = $(this).parents('.preview-zone').find('.box-body');
    var previewZone = $(this).parents('.preview-zone');
    var dropzone = $(this).parents('.form-group').find('.dropzone');
    boxZone.empty();
    previewZone.addClass('hidden');
    reset(dropzone);
  });
  