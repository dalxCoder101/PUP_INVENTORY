

const product_name=document.getElementById('product_name')
const product_category=document.getElementById('product_category')
const product_quantity=document.getElementById('product_quantity')
const barcode=document.getElementById('barcode')
const form=document.getElementById('form')
const errorElement=document.getElementById('error-message')
var letters= /^[a-zA-Z\s]*$/;
var numbers=/^[0-9]*$/;

/*event*/
form.addEventListener('submit',(e)=>{
let messages=[]
if(product_name.value.match(letters))
{
	return true;

}
else{
	 messages.push('Product Name value is invalid!');
	 product_name.style.borderColor="red";
}
if(barcode.length>7 || barcode.length<7){
	messages.push('limit');

}

if(messages.length>0)
{

	e.preventDefault();
	errorElement.innerText=messages.join(',  ')
	document.getElementById('error').style.backgroundColor="red";

	
}

})

