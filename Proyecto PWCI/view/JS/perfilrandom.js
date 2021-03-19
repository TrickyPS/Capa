
fetch('https://randomuser.me/api/')
.then(res => res.json())
.then(data => {
$('.perfilrandom').append(`<img class="imageno m-0 pb-0 rounded-circle" src="${data.results[0].picture.large}" width="25px">
${data.results[0].login.username}`)
});
