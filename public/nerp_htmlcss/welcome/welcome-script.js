// script.js

const themes = {
    default: 'default-theme-variables',
    dark: 'dark-theme-variables',
    red: 'red-theme-variables',
    blackForest: 'black-forest-theme-variables',
    lavender: 'lavender-theme-variables'
};

// Function to set a cookie
function setCookie(name, value, days) {
    const d = new Date();
    d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000)); // Days to milliseconds
    let expires = "expires=" + d.toUTCString();
    document.cookie = `${name}=${value}; ${expires}; path=/`;
}

// Function to get a cookie value
function getCookie(name) {
    const nameEQ = `${name}=`;
    const ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

// Function to remove a cookie
function eraseCookie(name) {
    document.cookie = `${name}=; Max-Age=-99999999; path=/`;
}

// Function to set the theme
function setTheme(themeName) {
    // Remove all theme classes
    Object.values(themes).forEach(theme => document.body.classList.remove(theme));

    // Add the selected theme class
    if (themes[themeName]) {
        document.body.classList.add(themes[themeName]);
        // Save the selected theme to cookies
        setCookie('selectedTheme', themeName, 7); // Save for 7 days
    } else {
        console.warn('Theme not found:', themeName);
    }
}

// Function to load the theme from cookies
function loadTheme() {
    const savedTheme = getCookie('selectedTheme');
    if (savedTheme && themes[savedTheme]) {
        setTheme(savedTheme);
    } else {
        // Set default theme if no saved theme is found
        setTheme('default');
    }
}

// Example usage
function setDefaultTheme() {
    setTheme('default');
    var defaultimage = document.querySelector('.default-image');
    var darkimage = document.querySelector('.dark-image');
    var lavenderimage = document.querySelector('.lavender-image');
    var redvelvetimage = document.querySelector('.red-velvet-image');
    var blackforestimage = document.querySelector('.black-forest-image');
    
    defaultimage.style.display = 'block';
    darkimage.style.display = 'none';
    lavenderimage.style.display = 'none';
    redvelvetimage.style.display = 'none';
    blackforestimage.style.display = 'none';
}

function setDarkTheme() {
    setTheme('dark');
    var defaultimage = document.querySelector('.default-image');
    var darkimage = document.querySelector('.dark-image');
    var lavenderimage = document.querySelector('.lavender-image');
    var redvelvetimage = document.querySelector('.red-velvet-image');
    var blackforestimage = document.querySelector('.black-forest-image');
    
    defaultimage.style.display = 'none';
    darkimage.style.display = 'block';
    lavenderimage.style.display = 'none';
    redvelvetimage.style.display = 'none';
    blackforestimage.style.display = 'none';
}

function setRedTheme() {
    setTheme('red');
    var defaultimage = document.querySelector('.default-image');
    var darkimage = document.querySelector('.dark-image');
    var lavenderimage = document.querySelector('.lavender-image');
    var redvelvetimage = document.querySelector('.red-velvet-image');
    var blackforestimage = document.querySelector('.black-forest-image');
    
    defaultimage.style.display = 'none';
    darkimage.style.display = 'none';
    lavenderimage.style.display = 'none';
    redvelvetimage.style.display = 'block';
    blackforestimage.style.display = 'none';
}

function setBlackForestTheme() {
    setTheme('blackForest');
    var defaultimage = document.querySelector('.default-image');
    var darkimage = document.querySelector('.dark-image');
    var lavenderimage = document.querySelector('.lavender-image');
    var redvelvetimage = document.querySelector('.red-velvet-image');
    var blackforestimage = document.querySelector('.black-forest-image');
    
    defaultimage.style.display = 'none';
    darkimage.style.display = 'none';
    lavenderimage.style.display = 'none';
    redvelvetimage.style.display = 'none';
    blackforestimage.style.display = 'block';
}

function setLavenderTheme() {
    setTheme('lavender');
    var defaultimage = document.querySelector('.default-image');
    var darkimage = document.querySelector('.dark-image');
    var lavenderimage = document.querySelector('.lavender-image');
    var redvelvetimage = document.querySelector('.red-velvet-image');
    var blackforestimage = document.querySelector('.black-forest-image');
    
    defaultimage.style.display = 'none';
    darkimage.style.display = 'none';
    lavenderimage.style.display = 'block';
    redvelvetimage.style.display = 'none';
    blackforestimage.style.display = 'none';
}

// Ensure the theme is loaded when the page loads
document.addEventListener('DOMContentLoaded', loadTheme);

// Add event listeners to buttons if needed
document.getElementById('default-theme-button')?.addEventListener('click', setDefaultTheme);
document.getElementById('dark-theme-button')?.addEventListener('click', setDarkTheme);
document.getElementById('red-theme-button')?.addEventListener('click', setRedTheme);
document.getElementById('black-forest-theme-button')?.addEventListener('click', setBlackForestTheme);
document.getElementById('lavender-theme-button')?.addEventListener('click', setLavenderTheme);

// select2

// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
