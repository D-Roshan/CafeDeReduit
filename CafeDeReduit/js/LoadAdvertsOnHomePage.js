function loadXMLDoc(filename)
{
xhttp = new XMLHttpRequest();
xhttp.open("GET", filename, false);
xhttp.responseType = "msxml-document"
xhttp.send("");
return xhttp.responseXML;
}

function displayResult()
{ 
xml = loadXMLDoc("DataStore/adv.xml");
xsl = loadXMLDoc("DataStore/adv.xsl");



  xsltProcessor = new XSLTProcessor();
  xsltProcessor.importStylesheet(xsl);
  resultDocument = xsltProcessor.transformToFragment(xml, document);
  document.getElementById("example").appendChild(resultDocument);

}