

<script>
    getdata('../server/fooldal.php', render);

    function render(data) {
        console.log(data);
        for (let obj of data) {
            document.querySelector('div.card').innerHTML += 
            `<div class="container ">
                <div class="row row-cols-2">
                    <div class="col-4">
                        <img src="kepek/${obj.kep}"  alt="${obj.nev}" class=" img-fluid" >
                        <h4>${obj.nev}</h4>
                    </div>
                </div>
            </div>`
        }
    }

</script>