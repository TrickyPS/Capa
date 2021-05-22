
fetch('https://randomuser.me/api/')
.then(res => res.json())
.then(data => {
$('#contRan').append(`<div class="card">
<img class="card-img-top" style="width:300px !important" src="${data.results['0'].picture.large}" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title">${data.results['0'].name.first}</h5>
  <p class="card-text">${data.results['0'].email}</p>
  
</div>
</div>`);
console.log(data);
});


fetch('https://randomuser.me/api/')
.then(res => res.json())
.then(data => {
$('#contRan').append(`<div class="card">
<img class="card-img-top" style="width:300px !important" src="${data.results['0'].picture.large}" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title">${data.results['0'].name.first}</h5>
  <p class="card-text">${data.results['0'].email}</p>
  
</div>
</div>`);
console.log(data);
});

fetch('https://randomuser.me/api/')
.then(res => res.json())
.then(data => {
$('#contRan').append(`<div class="card">
<img class="card-img-top" style="width:300px !important" src="${data.results['0'].picture.large}" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title">${data.results['0'].name.first}</h5>
  <p class="card-text">${data.results['0'].email}</p>
  
</div>
</div>`);
console.log(data);
});
