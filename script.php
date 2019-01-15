<?php header('Content-Type: application/x-javascript'); ?>

<?php $button_id = 'click'; ?>

var button = document.getElementById("<?php echo $button_id; ?>");
button.addEventListener("click", myScript);

function myScript(){
    alert();
}
