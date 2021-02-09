/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/filter.js":
/*!**************************!*\
  !*** ./src/js/filter.js ***!
  \**************************/
/***/ (() => {

(function ($) {
  $(document).on('ready', function () {
    /* Add class to display groups so they slide lower than the filter group */
    $('.wp-block-group').each(function () {
      if ($(this).find('.uxu-story-display').length != 0) {
        $(this).addClass('uxu-story-display-container');
      }
    });
    var filter = {
      categories: [],
      tags: [],
      all: []
    };
    var filterObjects = '.uxu-tile';
    var filterCategories = ['categories', 'tags'];
    var filterInput = '.sm-filter-input';
    var filterType = 'has all';
    $(filterInput).each(function () {
      var smInput = $(this);
      /* Check for the type of input (switch or button) */

      if (smInput.attr('type') == 'button') {
        smInput.click(function () {
          var filterValue = smInput.attr('value');
          var filterCategory = 'tags';
          smInput.toggleClass('active');
          smCheckFilters(filterValue, filterCategory);
        });
      } else if (smInput.is('select')) {
        smInput.change(function () {
          // /* Clean up so that all the tags are removed */
          smCleanUpFilters();
          var filterValue = smInput.val();
          var filterCategory = 'categories';
          smCheckFilters(filterValue, filterCategory);
        });
      }
    });

    function smCheckFilters(filterValue, filterCategory) {
      /* Add or remove Items to and from the filter Array */
      if (filter.all.includes(filterValue)) {
        filter.all = filter.all.filter(function (value) {
          return value != filterValue;
        });
      } else {
        filter.all.push(filterValue);
      }

      smFilterObjects(filterCategory);
      /* No Results */

      /* SM-TODO: Imporve UX with feedback */

      var filteredObjects = $('.uxu-filter-container').find('.uxu-tile');

      if (filteredObjects.length == 0) {
        $('select' + filterInput).val('select');
        smCleanUpFilters();
      }

      console.log(filter.all);
    }

    function smFilterObjects(filterCategory) {
      $(filterObjects).each(function () {
        var filterObject = $(this);
        var specificFilter = filter.all;
        var dataArray = filterObject.data(filterCategory).split(' ');
        var isFiltered = 0;
        var parentId = $(this).data('parent');
        /* Check if the data-... contains one of the filters and add 1 to the is filtered array*/

        specificFilter.forEach(function (filterTerm) {
          if (dataArray.includes(filterTerm)) {
            isFiltered += 1;
          }
        });
        /* Check if each element has either one or all specified filters */

        if (filterType == 'has one' && isFiltered || filterType == 'has all' && isFiltered == specificFilter.length) {
          filterObject.addClass('filtered-in');
          filterObject.removeClass('filtered-out');
          filterObject.appendTo($('.uxu-filter-container'));
        } else {
          filterObject.addClass('filtered-out');
          filterObject.removeClass('filtered-in');
          filterObject.prependTo($('#' + parentId + ' .uxu-tile-container'));
        }
      });
      /* prepare filter container */

      $('.uxu-filter-results').css('visibility', 'visible');
      $('.uxu-filter-results').css('height', 'auto'); // if (filter.categories.length == 0 && filter.tags.length == 0) {

      if (filter.all.length == 0) {
        smCleanUpFilters();
      }
    }

    function smCleanUpFilters() {
      filter.categories = [];
      filter.tags = [];
      filter.all = [];
      /* Hide filter container */

      $('.uxu-filter-results').css('visibility', 'hidden');
      $('.uxu-filter-results').css('height', '0');
      /* Remove Tag cloud button classes */

      $(filterInput).removeClass('active');
      /* Return filter objects */

      $(filterObjects).removeClass('filtered-in');
      $(filterObjects).removeClass('filtered-out');
      $(filterObjects).each(function () {
        var parentId = $(this).data('parent');
        $(this).prependTo($('#' + parentId + ' .uxu-tile-container'));
      });
    }
  });
})(jQuery);

/***/ }),

/***/ "./src/js/main.js":
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _filter__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./filter */ "./src/js/filter.js");
/* harmony import */ var _filter__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_filter__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _scss_main_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../scss/main.scss */ "./src/scss/main.scss");
// import scripts
 // import styles



(function ($) {// alert('you are main');
  // function fixGutenbergPreview() {
  //     const gbGroup = $('.block-editor-block-list__block');
  //     console.log('yo')
  //     gbGroup.each( function () {
  //         if ($(this).find('.sm-col').length !== 0) {
  //             console.log($(this).find('.sm-col'));
  //         }
  //     })
  // }
  // fixGutenbergPreview();
  // $(document).on('ready', function () {
  //     fixGutenbergPreview();
  // })
})(jQuery);

/***/ }),

/***/ "./src/scss/main.scss":
/*!****************************!*\
  !*** ./src/scss/main.scss ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		if(__webpack_module_cache__[moduleId]) {
/******/ 			return __webpack_module_cache__[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	// startup
/******/ 	// Load entry module
/******/ 	__webpack_require__("./src/js/main.js");
/******/ 	// This entry module used 'exports' so it can't be inlined
/******/ })()
;
//# sourceMappingURL=main.js.map