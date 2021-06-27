function displayDetails(bmiFormObj, bmi)
{
    var hUnit = bmiFormObj.heightUnit.
        options[bmiFormObj.heightUnit.selectedIndex].text;
    var wUnit = bmiFormObj.weightUnit.
        options[bmiFormObj.weightUnit.selectedIndex].text;
    var height = bmiFormObj.height.value;
    var weight = bmiFormObj.weight.value;
    var text = "BMI Report\n" +
        "Your weight: " + weight + " " + wUnit + "\n" +
        "Your height: " + height + " " + hUnit + "\n" +
        "Your BMI: " + valueTo1DecimalPlace(bmi) + "\n";
    if (bmi < 18.5)
        text += "Your BMI suggests that you are underweight.\n";
    else if (bmi < 25)
        text += "Your BMI suggests that you have a reasonable weight.\n";
    else if (bmi < 29)
        text += "Your BMI suggests that you may be overweight.\n";
    else
        text += "Your BMI suggests that you may be obese.\n";
    alert(text);
}