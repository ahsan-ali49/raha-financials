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
// const loadPage = (page, section) => {
//     // Add the fade-out class
//     content.classList.add('fade-out');

//     // Wait for the fade-out transition to complete
//     setTimeout(() => {
//         fetch(`${page}.html`)
//             .then(response => response.text())
//             .then(data => {
//                 content.innerHTML = data;

//                 // Re-attach the event listener after content is loaded
//                 attachEventListeners();

//                 if (section) {
//                     const sectionElement = document.getElementById(section);
//                     if (sectionElement) {
//                         sectionElement.scrollIntoView({ behavior: 'smooth' });
//                     }
//                 }

                // // Remove the fade-out class and add the fade-in class
                // content.classList.remove('fade-out');
                // content.classList.add('fade-in');
//             })
//             .catch(error => {
//                 content.innerHTML = '<p>Sorry, the content could not be loaded.</p>';
//                 console.error('Error loading page:', error);
//             });
//     }, 500); // Match this delay with the CSS transition duration
// };

// Initial page load
// document.addEventListener('DOMContentLoaded', () => {
//     loadPage('services');
//     attachEventListeners();
// });



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