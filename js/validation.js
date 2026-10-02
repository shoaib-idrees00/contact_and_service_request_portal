const form = document.getElementById("serviceForm");

form.addEventListener("submit", function (event) {
    event.preventDefault();

    let isValid = true;

    const name = document.getElementById("full_name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const service = document.getElementById("service").value;
    const description = document.getElementById("description").value.trim();
    const contactMethod = document.querySelector('input[name="contact_method"]:checked');


    document.getElementById("nameError").textContent = "";
    document.getElementById("emailError").textContent = "";
    document.getElementById("phoneError").textContent = "";
    document.getElementById("serviceError").textContent = "";
    document.getElementById("descriptionError").textContent = "";
    document.getElementById("contactError").textContent = "";

    
    if (name === "") {
        document.getElementById("nameError").textContent = "Name is required.";
        isValid = false;
    } else if (name.length < 2) {
        document.getElementById("nameError").textContent = "Name must contain at least 2 characters.";
        isValid = false;
    }

    
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email === "") {
        document.getElementById("emailError").textContent = "Email is required.";
        isValid = false;
    } else if (!emailPattern.test(email)) {
        document.getElementById("emailError").textContent = "Please enter a valid email address.";
        isValid = false;
    }


    if (phone === "") {
        document.getElementById("phoneError").textContent = "Phone number is required.";
        isValid = false;
    } else if (phone.replace(/\D/g, "").length < 7) {
        document.getElementById("phoneError").textContent = "Please enter a valid phone number.";
        isValid = false;
    }


    if (service === "") {
        document.getElementById("serviceError").textContent = "Please select a service.";
        isValid = false;
    }


    if (description === "") {
        document.getElementById("descriptionError").textContent = "Project description is required.";
        isValid = false;
    } else if (description.length < 20) {
        document.getElementById("descriptionError").textContent = "Description must contain at least 20 characters.";
        isValid = false;
    }

    
    if (!contactMethod) {
        document.getElementById("contactError").textContent = "Please select a contact method.";
        isValid = false;
    }

    if (isValid) {
        form.submit();
    }
});