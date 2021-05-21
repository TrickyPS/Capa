
for(var i = 0; i < 9; i++){

    
fetch('https://randomuser.me/api/')
.then(res => res.json())
.then(data => {
$('#random' ).append(`<div class="card p-3 mt-2">
<div class="d-flex justify-content-between align-items-center">
    <div class="user d-flex flex-row align-items-center" id="random2"> <img
            src="${data.results[0].picture.large}" width="30"
            class="user-img rounded-circle mr-2"> <span><small
                class="font-weight-bold text-primary">${data.results[0].login.username} :</small> <small
                class="font-weight-bold">El mejor video que he visto acerca de
                photoshop</small></span>
    </div>
    <small>1 min ago</small>
</div>
</div>`);
});
}