<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>stream</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Poolstreams, brazil vs belgium live stream, Live stream, fifa world cup, fifa live stream, Highlights">
    <meta name="description" content="Poolsteams provide live stream of nfl and nbl and fifa world cup">
    <meta name="google-site-verification" content="ltcPnLgPl7IX2an37rzK3v-nE5Y5dvom5tPCWz-SlJg" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
     
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 col-sm-8">
                <!--Start table-->
                <table class="table table-striped" id="addition_table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Age</th>
                            <th scope="col">City</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                           
                        </tr>
                    </tbody>
                </table>
                <!--End table-->
            </div>
            <div class="col-12 col-sm-4">
                <!--Start form-->
                <form id="insertion_form">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name_checker" placeholder="name">
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                          <legend class="col-form-label col-sm-3 pt-0">Gender</legend>
                          <div class="col-sm-9">

                            <div class=" row">
                                <div class="col-6">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="male" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Male
                                    </label>
                                </div>
                                <div class="col-6">
                                    <input class="form-check-input col-4" type="radio" name="gridRadios" id="gridRadios2" value="female">
                                    <label class="form-check-label col-2" for="gridRadios2">
                                        Female
                                    </label>
                                </div>
                              
                            </div>
                           
                            
                          </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label" >Age</label>
                        <div class="col-sm-10">
                            <input type="number" id="age_checker" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="">
                            <input type="hidden" id="hidder" data-update="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2" for="inlineFormCustomSelect">City</label>
                        <div class="col-10">
                            <select class="form-control" name="city_checker" id="city_checker">
                                <option selected value="0">Choose...</option>
                                <option value="1">Lahore</option>
                                <option value="2">Karachi</option>
                                <option value="3">Murree</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-info mb-2" id="reset">Reset</button>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn  btn-info mb-2" id="addition" disabled>Add</button>
                        </div>
                        <div class="col-4">
                            <button  class="btn btn-info mb-2" id="updation">Update</button>
                        </div>
                        
                    </div>    
                </form>
                <!--End form-->
            </div>
        </div>
    </div>
    <!--End man container-->

<!--Bootstrap script-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> 

<script>
$("#name_checker").keyup(function(){
    check_validate();
});
$("#age_checker").keyup(function(){
    check_validate();
});
$("#city_checker").change(function(){
    check_validate();
});
var name_check = false,
    age_check = false,
    city_check =false;
 var id = 1;   
function check_validate(){
    var name_check = $( "#name_checker" ).val().length;
    var age_check = $("#age_checker").val();
    var city_check = $('#city_checker').val();
    if(name_check>2 && name_check<21 && age_check>1 && age_check<150 && city_check>0){
        $("#addition" ).prop( "disabled", false);
        return true;
    }
    else{
        $("#addition" ).prop( "disabled", true);
        return false;               
    } 
}
$( '#addition').click(function() {
    var name_check = $( "#name_checker" ).val();
    var age_check = $("#age_checker").val();
     /*= $('#city_checker').text();*/
     var city_check = $('#city_checker option:selected').html()
    var sex= $('input[name=gridRadios]:checked').val(); 
    var markup = "<tr class='row"+id+"'><th scope='row'>" +name_check+ "</th><td>"+sex+"</td><td>"+age_check+"</td> <td>"+city_check+"</td><td ><button class='btn' id='tb_update' data-formal='"+id+"'>update</button>/<button type='button' class='btn' id='button1' data-del='"+id+"'>Remove</button></td></tr>";
    $("#addition_table tbody").append(markup);  
    id++;
    return false; 
});
$( '#reset').click(function() {
    $("#addition_table tbody").empty();  
    return false; 
});
$("#addition_table tbody").on('click', "#button1", function() {
    $(this).closest('tr').remove();
});
$("#addition_table tbody").on('click', "#tb_update", function() {
    var get_up_id = $(this).data('formal'); //getter
    //alert(get_up_id);
    $('#hidder').data('update',get_up_id); //setter  
    $('#insertion_form').closest('form').find("input[type=text], input[type=number]").val("");
    $("#addition" ).prop( "disabled", true);
});
$("#insertion_form").on('click', "#updation", function() {
    var get_up_id = $('#hidder').data('update');
    var name_check = $( "#name_checker" ).val();
    var age_check = $("#age_checker").val();
     /*= $('#city_checker').text();*/
    var city_check = $('#city_checker option:selected').html()
    var sex= $('input[name=gridRadios]:checked').val();
    $('.row'+get_up_id+'').remove();
    var markup = "<tr class='row"+get_up_id+"'><th scope='row'>" +name_check+ "</th><td>"+sex+"</td><td>"+age_check+"</td> <td>"+city_check+"</td><td ><button class='btn' id='tb_update' data-formal='"+get_up_id+"'>update</button>/<button type='button' class='btn' id='button1' data-del='"+get_up_id+"'>Remove</button></td></tr>";
    $("#addition_table tbody").append(markup);  
    $("#addition" ).prop( "disabled", false); 
    return false;
});
</script>
</body>
</html>
