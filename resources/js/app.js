import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: "Sube tu imagen aqui",
    acceptedFile: ".png, jpg, jpeg, .gif",
    addRemoveLinks: true,
    dictRemovefile: 'Borrar archivos',
    maxFile: 1,
    uploadMultiple:false,
});

dropzone.on('sending', (file, xhr, formData) => {
    console.log(formData);
});

dropzone.on('success', (file, response) => {
    console.log(response);
});

dropzone.on('erro', (file, message) => {
    console.log(message);
});

dropzone.on('removedfile', (file, message) => {
    console.log(message);
});