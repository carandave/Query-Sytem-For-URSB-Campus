<?php 

require 'db_conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/stylechatbot.css">
    <link rel="shortcut icon" href="urslogo2.png"> 
    <link rel="stylesheet" href="assets/css/popup2.css">
    <script src="assets/js/popup.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<style>
    .accordion_one .panel-group{
        /* border: 1px solid #f1f1f1; */
        margin-top: 10px;
    }

    a.link{
        text-decoration: none;
    }

    .accordion_one .panel{
        background: transparent;
        box-shadow: none;
        border-bottom: 0px solid transparent;
        border-radius: 0;
        margin: 0;
    }

    .accordion_one .panel_default{
        border: 0;
    }

    .accordion_wrap .panel_heading{
        padding: 0;
        border-radius: 0;
    }

    h4{
        font-size: 18px;
        line-height: 24px;
    }

    .accordion_one .panel .panel-heading a.collapsed{
        color: #999999;
        display: block;
        padding: 12px 30px;
        border-top: 0px;
    }

    .accordion_one .panel .panel-heading a{
        display: block;
        padding: 12px 30px;
        background: #fff;
        color: #313131;
        border-bottom: 1px solid #f1f1f1;
    }

    .accordion_wrap .panel .panel-heading a{
        font-size: 14px;
    }

    .accordion_one .panel-group .panel-heading+.panel-collapsed>.panel-body{
        border-top: 0;
        padding-top: 0;
        padding: 25px 30px 30px 35px;
        background: #fff;
        color: #999999;
    } 

    .img-accordion{
        width: 81px;
        float: left;
        margin-right: 15px;
        display: block;

    }

    .accordion_one .panel .panel-heading a.collapsed:after{
        content: "\b";
        color: #999999;
        background: #f1f1f1;
    }

    .accordion_one .panel .panel-heading a:after,
    .accordion_one .panel .panel-heading a.collapsed:after{
        font-size: 15px;
        width: 36px;
        line-height: 48px;
        text-align: center;
        background: #f1f1f1;
        float: left;
        margin-left: -31px;
        margin-top: -12px;
        margin-right: 15px;
    }

    .accordion_one .panel .panel-heading a:after{
        content: "\2212";
    }

    .accordion_one .panel .panel-heading a:after,
    .accordion_one .panel .panel-heading a.collapsed:after{
        font-size: 15px;
        width: 36px;
        line-height: 48px;
        text-align: center;
        background: #f1f1f1;
        float: left;
        margin-left: -31px;
        margin-top: -12px;
        margin-right: 15px;
    }


    @media only screen and (max-width: 765px) {
  
  .popup-index .content{
        width:100%;
      /*height:300px;*/
  }

}


</style>
<?php 
// $sql = "SELECT * FROM tbl_faqs WHERE department='Registrar'";
$sql = $conn->query("SELECT * FROM tbl_faqs WHERE department='OJT and Placement'");
    //   $statement = $conn->prepare($sql);
    //   $statement->execute();
    //   $faqs = $statement->fetchAll();
?>

<body style="background-color: #17baef" style="height: 1000px !important;">
<div class="wrapper">
<div class="title">OJT AND PLACEMENT OFFICE</div>
<div class="form">
<div class="bot-inbox inbox">
<div class="icon">
<i class="fas fa-user"></i>
</div>
<div class="msg-header">
<p>Hello Student of University of Rizal System Binangonan, how can I help you?</p>
</div>
</div>
</div>



<div class="typing-field">
<div class="input-data">
<input id="data" type="text" placeholder="Type something here..">
<!-- <button id="send-btn">Send</button> -->
</div>
<!-- <a href="live_ojt.php" class="btn btn-primary">Live Chat</a> -->
<button id="send-btn" class="btn btn-primary">Send</button>
<button onclick="togglePopup()" class="btn btn-secondary">Offices</button>
<a class="btn btn-primary" href="https://docs.google.com/forms/d/e/1FAIpQLSeoL9c00mU2mTtdiGbaP-A9H5t1f_QgWrIDCM_hTWa_kQ3qnw/viewform?usp=share_link" target="_blank">Exit Chat</a>
</div>
</div>
<br>
<a href="studentHOMEPAGE.php" class="btn btn-secondary">Back to Home Page</a>
<div class="container" style="margin-top:30px; margin-bottom: 100px; min-height: 300px;">
    
    <div class="row">
    
        <div class="col-md-12 accordion_one">
            
            <div class="panel-group">
            <h3 class="text-center">Frequently Asked Questions</h3>
                <?php while($faq = $sql->fetch_assoc()){ ?>
                    <div class="panel panel-default">
                        
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a href="#faq-<?php echo $faq['faqsId'];?>" aria-expanded="false" class="collapsed" data-toggle="collapse" data-parent="#accordion_oneLeft"> 
                                    <?php echo $faq['question'];?>
                                </a>
                            </h4>
                        </div>


                        <div id="faq-<?php echo $faq['faqsId']; ?>" class="panel-collapse collapse" aria-expanded="false" role="tablist" style="height: 0px">
                            <div class="panel-body">
                                <div class="text-accordion mb-1">
                                    <label for="" class="font-weight-bold">Answer: </label> <?php echo $faq['answer'];?>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php }?>
                
            </div>
        </div>
    </div>

</div>

<script>
$(document).ready(function(){
$("#send-btn").on("click", function(){
$value = $("#data").val();
$msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
$(".form").append($msg);
$("#data").val('');
                
$.ajax({
url: 'message_ojt.php',
type: 'POST',
data: 'text='+$value,
success: function(result){
$replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
$(".form").append($replay);
$(".form").scrollTop($(".form")[0].scrollHeight);
}
});
});
});
</script>

<div class="popup popup-index" id="popup-1">
<div class="overlay"></div>
<div class="content">
<div class="close-btn" onclick="togglePopup()">&times;
</div>
<br>
<br>
<section id="promo" class="">
<div class="container text-center">
<div class="btns"> 
<strong><h3>Offices Chat Bot</h3></strong>
<br>
<a class="btn btn-cta-primary" href="chat_registrar.php">REGISTRAR OFFICE</a>
<br>
<a class="btn btn-cta-primary" href="chat_clinic.php">HEALTH OFFICE</a>
<br>
<a class="btn btn-cta-primary" href="chat_library.php">LIBRARY OFFICE</a>
<br>
<a class="btn btn-cta-primary" href="chat_admission.php">ADMISSION OFFICE</a>
<br>
<a class="btn btn-cta-primary" href="chat_guidance.php">GUIDANCE OFFICE</a>
<br>
<a class="btn btn-cta-primary" href="chat_ojt.php">OJT AND PLACEMENT</a>
<br>
<a class="btn btn-cta-primary" href="chat_scholarship.php">SCHOLARSHIP AND FINANCE ASSISTANCE</a>
</div>
<li class="list-inline-item facebook-like">
</div>
</section>
</div>
</div>

<script src="jquery-3.4.1.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>