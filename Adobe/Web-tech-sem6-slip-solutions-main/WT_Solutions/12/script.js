$(document).ready(function() {
    // Event listener for print button
    $("#printBtn").click(function() {
      // AJAX request to read contact.dat file
      $.ajax({
        url: "contact.dat",
        dataType: "text",
        success: function(data) {
          // Split the file contents into lines
          var lines = data.split("\n");
          // Iterate over each line and create a table row
          var tableRows = "";
          for (var i = 0; i < lines.length; i++) {
            var columns = lines[i].split(",");
            if (columns.length == 5) { // Only process valid rows
              tableRows += "<tr>";
              for (var j = 0; j < columns.length; j++) {
                tableRows += "<td>" + columns[j] + "</td>";
              }
              tableRows += "</tr>";
            }
          }
          // Add the table rows to the table body
          $("#contactTable tbody").html(tableRows);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert("Error: " + errorThrown);
        }
      });
    });
  });
  