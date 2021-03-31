import DeviceDetector from 'device-detector-js';

const deviceDetector = new DeviceDetector();
const userAgent = window.navigator.userAgent;
export const smDevice = deviceDetector.parse(userAgent);

export const smCssVar = ( name, value ) => {

    if(name.substr(0, 2) !== "--") {
        name = "--" + name;
    }

    if(value) {
        document.documentElement.style.setProperty(name, value)
    }

    return getComputedStyle(document.documentElement).getPropertyValue(name);

}