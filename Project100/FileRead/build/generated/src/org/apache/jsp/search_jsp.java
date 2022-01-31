package org.apache.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;
import java.io.FileInputStream;
import java.io.File;
import java.io.InputStreamReader;
import java.net.URL;
import java.io.FileReader;
import java.io.BufferedReader;

public final class search_jsp extends org.apache.jasper.runtime.HttpJspBase
    implements org.apache.jasper.runtime.JspSourceDependent {

  private static final JspFactory _jspxFactory = JspFactory.getDefaultFactory();

  private static java.util.List<String> _jspx_dependants;

  private org.glassfish.jsp.api.ResourceInjector _jspx_resourceInjector;

  public java.util.List<String> getDependants() {
    return _jspx_dependants;
  }

  public void _jspService(HttpServletRequest request, HttpServletResponse response)
        throws java.io.IOException, ServletException {

    PageContext pageContext = null;
    HttpSession session = null;
    ServletContext application = null;
    ServletConfig config = null;
    JspWriter out = null;
    Object page = this;
    JspWriter _jspx_out = null;
    PageContext _jspx_page_context = null;

    try {
      response.setContentType("text/html;charset=UTF-8");
      pageContext = _jspxFactory.getPageContext(this, request, response,
      			null, true, 8192, true);
      _jspx_page_context = pageContext;
      application = pageContext.getServletContext();
      config = pageContext.getServletConfig();
      session = pageContext.getSession();
      out = pageContext.getOut();
      _jspx_out = out;
      _jspx_resourceInjector = (org.glassfish.jsp.api.ResourceInjector) application.getAttribute("com.sun.appserv.jsp.resource.injector");

      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("<!DOCTYPE html>\n");
      out.write("<!DOCTYPE html>\n");
      out.write("<html>\n");
      out.write("    <head>\n");
      out.write("        <script  src=\"markj.js\"></script>\n");
      out.write("        <script  src=\"mark.js\"></script>\n");
      out.write("        <script>\n");
      out.write("            $(function () {\n");
      out.write("\n");
      out.write("                // the input field\n");
      out.write("                var $input = $(\"input[type='search']\"),\n");
      out.write("                        // clear button\n");
      out.write("                        $clearBtn = $(\"button[data-search='clear']\"),\n");
      out.write("                        // prev button\n");
      out.write("                        $prevBtn = $(\"button[data-search='prev']\"),\n");
      out.write("                        // next button\n");
      out.write("                        $nextBtn = $(\"button[data-search='next']\"),\n");
      out.write("                        // the context where to search\n");
      out.write("                        $content = $(\".content\"),\n");
      out.write("                        // jQuery object to save <mark> elements\n");
      out.write("                        $results,\n");
      out.write("                        // the class that will be appended to the current\n");
      out.write("                        // focused element\n");
      out.write("                        currentClass = \"current\",\n");
      out.write("                        // top offset for the jump (the search bar)\n");
      out.write("                        offsetTop = 50,\n");
      out.write("                        // the current index of the focused element\n");
      out.write("                        currentIndex = 0;\n");
      out.write("\n");
      out.write("                /**\n");
      out.write("                 * Jumps to the element matching the currentIndex\n");
      out.write("                 */\n");
      out.write("                function jumpTo() {\n");
      out.write("                    if ($results.length) {\n");
      out.write("                        var position,\n");
      out.write("                                $current = $results.eq(currentIndex);\n");
      out.write("                        $results.removeClass(currentClass);\n");
      out.write("                        if ($current.length) {\n");
      out.write("                            $current.addClass(currentClass);\n");
      out.write("                            position = $current.offset().top - offsetTop;\n");
      out.write("                            window.scrollTo(0, position);\n");
      out.write("                        }\n");
      out.write("                    }\n");
      out.write("                }\n");
      out.write("\n");
      out.write("                /**\n");
      out.write("                 * Searches for the entered keyword in the\n");
      out.write("                 * specified context on input\n");
      out.write("                 */\n");
      out.write("                $input.on(\"input\", function () {\n");
      out.write("                    var searchVal = this.value;\n");
      out.write("                    $content.unmark({\n");
      out.write("                        done: function () {\n");
      out.write("                            $content.mark(searchVal, {\n");
      out.write("                                separateWordSearch: true,\n");
      out.write("                                done: function () {\n");
      out.write("                                    $results = $content.find(\"mark\");\n");
      out.write("                                    currentIndex = 0;\n");
      out.write("                                    jumpTo();\n");
      out.write("                                }\n");
      out.write("                            });\n");
      out.write("                        }\n");
      out.write("                    });\n");
      out.write("                });\n");
      out.write("\n");
      out.write("                /**\n");
      out.write("                 * Clears the search\n");
      out.write("                 */\n");
      out.write("                $clearBtn.on(\"click\", function () {\n");
      out.write("                    $content.unmark();\n");
      out.write("                    $input.val(\"\").focus();\n");
      out.write("                });\n");
      out.write("\n");
      out.write("                /**\n");
      out.write("                 * Next and previous search jump to\n");
      out.write("                 */\n");
      out.write("                $nextBtn.add($prevBtn).on(\"click\", function () {\n");
      out.write("                    if ($results.length) {\n");
      out.write("                        currentIndex += $(this).is($prevBtn) ? -1 : 1;\n");
      out.write("                        if (currentIndex < 0) {\n");
      out.write("                            currentIndex = $results.length - 1;\n");
      out.write("                        }\n");
      out.write("                        if (currentIndex > $results.length - 1) {\n");
      out.write("                            currentIndex = 0;\n");
      out.write("                        }\n");
      out.write("                        jumpTo();\n");
      out.write("                    }\n");
      out.write("                });\n");
      out.write("            });\n");
      out.write("        </script>\n");
      out.write("\n");
      out.write("\n");
      out.write("        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n");
      out.write("        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">\n");
      out.write("\n");
      out.write("        <style>\n");
      out.write("            mark {\n");
      out.write("                background: yellow;\n");
      out.write("            }\n");
      out.write("\n");
      out.write("            mark.current {\n");
      out.write("                background: orange;\n");
      out.write("            }\n");
      out.write("\n");
      out.write("            .header {\n");
      out.write("                padding: 10px;\n");
      out.write("                width: 100%;\n");
      out.write("                background: #eee;\n");
      out.write("                position: fixed;\n");
      out.write("                top: 0;\n");
      out.write("                left: 0;\n");
      out.write("            }\n");
      out.write("\n");
      out.write("            .content {\n");
      out.write("                margin-top: 50px;\n");
      out.write("            }\n");
      out.write("        </style>\n");
      out.write("    </head>\n");
      out.write("    <body>\n");
      out.write("\n");
      out.write("        <div class=\"header\">\n");
      out.write("            Search:\n");
      out.write("            <input type=\"search\" placeholder=\"Search\">\n");
      out.write("            <button data-search=\"next\">&darr;</button>\n");
      out.write("            <button data-search=\"prev\">&uarr;</button>\n");
      out.write("            <button data-search=\"clear\">✖</button>\n");
      out.write("        </div>\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("        <div class=\"content\" style=\"border: 1px solid black; padding: 25px 25px 25px 25px;background-color: lightskyblue;min-height: 100px; width: 100%; margin-top: 50px\">\n");
      out.write("            ");


                String file = (String) session.getAttribute("File");
                String txtFilePath = file;
                BufferedReader reader = new BufferedReader(new FileReader(txtFilePath));

                StringBuilder sb = new StringBuilder();
                String line;

                while ((line = reader.readLine()) != null) {
                    sb.append(line + "\n<br>");
                }
                out.println(sb.toString());
            
      out.write("\n");
      out.write("\n");
      out.write("        </div>\n");
      out.write("\n");
      out.write("    </body>\n");
      out.write("\n");
      out.write("</html> \n");
      out.write("\n");
    } catch (Throwable t) {
      if (!(t instanceof SkipPageException)){
        out = _jspx_out;
        if (out != null && out.getBufferSize() != 0)
          out.clearBuffer();
        if (_jspx_page_context != null) _jspx_page_context.handlePageException(t);
        else throw new ServletException(t);
      }
    } finally {
      _jspxFactory.releasePageContext(_jspx_page_context);
    }
  }
}
