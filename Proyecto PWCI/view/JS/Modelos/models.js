var registate = function(nombresign, correosign, contraseñasign) {
	this.id = 0;
	this.nombresign = nombresign;
	this.correosign = correosign;
	this.contraseñasign = contraseñasign;
};
var iniciasesion = function(correo, contraseña) {
	this.id = 0;
	this.correo = correo;
	this.contraseña = contraseña;
};
var Usuario = function (id,nombre,correo,contra,estudiante,avatar) {

	this.id = id;
	this.nombre = nombre;
	this.correo = correo;
	this.contra = contra;
	this.estudiante = estudiante;
	this.avatar = avatar;
  }