<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:template match="/">
<html>
<head>
<title>XSLT Exercise 1</title></head>
<body>
<p> Name is : <xsl:value-of select="Persons/person/name/text()"/> </p> <br/>
<p> Age is : <xsl:value-of select="Persons/person/Age/text()"/> </p>
<p> Address is : <xsl:value-of select="Persons/person/Address/text()"/> </p>
</body>

</html>


</xsl:template>
</xsl:stylesheet>