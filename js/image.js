


function blobToFile(theBlob) { //A Blob() is almost a File() - it's just missing the two properties below which we will add
        theBlob.lastModifiedDate = new Date(); 
        theBlob.name = "image.jpg";
    return theBlob;
}