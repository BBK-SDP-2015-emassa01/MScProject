function fillHidTable(){
  if (isOK() && isFilled()){
    var htqf; //-- hidden field
    var rf; //-- retrieved field
    for ( var i = 1; i < 51; i++ ) {
        rf = "htqf"+i;
        document.getElementById(rf).innerHTML = document.getElementById("Q"+i+"CALC").value;
    }
    tableToExcel('hidTable', 'Analysis Results');
  }
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



function isOK(){
  okVal = true;
    for ( var i = 1; i < 51; i++ ){
      if (document.getElementById('Q' + i + 'CALC').value > 1 ){
        okVal = false;
      }
    }

    if (okVal === false) {
      alert('You have entered a number that is not one of the possible options. The score is therefore not valid. Check your answers and try again.');
    }
    return okVal;
        //return true if all vals are filled.
  }

  function isFilled(){
  emptyVal = true;
    for ( var i = 1; i < 51; i++ ){
      if (document.getElementById('Q' + i + 'CALC').value ===""){
        emptyVal = false;
      }
    }

    if (emptyVal === false) {
      alert('Please complete all 50 items of your Autism Assessment to get started. The AQ score is not valid otherwise.');
    }
    return emptyVal;
        //return true if all vals are filled.
  }

  function calculateAQ(){
    var score = 0;
      if (isOK() && isFilled()){
        for ( var i = 1; i < 51; i++ ){
        score = score + +document.getElementById('Q' + i + 'CALC').value;
        }
      alert('Your Autism Score is: ' + score);
      return score;
      }
  }

window.onload=function(){
    var url = document.URL;
    url1 = url.split("=");
    url2 = url1[1].split("%20").join(" ");
    url2 = url2.split("+").join(" ");
    document.getElementById("queryStringVal").value=url2;
}



function gcseCallback() {
    if (document.readyState != 'complete')
        return google.setOnLoadCallback(gcseCallback, true);
    google.search.cse.element.render({gname:'gsearch', div:'results', tag:'searchresults-only', attributes:{linkTarget:'', webSearchResultSetSize: "3"}});
    var element = google.search.cse.element.getElement('gsearch');
    element.execute(queryStringVal.value);
};
window.__gcse = {
parsetags: 'explicit',
callback: gcseCallback
};
(function() {
 var cx = '008818185974073145685:ga_fmgk9gf0';
 var gcse = document.createElement('script');
 gcse.type = 'text/javascript';
 gcse.async = true;
 gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
 '//www.google.com/cse/cse.js?cx=' + cx;
 var s = document.getElementsByTagName('script')[0];
 s.parentNode.insertBefore(gcse, s);
 })();



function gcseCallback() {
    if (document.readyState != 'complete')
        return google.setOnLoadCallback(gcseCallback, true);
    google.search.cse.element.render({gname:'gsearch', div:'results', tag:'searchresults-only', attributes:{linkTarget:'', webSearchResultSetSize: "3"}});
    var element = google.search.cse.element.getElement('gsearch');
    element.execute(queryStringVal.value);
};
window.__gcse = {
parsetags: 'explicit',
callback: gcseCallback
};
(function() {
 var cx = '008818185974073145685:ga_fmgk9gf0';
 var gcse = document.createElement('script');
 gcse.type = 'text/javascript';
 gcse.async = true;
 gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
 '//www.google.com/cse/cse.js?cx=' + cx;
 var s = document.getElementsByTagName('script')[0];
 s.parentNode.insertBefore(gcse, s);
 })();


