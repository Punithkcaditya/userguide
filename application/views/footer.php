<script type='text/javascript'>
$(function () {
$("a.reply").click(function () {
var id = $(this).attr("id");
$("#parent_id").attr("value", id);
$("#name").focus();
});
});



		$(document).ready(function () {


			// no go 


			var hascomment = document.getElementsByClassName('hascomment');
			for(var i=0;i<hascomment.length;i++){
			var hasChildDiv = hascomment[i].querySelector(".usercomment");
			if (hasChildDiv !== null) {
				$(hascomment[i]).css('padding', '18px');
			}
			else{
				$(hascomment[i]).css('padding', '0px');
			}
			}


// no go


			var max=<?php echo $this->blog_model->Count_Comment()+$this->blog_model->Count_replies(); ?>; 
			$sesionvar = '<?php echo $this->session->userdata('user_id')?>';
			var ne_id = $("#ne_id").val();
			var created_by=$("#created_by").val();
			getallComment(0,max,ne_id,created_by);
			var sesvr = "<?php echo $this->session->userdata('user_id')?>";

		});




	$("#createForm").submit(function(event) {
			event.preventDefault();
			$.ajax({
		            url: "<?php echo site_url('.blogs/createperson'); ?>",
		            data: $("#createForm").serialize(),
		            type: "post",
		            async: false,
		            dataType: 'json',
		            success: function(response){
		              
		                $('#createModal').modal('hide');
		                $('#createForm')[0].reset();
		                alert('Successfully inserted');
		               $('#exampleTable').DataTable().ajax.reload();
		              },
		           error: function(data)
		           {
		            alert("error");
					console.log(data);
		           }
          });
		});



		


	



















// 1>
		

$("#createcommentform").submit(function(event) {
			// event.preventDefault();
			var comments=$("#comments").val(); 
			var user_name=$("#user_name").val(); 
			var max=<?php echo $this->blog_model->Count_Comment()+$this->blog_model->Count_replies(); ?>; 
			var datetimenow="<?php echo date('Y-m-d'); ?>";
			//if want show comment particular post and blog,declare post id and provide primary key 
 
			if (comments.length>=1) {
				$.ajax({
					url: "<?php echo site_url('.blogs/addcomment'); ?>",
					type: 'post',
					datatype: 'json',
					async: false,
					data: $("#createcommentform").serialize(),
					success:function (data) {
						var result = JSON.parse(data);
						console.log(result);
						$("#comments").val("");
						$("#user_name").val(""); 
						max++;
						$("#comm_count").text(max+" Comments");

						$(".usercomments").prepend('<div class="comment"><div class="user"> <span class="time">'+datetimenow+'</span><span class="username">'+user_name+'</span></div><div class="usercomment"><h4>'+comments+'</h4></div><div class="reply" id="will"><a href="javascript:void(0)" class="btn-default btn roaga"   data-commentID="'+result.id+'" onclick="reply(this)" >REPLY</a></div><div class="replies"></div> </div>');
						

					},
					error: function(data){
						alert('Data not inserted.');
						console.log(data);
					}

				});
			}
			else{
				alert('please check your commment box.');
			}
      
		});
	











// 2
		function reply(caller)
  {
	if($sesionvar ){
    commentid=$(caller).attr('data-commentID');
    $(".replyrow").insertAfter($(caller));
    $(".replyrow").show();
	}
	else{
		alert("Login to Reply");
	}
  }


// 3

$("#addreply").on('click', function () {
      // body...
      var replycomment=$("#replycomment").val();    
      
      if (replycomment.length>=1) {
        $.ajax({
			url: "<?php echo site_url('.blogs/addreply'); ?>",
          method: 'POST',
          datatype: 'text',
          data: {
            replycomment: replycomment,
            commentid:commentid
          },
          success:function (response) {
						window.location.reload(true);   
						max++;
              $("#comm_count").text(max +" Comments");
              $("#replycomment").val("");
              
              $(".replyrow").hide();
         
              $(".replyrow").parent().next().append('<div class="comment">'+replycomment+'</div>'); 
						
            },
          error: function(){
            alert('Data not inserted');
          }

        });
      }
      else{
        alert('please check your input reply commment');
      }
    
    });    



// 4


function getallComment(start,max,ne_id,created_by)
  {

    if (start> max) {
      return;
    }
    $.ajax({
		url: "<?php echo site_url('.blogs/allComment'); ?>",
          method: 'POST',
          datatype: 'JSON',
          data: {
            start: start,
			ne_id:ne_id,
			created_by:created_by
          },
          success:function (response) {
            // body...
            var d = $.parseJSON(response);
            $(".usercomments").append(d);
            getallComment((start+30),max,ne_id,created_by);
			getcommentrules();
          },
          error: function () {
            // body...
            alert('Data not found');
          }
    });
  }


// 5 gettopComment


function gettopComment(start,max,hid_id,created_by)
  {

    if (start> max) {
		
      return;
    }
    $.ajax({
		url: "<?php echo site_url('.blogs/topComment'); ?>",
          method: 'POST',
          datatype: 'JSON',
          data: {
            start: start,
			hid_id:hid_id,
			created_by:created_by
          },
          success:function (response) {
            // body...
            var d = $.parseJSON(response);
            $(".usercomments").append(d);
		
            gettopComment((start+20),max,hid_id,created_by);
          },
          error: function () {
            // body...
            alert('Data not found');
          }
    });
  }


	// 6



	function getcommentrules(){
		if('<?php echo ($this->session->userdata('logged_in')) ?>'){
				const roaga = document.querySelectorAll('.roaga');
				Array.from(roaga).forEach((element, index) => {
  // conditional logic here.. access element
  element.classList.remove('ravn');
});
				
}else{
	Array.from(roaga).forEach((element, index) => {
  // conditional logic here.. access element
  element.classList.add('ravn');
});
	
}
	}

// 	$(document).ajaxStop(function(){
//     window.location.reload();
// });



</script>
</body>
</html>
