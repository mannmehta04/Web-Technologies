<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<body>
    <h2>Movies Data</h2>
    <table border="1">
        <tr bgcolor="lightblue">
            <th>Name</th>
            <th>Director</th>
            <th>Genere</th>
        </tr>
        <xsl:for-each select="Movies_data/Movies">
            <tr>
                <xsl:for-each select="*">
                        <td><xsl:value-of select="."/></td>
                </xsl:for-each>
            </tr>
        </xsl:for-each>
    </table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>