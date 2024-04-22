
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