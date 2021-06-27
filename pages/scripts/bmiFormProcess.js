function bmiFormProcess()
{
    var bmiFormObj = document.getElementById("bmiForm");
    if (bmiFormValidate(bmiFormObj))
    {
        var bmi = valueOfBMI(bmiFormObj);
        if (bmiFormObj.details.checked)
            displayDetails(bmiFormObj, bmi);
        else
            alert("Your BMI: " + valueTo1DecimalPlace(bmi));
    }
}
