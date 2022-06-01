/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/clientsideValidation.js":
/*!**********************************************!*\
  !*** ./resources/js/clientsideValidation.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// Submit function
var createSubmit = document.getElementById('create-submit');

if (createSubmit) {
  createSubmit.addEventListener("click", function (e) {
    if (!titleValidation()) {
      // validazioni NON a buon fine
      console.log('prevent');
      e.preventDefault();
    } else {
      // validazioni a buon fine
      console.log(' notprevent');
    } // createSubmit.unbind().submit()

  });
} // TITOLO


var title = document.getElementById('title');

if (title) {
  title.addEventListener("change", titleValidation);
}

function titleValidation() {
  var titleValue = title.value.trim();
  var error = document.getElementById('title-error');
  var errorMessage = '';
  error.className = 'alert alert-danger';
  title.parentElement.append(error);

  if (!titleValue instanceof String) {
    errorMessage = 'Il titolo deve essere una stringa';
    setErrorFor(title);
    error.innerHTML = errorMessage; // console.log(errorMessage)
  } else if (titleValue.length < 5) {
    errorMessage = 'Il titolo deve essere di almeno 5 caratteri';
    setErrorFor(title);
    error.innerHTML = errorMessage; // console.log(errorMessage)
  } else if (titleValue.length > 255) {
    errorMessage = 'Il titolo deve essere al massimo di 255 caratteri';
    setErrorFor(title);
    error.innerHTML = errorMessage; // console.log(errorMessage)
  } else {
    error.className = '';
    error.innerHTML = '';
    setSuccessFor(title); // console.log("success")

    return true;
  }

  return false;
} // NUM CAMERE


var roomNum = document.getElementById('room_num');

if (roomNum) {
  roomNum.addEventListener("change", roomNumValidation);
}

function roomNumValidation() {
  var roomNumValue = roomNum.value.trim();
  var error = document.getElementById('room-num-error');
  var errorMessage = '';
  error.className = 'alert alert-danger';
  roomNum.parentElement.append(error);

  if (!roomNumValue instanceof Number) {
    errorMessage = 'Il numero di camere deve essere un numero';
    setErrorFor(roomNum);
    error.innerHTML = errorMessage; // console.log(errorMessage)
  } else if (roomNumValue < 1) {
    errorMessage = 'Il numero di camere deve essere almeno 1';
    setErrorFor(roomNum);
    error.innerHTML = errorMessage; // console.log(errorMessage)
  } else if (roomNumValue > 15) {
    errorMessage = 'Il numero di camere deve essere al massimo 15';
    setErrorFor(roomNum);
    error.innerHTML = errorMessage; // console.log(errorMessage)
  } else {
    error.className = '';
    error.innerHTML = '';
    setSuccessFor(roomNum); // console.log("success")

    return true;
  }

  return false;
} // ERROR/SUCCESS CLASSES


function setErrorFor(input) {
  input.className = 'form-control is-invalid';
}

function setSuccessFor(input) {
  input.className = 'form-control is-valid';
}

/***/ }),

/***/ 3:
/*!****************************************************!*\
  !*** multi ./resources/js/clientsideValidation.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! D:\Users\Simone\Documents\Progetti\boolbnb-final-project\resources\js\clientsideValidation.js */"./resources/js/clientsideValidation.js");


/***/ })

/******/ });