$(document).ready(function () {
    $('#userNameBtn').on('click', function () {
        //var userName = $('#userNameBtn').text();
        var userName = document.getElementById('userNameBtn').innerHTML;
        console.log(userName);
    });
});

$(document).ready(function(){
	$('#searchBox').on('keyup', function(){
        var searchText = $("#searchBox").val();
        console.log(searchText);
        if(searchText.length>1 || searchText==''){
            $.ajaxSetup({
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
              });
            $.ajax({
                url: '/manager/chat/searchUser',
                method: 'post',
                datatype: 'json',
                data : {'userName':searchText},
                success:function(response){
                    if(response.product !== 'error' && response.product !== undefined){
                        console.log(response);
                        console.log('Success');
                    }else{
                        //console.log(response);
                        console.log(response.full_name);
                        $('#clientBox').hide();
                        $('#clientSearchBox').show();
                        $('#clientSearchBox').empty();
                        if(response.full_name!=undefined){
                            $('#clientSearchBox').append("<a href='/manager/chat/"+response.id+"' class="+"btn btn-success rounded border border-light btn-block btn-sm text-light text-decoration-none text-left border border-light"+">"+response.full_name+"</a><br>");
                        }else{
                            $("#clientSearchBox").append("No client found!");
                        }
                    }
                },
                error:function(response){
                    var text = response.responseText.substring(searchText.length);
                    var product = JSON.parse(text);
                }
            });
        }
        else{

            $('#clientBox').show();
            $('#clientSearchBox').hide();
        }
    });
    $('#sendMsgBtn').on('click', function(){
        var msgBody = $('#textMsg').val();
        var clientName = $('#clientNameLabel').text();
        console.log(msgBody);
        console.log(clientName);
    });
});