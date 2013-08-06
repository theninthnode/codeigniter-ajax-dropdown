$(document).ready(function(){
        $('#options').change(function(){ //any select change on the dropdown with id options trigger this code
            $("#suboptions > option").remove(); //first of all clear select items
            var option = $('#options').val();  // here we are taking option id of the selected one.

            if(option == '#'){
                return false; // return false after clearing sub options if 'please select was chosen'
            }

            $.ajax({
                type: "POST",
                url: "/dropdown/getsuboptions/"+option, //here we are calling our dropdown controller and getsuboptions method passing the option
 
                success: function(suboptions) //we're calling the response json array 'suboptions'
                {
                    $.each(suboptions,function(id,value) //here we're doing a foeach loop round each sub option with id as the key and value as the value
                    {
                        var opt = $('<option />'); // here we're creating a new select option for each suboption
                        opt.val(id);
                        opt.text(value);
                        $('#suboptions').append(opt); //here we will append these new select options to a dropdown with the id 'suboptions'
                    });
                }
 
            });
 
        });
    });
