function feedbackFormValidate()
{
    var contactFormObj = document.getElementById("contactForm");
    var firstName = contactFormObj.firstName.value;
    var lastName = contactFormObj.lastName.value;
    var phone = contactFormObj.phone.value;
    var email = contactFormObj.email.value;
    var everythingOK = true;

    if (!validateName(firstName))
    {
        alert("Error: Invalid first name.");
        everythingOK = false;
    }
    
    if (!validateName(lastName))
    {
        alert("Error: Invalid last name.");
        everythingOK = false;
    }
