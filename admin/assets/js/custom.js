$(document).ready(function(){
      $('#checkbox').on('click', function(){
      var passInput=$("#pass");
      if(passInput.attr('type')==='password')
        {
          passInput.attr('type','text');
      }else{
         passInput.attr('type','password');
      }
	});
    });