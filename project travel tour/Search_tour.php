<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
    
</head>
<body>
    <form action="result_search.php" method="get">
        <input type="text" name="tour_name" id="tour_name_input">
        <div id="suggestions"></div>
    </form>
    <script>
        function display_suggestion(){
            var searchInput = document.querySelector('#tour_name_input');
            var suggestionDiv = document.querySelector('#suggestions')
           
            searchInput.addEventListener('input',function(){
                var userInput = searchInput.value;
                if (userInput.length > 0) {
                    var xhr = new XMLHttpRequest();
                    xhr.open('GET','search_suggestion.php?userInput=' +userInput,true);
                   
                    xhr.onreadystatechange = function(){
                        if (this.readyState == 4 && this.status == 200) {
                            suggestionDiv.innerHTML = this.responseText;
                            var suggestionItems = document.querySelectorAll('.suggestion');
                         
                            suggestionItems.forEach(function(item){
                                item.addEventListener('click',function(){
                                    
                                    searchInput.value = item.innerText;
                                    suggestionDiv.innerHTML = "" ;
                                    document.querySelector('form').submit();
                                });
                            });
                        }
                    };
                    xhr.send();
                }

            });
           

        };
        document.addEventListener('DOMContentLoaded',function(){
            display_suggestion();
        })
    </script>
    