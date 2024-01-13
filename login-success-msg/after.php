<!-- The notification works -->
<?php
session_start();

?>
<!-- ///////////// -->
<!-- this is the original form of alert with the multialert as the css page -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple error messages</title>
</head>
 <!-- MATERIAL ICONS FROM GOOGLE -->

<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">


<!-- the css link --><!-- the css link --><!-- the css link --><!-- the css link --><!-- the css link -->

<link rel="stylesheet" href="multi-alert.css">


<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

<body onload = "showToast(successMsgLogin)">



    <!-- the alert begins here -->

    <div class="buttons">
        <button onclick="showToast(successMsg)">Success</button>
        <button onclick="showToast(errorMsg)">Error</button>
        <button onclick="showToast(invalidMsg)">Invalid</button>

    </div>
    <div id="toastBox">

    </div>
</body>
<script>
    let toastBox = document.getElementById('toastBox');
    let successMsg = '<span class="material-symbols-outlined">task_alt</span>Successfully submitted';
    let successMsgLogin = '<span class="material-symbols-outlined">task_alt</span>Welcome Nigga';
    let errorMsg = '<span class="material-symbols-outlined">report</span> Error occurred!';
    let invalidMsg = '<span class="material-symbols-outlined">gpp_bad</span> Invalid submission';

    function showToast(msg){
        let toast = document.createElement('div');
        toast.classList.add('toast');
        toast.innerHTML = msg;
        toastBox.appendChild(toast);


        
        if(msg.includes('Error')){
            toast.classList.add('Error');
        }
        if(msg.includes('Invalid')){
            toast.classList.add('Invalid');
        }

        setTimeout(()=>{
            toast.remove();
        }, 6000);

    }
</script>
</html>