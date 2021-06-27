function valueOfBMI(bmiFormObj)
{
    var hUnit = bmiFormObj.heightUnit.
        options[bmiFormObj.heightUnit.selectedIndex].text;
    var wUnit = bmiFormObj.weightUnit.
        options[bmiFormObj.weightUnit.selectedIndex].text;
    var height = bmiFormObj.height.value;
    var weight = bmiFormObj.weight.value;

    if (hUnit == "inches") height = inchesToCentimetres(height);
    if (wUnit == "pounds") weight = poundsToKilograms(weight);
    
    height /= 100.0; //Convert height from centimeters to meters
    var bmi = weight/(height*height); //kilograms/(meters*meters)
    return bmi;
}