
<div class="card">
        
    <h5 class="card-header">Post a comment</h5>

    <div class="card-body">
            <form id="myForm" method="post" action="javascript:void(0)">
                    @csrf
                    <div class="alert alert-success" style="display:none">you have sussess submited</div>
                    
                        <div class="form-group">
                        
                         <i>Required fields are marked *</i>
                        <textarea class="form-control" name="text" id="text" rows="3" placeholder="Enter your comment here*"></textarea>
                        </div>
                        <div class="form-group2">
                        <label for="exampleInputEmail1">Your Name</label>
                        <input name="username" class="form-control" id="username" placeholder="Your Name*" >
                
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" class="form-control" id="email" placeholder="Enter email*">
                        
                        <label for="exampleInputEmail1">Home page</label>
                        <input name="homepage" class="form-control" id="homepage" placeholder="Website"><br>
                        <button type="button" id="ajaxSubmit"  class="btn btn-primary" >Submit</button>
                        <div class="alert alert-success d-none" id="msg_div">
                       
                                <span id="res_message"></span>
                            
                        </div>
                
          
            </form>
    </div>
</div>


<script src="http://code.jquery.com/jquery-3.3.1.min.js"
           integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
           crossorigin="anonymous">

</script>
<script>
    jQuery(document).ready(function(){
      
       jQuery('#ajaxSubmit').click(function(e){
          e.preventDefault();
          $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
             }
         });
         $('#ajaxSubmit').html('Sending..');
          jQuery.ajax({
             url: "{{ url('/addComment') }}",
             method: 'post',
             data: {
                username: jQuery('#username').val(),
                email: jQuery('#email').val(),
                text: jQuery('#text').val(),
                homepage: jQuery('#homepage').val()
             },
             success: function(response){ 
            jQuery('#ajaxSubmit').html('Submit');
            jQuery('#res_message').show();
            jQuery('#res_message').html(response.msg);
            jQuery('#msg_div').removeClass('d-none');
  
             document.getElementById("myForm").reset(); 
             setTimeout(function(){
             jQuery('#res_message').hide();
             jQuery('#msg_div').hide();
             },10000);
            
             
          
            
      

                  
             }});
         
            

          });
       });
 </script>


<style>
    .card{
        width: 70%;
    }

    .form-control{
        border: 1px solid #be0b2c59;
    }
    
     label{
        padding: 3px;
        margin:0 auto;
            }
    .form-group2 {
        display:block;
        width: 40%;}
    button.btn.btn-primary{
        background-color: #c60428;
        border-color:#c60428;
    }
    
    @media screen and (max-width: 700px) {
        .form-group2 {
            display:block;
            width: 100%;}
            .card{
                width: 100%;
    
</style>  

