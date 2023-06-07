<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
<%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>


<jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver" 
jdbcUrl="jdbc:mysql://localhost/whsakila2021?user=root&password=root" catalogUri="/WEB-INF/queries/dwsakila.xml">

select {[Measures].[Amount],[Measures].[Lama Pinjam]} ON COLUMNS,
  {([Store],[Time].[All Times],[Customer],[Film].[All Films])} ON ROWS
from [Jual]


</jp:mondrianQuery>





<c:set var="title01" scope="session">Query WHSAKILA using Mondrian OLAP</c:set>
