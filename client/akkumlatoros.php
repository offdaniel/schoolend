

<script>
    getdata('../server/akkumlatoros.php', render);

    function render(data) {
        console.log(data);
        for (let obj of data) {
            document.querySelector('div.card').innerHTML += 
            `<div class="container" >
                <div class="row row-cols-2">
                    <div class="col-4" >
                        <img src="kepek/${obj.kep}" alt="${obj.nev}" class="img-fluid" onclick="details()" >
                        <h4>${obj.nev}</h4>
                    </div>
                </div>
            </div>`
        }
    }

    function details(domobj) {
        console.log(domobj);
    }

</script>