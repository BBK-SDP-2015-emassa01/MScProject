function fillHidTable(){
    var htqf; //-- hidden field
    var rf; //-- retrieved field
    for ( var i = 1; i < 51; i++ ) {
        rf = "htqf"+i;
        document.getElementById(rf).innerHTML = document.getElementById("Q"+i+"CALC").value;
    }
    tableToExcel('hidTable', 'Analysis Results');
}

var tableToExcel = (function() {
    var uri = 'data:application/vnd.ms-excel;base64,'
            , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
            , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
            , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
    return function(table, name) {
        if (!table.nodeType) table = document.getElementById(table)
        var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
        window.location.href = uri + base64(format(template, ctx))
    }
})()

function checkScores(){
if (
document.getElementById('Q1CALC').value > 1 ||
document.getElementById('Q2CALC').value > 1 ||
document.getElementById('Q3CALC').value > 1 ||
document.getElementById('Q4CALC').value > 1 ||
document.getElementById('Q5CALC').value > 1 ||
document.getElementById('Q6CALC').value > 1 ||
document.getElementById('Q7CALC').value > 1 ||
document.getElementById('Q8CALC').value > 1 ||
document.getElementById('Q9CALC').value > 1 ||
document.getElementById('Q10CALC').value > 1 ||
document.getElementById('Q11CALC').value > 1 ||
document.getElementById('Q12CALC').value > 1 ||
document.getElementById('Q13CALC').value > 1 ||
document.getElementById('Q14CALC').value > 1 ||
document.getElementById('Q15CALC').value > 1 ||
document.getElementById('Q16CALC').value > 1 ||
document.getElementById('Q17CALC').value > 1 ||
document.getElementById('Q18CALC').value > 1 ||
document.getElementById('Q19CALC').value > 1 ||
document.getElementById('Q20CALC').value > 1 ||
document.getElementById('Q21CALC').value > 1 ||
document.getElementById('Q22CALC').value > 1 ||
document.getElementById('Q23CALC').value > 1 ||
document.getElementById('Q24CALC').value > 1 ||
document.getElementById('Q25CALC').value > 1 ||
document.getElementById('Q26CALC').value > 1 ||
document.getElementById('Q27CALC').value > 1 ||
document.getElementById('Q28CALC').value > 1 ||
document.getElementById('Q29CALC').value > 1 ||
document.getElementById('Q30CALC').value > 1 ||
document.getElementById('Q31CALC').value > 1 ||
document.getElementById('Q32CALC').value > 1 ||
document.getElementById('Q33CALC').value > 1 ||
document.getElementById('Q34CALC').value > 1 ||
document.getElementById('Q35CALC').value > 1 ||
document.getElementById('Q36CALC').value > 1 ||
document.getElementById('Q37CALC').value > 1 ||
document.getElementById('Q38CALC').value > 1 ||
document.getElementById('Q39CALC').value > 1 ||
document.getElementById('Q40CALC').value > 1 ||
document.getElementById('Q41CALC').value > 1 ||
document.getElementById('Q42CALC').value > 1 ||
document.getElementById('Q43CALC').value > 1 ||
document.getElementById('Q44CALC').value > 1 ||
document.getElementById('Q45CALC').value > 1 ||
document.getElementById('Q46CALC').value > 1 ||
document.getElementById('Q47CALC').value > 1 ||
document.getElementById('Q48CALC').value > 1 ||
document.getElementById('Q49CALC').value > 1 ||
document.getElementById('Q50CALC').value > 1 ) {
alert('You have entered a number that is not one of the possible options. The score is therefore not valid. Check your answers and try again.');
}
}

function validateScores(){
    if (
document.getElementById('Q1CALC').value  ==="" ||
document.getElementById('Q2CALC').value  ==="" ||
document.getElementById('Q3CALC').value  ==="" ||
document.getElementById('Q4CALC').value  ==="" ||
document.getElementById('Q5CALC').value  ==="" ||
document.getElementById('Q6CALC').value  ==="" ||
document.getElementById('Q7CALC').value  ==="" ||
document.getElementById('Q8CALC').value  ==="" ||
document.getElementById('Q9CALC').value  ==="" ||
document.getElementById('Q10CALC').value  ==="" ||
document.getElementById('Q11CALC').value  ==="" ||
document.getElementById('Q12CALC').value  ==="" ||
document.getElementById('Q13CALC').value  ==="" ||
document.getElementById('Q14CALC').value  ==="" ||
document.getElementById('Q15CALC').value  ==="" ||
document.getElementById('Q16CALC').value  ==="" ||
document.getElementById('Q17CALC').value  ==="" ||
document.getElementById('Q18CALC').value  ==="" ||
document.getElementById('Q19CALC').value  ==="" ||
document.getElementById('Q20CALC').value  ==="" ||
document.getElementById('Q21CALC').value  ==="" ||
document.getElementById('Q22CALC').value  ==="" ||
document.getElementById('Q23CALC').value  ==="" ||
document.getElementById('Q24CALC').value  ==="" ||
document.getElementById('Q25CALC').value  ==="" ||
document.getElementById('Q26CALC').value  ==="" ||
document.getElementById('Q27CALC').value  ==="" ||
document.getElementById('Q28CALC').value  ==="" ||
document.getElementById('Q29CALC').value  ==="" ||
document.getElementById('Q30CALC').value  ==="" ||
document.getElementById('Q31CALC').value  ==="" ||
document.getElementById('Q32CALC').value  ==="" ||
document.getElementById('Q33CALC').value  ==="" ||
document.getElementById('Q34CALC').value  ==="" ||
document.getElementById('Q35CALC').value  ==="" ||
document.getElementById('Q36CALC').value  ==="" ||
document.getElementById('Q37CALC').value  ==="" ||
document.getElementById('Q38CALC').value  ==="" ||
document.getElementById('Q39CALC').value  ==="" ||
document.getElementById('Q40CALC').value  ==="" ||
document.getElementById('Q41CALC').value  ==="" ||
document.getElementById('Q42CALC').value  ==="" ||
document.getElementById('Q43CALC').value  ==="" ||
document.getElementById('Q44CALC').value  ==="" ||
document.getElementById('Q45CALC').value  ==="" ||
document.getElementById('Q46CALC').value  ==="" ||
document.getElementById('Q47CALC').value  ==="" ||
document.getElementById('Q48CALC').value  ==="" ||
document.getElementById('Q49CALC').value  ==="" ||
document.getElementById('Q50CALC').value  === "" ) {
alert('Please complete all 50 items of your Autism Assessment to get started. The AQ score is not valid otherwise.');
}
}

function calculateAQ(){
alert('Your Autism Quotient score is: ' + (
   +document.getElementById('Q1CALC').value +
   +document.getElementById('Q2CALC').value +
   +document.getElementById('Q3CALC').value +
   +document.getElementById('Q4CALC').value +
   +document.getElementById('Q5CALC').value +
   +document.getElementById('Q6CALC').value +
   +document.getElementById('Q7CALC').value +
   +document.getElementById('Q8CALC').value +
   +document.getElementById('Q9CALC').value +
   +document.getElementById('Q10CALC').value +
   +document.getElementById('Q11CALC').value +
   +document.getElementById('Q12CALC').value +
   +document.getElementById('Q13CALC').value +
   +document.getElementById('Q14CALC').value +
   +document.getElementById('Q15CALC').value +
   +document.getElementById('Q16CALC').value +
   +document.getElementById('Q17CALC').value +
   +document.getElementById('Q18CALC').value +
   +document.getElementById('Q19CALC').value +
   +document.getElementById('Q20CALC').value +
   +document.getElementById('Q21CALC').value +
   +document.getElementById('Q22CALC').value +
   +document.getElementById('Q23CALC').value +
   +document.getElementById('Q24CALC').value +
   +document.getElementById('Q25CALC').value +
   +document.getElementById('Q26CALC').value +
   +document.getElementById('Q27CALC').value +
   +document.getElementById('Q28CALC').value +
   +document.getElementById('Q29CALC').value +
   +document.getElementById('Q30CALC').value +
   +document.getElementById('Q31CALC').value +
   +document.getElementById('Q32CALC').value +
   +document.getElementById('Q33CALC').value +
   +document.getElementById('Q34CALC').value +
   +document.getElementById('Q35CALC').value +
   +document.getElementById('Q36CALC').value +
   +document.getElementById('Q37CALC').value +
   +document.getElementById('Q38CALC').value +
   +document.getElementById('Q39CALC').value +
   +document.getElementById('Q40CALC').value +
   +document.getElementById('Q41CALC').value +
   +document.getElementById('Q42CALC').value +
   +document.getElementById('Q43CALC').value +
   +document.getElementById('Q44CALC').value +
   +document.getElementById('Q45CALC').value +
   +document.getElementById('Q46CALC').value +
   +document.getElementById('Q47CALC').value +
   +document.getElementById('Q48CALC').value +
   +document.getElementById('Q49CALC').value +
   +document.getElementById('Q50CALC').value));

}

