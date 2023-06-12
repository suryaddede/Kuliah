<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
<%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>


<jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver" 
jdbcUrl="jdbc:mysql://localhost/adventureworksdw?user=root&password=root" catalogUri="/WEB-INF/queries/adw1.xml">

select {[Measures].[Quantity Sold],[Measures].[Total Sales]} ON COLUMNS,
  {([Location],[Time].[All Times],[Product].[All Products])} ON ROWS
from [Sales]


</jp:mondrianQuery>





<c:set var="title01" scope="session">Query AdventureWorksDW using Mondrian OLAP</c:set>
