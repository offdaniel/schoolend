<div class="container-fluid">
    <div class="row">
    </div>
</div>

<div class="modal fade container-fluid" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body" id="modal-body-content"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Bezárás</button>
            </div>
        </div>
    </div>
</div>

<script>
    getdata('../server/elektromos.php', render);

    function render(data) {
        //console.log(data);
        for (let obj of data) {
            document.querySelector('div.row').innerHTML += 
            `<div class="col-md-3 col-sm-6 border border-secondary bg-white" style="--bs-border-opacity: .3;" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="details(this, '${obj.id}')">
                <img src="../client/kepek/${obj.kep}" alt="${obj.nev}" class="img-fluid">
                <p class="text-center">${obj.nev}</p>
            </div>`
        }
    }

    function details(element, id) {
    //console.log(id);
        if (id > 0) {
            getdata(`../server/details.php?id=${id}`, function(data) {
                let modalBody = document.querySelector('.modal-body');
                modalBody.innerHTML = ''; 

                for (let obj of data) {
                    modalBody.innerHTML += 
                    `<div>
                        <h4 class="text-center">${obj.nev}</h4>
                        <p>${obj.leiras}</p>
                        <img src="../client/kepek/${obj.kep}" alt="${obj.nev}" class="img-fluid">
                        <div class="text-center">Bérlés:${obj.berles}Ft Kaukció:${obj.kaukcio}Ft</div> 
                    </div>`;
                }
            });
        }
    }
</script>