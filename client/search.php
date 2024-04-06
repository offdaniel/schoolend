<div class="container text-center">
    <div class="mt-5 mb-4" >
        <h2>kereső</h2>
        <input type="text"  size="50" autocomplete="off" 
        id="keres" placeholder="Kezdjen el gépelni!">
    </div>
    <div id="result"></div>
</div>

<script>
        $(document).ready(function() {
            $("#keres").keyup(function() {
                var input = $(this).val();
                //alert(input);

                if (input != "") {
                $.ajax({
                    url: "result.php",
                    method: "POST",
                    data:{input:input},

                    success:function(data) {
                        $("#result").html(data);
                        $("#result").css("display", "block");
                    }
                });
                } else {
                    $("#result").css("display", "none");
                }
            });
        });
</script>