<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">

<xsl:template match="/">
<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"></link>
   
</head>
<body>
  <div id="cardElements">
<div class="row">

<xsl:for-each select="Adverts/advert"> 




<div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><xsl:value-of select="header/text()"/></h5>
                  <p class="card-text"><xsl:value-of select="content/text()"/></p>

                </div>
              </div>

            </div>








</xsl:for-each>
      </div>
  </div>
</body>
</html>
</xsl:template>

</xsl:stylesheet>
