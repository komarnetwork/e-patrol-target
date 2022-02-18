/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************************!*\
  !*** ./resources/js/pages/be_comp_dialogs.js ***!
  \***********************************************/
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

/*!
 * dashmix - v5.1.0
 * @author pixelcave - https://pixelcave.com
 * Copyright (c) 2021
 */
Dashmix.onLoad( /*#__PURE__*/function () {
  function _class() {
    _classCallCheck(this, _class);
  }

  _createClass(_class, null, [{
    key: "sweetAlert2",
    value: function sweetAlert2() {
      var e = Swal.mixin({
        buttonsStyling: !1,
        target: "#page-container",
        customClass: {
          confirmButton: "btn btn-success m-1",
          cancelButton: "btn btn-danger m-1",
          input: "form-control"
        }
      });
      document.querySelector(".js-swal-simple").addEventListener("click", function (t) {
        e.fire("Hi, this is just a simple message!");
      }), document.querySelector(".js-swal-success").addEventListener("click", function (t) {
        e.fire("Success", "Everything was updated perfectly!", "success");
      }), document.querySelector(".js-swal-info").addEventListener("click", function (t) {
        e.fire("Info", "Just an informational message!", "info");
      }), document.querySelector(".js-swal-warning").addEventListener("click", function (t) {
        e.fire("Warning", "Something needs your attention!", "warning");
      }), document.querySelector(".js-swal-error").addEventListener("click", function (t) {
        e.fire("Oops...", "Something went wrong!", "error");
      }), document.querySelector(".js-swal-question").addEventListener("click", function (t) {
        e.fire("Question", "Are you sure about that?", "question");
      }), document.querySelector(".js-swal-confirm").addEventListener("click", function (t) {
        e.fire({
          title: "Are you sure?",
          text: "You will not be able to recover this imaginary file!",
          icon: "warning",
          showCancelButton: !0,
          customClass: {
            confirmButton: "btn btn-danger m-1",
            cancelButton: "btn btn-secondary m-1"
          },
          confirmButtonText: "Yes, delete it!",
          html: !1,
          preConfirm: function preConfirm(e) {
            return new Promise(function (e) {
              setTimeout(function () {
                e();
              }, 50);
            });
          }
        }).then(function (t) {
          t.value ? e.fire("Deleted!", "Your imaginary file has been deleted.", "success") : "cancel" === t.dismiss && e.fire("Cancelled", "Your imaginary file is safe :)", "error");
        });
      }), document.querySelector(".js-swal-custom-position").addEventListener("click", function (t) {
        e.fire({
          position: "top-end",
          title: "Perfect!",
          text: "Nice Position!",
          icon: "success"
        });
      });
    }
  }, {
    key: "init",
    value: function init() {
      this.sweetAlert2();
    }
  }]);

  return _class;
}().init());
/******/ })()
;