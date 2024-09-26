<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html" omit-xml-declaration="no"/>
<xsl:template match="/">
<html>
<head>
<title>Presenting XML data</title>
</head>
<body>
 
 

 
<table border="2">
 

<tr>






</tr>
 



<th>Born</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Profession</th>
 
<xsl:for-each select="people/person">
<tr>
 






</tr>
 
<td><xsl:value-of select="@born"/></td>
<td><xsl:value-of select="name/firstname"/></td>
<td><xsl:value-of select="name/lastname"/></td>
<td><xsl:value-of select="profession"/></td>
 
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
