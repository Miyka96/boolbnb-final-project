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
var houseSubmit = document.getElementById('house-submit');

if (houseSubmit) {
  houseSubmit.addEventListener("click", function (e) {
    if ( // validazioni NON a buon fine
    !titleValidation() || !roomNumValidation() || !bedsNumValidation() || !toiletsNumValidation() || !squareMetersValidation() || !imageValidation() || !costValidation()) {
      console.log('PREVENT');
      e.preventDefault();
    } else {
      // validazioni a buon fine
      console.log('SUBMIT');
    } // houseSubmit.unbind().submit()

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
  } else if (titleValue.length < 5 || titleValue.length > 255) {
    errorMessage = 'Il titolo deve avere un numero di caratteri compreso tra 5 e 255';
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
  var error = document.getElementById('room_num-error');
  var errorMessage = '';
  error.className = 'alert alert-danger';
  roomNum.parentElement.append(error);

  if (!roomNumValue instanceof Number) {
    errorMessage = 'Il numero di camere deve essere un numero';
    setErrorFor(roomNum);
    error.innerHTML = errorMessage; // console.log(errorMessage)
  } else if (roomNumValue < 1 || roomNumValue > 15) {
    errorMessage = 'Il numero di camere deve essere compreso tra 1 e 15';
    setErrorFor(roomNum);
    error.innerHTML = errorMessage; // console.log(errorMessage)
  } else {
    error.className = '';
    error.innerHTML = '';
    setSuccessFor(roomNum); // console.log("success")

    return true;
  }

  return false;
} // POSTI LETTO


var bedsNum = document.getElementById('beds_num');

if (bedsNum) {
  bedsNum.addEventListener("change", bedsNumValidation);
}

function bedsNumValidation() {
  var bedsNumValue = bedsNum.value.trim();
  var error = document.getElementById('beds_num-error');
  var errorMessage = '';
  error.className = 'alert alert-danger';
  bedsNum.parentElement.append(error);

  if (!bedsNumValue instanceof Number) {
    errorMessage = 'Il numero di posti letto deve essere una numero';
    setErrorFor(bedsNum);
    error.innerHTML = errorMessage; // console.log(errorMessage)
  } else if (bedsNumValue < 1 || bedsNumValue > 30) {
    errorMessage = 'Il numero di posti letto deve compreso tra 1 e 30';
    setErrorFor(bedsNum);
    error.innerHTML = errorMessage; // console.log(errorMessage)
  } else {
    error.className = '';
    error.innerHTML = '';
    setSuccessFor(bedsNum); // console.log("success")

    return true;
  }

  return false;
} // BAGNI


var toiletsNum = document.getElementById('toilets_num');

if (toiletsNum) {
  toiletsNum.addEventListener("change", toiletsNumValidation);
}

function toiletsNumValidation() {
  var toiletsNumValue = toiletsNum.value.trim();
  var error = document.getElementById('toilets_num-error');
  var errorMessage = '';
  error.className = 'alert alert-danger';
  toiletsNum.parentElement.append(error);

  if (!toiletsNumValue instanceof Number) {
    errorMessage = 'Il numero di bagni deve essere una numero';
    setErrorFor(toiletsNum);
    error.innerHTML = errorMessage; // console.log(errorMessage)
  } else if (toiletsNumValue < 1 || toiletsNumValue > 15) {
    errorMessage = 'Il numero di bagni deve essere compreso tra 1 e 15';
    setErrorFor(toiletsNum);
    error.innerHTML = errorMessage; // console.log(errorMessage)
  } else {
    error.className = '';
    error.innerHTML = '';
    setSuccessFor(toiletsNum); // console.log("success")

    return true;
  }

  return false;
} // METRI QUADRI


var squareMeters = document.getElementById('square_meters');

if (squareMeters) {
  squareMeters.addEventListener("change", squareMetersValidation);
}

function squareMetersValidation() {
  var squareMetersValue = squareMeters.value.trim();
  var error = document.getElementById('square_meters-error');
  var errorMessage = '';
  error.className = 'alert alert-danger';
  squareMeters.parentElement.append(error);

  if (!squareMetersValue instanceof Number) {
    errorMessage = 'Il numero metri quadri deve essere una numero';
    setErrorFor(squareMeters);
    error.innerHTML = errorMessage; // console.log(errorMessage)
  } else if (squareMetersValue < 20 || squareMetersValue > 300) {
    errorMessage = 'Il numero metri quadri deve essere compreso tra 1 e 300';
    setErrorFor(squareMeters);
    error.innerHTML = errorMessage; // console.log(errorMessage)
  } else {
    error.className = '';
    error.innerHTML = '';
    setSuccessFor(squareMeters); // console.log("success")

    return true;
  }

  return false;
} // IMMAGINE


var image = document.getElementById('image');

if (image) {
  image.addEventListener("change", imageValidation);
}

function imageValidation() {
  var imageValue = image.value.trim();
  var error = document.getElementById('image-error');
  var errorMessage = '';
  error.className = 'alert alert-danger';
  image.parentElement.append(error);

  if (!imageValue instanceof String) {
    errorMessage = "L'url dell'immagine deve essere una stringa";
    setErrorFor(image);
    error.innerHTML = errorMessage; // console.log(errorMessage)
  } else if (imageValue.indexOf('http://') !== 0 && imageValue.indexOf('https://') !== 0) {
    errorMessage = 'Non hai inserito un url';
    setErrorFor(image);
    error.innerHTML = errorMessage; // console.log(errorMessage)
  } else {
    error.className = '';
    error.innerHTML = '';
    setSuccessFor(image); // console.log("success")

    return true;
  }

  return false;
} // COSTO PER NOTTE


var cost = document.getElementById('cost_per_night');

if (cost) {
  cost.addEventListener("change", costValidation);
}

function costValidation() {
  var costValue = Math.round(cost.value.trim() * 100) / 100;
  var error = document.getElementById('cost_per_night-error');
  var errorMessage = '';
  error.className = 'alert alert-danger';
  cost.parentElement.append(error);

  if (!costValue instanceof Number) {
    errorMessage = "Il costo per notte deve essere un numero";
    setErrorFor(cost);
    error.innerHTML = errorMessage; // console.log(errorMessage)
  } else if (costValue < 10 || costValue > 1000) {
    errorMessage = 'Il costo per notte deve essere compreso tra 10 e 1000';
    setErrorFor(squareMeters);
    error.innerHTML = errorMessage; // console.log(errorMessage)
  } else {
    error.className = '';
    error.innerHTML = '';
    setSuccessFor(cost); // console.log("success")

    return true;
  }

  return false;
} // ERROR/SUCCESS CLASSES


function setErrorFor(input) {
  input.className = 'form-control is-invalid';
} // [TODO] manca validazione position_id, user_id, service, is_visible


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

module.exports = __webpack_require__(/*! C:\Users\eduar\OneDrive\Desktop\Boolean\Progetto Finale\Repo Ufficiale\boolbnb-final-project\resources\js\clientsideValidation.js */"./resources/js/clientsideValidation.js");


/***/ })

/******/ });