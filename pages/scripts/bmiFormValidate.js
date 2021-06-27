function bmiFormValidate(bmiFormObj)
{
    var hUnit = bmiFormObj.heightUnit.
        options[bmiFormObj.heightUnit.selectedIndex].text;
    var wUnit = bmiFormObj.weightUnit.
        options[bmiFormObj.weightUnit.selectedIndex].text;
    var height = bmiFormObj.height.value;
    var weight = bmiFormObj.weight.value;
    var email = bmiFormObj.email.value;
    var heightOK, weightOK, emailOK;

    if (hUnit == "inches")
        heightOK = inchesValid(height);
    else
        heightOK = centimetresValid(height);
    
    if (wUnit == "pounds")
        weightOK = poundsValid(weight);
    else
        weightOK = kilogramsValid(weight);
    
    if (bmiFormObj.wantMail.checked)
    {
        emailOK = emailValid(email);
        alert("Warning: The e-mail feature is currently not supported.")
    }
    else
        emailOK = true;
    
    return heightOK && weightOK && emailOK;
