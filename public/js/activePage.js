const activePage = window.location.pathname;
const navLinks = document.querySelectorAll('nav a').
forEach(Link => {
    if (link.href.includes('${activePage}')) {
        console.log('${activePage}');
    }
})