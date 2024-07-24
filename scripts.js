let contenLoader;

const loadPage = (page, section) => {
    fetch(`${page}.html`)
        .then(response => response.text())
        .then(data => {
            // if(page=="pricing"){
            //     const content1 = document.getElementById('content1');
            //     content1.innerHTML = "";
            // }
            content.innerHTML = data;

            // Re-attach the event listener after content is loaded
            attachEventListeners();

            if (section) {
                const sectionElement = document.getElementById(section);
                if (sectionElement) {
                    sectionElement.scrollIntoView({ behavior: 'smooth' });
                }
            }
            contenLoader();
        })
        .catch(error => {
            content.innerHTML = '<p>Sorry, the content could not be loaded.</p>';
            console.error('Error loading page:', error);
        });
};

const attachEventListeners = () => {
    const enterpriseButton = document.querySelector('.hero-indv-btn-enterprise');
    if (enterpriseButton) {
        enterpriseButton.addEventListener('click', () => {
            loadPage('services');
        });
    }

    const individualButton = document.querySelector('.hero-entr-btn');
    if (individualButton) {
        individualButton.addEventListener('click', () => {
            loadPage('enterprise');
        });
    }
};

contenLoader = () => {
    const links = document.querySelectorAll('.navlink');
    const content = document.getElementById('content');

    links.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const page = link.getAttribute('data-page');
            const section = link.getAttribute('data-section');
            loadPage(page, section);
        });
    });
}

// Initial page load
loadPage('services');
document.addEventListener('DOMContentLoaded', contenLoader);