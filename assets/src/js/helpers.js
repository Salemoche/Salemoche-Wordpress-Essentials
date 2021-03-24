const smCssVar = ( name, value ) => {

    if(name.substr(0, 2) !== "--") {
        name = "--" + name;
    }

    if(value) {
        document.documentElement.style.setProperty(name, value)
    }

    return getComputedStyle(document.documentElement).getPropertyValue(name);

}