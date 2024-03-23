<div class="container-fluid">
      <div class="row" >
      </div>
</div>

<script>
    getdata('../server/fooldal.php', render);

    function render(data) {
        console.log(data);
        for (let obj of data) {
            document.querySelector('div.row').innerHTML += 
            `<div class=" col-md-3 border border-secondary bg-white" style=" --bs-border-opacity: .3; " onclick="details()" value="${obj.id}">
                <img src="kepek/${obj.kep}"  alt="${obj.nev}" class="img-fluid" >
                <p class="text-center ">${obj.nev}</p>
            </div>`
        }
    }

    function details() {
        parent.location='../client/details.php'
        
    }

</script>