<h1>details</h1>

<?php
$gep_id = $_GET['gepek.id'];
?>


<script>

    let gepId = <?php echo json_encode($gep_id); ?>;
    getdata(`../server/details.php?id=${$gep_id}`,render);

    function render(data) {
        console.log(data);
    }

    function details() {
        let id=document.querySelector("").value;
        console.log(id);
        if (id>0) {
            getdata(`../server/details.php?id=${id}`,)
        } 
        
    }
    
</script>