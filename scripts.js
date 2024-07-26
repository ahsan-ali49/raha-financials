let contenLoader;
let clientName;
let companyName;
let isChecked;
const selectedServices = { bk: 'Bookkeeping', fs: 'Financial Statements', tpf: 'Tax Preparation & Filing', ad: 'Auditing', pp: 'Payroll Processing', br: 'Business Registration', itin: 'ITIN Registration', nwe: 'Net Worth Evaluation' };


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
            console.log(page);
            if(page == "services"){
                console.log(page);
                const serviceListItems = document.querySelectorAll('.flex-item-inner-div');
                serviceListItems.forEach((item) => {
                    item.addEventListener('click', () => {
                        const serviceId = item.getAttribute('id');
                        console.log(serviceId);
                        loadPage(serviceId, `${serviceId}-section`);
                    });
                });
            }else if(page == "information3") {

                var canvas = document.getElementById("signature-pad");

                function resizeCanvas() {
                    var ratio = Math.max(window.devicePixelRatio || 1, 1);
                    canvas.width = canvas.offsetWidth * ratio;
                    canvas.height = canvas.offsetHeight * ratio;
                    canvas.getContext("2d").scale(ratio, ratio);
                }
                window.onresize = resizeCanvas;
                resizeCanvas();

                var signaturePad = new SignaturePad(canvas, {
                    backgroundColor: 'rgb(250,250,250)'
                });

                const clientNameSpan = document.querySelector('.client-name-span');
                clientNameSpan.innerHTML = clientName;
                isChecked.forEach((checkbox) => {
                    console.log(checkbox.id);
                })
            }
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
            clientName = document.querySelector('.information-name-field').value;
            console.log(clientName);
            companyName = document.querySelector('#information-company-name').value;
            console.log(companyName);
            isChecked = document.querySelectorAll('input[type="checkbox"]:checked');

            isChecked.forEach((checkbox) => {
                console.log(checkbox.id);
                console.log(selectedServices[checkbox.id]);
            })
            
            loadPage('information2', "privacy-agreement");
        });
    }
    
    const information2Button = document.querySelector('#info-2-btn');
    if (information2Button) {
        information2Button.addEventListener('click', () => {
            // const formValue = document.getElementById('privacy-agreement-form').elements["privacy-agreement"].value;
            loadPage('information3', "engagement-form");
        });
    }

    const information2PreviousButton = document.querySelector('#info-2-previous-btn');
    if (information2PreviousButton) {
        information2PreviousButton.addEventListener('click', () => {
            loadPage('information1', "information1");
        });
    }

    const information3PreviousButton = document.querySelector('#info-3-previous-btn');
    if (information3PreviousButton) {
        information3PreviousButton.addEventListener('click', () => {
            loadPage('information2', "information2");
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