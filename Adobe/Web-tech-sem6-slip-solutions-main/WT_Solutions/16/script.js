$(document).ready(function(){
    $.ajax({
        url: 'books.xml',
        dataType: 'xml',
        success: function(xml) {
            $(xml).find('book').each(function(){
                var title = $(this).find('title').text();
                $('#bookSelect').append('<option value="' + title + '">' + title + '</option>');
            });
        },
        error: function(xhr, status, error) {
            console.error("Error:", status, error);
        }
    });
    
    $("#bookSelect").change(function(){
        var selectedBook = $(this).val();
        if (selectedBook !== '') {
            $.ajax({
                url: 'get_books_details.php',
                type: 'POST',
                data: {title: selectedBook},
                dataType: 'json',
                success: function(bookDetails) {
                    $("#bookDetails").html("<h2>Book Details</h2><p>Title: " + bookDetails.title + "</p><p>Author: " + bookDetails.author + "</p><p>Year: " + bookDetails.year + "</p><p>Price: " + bookDetails.price + "</p>");
                },
                error: function(xhr, status, error) {
                    console.error("Error:", status, error);
                }
            });
        } else {
            $("#bookDetails").empty();
        }
    });
});
