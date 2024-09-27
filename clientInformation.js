// Get the modal
var popupForm;

let package;

// Get the button that opens the modal
var learnmore = document.querySelectorAll(".learnMoreBtn");
var submit1 = document.getElementById('info-1-btn')
var submit2 = document.getElementById("info-2-btn");
var submit3 = document.getElementById("info-3-btn");



var previous2 = document.getElementById('info-2-previous-btn')
var previous3 = document.getElementById("info-3-previous-btn");


// Get the <span> element that closes the modal
var closeBtn = document.querySelectorAll(".closeBtn");

learnmore.forEach((learnmorebtn, index) => {
    learnmorebtn.onclick = function (e) {
        var card = e.target.parentElement;
        const planName = card.querySelector('.pricing-card-span-1');
        const planPrice = card.querySelector('.pricing-card-span-3');
        const planDetails = planName.textContent + ' - ' + planPrice.textContent;
        package = planDetails;
        console.log(planName.textContent);
        console.log(planPrice.textContent);
        formDiv1 = document.getElementById("clientInformationForm1");
        popupForm = formDiv1;
        formDiv2 = document.getElementById("clientInformationForm2");
        formDiv3 = document.getElementById("clientInformationForm3");
        formDiv1.style.display = "block";
    }
})

// When the user clicks the button, open the modal 
submit1.onclick = function () {
    popupForm = formDiv2;
    const step1Form = document.getElementById('clientForm1');
    if (!step1Form.checkValidity()) {
        step1Form.reportValidity();
        return;
    }
    // Collect data from step 1
    const step1Data = new FormData(step1Form);
    sessionStorage.setItem('step1Data', JSON.stringify(Object.fromEntries(step1Data)));

    // Move to the next form
    formDiv1.style.display = "none";
    formDiv2.style.display = "block";
    form1Data = JSON.parse(sessionStorage.getItem('step1Data'));
    if (form1Data.name !== null) {
        document.getElementById('name-2').value = form1Data.name;
        // console.log(form1Data);
    } else {
        alert('name is null');
    }
    // popupForm.style.display = "block";
}

// When the user clicks the button, open the modal 
submit2.onclick = function () {
    popupForm = formDiv3;
    const step2Form = document.getElementById('clientForm2');
    if (!step2Form.checkValidity()) {
        step2Form.reportValidity();
        return;
    }
    // Collect data from step 1
    const step2Data = new FormData(step2Form);
    sessionStorage.setItem('step2Data', JSON.stringify(Object.fromEntries(step2Data)));
    // Move to the next form
    formDiv2.style.display = "none";
    formDiv3.style.display = "block";
    form1Data = JSON.parse(sessionStorage.getItem('step1Data'));
    if (form1Data.name !== null) {
        document.getElementById('client_name').textContent = form1Data.name;
        document.getElementById('name-3').value = form1Data.name;
    }
    if (form1Data.bk !== null && form1Data.bk !== undefined) {
        document.getElementById('bk-li').textContent = 'Book Keeping';
    } else {
        document.getElementById('bk-li').style.display = 'none';
    }
    if (form1Data.fs !== null && form1Data.fs !== undefined) {
        document.getElementById('fs-li').textContent = 'Financial Statements';
    } else {
        document.getElementById('fs-li').style.display = 'none';
    }
    if (form1Data.tpf !== null && form1Data.tpf !== undefined) {
        document.getElementById('tpf-li').textContent = 'Tax Preparetion & Filing';
    } else {
        document.getElementById('tpf-li').style.display = 'none';
    }
    if (form1Data.ad !== null && form1Data.ad !== undefined) {
        document.getElementById('ad-li').textContent = 'Auditing';
    } else {
        document.getElementById('ad-li').style.display = 'none';
    }
    if (form1Data.pp !== null && form1Data.pp !== undefined) {
        document.getElementById('pp-li').textContent = 'Payroll Processing';
    } else {
        document.getElementById('pp-li').style.display = 'none';
    }
    if (form1Data.br !== null && form1Data.br !== undefined) {
        document.getElementById('br-li').textContent = 'Business Registration';
    } else {
        document.getElementById('br-li').style.display = 'none';
    }
    if (form1Data.itin !== null && form1Data.itin !== undefined) {
        document.getElementById('itin-li').textContent = 'ITIN Registration';
    } else {
        document.getElementById('itin-li').style.display = 'none';
    }
    if (form1Data.nwe !== null && form1Data.nwe !== undefined) {
        document.getElementById('nwe-li').textContent = 'Net Worth Evaluation';
    } else {
        document.getElementById('nwe-li').style.display = 'none';
    }
}
// When the user clicks the button, open the modal 
submit3.onclick = function () {

    var dataURL = canvas.toDataURL('image/png');  // Get the image data as a base64 string
    document.getElementById('signature').value = dataURL;  // Set the hidden input value
    

    const step3Form = document.getElementById('clientForm3');

    // Validate form data
    if (!step3Form.checkValidity()) {
        step3Form.reportValidity();
        return;
    }

    // Collect data from step 3
    const step3Data = new FormData(step3Form);

    // Get step 1 and step 2 data from session storage

    // const step1Data = JSON.parse(sessionStorage.getItem('step1Data'));
    // const step2Data = JSON.parse(sessionStorage.getItem('step2Data'));

    const step1Data = new FormData();
    Object.entries(JSON.parse(sessionStorage.getItem('step1Data'))).forEach(([key, value]) => {
        step1Data.append(key, value);
    });

    const step2Data = new FormData();
    Object.entries(JSON.parse(sessionStorage.getItem('step2Data'))).forEach(([key, value]) => {
        step2Data.append(key, value);
    });

    // const allData = { ...step1Data, ...step2Data, ...Object.fromEntries(step3Data) };
    const allData = new FormData();
    
    allData.append('package', package);
    step1Data.forEach((value, key) => allData.append(key, value));
    step2Data.forEach((value, key) => allData.append(key, value));
    step3Data.forEach((value, key) => allData.append(key, value));
    allData.append('submit_information', true);
    
    // fileInput = document.getElementById('signature');
    // file = fileInput.files[0];
    // allData.append('signature', file);

    // const fileInput = document.getElementById('signature');
    // if (fileInput.files.length > 0) {
    //     allData.append('signature', fileInput.files[0]);
    // }

    console.log(allData);

    fetch('formsubmit', {
        method: 'POST',
        // headers: { 'Content-Type': 'application/json' },
        body: allData,
        // body: 'hello',
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Redirect to the thank you page
                window.location.href = 'thankyou'; // or 'thankyou.php' or the path to your thank you page
            } else {
                // Handle the error case, e.g., show an error message
                alert(data.message || 'Something went wrong. Please try again.');
            }

        })
        .catch(error => {
            console.error('Error:', error);
            // Handle error (e.g., show an error message)
        });

}

previous2.onclick = function () {

    formDiv2.style.display = "none";
    formDiv1.style.display = "block";
}

previous3.onclick = function () {

    formDiv3.style.display = "none";
    formDiv2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
closeBtn.forEach((btn, index) => {
    btn.onclick = function () {
        popupForm.style.display = "none";
    }
})


// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == popupForm) {
        popupForm.style.display = "none";
    }
}
