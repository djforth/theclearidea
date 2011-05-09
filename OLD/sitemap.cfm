<cfset ini_root="http://www.slalomdirectory.com" />
<cfset ini_startPage="index.html" />
<cfset ini_levelMax=3 />
<cfset ini_sitemap="http://www.slalomdirectory.com/sitemap.xml" />

<cfinvoke component="sitemap" method="sitemap" returnvariable="qry_sitemap" root="#ini_root#" url="#ini_startPage#" depthMax="#ini_levelMax#">
<cfinvoke component="sitemap" method="indexIt" returnvariable="qry_sitemapIndex" root="#ini_root#" query="#qry_sitemap#">
<cfinvoke component="sitemap" method="googleSitemap" returnvariable="sitemap" root="#ini_root#" query="#qry_sitemap#">
<cfinvoke component="sitemap" method="submitSitemap" url="#ini_sitemap#" returnvariable="qry_sitemap" >

<!--- get root path example: D:/webroot/sitemap.xml --->
<cffile
    action = "write"

    file = "#GetDirectoryFromPath(GetCurrentTemplatePath())#sitemap2.xml"
    output = "#sitemap#"
    addNewLine = "no"
    charset = "utf-8">