<div class="container-fluid">
      <div class="row ">
      </div>
</div>

<script>
    getdata('../server/benzines.php', render);

    function render(data) {
        console.log(data);
        for (let obj of data) {
            document.querySelector('div.row').innerHTML += 
            `<div class=" col-md-3 border border-secondary bg-white " style=" --bs-border-opacity: .3;">
                <img src="kepek/${obj.kep}"  alt="${obj.nev}" class="img-fluid" >
                <p class="text-center fs-4">${obj.nev}</p>
            </div>`
        }
    }

</script>