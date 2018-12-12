function verif(source, atester)
{	m1=document.getElementById(source);
	m2=document.getElementById(atester);
	if(m1.value==m2.value)
	{m2.style.borderColor="green"}
	else
	{m2.style.borderColor="red"}
}