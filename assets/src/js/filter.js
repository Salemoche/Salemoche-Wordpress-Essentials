(function($) {

    $(document).on('ready', () => {
        
        /* Add class to display groups so they slide lower than the filter group */
        $('.wp-block-group').each( function () {
            if ($(this).find('.uxu-story-display').length != 0) {
                $(this).addClass('uxu-story-display-container');
            }
        });


        let filter = {
            categories: [],
            tags: [],
            all: []
        };
        let filterObjects = '.uxu-tile';
        let filterCategories = [
            'categories',
            'tags'
        ]
        let filterInput = '.sm-filter-input';
        let filterType = 'has all';

        $(filterInput).each( function() {

            let smInput = $(this);
            
            /* Check for the type of input (switch or button) */
            if( smInput.attr('type') == 'button') {

                smInput.click( function () {
                    let filterValue = smInput.attr('value');
                    let filterCategory = 'tags';

                    smInput.toggleClass('active');

                    smCheckFilters(filterValue, filterCategory);
                })
            } else if( smInput.is('select')) {
                smInput.change( function () {

                    // /* Clean up so that all the tags are removed */
                    smCleanUpFilters();

                    let filterValue = smInput.val()
                    let filterCategory = 'categories';

                    smCheckFilters(filterValue, filterCategory);
                })
            }
        });

        function smCheckFilters(filterValue, filterCategory) {
            /* Add or remove Items to and from the filter Array */
            if (filter.all.includes(filterValue)) {
                filter.all = filter.all.filter( value => value != filterValue);
            } else {
                filter.all.push(filterValue);
            }
            
            smFilterObjects(filterCategory);
            
            /* No Results */
            /* SM-TODO: Imporve UX with feedback */
            let filteredObjects = $('.uxu-filter-container').find('.uxu-tile');
            if(filteredObjects.length == 0) {
                $('select' + filterInput).val('select');
                smCleanUpFilters();
            }

            console.log(filter.all);
        }

        function smFilterObjects( filterCategory ) {
            $(filterObjects).each( function () {
                let filterObject = $(this);
                let specificFilter = filter.all;
                let dataArray = filterObject.data(filterCategory).split(' ')
                let isFiltered = 0;
                let parentId = $(this).data('parent');

                
                /* Check if the data-... contains one of the filters and add 1 to the is filtered array*/
                specificFilter.forEach(filterTerm => {
                    if (dataArray.includes(filterTerm)) {
                        isFiltered += 1
                    }
                });

                /* Check if each element has either one or all specified filters */
                if (
                    (filterType == 'has one' && isFiltered)
                    || (filterType == 'has all' && isFiltered == specificFilter.length)
                ) {
                    filterObject.addClass('filtered-in');
                    filterObject.removeClass('filtered-out');
                    filterObject.appendTo($('.uxu-filter-container'));
                } else {
                    filterObject.addClass('filtered-out');
                    filterObject.removeClass('filtered-in');
                    filterObject.prependTo($('#' + parentId + ' .uxu-tile-container'));
                }
        
            })

            /* prepare filter container */
            $('.uxu-filter-results').css('visibility', 'visible');
            $('.uxu-filter-results').css('height', 'auto');

            // if (filter.categories.length == 0 && filter.tags.length == 0) {
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
                let parentId = $(this).data('parent');
                $(this).prependTo($('#' + parentId + ' .uxu-tile-container'));

            })
        }

    })

})(jQuery)