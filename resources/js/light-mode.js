const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon-default');
const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon-default');
const themeToggleDarkIconMobile = document.getElementById('theme-toggle-dark-icon-mobile');
const themeToggleLightIconMobile = document.getElementById('theme-toggle-light-icon-mobile');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
    themeToggleLightIconMobile.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
    themeToggleDarkIconMobile.classList.remove('hidden');
}

document.getElementById('default').addEventListener('click', function () {
    changeLightMode(themeToggleDarkIcon, themeToggleLightIcon);
});

document.getElementById('mobile').addEventListener('click', function () {
    changeLightMode(themeToggleDarkIconMobile, themeToggleLightIconMobile);
});

function changeLightMode(toggleDarkIcon, toggleLightIcon) {
    // toggle icons inside button
    toggleDarkIcon.classList.toggle('hidden');
    toggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

        // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }
}
