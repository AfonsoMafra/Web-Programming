for (var i = 1; i <= 10; i++) {
    document.write("<table>");
      document.write("<tr>");
        document.write("<td colspan = \"2\">");
        document.write("Produto de " + i);
      document.write("</tr>");

  for (var j = 1; j <= 10; j++) {
    document.write("<tr>");
      document.write("<td>" +  i + " x " + j);
      document.write("<td>" + i * j);
    document.write("</tr>");
  }
  document.write("</table>");
}
