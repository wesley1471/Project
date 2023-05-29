var selectOption = document.querySelector('#productType');
var dvd = document.querySelector('.dvd');
var forniture = document.querySelector('.forniture1');
var book = document.querySelector('.book1');

selectOption.addEventListener('change',(e)=>{
    if(e.target.value == 'dvd'){
        forniture.classList.replace('forniture','forniture1');
        book.classList.replace('book','book1');
        dvd.classList.replace('dvd1','dvd');
    
    }else if(e.target.value == 'book'){
        forniture.classList.replace('forniture','forniture1');
        dvd.classList.replace('dvd','dvd1');
        book.classList.replace('book1','book'); 
    }else if(e.target.value == 'forniture'){
        dvd.classList.replace('dvd','dvd1');
        book.classList.replace('book','book1');
        forniture.classList.replace('forniture1','forniture'); 
    }
    console.log(e.target.value)
});

