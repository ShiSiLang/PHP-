function chkinput(form)
  {
   if(form.title.value=="")
    {
	  alert('��������������!');
	  form.title.select();
	  return(false);
	}
	if(form.content.value=="")
    {
	  alert('��������������!');
	  form.content.select();
	  return(false);
	}
 
  }
