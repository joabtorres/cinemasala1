
/**
 * @author Joab Torres <joabtorres1508@gmail.com>
 * @description Valida o formulário que tiver a classe needs-validation
 */
(function () {
   "use strict";
   window.addEventListener(
      "load",
      function () {
         var forms = document.getElementsByClassName("needs-validation");
         var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener(
               "submit",
               function (event) {
                  if (form.checkValidity() === false) {
                     event.preventDefault();
                     event.stopPropagation();
                  }
                  form.classList.add("was-validated");
               },
               false
            );
         });
      },
      false
   );
})();

$(function () {
   //ajax form
   $("form:not('.ajax_off')").submit(function (e) {
      e.preventDefault();
      var form = $(this);
      var load = $(".ajax_load");
      var flashClass = "ajax_response";
      var flash = $("." + flashClass);

      form.ajaxSubmit({
         url: form.attr("action"),
         type: "POST",
         dataType: "json",
         beforeSend: function () {
            load.fadeIn(200).css("display", "flex");
         },
         success: function (response) {
            //redirect
            if (response.redirect) {
               window.location.href = response.redirect;
            }

            //message
            if (response.message) {
               if (flash.length) {
                  flash.html(response.message).fadeIn(100).effect("bounce", 300);
               } else {
                  form.prepend("<div class='" + flashClass + "'>" + response.message + "</div>")
                     .find("." + flashClass).effect("bounce", 300);
               }
            } else {
               flash.fadeOut(100);
            }
         },
         complete: function () {
            load.fadeOut(200);

            if (form.data("reset") === true) {
               form.trigger("reset");
            }
         }
      });

   })
});