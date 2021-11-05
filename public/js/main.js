/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

//var btntest = document.querySelector('#btn_test');
//const { Modal } = require("bootstrap");
btn_test.addEventListener('click', function (e) {
  e.preventDefault();
  alert('diste click');
  listarCargos();
});
btn_cancelar.addEventListener('click', function (e) {
  e.preventDefault();
  alert('click en cancelar');
  modal.classList.remove('modal-mostrar');
});
btn_agregar.addEventListener('click', function (e) {
  e.preventDefault();
  capturaFilaSeleccionada();
});

function listarCargos() {
  $.ajax({
    url: '/intranet/cargos-json',
    type: 'GET',
    dataType: 'json',
    success: function success(datos) {
      console.log(datos.data);
      modal.classList.add('modal-mostrar');
      construirFilas(datos.data);
    },
    error: function error(xhr, status) {
      console.log('error xhr:', xhr);
      console.log('error status:', status);
    },
    complete: function complete(xhr, status) {
      console.log('Petición acabada');
    }
  });
}

function construirFilas(json) {
  var _iterator = _createForOfIteratorHelper(json),
      _step;

  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      var dato = _step.value;
      var tr = document.createElement('TR');
      var td1 = document.createElement('TD');
      td1.className = "text-center";
      var td2 = document.createElement('TD');
      var td3 = document.createElement('TD');
      var td4 = document.createElement('TD');
      var input = document.createElement('input');
      input.type = 'radio';
      input.name = "id_car";
      input.value = dato.id;
      var txt2 = document.createTextNode(dato.id);
      var txt3 = document.createTextNode(dato.cargo);
      var txt4 = document.createTextNode(dato.descripcion);
      td1.appendChild(input);
      td2.appendChild(txt2);
      td3.appendChild(txt3);
      td4.appendChild(txt4);
      tr.appendChild(td1);
      tr.appendChild(td2);
      tr.appendChild(td3);
      tr.appendChild(td4);
      tabla_modal_cargo.appendChild(tr);
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }
}

function capturaFilaSeleccionada() {
  var tr = document.querySelectorAll('TBODY TR');
  var td;
  var input;

  for (var i = 0; i < tr.length; i++) {
    td = tr[i].querySelector('TD');
    input = td.querySelector('INPUT');

    if (input.checked) {
      alert("Está en la fila: " + i);
    }
  }
}
/******/ })()
;