import DeviceDetector from 'device-detector-js';

const deviceDetector = new DeviceDetector();
const userAgent = window.navigator.userAgent;
export const smDevice = deviceDetector.parse(userAgent);

//======================
// Styling
//======================

export const smCssVar = ( name, value ) => {

    if(name.substr(0, 2) !== "--") {
        name = "--" + name;
    }

    if(value) {
        document.documentElement.style.setProperty(name, value)
    }

    return getComputedStyle(document.documentElement).getPropertyValue(name);

}

//======================
// Cookies
//======================

export const smSetCookie = (cname, cvalue, exdays) => {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

export const smGetCookie = (cname) => {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


//======================
// Accordion
//======================

export const smCreateAccordion = (accordionControl = $('.sm-accordion-control'), collabsable = $('.sm-collabsable'), callback = () => {}) => {


    accordionControl.on('click', function () {
        collapseItem($(this), collapsable);
    });
    
    function collapseItem(accordionControl, collapsable) {
        accordionControl.toggleClass('active');
        collapsable.toggleClass('collapsed');
    
        if (!collapsable.hasClass('collapsed')) {
            collapsable.css('max-height', collapsable[0].scrollHeight);
        } else {
            collapsable.css('max-height', 0);
        }
    }

    callback([accordionControl, collabsable]);

}

//======================
// Cursor
//======================

export const smFollowCursor = (background = $('html'), cursor = $('.cursor'), condition = true) => {

    if (!condition) return
    
    cursor.addClass('fixed');

    background.on('mousemove', function (e) {    
    
        let xPos = e.clientX;
        let yPos = e.clientY;


        cursor.css('left', xPos);
        cursor.css('top', yPos);
        
        if (xPos >= window.innerWidth / 2) {
            cursor.addClass('left');
            cursor.removeClass('right');
        } else {
            cursor.addClass('right');
            cursor.removeClass('left');
        }
    
        cursor.find(".dia-cursor-content").remove();
        cursor.append(content);
    })

    background.on('mouseleave', () => {
        cursor.removeClass('fixed');
    })
    
}