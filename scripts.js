let contenLoader;

const loadPage = (page, section) => {
    fetch(`${page}.html`)
        .then(response => response.text())
        .then(data => {

            // Remove the slide-in class to reset the animation
            // content.classList.remove('slide-in');

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

    const information1Button = document.querySelector('#info-1-btn');
    if (information1Button) {
        information1Button.addEventListener('click', () => {
            loadPage('information2', "privacy-agreement");
        });
    }
    
    const information2Button = document.querySelector('#info-2-btn');
    if (information2Button) {
        information2Button.addEventListener('click', () => {
            loadPage('information3', "engagement-form");
        });
    }

    const information2PreviousButton = document.querySelector('#info-2-previous-btn');
    if (information2PreviousButton) {
        information2PreviousButton.addEventListener('click', () => {
            loadPage('information1', "information1");
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
loadPage('information3');
document.addEventListener('DOMContentLoaded', contenLoader);