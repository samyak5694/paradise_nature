function valueTo1DecimalPlace(num)
{
    var intPortion = Math.floor(num);
    var decimalPortion = Math.round(num*10)%10;
    var text = intPortion + "." + decimalPortion;
    return text;
}
