function chkinput(form)
  {
   if(form.title.value=="")
    {
	  alert('请输入留言主题!');
	  form.title.select();
	  return(false);
	}
	if(form.content.value=="")
    {
	  alert('请输入留言内容!');
	  form.content.select();
	  return(false);
	}
 
  }
